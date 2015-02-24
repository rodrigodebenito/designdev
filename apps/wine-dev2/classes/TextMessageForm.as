﻿package {	import flash.display.*;	import flash.text.*;	import flash.net.*;	import flash.events.*;	import flash.errors.*;	import flash.utils.*;	import flash.geom.*;	import fl.managers.*;	import nyt.io.xml.*;	import nyt.util.*;	import fl.transitions.*;	import fl.transitions.easing.*;			public class TextMessageForm extends Sprite {				public var submit_btn:SimpleButton;		public var alert_mc:MovieClip;		public var terms_btn:SimpleButton;/*		public var help_btn:SimpleButton;*/		public var areaCode_txt:TextField;		public var exchange_txt:TextField;		public var fourDigit_txt:TextField;		public var title_txt:TextField;		public var message_txt:TextField;		public var agree_btn:MovieClip;						public var STAGING:String = "staging";		public var LIVE:String = "live";						[Inspectable(defaultValue="staging",enumeration="live,staging")]		public var environment:String;		[Inspectable(defaultValue="")]		public var password:String;		[Inspectable(defaultValue="")]		public var keyword:String;		[Inspectable(defaultValue="")]		public var report:String;						private var focusManager:FocusManager;		private var stagingURL:String;		private var liveURL:String;		private var urlVars:Object;		private var txtRequest:URLLoader;						private var _message:String;		private var _title:String;				/************************************************************************		*		*************************************************************************/		public function TextMessageForm() {						environment = STAGING;						stagingURL = "ss.nyt.com/s/s2m";			liveURL = "s.nyt.com/s/s2m";						focusManager = new FocusManager(this);						urlVars = new Object();						txtRequest = new URLLoader();						txtRequest.addEventListener(Event.COMPLETE,onResult);						if(_message == null) _message = "";			if(_title == null) _title = "";						message_txt.wordWrap = true;						hideAlert();			init();		}				/************************************************************************		*		*************************************************************************/		public function init():void {						areaCode_txt.restrict = "0-9";			exchange_txt.restrict = "0-9";			fourDigit_txt.restrict = "0-9";						areaCode_txt.maxChars = 3;			exchange_txt.maxChars = 3;			fourDigit_txt.maxChars = 4;						areaCode_txt.addEventListener(Event.CHANGE,onTFChange);			exchange_txt.addEventListener(Event.CHANGE,onTFChange);			fourDigit_txt.addEventListener(Event.CHANGE,onTFChange);						/*areaCode_txt.setStyle("themeColor",0xD9E7F2);			exchange_txt.setStyle("themeColor",0xD9E7F2);			fourDigit_txt.setStyle("themeColor",0xD9E7F2);								areaCode_txt.setStyle("fontFamily","Arial");			exchange_txt.setStyle("fontFamily","Arial");			fourDigit_txt.setStyle("fontFamily","Arial");						areaCode_txt.setStyle("embedFonts",true);			exchange_txt.setStyle("embedFonts",true);			fourDigit_txt.setStyle("embedFonts",true);						areaCode_txt.label.antiAliasType = "advanced";			exchange_txt.label.antiAliasType = "advanced";			fourDigit_txt.label.antiAliasType = "advanced";*/						focusManager.setFocus(areaCode_txt);						initControls();		}				/************************************************************************		*		*************************************************************************/		public function initControls():void {						submit_btn.addEventListener(MouseEvent.CLICK,Delegate.create(this,submit,false));			agree_btn.addEventListener(MouseEvent.CLICK,onAgreeClick);						alert_mc.close_btn.addEventListener(MouseEvent.CLICK,Delegate.create(this,hideAlert,false));						/*help_btn.addEventListener(MouseEvent.CLICK,Delegate.create(this,navigateToURL,false,new URLRequest("http://www.nytimes.com/ref/realestate/mobile_faq.html"),"_blank"));*/			terms_btn.addEventListener(MouseEvent.CLICK,Delegate.create(this,navigateToURL,false,new URLRequest("http://www.nytimes.com/ref/membercenter/help/mobileterms.html"),"_blank"));		}				/************************************************************************		*		*************************************************************************/		[Inspectable(name="form title",type="string",defaultValue="")]		public function set title(t:String):void {						_title = t;						title_txt.text = t;		}				/************************************************************************		*		*************************************************************************/		public function get title():String {						return _title;		}				/************************************************************************		*		*************************************************************************/		[Inspectable(name="message",type="string",defaultValue="")]		public function set message(msg:String):void {						if(msg == null) msg = "";						_message = msg;						message_txt.text = msg;		}				/************************************************************************		*		*************************************************************************/		public function get message():String {						return _message;		}				/************************************************************************		*		*************************************************************************/		protected function onAgreeClick(evt:MouseEvent):void {						agree_btn.gotoAndStop((agree_btn.currentFrame == 1) ? 2 : 1);		}				/************************************************************************		*		*************************************************************************/		private function onTFChange(evt:Event):void {						if(exchange_txt.length == 3 && focusManager.getFocus() == exchange_txt) focusManager.setFocus(fourDigit_txt);			else if(areaCode_txt.length == 3 && focusManager.getFocus() == areaCode_txt) focusManager.setFocus(exchange_txt);		}				/************************************************************************		*		*************************************************************************/		public function submit():void {						// validate form			if(!validateForm(true)) return;						var phone = areaCode_txt.text + exchange_txt.text + fourDigit_txt.text;						// consistent vars			urlVars.service_id = "56";			urlVars.type = "text";			urlVars.output = "xml";						// custom vars			urlVars.report = report;			urlVars.keyword = keyword;			urlVars.number = phone;						urlVars.mesg1 = _message; // <------------------------------- this should create message pages as needed									// create full base url (to which we will append variables)			// var fullURL = "http://"+ username + ":" + password + "@" + ((environment == LIVE) ? liveURL : stagingURL)  + "?";						// use proxy script to bypass login to real texting service			//var fullURL = "http://ss.nyt.com/s2mProxy.php?";			var fullURL = "http://s.nyt.com/s2mProxy.php?";						// append all urlVars to xmlURL			for (var a in urlVars) {								fullURL += a + "=" + escape(urlVars[a]) + "&";			}						// take off last ampersand			fullURL = fullURL.slice(0,-1);						txtRequest.load(new URLRequest(fullURL));		}				/************************************************************************		*		*************************************************************************/		public function validateForm(alerts:Boolean):Boolean {						if(alerts != false) alerts = true;						if(areaCode_txt.text.length + exchange_txt.text.length + fourDigit_txt.text.length != 10) {								if(alerts) alert("Please enter a 10-digit phone number.");				return false;			}						if(areaCode_txt.text.charAt(0) == "1") {								if(alerts) alert("There are no area codes in the U.S. that begin with the number one.");				return false;			}						if(agree_btn.currentFrame != 2) {								if(alerts) alert("You must accept the Terms and Conditions in order to continue.");				return false;			}						return true;		}				/************************************************************************		*		*************************************************************************/		private function onResult(evt:Event):void {						var txtXML:XML = new XML(txtRequest.data);						if(txtXML.@stat.toLowerCase() == "ok") {								areaCode_txt.text = "";				exchange_txt.text = "";				fourDigit_txt.text = "";								agree_btn.gotoAndStop("unsel");								alert("The message was delivered successfully.");			}						else {								alert("There was a problem sending the message."); 			}		}				/************************************************************************		*		*************************************************************************/		public function alert(msg:String):void {						if(msg == null) msg = "";						alert_mc.message_txt.text = msg;			alert_mc.message_txt.autoSize = "left";						//alert_mc.message_txt._y = (alert_mc.bg_mc._height - alert_mc.message_txt._height)/2;						alert_mc.visible = true;		}				/************************************************************************		*		*************************************************************************/		public function hideAlert():void {						alert_mc.visible = false;		}				/************************************************************************		*		*************************************************************************/		public function clear():void {						message_txt.text = "";			areaCode_txt.text = "";			exchange_txt.text = "";			fourDigit_txt.text = "";						agree_btn.gotoAndStop(1);						focusManager.setFocus(areaCode_txt);		}	}}