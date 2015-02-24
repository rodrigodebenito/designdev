(function(){var j,n=this;function o(){}
function p(a){var b=typeof a;if(b=="object")if(a){if(a instanceof Array||!(a instanceof Object)&&Object.prototype.toString.call(a)=="[object Array]"||typeof a.length=="number"&&typeof a.splice!="undefined"&&typeof a.propertyIsEnumerable!="undefined"&&!a.propertyIsEnumerable("splice"))return"array";if(!(a instanceof Object)&&(Object.prototype.toString.call(a)=="[object Function]"||typeof a.call!="undefined"&&typeof a.propertyIsEnumerable!="undefined"&&!a.propertyIsEnumerable("call")))return"function"}else return"null";else if(b==
"function"&&typeof a.call=="undefined")return"object";return b}function aa(a){var b=p(a);return b=="array"||b=="object"&&typeof a.length=="number"}function s(a){if(a.hasOwnProperty&&a.hasOwnProperty(t))return a[t];a[t]||(a[t]=++ba);return a[t]}var t="closure_uid_"+Math.floor(Math.random()*2147483648).toString(36),ba=0,ca=Date.now||function(){return+new Date};function u(a,b){function c(){}c.prototype=b.prototype;a.L=b.prototype;a.prototype=new c};var v=Array.prototype,w=v.indexOf?function(a,b,c){return v.indexOf.call(a,b,c)}:function(a,b,c){c=c==null?0:c<0?Math.max(0,a.length+c):c;if(typeof a=="string"){if(typeof b!="string"||b.length!=1)return-1;return a.indexOf(b,c)}for(c=c;c<a.length;c++)if(c in a&&a[c]===b)return c;return-1},da=v.forEach?function(a,b,c){v.forEach.call(a,b,c)}:function(a,b,c){for(var d=a.length,f=typeof a=="string"?a.split(""):a,e=0;e<d;e++)e in f&&b.call(c,f[e],e,a)};function x(a,b){for(var c=0,d=String(a).replace(/^[\s\xa0]+|[\s\xa0]+$/g,"").split("."),f=String(b).replace(/^[\s\xa0]+|[\s\xa0]+$/g,"").split("."),e=Math.max(d.length,f.length),g=0;c==0&&g<e;g++){var h=d[g]||"",i=f[g]||"",k=new RegExp("(\\d*)(\\D*)","g"),r=new RegExp("(\\d*)(\\D*)","g");do{var m=k.exec(h)||["","",""],l=r.exec(i)||["","",""];if(m[0].length==0&&l[0].length==0)break;c=y(m[1].length==0?0:parseInt(m[1],10),l[1].length==0?0:parseInt(l[1],10))||y(m[2].length==0,l[2].length==0)||y(m[2],
l[2])}while(c==0)}return c}function y(a,b){if(a<b)return-1;else if(a>b)return 1;return 0};var z,A,B,C;function ea(){return n.navigator?n.navigator.userAgent:null}C=B=A=z=false;var D;if(D=ea()){var fa=n.navigator;z=D.indexOf("Opera")==0;A=!z&&D.indexOf("MSIE")!=-1;B=!z&&D.indexOf("WebKit")!=-1;C=!z&&!B&&fa.product=="Gecko"}var ga=z,E=A,ha=C,ia=B,ja=n.navigator,ka=(ja&&ja.platform||"").indexOf("Mac")!=-1,F,G="",H;
if(ga&&n.opera){var la=n.opera.version;G=typeof la=="function"?la():la}else{if(ha)H=/rv\:([^\);]+)(\)|;)/;else if(E)H=/MSIE\s+([^\);]+)(\)|;)/;else if(ia)H=/WebKit\/(\S+)/;if(H){var ma=H.exec(ea());G=ma?ma[1]:""}}F=G;var I={};function na(a,b,c,d){d=d||a;b=b&&b!="*"?b.toUpperCase():"";if(d.querySelectorAll&&(b||c)&&(!ia||a.compatMode=="CSS1Compat"||I["528"]||(I["528"]=x(F,"528")>=0)))return d.querySelectorAll(b+(c?"."+c:""));if(c&&d.getElementsByClassName){a=d.getElementsByClassName(c);if(b){d={};for(var f=0,e=0,g;g=a[e];e++)if(b==g.nodeName)d[f++]=g;d.length=f;return d}else return a}a=d.getElementsByTagName(b||"*");if(c){d={};for(e=f=0;g=a[e];e++){b=g.className;if(typeof b.split=="function"&&w(b.split(/\s+/),c)>=0)d[f++]=
g}d.length=f;return d}else return a}function oa(a,b){var c=[];pa(a,b,c,false);return c}function pa(a,b,c,d){if(a!=null)for(var f=0,e;e=a.childNodes[f];f++){if(b(e)){c.push(e);if(d)return true}if(pa(e,b,c,d))return true}return false};function J(a){var b=new RegExp("(^|[\\(\\s\"-])'([\\s\\S]*?)'($|[\\)\\s\".,;:?!-])","g"),c;do{c=a;a=a.replace(b,"$1\u2018$2\u2019$3")}while(c!=a);c=[{g:"\\.\\.\\.",replace:"\u2026"},{g:"'",replace:"\u2019"},{g:'"($|[\\)\\s/.,;:?!\\u2019])',replace:"\u201d$1"},{g:'(^|[\\(\\s-/\\u2018])"',replace:"$1\u201c"},{g:"---",replace:"\u2014"},{g:"--",replace:"\u2013"}];for(var d=0,f=c.length;d<f;++d){var e=c[d];b=new RegExp(e.g,"g");a=a.replace(b,e.replace)}return a};function K(a,b){var c=b||{},d=c.uglyTags||[];c=c.uglyClass||"";if(a==null)return null;if(a.nodeType==3)a.data=J(a.data);else if(!(w(d,a.nodeName.toLowerCase())>=0)&&!(a.className&&a.className==c)){d=a.childNodes;for(c=0;c<d.length;c++){var f=K(d[c],b),e=d[c],g=e.parentNode;g&&g.replaceChild(f,e)}}return a};function qa(){for(var a=na(document,null,"prettify",void 0),b={uglyTags:["code","kbd","pre","script"],uglyClass:"keepugly"},c=0;c<a.length;c++)K(a[c],b)};function L(){}L.prototype.w=false;L.prototype.k=function(){if(!this.w){this.w=true;this.f()}};L.prototype.f=function(){};function M(a,b){this.type=a;this.currentTarget=this.target=b}u(M,L);M.prototype.f=function(){delete this.type;delete this.target;delete this.currentTarget};M.prototype.r=false;M.prototype.T=true;function N(a,b){a&&this.l(a,b)}u(N,M);j=N.prototype;j.target=null;j.relatedTarget=null;j.offsetX=0;j.offsetY=0;j.clientX=0;j.clientY=0;j.screenX=0;j.screenY=0;j.button=0;j.keyCode=0;j.charCode=0;j.ctrlKey=false;j.altKey=false;j.shiftKey=false;j.metaKey=false;j.S=false;j.A=null;
j.l=function(a,b){var c=this.type=a.type;this.target=a.target||a.srcElement;this.currentTarget=b;var d=a.relatedTarget;if(d){if(ha)try{d=d.nodeName&&d}catch(f){d=null}}else if(c=="mouseover")d=a.fromElement;else if(c=="mouseout")d=a.toElement;this.relatedTarget=d;this.offsetX=a.offsetX!==undefined?a.offsetX:a.layerX;this.offsetY=a.offsetY!==undefined?a.offsetY:a.layerY;this.clientX=a.clientX!==undefined?a.clientX:a.pageX;this.clientY=a.clientY!==undefined?a.clientY:a.pageY;this.screenX=a.screenX||
0;this.screenY=a.screenY||0;this.button=a.button;this.keyCode=a.keyCode||0;this.charCode=a.charCode||(c=="keypress"?a.keyCode:0);this.ctrlKey=a.ctrlKey;this.altKey=a.altKey;this.shiftKey=a.shiftKey;this.metaKey=a.metaKey;this.S=ka?a.metaKey:a.ctrlKey;this.A=a;delete this.T;delete this.r};E&&(I["8"]||(I["8"]=x(F,"8")>=0));N.prototype.f=function(){N.L.f.call(this);this.relatedTarget=this.currentTarget=this.target=this.A=null};function ra(){}var sa=0;j=ra.prototype;j.key=0;j.i=false;j.t=false;j.l=function(a,b,c,d,f,e){if(p(a)=="function")this.F=true;else if(a&&a.handleEvent&&p(a.handleEvent)=="function")this.F=false;else throw Error("Invalid listener argument");this.m=a;this.J=b;this.src=c;this.type=d;this.capture=!!f;this.C=e;this.t=false;this.key=++sa;this.i=false};j.handleEvent=function(a){if(this.F)return this.m.call(this.C||this.src,a);return this.m.handleEvent.call(this.m,a)};function O(a,b){this.G=b;this.d=[];if(a>this.G)throw Error("[goog.structs.SimplePool] Initial cannot be greater than max");for(var c=0;c<a;c++)this.d.push(this.j())}u(O,L);O.prototype.c=null;O.prototype.v=null;function P(a){if(a.d.length)return a.d.pop();return a.j()}function Q(a,b){a.d.length<a.G?a.d.push(b):a.p(b)}O.prototype.j=function(){return this.c?this.c():{}};O.prototype.p=function(a){if(this.v)this.v(a);else if(p(a.k)=="function")a.k();else for(var b in a)delete a[b]};
O.prototype.f=function(){O.L.f.call(this);for(var a=this.d;a.length;)this.p(a.pop());delete this.d};var ta;var ua=(ta="ScriptEngine"in n&&n.ScriptEngine()=="JScript")?n.ScriptEngineMajorVersion()+"."+n.ScriptEngineMinorVersion()+"."+n.ScriptEngineBuildVersion():"0";var R,S,T,U,va,wa,xa,ya,za,Aa,Ba;
(function(){function a(){return{b:0,h:0}}function b(){return[]}function c(){function l(q){return g.call(l.src,l.key,q)}return l}function d(){return new ra}function f(){return new N}var e=ta&&!(x(ua,"5.7")>=0),g;wa=function(l){g=l};if(e){R=function(){return P(h)};S=function(l){Q(h,l)};T=function(){return P(i)};U=function(l){Q(i,l)};va=function(){return P(k)};xa=function(){Q(k,c())};ya=function(){return P(r)};za=function(l){Q(r,l)};Aa=function(){return P(m)};Ba=function(l){Q(m,l)};var h=new O(0,600);
h.c=a;var i=new O(0,600);i.c=b;var k=new O(0,600);k.c=c;var r=new O(0,600);r.c=d;var m=new O(0,600);m.c=f}else{R=a;S=o;T=b;U=o;va=c;xa=o;ya=d;za=o;Aa=f;Ba=o}})();var V={},W={},X={},Ca={};
function Da(a,b,c,d,f){if(b)if(p(b)=="array"){for(var e=0;e<b.length;e++)Da(a,b[e],c,d,f);return null}else{d=!!d;var g=W;b in g||(g[b]=R());g=g[b];if(!(d in g)){g[d]=R();g.b++}g=g[d];var h=s(a),i;g.h++;if(g[h]){i=g[h];for(e=0;e<i.length;e++){g=i[e];if(g.m==c&&g.C==f){if(g.i)break;return i[e].key}}}else{i=g[h]=T();g.b++}e=va();e.src=a;g=ya();g.l(c,e,a,b,d,f);c=g.key;e.key=c;i.push(g);V[c]=g;X[h]||(X[h]=T());X[h].push(g);if(a.addEventListener){if(a==n||!a.P)a.addEventListener(b,e,d)}else a.attachEvent(Ea(b),
e);return c}else throw Error("Invalid event type");}function Fa(a,b,c,d){if(!d.n)if(d.H){for(var f=0,e=0;f<d.length;f++)if(d[f].i){var g=d[f].J;g.src=null;xa(g);za(d[f])}else{if(f!=e)d[e]=d[f];e++}d.length=e;d.H=false;if(e==0){U(d);delete W[a][b][c];W[a][b].b--;if(W[a][b].b==0){S(W[a][b]);delete W[a][b];W[a].b--}if(W[a].b==0){S(W[a]);delete W[a]}}}}function Ea(a){if(a in Ca)return Ca[a];return Ca[a]="on"+a}
function Ga(a,b,c,d,f){var e=1;b=s(b);if(a[b]){a.h--;a=a[b];if(a.n)a.n++;else a.n=1;try{for(var g=a.length,h=0;h<g;h++){var i=a[h];if(i&&!i.i)e&=Ha(i,f)!==false}}finally{a.n--;Fa(c,d,b,a)}}return Boolean(e)}
function Ha(a,b){var c=a.handleEvent(b);if(a.t){var d=a.key;if(V[d]){var f=V[d];if(!f.i){var e=f.src,g=f.type,h=f.J,i=f.capture;if(e.removeEventListener){if(e==n||!e.P)e.removeEventListener(g,h,i)}else e.detachEvent&&e.detachEvent(Ea(g),h);e=s(e);h=W[g][i][e];if(X[e]){var k=X[e],r=w(k,f);r>=0&&v.splice.call(k,r,1);k.length==0&&delete X[e]}f.i=true;h.H=true;Fa(g,i,e,h);delete V[d]}}}return c}
wa(function(a,b){if(!V[a])return true;var c=V[a],d=c.type,f=W;if(!(d in f))return true;f=f[d];var e,g;if(E){var h;if(!(h=b))a:{h="window.event".split(".");for(var i=n;e=h.shift();)if(i[e])i=i[e];else{h=null;break a}h=i}e=h;h=true in f;i=false in f;if(h){if(e.keyCode<0||e.returnValue!=undefined)return true;a:{var k=false;if(e.keyCode==0)try{e.keyCode=-1;break a}catch(r){k=true}if(k||e.returnValue==undefined)e.returnValue=true}}k=Aa();k.l(e,this);e=true;try{if(h){for(var m=T(),l=k.currentTarget;l;l=
l.parentNode)m.push(l);g=f[true];g.h=g.b;for(var q=m.length-1;!k.r&&q>=0&&g.h;q--){k.currentTarget=m[q];e&=Ga(g,m[q],d,true,k)}if(i){g=f[false];g.h=g.b;for(q=0;!k.r&&q<m.length&&g.h;q++){k.currentTarget=m[q];e&=Ga(g,m[q],d,false,k)}}}else e=Ha(c,k)}finally{if(m){m.length=0;U(m)}k.k();Ba(k)}return e}d=new N(b,this);try{e=Ha(c,d)}finally{d.k()}return e});var Y="StopIteration"in n?n.StopIteration:Error("StopIteration");function Z(){}Z.prototype.next=function(){throw Y;};Z.prototype.o=function(){return this};function Ia(a){if(a instanceof Z)return a;if(typeof a.o=="function")return a.o(false);if(aa(a)){var b=0,c=new Z;c.next=function(){for(;;){if(b>=a.length)throw Y;if(b in a)return a[b++];else b++}};return c}throw Error("Not implemented");}
function Ja(a,b,c){if(aa(a))try{da(a,b,c)}catch(d){if(d!==Y)throw d;}else{a=Ia(a);try{for(;;)b.call(c,a.next(),undefined,a)}catch(f){if(f!==Y)throw f;}}};function $(a){this.e={};this.a=[];var b=arguments.length;if(b>1){if(b%2)throw Error("Uneven number of arguments");for(var c=0;c<b;c+=2)Ka(this,arguments[c],arguments[c+1])}else if(a){var d;if(a instanceof $){c=La(a);Ma(a);d=[];for(b=0;b<a.a.length;b++)d.push(a.e[a.a[b]]);d=d}else{b=[];var f=0;for(c in a)b[f++]=c;c=b;b=[];f=0;for(d in a)b[f++]=a[d];d=b}for(b=0;b<c.length;b++)Ka(this,c[b],d[b])}}$.prototype.b=0;$.prototype.s=0;function La(a){Ma(a);return a.a.concat()}
function Ma(a){if(a.b!=a.a.length){for(var b=0,c=0;b<a.a.length;){var d=a.a[b];if(Object.prototype.hasOwnProperty.call(a.e,d))a.a[c++]=d;b++}a.a.length=c}if(a.b!=a.a.length){var f={};for(c=b=0;b<a.a.length;){d=a.a[b];if(!Object.prototype.hasOwnProperty.call(f,d)){a.a[c++]=d;f[d]=1}b++}a.a.length=c}}function Na(a,b,c){if(Object.prototype.hasOwnProperty.call(a.e,b))return a.e[b];return c}function Ka(a,b,c){if(!Object.prototype.hasOwnProperty.call(a.e,b)){a.b++;a.a.push(b);a.s++}a.e[b]=c}
$.prototype.o=function(a){Ma(this);var b=0,c=this.a,d=this.e,f=this.s,e=this,g=new Z;g.next=function(){for(;;){if(f!=e.s)throw Error("The map has changed since the iterator was created");if(b>=c.length)throw Y;var h=c[b++];return a?h:d[h]}};return g};function Oa(){this.B=[];this.I=new $;this.Z=this.$=this.aa=this.U=0;this.K=new $;this.O=this.Y=0;this.R=1;this.Q=new O(0,4E3);this.Q.j=function(){return new Pa};this.V=new O(0,50);this.V.j=function(){return new Qa};var a=this;this.D=new O(0,2E3);this.D.j=function(){return String(a.R++)};this.D.p=function(){};this.ba=3}function Qa(){this.M=this.W=this.u=0}
Qa.prototype.toString=function(){var a=[];a.push(this.type," ",this.u," (",Math.round(this.W*10)/10," ms)");this.M&&a.push(" [VarAlloc = ",this.M,"]");return a.join("")};function Pa(){}function Ra(a,b,c,d){var f=[];c==-1?f.push("    "):f.push(Sa(a.z-c));f.push(" ",Ta(a.z-b));if(a.q==0)f.push(" Start        ");else if(a.q==1){f.push(" Done ");f.push(Sa(a.ca-a.startTime)," ms ")}else f.push(" Comment      ");f.push(d,a);a.X>0&&f.push("[VarAlloc ",a.X,"] ");return f.join("")}
Pa.prototype.toString=function(){return this.type==null?this.N:"["+this.type+"] "+this.N};
Oa.prototype.toString=function(){for(var a=[],b=-1,c=[],d=0;d<this.B.length;d++){var f=this.B[d];f.q==1&&c.pop();a.push(" ",Ra(f,this.U,b,c.join("")));b=f.z;a.push("\n");f.q==0&&c.push("|  ")}if(this.I.b!=0){var e=ca();a.push(" Unstopped timers:\n");Ja(this.I,function(g){a.push("  ",g," (",e-g.startTime," ms, started at ",Ta(g.startTime),")\n")})}b=La(this.K);for(d=0;d<b.length;d++){c=Na(this.K,b[d]);c.u>1&&a.push(" TOTAL ",c,"\n")}a.push("Total tracers created ",this.Y,"\n","Total comments created ",
this.O,"\n","Overhead start: ",this.aa," ms\n","Overhead end: ",this.$," ms\n","Overhead comment: ",this.Z," ms\n");return a.join("")};function Sa(a){a=Math.round(a);var b="";if(a<1E3)b=" ";if(a<100)b="  ";if(a<10)b="   ";return b+a}function Ta(a){a=Math.round(a);return String(100+a/1E3%60).substring(1,3)+"."+String(1E3+a%1E3).substring(1,4)}new Oa;new O(0,100);window.jsprettify={prettify:qa,prettifyHtml:K,prettifyStr:J,prettifyTextInputs:function(){for(var a=na(document,"textarea",void 0,void 0),b=0,c=a.length;b<c;++b){var d=a[b];d.value=J(d.value)}a=na(document,"input",void 0,void 0);b=0;for(c=a.length;b<c;++b){d=a[b];if(d.type=="text")d.value=J(d.value)}a=oa(document.body,function(f){return f.contentEditable=="true"});b=0;for(c=a.length;b<c;++b)K(a[b])},run:function(){Da(window,"load",function(){qa()})}};
for(var Ua in window.jsprettify)window[Ua]=function(){alert("WARNING: this page is calling jsprettify in a deprecated manner. The correct, current way to call jsprettify is through window.jsprettify.*, not window.*. Sorry for the inconvenience.");window.jsprettify[Ua]()};window.prettifyTextInputs=function(){alert("You appear to be using an out-of-date version of the jsprettify bookmarklet. It may go away at some point. Meanwhile, go to http://code.google.com/p/jsprettify/wiki/MakingInputsPretty to get the updated bookmarklet.")};})()

var spanRegionCheck = false;

String.prototype.toTitleCase = function() {
  var smallWords;
  smallWords = /^(a|an|and|as|at|but|by|en|for|if|in|of|on|or|the|to|vs?\.?|via)$/i;
  return this.replace(/([^\W_]+[^\s-]*) */g, function(match, p1, index, title) {
    if (index > 0 && index + p1.length !== title.length && p1.search(smallWords) > -1 && title.charAt(index - 2) !== ":" && title.charAt(index - 1).search(/[^\s-]/) < 0) {
      return match.toLowerCase();
    }
    if (p1.substr(1).search(/[A-Z]|\../) > -1) {
      return match;
    }
    return match.charAt(0).toUpperCase() + match.substr(1);
  });
};

String.prototype.capitalize = function() {
  return this.charAt(0).toUpperCase() + this.slice(1);
};

if (!String.prototype.trim) {
  String.prototype.trim = function() {
    return this.replace(/^\s\s*/, '').replace(/\s\s*$/, '');
  };
}

var ThumbFactory;

ThumbFactory = (function() {

  ThumbFactory.prototype.sections = [
    {
      url: "roomfordebate",
      icon: "http://graphics8.nytimes.com/images/2010/07/09/opinion/09rfd-image/09rfd-image-custom4.jpg"
    }, {
      url: "takingnote.blogs.nytimes.com",
      icon: "http://graphics8.nytimes.com/images/blogs_v3/takingnote/takingnote75.gif"
    }, {
      url: "latitude.blogs.nytimes.com",
      icon: "http://graphics8.nytimes.com/images/blogs_v3/latitude/latitude75.png"
    }, {
      url: "kristof.blogs.nytimes.com",
      icon: "http://graphics8.nytimes.com/images/blogs_v3/kristof/kristof75.gif"
    }, {
      url: "krugman.blogs.nytimes.com",
      icon: "http://graphics8.nytimes.com/images/blogs_v3/krugman/krugman75.jpg"
    }, {
      url: "dotearth.blogs.nytimes.com",
      icon: "http://graphics8.nytimes.com/images/blogs_v3/dotearth/dotearth75.gif"
    }, {
      url: "bruni.blogs.nytimes.com",
      icon: "http://graphics8.nytimes.com/images/blogs_v3/bruni/bruni75.jpg"
    }, {
      url: "douthat.blogs.nytimes.com",
      icon: "http://graphics8.nytimes.com/images/blogs_v3/douthat/douthat75.jpg"
    }, {
      url: "bittman.blogs.nytimes.com",
      icon: "http://graphics8.nytimes.com/images/blogs_v3/bittman/bittman75.jpg"
    }, {
      url: "campaignstops.blogs.nytimes.com",
      icon: "http://graphics8.nytimes.com/images/blogs_v3/campaignstops/campaignstops75.png"
    }
  ];

  ThumbFactory.prototype.opinionator = [
    {
      category: "Anxiety",
      icon: "http://graphics8.nytimes.com/images/blogs_v3/opinionator/anxiety/anxiety75.gif"
    }, {
      category: "Doug Glanville",
      icon: "http://graphics8.nytimes.com/images/blogs_v3/opinionator/glanville/glanville75.jpg"
    }, {
      category: "Allison Arieff",
      icon: "http://graphics8.nytimes.com/images/2010/09/16/opinion/Arieff_New/Arieff_New-thumbStandard.jpg"
    }, {
      category: "Mark Bittman",
      icon: "http://graphics8.nytimes.com/images/blogs_v3/opinionator/bittman/mark-bittman75.jpg"
    }, {
      category: "Dick Cavett",
      icon: "http://graphics8.nytimes.com/images/2010/09/16/opinion/Cavett_New/Cavett_New-thumbStandard.jpg"
    }, {
      category: "Timothy Egan",
      icon: "http://graphics8.nytimes.com/images/2010/09/16/opinion/Egan_New/Egan_New-thumbStandard.jpg"
    }, {
      category: "Stanley Fish",
      icon: "http://graphics8.nytimes.com/images/2010/09/16/opinion/Fish_New/Fish_New-thumbStandard.jpg"
    }, {
      category: "Linda Greenhouse",
      icon: "http://graphics8.nytimes.com/images/2010/09/16/opinion/Greenhouse_New/Greenhouse_New-thumbStandard.jpg"
    }, {
      category: "Errol Morris",
      icon: "http://graphics8.nytimes.com/images/2010/09/16/opinion/Morris_New/Morris_New-thumbStandard.jpg"
    }, {
      category: "Fixes",
      icon: "http://graphics8.nytimes.com/images/blogs_v3/opinionator/pogs/fixes75.gif"
    }, {
      category: "Disunion",
      icon: "http://graphics8.nytimes.com/images/blogs_v3/opinionator/disunion/disunion75.gif"
    }, {
      category: "The Score",
      icon: "http://graphics8.nytimes.com/images/blogs_v3/opinionator/pogs/thescore75.gif"
    }, {
      category: "Draft",
      icon: "http://graphics8.nytimes.com/images/blogs_v3/opinionator/draft/draft75.gif"
    }, {
      category: "Ezekiel J. Emanuel",
      icon: "http://graphics8.nytimes.com/images/2011/10/27/opinion/Emanuel_New/Emanuel_New-thumbStandard.jpg"
    }, {
      category: "Diane Ackerman",
      icon: "http://www.nytimes.com/images/2011/11/10/opinion/ackerman_new/ackerman_new-thumbStandard.jpg"
    }, {
      category: "Things I Saw",
      icon: "http://graphics8.nytimes.com/images/blogs_v3/opinionator/things-i-saw/things-i-saw75.png"
    }, {
      category: "Bedside",
      icon: "http://graphics8.nytimes.com/images/blogs_v3/opinionator/bedside/bedside75.gif"
    }, {
      category: "Me, Myself and Math",
      icon: "http://graphics8.nytimes.com/images/blogs_v3/opinionator/me-myself-and-math/me-myself-and-math75.gif"
    }, {
      category: "The Conversation",
      icon: "http://graphics8.nytimes.com/images/blogs_v3/opinionator/pogs/theconversation75.gif"
    }, {
      category: "Townies",
      icon: "http://graphics8.nytimes.com/images/blogs_v3/opinionator/pogs/townies75.gif"
    }, {
      category: "Home Fires",
      icon: "http://graphics8.nytimes.com/images/blogs_v3/opinionator/pogs/homefires75.gif"
    }, {
      category: "The Stone",
      icon: "http://graphics8.nytimes.com/images/blogs_v3/opinionator/pogs/thestone75.gif"
    }, {
      category: "Menagerie",
      icon: "http://graphics8.nytimes.com/images/blogs_v3/opinionator/pogs/menagerie75.png"
    }

  ];

  function ThumbFactory() {}

  ThumbFactory.prototype.get = function(url, categories) {
    var category, icon, item, _i, _j, _k, _len, _len1, _len2, _ref, _ref1;
    if (url == null) {
      url = null;
    }
    if (categories == null) {
      categories = null;
    }
    icon = null;
    _ref = this.sections;
    for (_i = 0, _len = _ref.length; _i < _len; _i++) {
      item = _ref[_i];
      if (url.match("/" + item.url + "/")) {
        icon = item.icon;
      }
    }
    if (icon === null && categories !== null) {
      _ref1 = this.opinionator;
      for (_j = 0, _len1 = _ref1.length; _j < _len1; _j++) {
        item = _ref1[_j];
        for (_k = 0, _len2 = categories.length; _k < _len2; _k++) {
          category = categories[_k];
          if (item.category === category) {
            icon = item.icon;
          }
        }
      }
    }
    return icon;
  };

  return ThumbFactory;

})();

var JsonManager;

JsonManager = (function() {

  function JsonManager() {}

  JsonManager.prototype.jsonPhp = "./php/json.php?url=";

  JsonManager.prototype.openPhp = "./php/open.php?url=";

  return JsonManager;

})();

var PositionsManager,
  __hasProp = {}.hasOwnProperty,
  __extends = function(child, parent) { for (var key in parent) { if (__hasProp.call(parent, key)) child[key] = parent[key]; } function ctor() { this.constructor = child; } ctor.prototype = parent.prototype; child.prototype = new ctor(); child.__super__ = parent.prototype; return child; };

PositionsManager = (function(_super) {

  __extends(PositionsManager, _super);

  function PositionsManager() {
    return PositionsManager.__super__.constructor.apply(this, arguments);
  }

  PositionsManager.prototype.top = "top";

  PositionsManager.prototype.left = "left";

  PositionsManager.prototype.right = "right";

  PositionsManager.prototype.bottom = "bottom";

  return PositionsManager;

})(JsonManager);

var ElementsManager,
  __hasProp = {}.hasOwnProperty,
  __extends = function(child, parent) { for (var key in parent) { if (__hasProp.call(parent, key)) child[key] = parent[key]; } function ctor() { this.constructor = child; } ctor.prototype = parent.prototype; child.prototype = new ctor(); child.__super__ = parent.prototype; return child; };

ElementsManager = (function(_super) {

  __extends(ElementsManager, _super);

  ElementsManager.prototype.$ElementsManager = null;

  ElementsManager.prototype.elements = [];

  function ElementsManager(data) {
    var elem, that, _i, _len, _ref;
    if (data == null) {
      data = null;
    }
    if (data === null) {
      this.elements.push(new ElementTheOpinionPages(this.elements.length));
      this.elements.push(new ElementTheOpinionPagesIntl(this.elements.length));
      this.elements.push(new ElementSundayReview(this.elements.length));
      this.elements.push(new ElementKicker(this.elements.length, "More in Opinion"));
      this.elements.push(new ElementKicker(this.elements.length, "Op-Ed Columnists"));
    } else {
      _ref = data.elements;
      for (_i = 0, _len = _ref.length; _i < _len; _i++) {
        elem = _ref[_i];
        if (elem["class"] === "ElementTheOpinionPages") {
          this.elements.push(new ElementTheOpinionPages(elem.id, elem));
        } else if (elem["class"] === "ElementTheOpinionPagesIntl") {
          this.elements.push(new ElementTheOpinionPagesIntl(elem.id, elem));
        } else if (elem["class"] === "ElementSundayReview") {
          this.elements.push(new ElementSundayReview(elem.id, elem));
        } else if (elem["class"] === "ElementKicker") {
          this.elements.push(new ElementKicker(elem.id, elem.text));
        }
      }
    }
    that = this;
    $(".addKicker").on("click", function() {
      return that.addKicker();
    });
  }

  ElementsManager.prototype.addKicker = function() {
    return this.elements.push(new ElementKicker(this.elements.length));
  };

  ElementsManager.prototype.html = function($child, position) {
    var html, id;
    id = $child.attr("id").split("_")[1];
    html = this.elements[id].html(position);
    return html;
  };

  ElementsManager.prototype.save = function() {
    var element, save, _i, _len, _ref;
    save = [];
    _ref = this.elements;
    for (_i = 0, _len = _ref.length; _i < _len; _i++) {
      element = _ref[_i];
      save.push(element.save());
    }
    return save;
  };

  return ElementsManager;

})(PositionsManager);

var LayoutManager,
  __hasProp = {}.hasOwnProperty,
  __extends = function(child, parent) { for (var key in parent) { if (__hasProp.call(parent, key)) child[key] = parent[key]; } function ctor() { this.constructor = child; } ctor.prototype = parent.prototype; child.prototype = new ctor(); child.__super__ = parent.prototype; return child; };

LayoutManager = (function(_super) {

  __extends(LayoutManager, _super);

  LayoutManager.prototype.divider = true;

  function LayoutManager() {
    var filename, that;
    filename = String(window.location).split("#")[1];
    if (filename) {
      $("#saveFileName").val(filename);
      $.getJSON(this.openPhp + ("../savedData/" + filename + ".json"), function(data) {
        return that.handleLoadEvent(data);
      });
    } else {
      this.storiesManager = new StoriesManager;
      this.elementsManager = new ElementsManager;
    }
    this.$OpinionModule = $("#OpinionModule");
    this.$Html = $("#Html");
    this.$RegionTop = $("#RegionTop");
    this.$RegionLeft = $("#RegionLeft");
    this.$RegionRight = $("#RegionRight");
    this.$RegionBottom = $("#RegionBottom");
    this.$sortables = $("#StoriesManager, ._region, ._elements");
    this.$regions = $("._region");
    this.$sortables.sortable({
      connectWith: "._connectedSortable"
    }).disableSelection();
    that = this;
    this.$regions.bind("sortupdate", function() {
      return that.handleUpdate();
    });
    $.subscribe("LayoutManager/updateLayout", function() {
      return that.handleUpdate();
    });
    $("#Input_Divider").on("click", function() {
      return that.handleDivider();
    });
    $(".saveToFile").on("click", function(event) {
      return $("#dialogConfirmSave").dialog({
        resizable: false,
        height: 220,
        modal: true,
        buttons: {
          Save: function() {
            return that.handleSaveEvent();
          },
          Cancel: function() {
            return $(this).dialog("close");
          }
        }
      });
    });
    $(".openFile").on("click", function(event) {
      return $.getJSON('./php/files.php', function(data) {
        var files, href, html, _i, _len;
        files = [];
        for (_i = 0, _len = data.length; _i < _len; _i++) {
          filename = data[_i];
          filename = filename.split(".")[0];
          href = window.location.href.split("#")[0];
          files.push("<p><a data-href=\"" + href + "#" + filename + "\">" + filename + "</a></p>");
        }
        html = files.join("");
        $("#dialogOpenFile .fileList").html(html);
        $("#dialogOpenFile .fileList").find("a").click(function(event) {
          var anchor;
          anchor = $(event.target);
          href = anchor.data("href");
          return document.location = href;
        });
        return $("#dialogOpenFile").dialog({
          height: 220,
          modal: true
        });
      });
    });
    $(window).on("hashchange", function(event) {
      return document.location.reload(true);
    });
  }

  LayoutManager.prototype.handleDivider = function() {
    this.divider = $("#Input_Divider").is(':checked');
    return this.updateLayout();
  };

  LayoutManager.prototype.handleUpdate = function() {
    return this.updateLayout();
  };

  LayoutManager.prototype.updateLayout = function() {
   
    var fixed, html, match, matches, style, _i, _len;
    html = "";
    if (this.$RegionTop.children().length || this.$RegionLeft.children().length || this.$RegionRight.children().length || this.$RegionBottom.children().length) {
      html += "<section class=\"opinion\">";
    }
    if (this.$RegionTop.children().length) {
      spanRegionCheck = true;		
      html += this.layout(this.$RegionTop, this.top);
    }
    if (this.$RegionLeft.children().length || this.$RegionRight.children().length) {
      html += "<div class=\"layout split-layout\">\n	<div class=\"column\">\n";
      if (this.$RegionLeft.children().length) {
        html += this.layout(this.$RegionLeft, this.left);
      }
      html += "</div>\n	<div class=\"column\">\n";
      if (this.$RegionRight.children().length) {
        html += this.layout(this.$RegionRight, this.right);
      }
     // html += "		</div>\n	</div>\n</section>";
    }
    if (this.$RegionBottom.children().length) {
      html += "</div></div>"
      html += '<div class="collection"></div>'
      spanRegionCheck = true;
      html += this.layout(this.$RegionBottom, this.bottom);
    }
    if (this.$RegionTop.children().length || this.$RegionLeft.children().length || this.$RegionRight.children().length || this.$RegionBottom.children().length) {
      html += "</div>";
    }
    this.$OpinionModule.html(html);
 


    $('h3').each(function() {
    if ($(this).hasClass('kicker') && ($(this.parentNode).hasClass('column'))) {
        var $elements = $(this).nextUntil(':not(li)').andSelf();
        $elements.wrapAll('<div class="collection headlines"><ul class="theme-news-headlines">');
        return;
    }
      

    });
 
   $('li').each(function() {
    if ($(this.parentNode).hasClass('theme-news-headlines')) {
        return;
    } 
      
        var $elements = $(this).nextUntil(':not(li)').andSelf();
        $elements.wrapAll('<div class="collection headlines"><ul class="theme-news-headlines">');
   

    });

    html += "</section>";
    html = this.$OpinionModule.html();
    // this.$OpinionModule.html(html);
    // $('li.headlineOnly').each(function() {
    //   if ($(this.parentNode).hasClass('headlinesOnly')) {
    //     return;
    //   }
    //   return $(this).nextUntil(':not(li.headlineOnly)').andSelf().wrapAll('<div class="collection"><ul class="theme-news-headlines">');
    // });
    // $('li.headlineOnly').removeAttr("class");
    // html += "</section>";
    // html = this.$OpinionModule.html();
    /*
    		images must contain a closing slash for scoop to validate the generated html
    */

    matches = html.match(/(<img.*?>)/g);
    if (matches !== null) {
      for (_i = 0, _len = matches.length; _i < _len; _i++) {
        match = matches[_i];
        if (match.indexOf("/>" === -1)) {
          fixed = match.slice(0, -1) + " />";
          html = html.replace(match, fixed);
        }
      }
    }
    this.$Html.html(this.style(html));
    return this.$OpinionModule.find("a").attr("target", "_blank");
  };

 LayoutManager.prototype.style = function(html) {
    return style_html(html, {
            'indent_size': 2,
            'indent_char': ' ',
            'max_char': 78,
            'brace_style': 'expand',
            'unformatted': ['a', 'sub', 'sup', 'b', 'i', 'u']
        }).replace(/<\/a>\s*<span\s+class="product-label\s+theme-nyt-now">\s*<span class="visually-hidden">NYT Now<\/span><i class="icon dot-logo-icon"><\/i>\s*<\/span>/g, '</a><span class="product-label theme-nyt-now"><span class="visually-hidden">NYT Now</span><i class="icon dot-logo-icon"></i></span>');
  };

  LayoutManager.prototype.layout = function($region, position) {
    var child, children, html, _i, _len;
    html = "";
    children = $region.children();
    for (_i = 0, _len = children.length; _i < _len; _i++) {
      child = children[_i];
      html += this.layoutChild($(child), position);
    }
    return html;
  };

  LayoutManager.prototype.layoutChild = function($child, position) {
    var html;
    html = "";
    if ($child.hasClass("_element")) {
      html += this.elementsManager.html($child, position);
    }
    if ($child.hasClass("_story")) {
      html += this.storiesManager.html($child);
    }
    return html;
  };

  LayoutManager.prototype.handleSaveEvent = function() {
    var filename;
    filename = $("#saveFileName").val().trim();
    if (/^[\w-]*$/i.test(filename)) {
      this.save();
      return $("#dialogConfirmSave").dialog("close");
    } else {
      return $("#dialogConfirmSave .error").css("display", "block");
    }
  };

  LayoutManager.prototype.save = function() {
    var save;
    save = {};
    save.includeDivider = $("#Input_Divider").is(':checked');
    save.stories = this.storiesManager.save();
    save.elements = this.elementsManager.save();
    save.regions = {};
    save.regions.top = this.saveRegion(this.$RegionTop);
    save.regions.left = this.saveRegion(this.$RegionLeft);
    save.regions.right = this.saveRegion(this.$RegionRight);
    save.regions.bottom = this.saveRegion(this.$RegionBottom);
    return $.post("./php/save.php", {
      filename: $("#saveFileName").val(),
      content: JSON.stringify(save)
    }).success(function() {
      var href;
      href = String(window.location).split("#")[0];
      return history.pushState(null, null, href + "#" + $("#saveFileName").val());
    });
  };

  LayoutManager.prototype.saveRegion = function($region) {
    var child, children, region, _i, _len;
    region = [];
    children = $region.children();
    for (_i = 0, _len = children.length; _i < _len; _i++) {
      child = children[_i];
      region.push(child.id);
    }
    return region;
  };

  LayoutManager.prototype.handleLoadEvent = function(data) {
    $("#Input_Divider").attr("checked", data.includeDivider);
    this.divider = data.includeDivider;
    this.storiesManager = new StoriesManager(data);
    this.elementsManager = new ElementsManager(data);
    this.loadRegion(this.$RegionTop, data.regions.top);
    this.loadRegion(this.$RegionLeft, data.regions.left);
    this.loadRegion(this.$RegionRight, data.regions.right);
    this.loadRegion(this.$RegionBottom, data.regions.bottom);
    return $.publish("LayoutManager/updateLayout");
  };

  LayoutManager.prototype.loadRegion = function($region, data) {
    var id, _i, _len, _results;
    _results = [];
    for (_i = 0, _len = data.length; _i < _len; _i++) {
      id = data[_i];
      _results.push($("#" + id).detach().appendTo($region));
    }
    return _results;
  };

  return LayoutManager;

})(PositionsManager);


$(function() {
  var layoutManager;
  $.fx.speeds._default = 200;
  return layoutManager = new LayoutManager;
});

var StoriesManager,
  __hasProp = {}.hasOwnProperty,
  __extends = function(child, parent) { for (var key in parent) { if (__hasProp.call(parent, key)) child[key] = parent[key]; } function ctor() { this.constructor = child; } ctor.prototype = parent.prototype; child.prototype = new ctor(); child.__super__ = parent.prototype; return child; };

StoriesManager = (function(_super) {

  __extends(StoriesManager, _super);

  StoriesManager.prototype.stories = [];

  StoriesManager.prototype.$StoriesManager = null;

  function StoriesManager(data) {
    var that;
    if (data == null) {
      data = null;
    }
    if (this.$StoriesManager === null) {
      this.$StoriesManager = $("#StoriesManager");
    }
    if (data === null) {
      this.loadJson();
    } else {
      this.handleLoadedData(data);
    }
    that = this;
    $(".addArticle").on("click", function(event) {
      return that.handleAddClick(event);
    })
    $(".inytToggle").on("click", function(event) {
      return that.loadIntlJson();
    })
    
  }


  StoriesManager.prototype.loadJson = function() {
    var jsonFeed, that;
    
    
    jsonFeed = "http://cms-service.prd.nytimes.com/data/feeds/outgoing/mobile/v1/json/full/opinion.json";
    that = this;
    return $.getJSON(this.jsonPhp + jsonFeed, function(data) {
      return that.handleJson(data);
    });

  };



  StoriesManager.prototype.loadIntlJson = function() {
    var jsonFeed, that;
    jsonFeed = "http://cms-service.prd.nytimes.com/data/feeds/outgoing/mobile/v1/json/full/opinion.international.json";
    that = this;
    return $.getJSON(this.jsonPhp + jsonFeed, function(data) {
      return that.handleJson(data);
    });

  };



  StoriesManager.prototype.handleJson = function(data) {
    var item, story, _i, _len, _ref, _results;
    this.$StoriesManager.empty();
    _ref = data.assets;
    _results = [];
    for (_i = 0, _len = _ref.length; _i < _len; _i++) {
      item = _ref[_i];
      _results.push(this.stories.push(story = new Story(item.url, item.type, this.stories.length, item)));
    }
    return _results;
  };

  StoriesManager.prototype.addWordpress = function(url) {
    var story;
    return this.stories.push(story = new Story(url, "blog", this.stories.length));
  };

  StoriesManager.prototype.addScoop = function(url) {
    var story;
    return this.stories.push(story = new Story(url, "article", this.stories.length));
  };

  StoriesManager.prototype.handleAddClick = function(event) {
    var $articleUrl, articleUrl;
    $articleUrl = $("#articleUrl");
    articleUrl = $articleUrl.val();
    articleUrl = articleUrl.split("?")[0];
    $articleUrl.val("");
    if ($(event.target).hasClass("scoop")) {
      return this.addScoop(articleUrl);
    } else if ($(event.target).hasClass("wordpress")) {
      return this.addWordpress(articleUrl);
    }
  };

  StoriesManager.prototype.html = function($child) {
    var id;
    id = $child.attr("id").split("_")[1];
    return this.stories[id].html();
  };

  StoriesManager.prototype.save = function() {
    var save, story, _i, _len, _ref;
    save = [];
    _ref = this.stories;
    for (_i = 0, _len = _ref.length; _i < _len; _i++) {
      story = _ref[_i];
      save.push(story.save());
    }
    return save;
  };

  StoriesManager.prototype.handleLoadedData = function(data) {
    var storyData, _i, _len, _ref, _results;
    this.$StoriesManager.empty();
    _ref = data.stories;
    _results = [];
    for (_i = 0, _len = _ref.length; _i < _len; _i++) {
      storyData = _ref[_i];
      _results.push(this.stories.push(new Story(storyData)));
    }
    return _results;
  };

  return StoriesManager;

})(JsonManager);

var Story;

Story = (function() {

  Story.prototype.jsonPhp = "./php/json.php?url=";

  Story.prototype.id = null;

  Story.prototype.url = null;

  Story.prototype.type = null;

  Story.prototype.data = null;

  Story.prototype.$div = null;

  Story.prototype.$StoriesManager = null;

  Story.prototype.storyClass = "_story";

  Story.prototype.loadingClass = "_loading";

  Story.prototype.loadedClass = "_loaded";

  Story.prototype.template = null;

  Story.prototype.$Errors = null;

  function Story() {
    var data, headline, html, id, jsonUrl, savedData, that, type, url;
    that = this;
    this.$StoriesManager = $("#StoriesManager");
    this.$Errors = $("#Errors");
    if (arguments.length === 4 || arguments.length === 3) {
      url = arguments[0], type = arguments[1], id = arguments[2], data = arguments[3];
      this.url = url;
      this.type = type;
      this.id = "Story_" + id;
      if (data) {
        this.template = new TemplateSkimmer(data);
      }
    } else if (arguments.length === 1) {
      savedData = arguments[0];
      this.url = savedData.url;
      this.type = savedData.type;
      this.id = savedData.id;
      this.template = new Template;
      this.template.load(savedData.template);
    }
    if (arguments.length !== 3) {
      headline = this.template.getHeadline();
    }
    html = "<div id='" + this.id + "' class='" + this.storyClass + " " + this.loadingClass + "'>\n	<table>\n		<tr>\n			<td><span class=\"cutHeadline\" id='" + this.id + "_HeadlineOnly'>✄</span></td>\n			<td><span class=\"headline\">" + headline + "</span></td>\n		</tr>\n	</table>\n</div>";
    this.$StoriesManager.append(html);
    this.$div = $("#" + this.id);
    this.$headlineOnly = this.$div.find("input");
    if (arguments.length === 1) {
      this.$div.attr("class", savedData.classes);
    } else if (arguments.length === 4 || arguments.length === 3) {
      jsonUrl = null;
      if (this.type === "article") {
        jsonUrl = encodeURIComponent("http://glass-output.prd.use1.nytimes.com/glass/outputmanager/v1/add.json?source=scoop&type=article&hbst=article-baseline&refer=glass-output.prd.use1.nytimes.com&url=");
      } else if (this.type === "blog") {
        jsonUrl = encodeURIComponent("http://glass-output.prd.use1.nytimes.com/glass/outputmanager/v1/add.json?source=wordpress&type=blogpost&url=");
      }
      if (jsonUrl !== null) {
        this.getData(jsonUrl);
      }
    }
    this.$div.on("dblclick", function(event) {
      return that.handleDblclick(event);
    });
    this.$div.find(".cutHeadline").on("click", function(event) {
      return that.handleCutHeadline(event);
    });
    $.subscribe("Story/updateHeadlineOnly", function() {
      return that.updateHeadlineOnly();
    });
  }

  Story.prototype.save = function() {
    return {
      id: this.id,
      url: this.url,
      type: this.type,
      template: this.template.save(),
      classes: $("#" + this.id).attr("class")
    };
  };

  Story.prototype.getData = function(jsonUrl) {
    var that;
    that = this;
    return $.getJSON(this.jsonPhp + jsonUrl + this.url).success(function(data) {
      return that.handleSuccess(data);
    }).error(function(jqXHR, textStatus) {
      return that.handleError(jqXHR, textStatus);
    });
  };

  Story.prototype.handleSuccess = function(data) {
    this.data = data;
    return this.processData(this.data);
  };

  Story.prototype.processData = function(data) {
    var headline;
    if (this.type === "article") {
      this.template = new TemplateScoop(data);
    } else if (this.type === "blog") {
      this.template = new TemplateWordpress(data);
    }
    headline = this.template.getHeadline();
    this.$div.find(".headline").html(headline);
    return this.loaded();
  };

  Story.prototype.handleError = function(jqXHR, textStatus) {
    return this.$Errors.append(jqXHR.responseText);
  };

  Story.prototype.loaded = function() {
    this.$div.removeClass(this.loadingClass);
    return this.$div.addClass(this.loadedClass);
  };

  Story.prototype.html = function() {
    return this.template.html();
  };

  Story.prototype.handleDblclick = function(event) {
    this.template.generateEdit();
    return $("#LayoutManager").fadeOut(function() {
      return $("#Edit").fadeIn();
    });
  };

  Story.prototype.handleCutHeadline = function(event) {
    return this.template.setHeadlineOnly(true);
  };

  Story.prototype.updateHeadlineOnly = function() {
    var bool;
    bool = this.template.isHeadlineOnly();
    return this.$headlineOnly.attr('checked', bool);
  };

  return Story;

})();

var Template;

Template = (function() {

  Template.prototype.data = null;

  Template.prototype.url = null;

  Template.prototype.values = ["kicker", "headline", "byline", "summary"];

  Template.prototype.refers = null;

  Template.prototype.thumbs = null;

  Template.prototype.refersBackup = null;

  Template.prototype.thumbsBackup = null;

  Template.prototype.getHeadline = function() {
    return this.headline.getValue();
  };

  Template.prototype.setUrl = function(url) {
    return this.url = url;
  };

  function Template(data) {
    var value, _i, _len, _ref;
    this.data = data;
    this.refers = [];
    this.thumbs = [];
    this.refersBackup = [];
    this.thumbsBackup = [];
    _ref = this.values;
    for (_i = 0, _len = _ref.length; _i < _len; _i++) {
      value = _ref[_i];
      this[value] = new Value(value);
      this[value + "Backup"] = new Value(value);
    }
  }

  Template.prototype.save = function() {
    var refer, template, thumb, value, _i, _j, _k, _len, _len1, _len2, _ref, _ref1, _ref2;
    template = {
      url: this.url
    };
    _ref = this.values;
    for (_i = 0, _len = _ref.length; _i < _len; _i++) {
      value = _ref[_i];
      template[value] = this[value].save();
    }
    template.refers = [];
    _ref1 = this.refers;
    for (_j = 0, _len1 = _ref1.length; _j < _len1; _j++) {
      refer = _ref1[_j];
      template.refers.push(refer.save());
    }
    template.thumbs = [];
    _ref2 = this.thumbs;
    for (_k = 0, _len2 = _ref2.length; _k < _len2; _k++) {
      thumb = _ref2[_k];
      template.thumbs.push(thumb.save());
    }
    return template;
  };

  Template.prototype.load = function(data) {
    var it, r, t, value, _i, _j, _k, _len, _len1, _len2, _ref, _ref1, _ref2, _results;
    this.data = data;
    this.url = this.data.url;
    _ref = this.values;
    for (_i = 0, _len = _ref.length; _i < _len; _i++) {
      value = _ref[_i];
      it = this.data[value];
      this[value] = new Value;
      this[value].set(it.name, it.value, it.display);
    }
    _ref1 = this.data.refers;
    for (_j = 0, _len1 = _ref1.length; _j < _len1; _j++) {
      it = _ref1[_j];
      r = new ValueRefer;
      r.set(it.name, it.text, it.href, it.display, it.icon);
      this.refers.push(r);
    }
    _ref2 = this.data.thumbs;
    _results = [];
    for (_k = 0, _len2 = _ref2.length; _k < _len2; _k++) {
      it = _ref2[_k];
      t = new ValueThumb;
      t.set(it.name, it.value, it.display);
      _results.push(this.thumbs.push(t));
    }
    return _results;
  };

  Template.prototype.thumbHtml = function(name, size, style) {
    var html, src, thumb, thumbs, _i, _len;
    html = "";
    thumbs = (function() {
      var _i, _len, _ref, _results;
      _ref = this.thumbs;
      _results = [];
      for (_i = 0, _len = _ref.length; _i < _len; _i++) {
        thumb = _ref[_i];
        if (thumb.getName() === name) {
          _results.push(thumb);
        }
      }
      return _results;
    }).call(this);
    for (_i = 0, _len = thumbs.length; _i < _len; _i++) {
      thumb = thumbs[_i];
      if (thumb.getDisplay()) {
        src = thumb.getValue();
        if (style === 'small') {
	        html += "<div class=\"small-thumb\">";
	        html += "<a href=\"" + this.url + "\"><img src=\"" + src + "\" " + size + " /></a>";
	        html += "</div>";
	    }

	   	else if (style === 'wide' && spanRegionCheck === false) {
	        html += "<div class=\"medium-thumb\">";
	        html += "<a href=\"" + this.url + "\"><img src=\"" + src + "\" " + size + " /></a>";
	        html += "</div>";
	    } 

	    else if (style === 'wide' && spanRegionCheck === true) {
	        // html += "<div class=\"wide-thumb\" style=\"float:right;clear:center;margin:0 0 6px 6px\">";
	        html += "<div class=\"medium-thumb\">"
          html += "<a href=\"" + this.url + "\"><img src=\"" + src + "\" " + size + " /></a>";
	        html += "</div>";
	    	}
	    }
      }
    
    return html;
  };

  Template.prototype.htmlStory = function() {
    var html, refer, _i, _len, _ref;
    html = "";
    html += "<div class=\"collection\"><article class=\"story theme-summary\">";
    html += this.thumbHtml("177", 'width="177"', 'wide');
    if (this.kicker.test()) {
      html += "<h3 class=\"kicker\">" + this.kicker.value + "</h3>";
    }
    if (this.headline.test()) {
      html += "<h2 class=\"story-heading\"><a href=\"" + this.url + "\" >" + this.headline.value + "</a><span class=\"product-label theme-nyt-now\"><span class=\"visually-hidden\">NYT Now</span><i class=\"icon dot-logo-icon\"></i></span></h2>";
    }
    html += this.thumbHtml("ThumbStandard", 'width="50" height="50"', 'small');
    if (this.byline.test()) {
      html += "<p class=\"byline\">" + this.byline.value + "</p>";
    }
    if (this.summary.test()) {
      html += "<p class=\"summary\">" + this.summary.value + "</p>";
    }
    if (this.refers && this.refers.length) {
      html += "</article><ul class=\"theme-news-headlines\">";
      _ref = this.refers;
      for (_i = 0, _len = _ref.length; _i < _len; _i++) {
        refer = _ref[_i];
        if (refer.test()) {
          html += "<li>" + refer.getValue() + "</li>";
        }
      }
      html += "</ul></div>";
    } else {
    	html += "</article></div>";
    }
    

    return html 
  };

  Template.prototype.htmlHeadlineOnly = function() {
    var html;
    return html = "<li><article class=\"story\"><h2 class=\"story-heading\"><a href=\"" + this.url + "\">" + this.headline.value + "</a><span class=\"product-label theme-nyt-now\"><span class=\"visually-hidden\">NYT Now</span><i class=\"icon dot-logo-icon\"></i></span></h2></article></li>";
  };

  Template.prototype.html = function() {
    var html;
    html = "";
    if (this.isHeadlineOnly()) {
      return html += this.htmlHeadlineOnly();
    } else {
      return html += this.htmlStory();
    }
  };

  Template.prototype.cloneArrayOfValues = function(alpha) {
    var elem, omega, v, _i, _len;
    omega = [];
    for (_i = 0, _len = alpha.length; _i < _len; _i++) {
      elem = alpha[_i];
      if (elem instanceof ValueRefer) {
        v = new ValueRefer(elem.getName());
      } else if (elem instanceof ValueThumb) {
        v = new ValueThumb(elem.getName());
      } else if (elem instanceof Value) {
        v = new Value(elem.getName());
      }
      if (v) {
        v.setValue(elem.getValue());
        v.setDisplay(elem.getDisplay());
        omega.push(v);
      }
    }
    return omega;
  };

  Template.prototype.backup = function() {
    var value, _i, _len, _ref;
    _ref = this.values;
    for (_i = 0, _len = _ref.length; _i < _len; _i++) {
      value = _ref[_i];
      this[value + "Backup"] = jQuery.extend(true, {}, this[value]);
    }
    this.refersBackup = this.cloneArrayOfValues(this.refers);
    return this.thumbsBackup = this.cloneArrayOfValues(this.thumbs);
  };

  Template.prototype.restore = function() {
    var value, _i, _len, _ref;
    _ref = this.values;
    for (_i = 0, _len = _ref.length; _i < _len; _i++) {
      value = _ref[_i];
      this[value] = jQuery.extend(true, {}, this[value + "Backup"]);
    }
    this.refers = this.cloneArrayOfValues(this.refersBackup);
    return this.thumbs = this.cloneArrayOfValues(this.thumbsBackup);
  };

  Template.prototype.generateEdit = function() {
    var $table, checked, display, html, i, name, that, thumb, value, _i, _j, _k, _l, _len, _len1, _ref, _ref1, _ref2, _ref3;
    this.backup();
    $table = $("#Edit table");
    html = "";
    html += "<tr>\n	<td colspan=\"2\">\n		<input type=\"submit\" value=\"Save\" id=\"EditSave\" class=\"editSave\" />\n		<input type=\"submit\" value=\"Cancel\" id=\"EditCancel\" class=\"editCancel\" />\n	</td>\n</tr>";
    checked = "";
    if (this.isHeadlineOnly()) {
      checked = "checked";
    }
    html += "<tr>";
    html += "<td><input id=\"Display_Headline_Only\" name=\"Display_Headline_Only\" type=\"checkbox\" " + checked + " /></td>";
    html += "<td>";
    html += "<p>Headline Only</p>";
    html += "</td>";
    html += "</tr>";
    _ref = this.values;
    for (_i = 0, _len = _ref.length; _i < _len; _i++) {
      value = _ref[_i];
      html += this[value].generateRow();
    }
    if (this.refers.length) {
      for (i = _j = 0, _ref1 = this.refers.length - 1; 0 <= _ref1 ? _j <= _ref1 : _j >= _ref1; i = 0 <= _ref1 ? ++_j : --_j) {
        html += this.refers[i].generateRow(i);
      }
    }
    html += "<tr>\n	<td>&nbsp;</td>\n	<td>\n		<input type=\"submit\" value=\"Add Refer\" id=\"AddRefer\" />\n	</td>\n</tr>";
    if (this.thumbs.length) {
      for (i = _k = 0, _ref2 = this.thumbs.length - 1; 0 <= _ref2 ? _k <= _ref2 : _k >= _ref2; i = 0 <= _ref2 ? ++_k : --_k) {
        html += this.thumbs[i].generateRow(i);
      }
      display = true;
      _ref3 = this.thumbs;
      for (_l = 0, _len1 = _ref3.length; _l < _len1; _l++) {
        thumb = _ref3[_l];
        if (thumb.getDisplay()) {
          display = false;
        }
      }
      checked = "";
      if (display) {
        checked = "checked";
      }
      name = "No Thumb";
      html += "<tr>";
      html += "<td><input id=\"Display_Thumb\" name=\"Display_Thumb\" type=\"radio\" " + checked + " value=\"-1\" /></td>";
      html += "<td>";
      html += "<p>" + name + "</p>";
      html += "</td>";
      html += "</tr>";
    }
    html += "<tr>\n	<td>&nbsp;</td>\n	<td>\n		<p><input type=\"radio\" id=\"AddImageType\" name=\"AddImageType\" checked value=\"ThumbStandard\" /> ThumbStandard\n		<input type=\"radio\" id=\"AddImageType\" name=\"AddImageType\" value=\"177\" /> 177</p>\n		<textarea id=\"AddImageUrl\"></textarea>\n		<input type=\"submit\" value=\"Add Image\" id=\"AddImage\" />\n	</td>\n</tr>";
    html += "<tr>\n	<td colspan=\"2\">\n		<input type=\"submit\" value=\"Save\" id=\"EditSave\" class=\"editSave\" />\n		<input type=\"submit\" value=\"Cancel\" id=\"EditCancel\" class=\"editCancel\" />\n	</td>\n</tr>";
    $table.empty().append(html);
    that = this;
    $table.find(".editCancel").on("click", function(event) {
      return that.handleCancel();
    });
    $table.find(".editSave").on("click", function(event) {
      return that.handleSave();
    });
    $table.find("#AddRefer").on("click", function(event) {
      return that.handleAddRefer();
    });
    $table.find("#AddImage").on("click", function(event) {
      return that.handleAddImage();
    });
    $table.find("input:not(#Display_Headline_Only), textarea, select").on("change", function(event) {
      return that.handleChange();
    });
    $table.find("input:not(#Display_Headline_Only), textarea, select").on("keyup", function(event) {
      return that.handleChange();
    });
    $table.find("#Display_Headline_Only").on("change", function(event) {
      return that.handleHeadlineOnly();
      return that.handleAddKicker();
    });
    $table.find("#Display_Headline_Only").on("keyup", function(event) {
      return that.handleHeadlineOnly();
      return that.handleAddKicker();
    });
    $table.find("#AddKicker").on("click", function(event) {
      return that.handleAddKicker();
    });
    return $table.find("#AddLastName").on("click", function(event) {
      return that.handleAddLastName();
    });
  };

  Template.prototype.handleAddRefer = function() {
    var tr;
    tr = new ValueRefer;
    tr.setValue("<a href=\"http://wwww.nytimes.com/\">New Refer</a>");
    this.refers.push(tr);
    this.generateEdit();
    return $.publish("LayoutManager/updateLayout");
  };

  Template.prototype.handleAddImage = function() {
    var name, v;
    name = $('input[name=AddImageType]:checked').val();
    v = new ValueThumb(name);
    v.setValue($("#AddImageUrl").val());
    v.setDisplay(false);
    this.thumbs.push(v);
    this.generateEdit();
    return $.publish("LayoutManager/updateLayout");
  };

  Template.prototype.closeEdit = function() {
    $.publish("Story/updateHeadlineOnly");
    return $("#Edit").fadeOut(function() {
      return $("#LayoutManager").fadeIn();
    });
  };

  Template.prototype.handleCancel = function() {
    this.closeEdit();
    this.restore();
    return $.publish("LayoutManager/updateLayout");
  };

  Template.prototype.handleHeadlineOnly = function() {
    $("#Edit table input:not(#Display_Headline_Only)").attr('checked', false);
    return this.handleChange();
  };

  Template.prototype.setHeadlineOnly = function(bool) {
    var i, thumb, value, _i, _j, _k, _len, _len1, _ref, _ref1, _ref2;
    _ref = this.values;
    for (_i = 0, _len = _ref.length; _i < _len; _i++) {
      value = _ref[_i];
      if (value === "headline") {
        continue;
      }
      this[value].setDisplay(false);
    }
    if (this.refers.length) {
      for (i = _j = 0, _ref1 = this.refers.length - 1; 0 <= _ref1 ? _j <= _ref1 : _j >= _ref1; i = 0 <= _ref1 ? ++_j : --_j) {
        this.refers[i].setDisplay(false);
      }
    }
    _ref2 = this.thumbs;
    for (_k = 0, _len1 = _ref2.length; _k < _len1; _k++) {
      thumb = _ref2[_k];
      thumb.setDisplay(false);
    }
    return $.publish("LayoutManager/updateLayout");
  };

  Template.prototype.isHeadlineOnly = function() {
    var headlineOnly, i, thumb, value, _i, _j, _k, _len, _len1, _ref, _ref1, _ref2;
    headlineOnly = true;
    _ref = this.values;
    for (_i = 0, _len = _ref.length; _i < _len; _i++) {
      value = _ref[_i];
      if (value === "headline") {
        continue;
      }
      if (this[value].getDisplay()) {
        headlineOnly = false;
      }
    }
    if (this.refers.length) {
      for (i = _j = 0, _ref1 = this.refers.length - 1; 0 <= _ref1 ? _j <= _ref1 : _j >= _ref1; i = 0 <= _ref1 ? ++_j : --_j) {
        if (this.refers[i].getDisplay()) {
          headlineOnly = false;
        }
      }
    }
    _ref2 = this.thumbs;
    for (_k = 0, _len1 = _ref2.length; _k < _len1; _k++) {
      thumb = _ref2[_k];
      if (thumb.getDisplay()) {
        headlineOnly = false;
      }
    }
    return headlineOnly;
  };

  Template.prototype.handleChange = function() {
    var i, selector, thumb, v, value, _i, _j, _k, _len, _len1, _ref, _ref1, _ref2;
    _ref = this.values;
    for (_i = 0, _len = _ref.length; _i < _len; _i++) {
      value = _ref[_i];
      this[value].update();
      selector = this[value].getName();
      if ($("#Display_" + selector).is(':checked')) {
        $("#Display_Headline_Only").attr('checked', false);
      }
    }
    if (this.isHeadlineOnly()) {
      $("#Display_Headline_Only").attr('checked', true);
    }
    if (this.refers.length) {
      for (i = _j = 0, _ref1 = this.refers.length - 1; 0 <= _ref1 ? _j <= _ref1 : _j >= _ref1; i = 0 <= _ref1 ? ++_j : --_j) {
        this.refers[i].update(i);
      }
    }
    v = $('input[name=Display_Thumb]:checked').val();
    _ref2 = this.thumbs;
    for (_k = 0, _len1 = _ref2.length; _k < _len1; _k++) {
      thumb = _ref2[_k];
      thumb.setDisplay(false);
    }
    if (v >= 0) {
      this.thumbs[v].setDisplay(true);
    }
    return $.publish("LayoutManager/updateLayout");
  };

  Template.prototype.handleSave = function() {
    this.closeEdit();
    return $.publish("LayoutManager/updateLayout");
  };

  Template.prototype.handleAddKicker = function() {
    var $hed, kicker;
    kicker = $("#Value_Kicker").val();
    $("#Display_Kicker").attr('checked', false);
    $hed = $("#Value_Headline");
    $hed.val(kicker + ": " + $hed.val());
    return this.handleChange();
  };

  Template.prototype.handleAddLastName = function() {
    var $hed, byline, lastName, pieces;
    byline = $("#Value_Byline").val();
    $("#Display_Byline").attr('checked', false);
    $hed = $("#Value_Headline");
    pieces = byline.split(" ");
    lastName = pieces[pieces.length - 1];
    lastName = lastName.toLowerCase();
    lastName = lastName.capitalize();
    $hed.val(lastName + ": " + $hed.val());
    return this.handleChange();
  };

  return Template;

})();

var TemplateScoop,
  __hasProp = {}.hasOwnProperty,
  __extends = function(child, parent) { for (var key in parent) { if (__hasProp.call(parent, key)) child[key] = parent[key]; } function ctor() { this.constructor = child; } ctor.prototype = parent.prototype; child.prototype = new ctor(); child.__super__ = parent.prototype; return child; };

TemplateScoop = (function(_super) {

  __extends(TemplateScoop, _super);

  function TemplateScoop(data) {
    var ArticleImages, i, item, match, matches, rawRefers, relatedAssets, tr, _i, _j, _len, _ref;
    TemplateScoop.__super__.constructor.apply(this, arguments);
    this.setUrl(this.data.cms.article.sub_domain + this.data.cms.article.publish_url);
    this.headline.setValue(this.data.cms.article.headline);
    this.byline.setValue(this.data.cms.article.byline);
    this.summary.setValue(this.data.cms.article.summary);
    this.kicker.setValue(this.data.cms.article.kicker);
    ArticleImages = (function() {
      var _i, _len, _ref, _results;
      _ref = this.data.cms.article.related;
      _results = [];
      for (_i = 0, _len = _ref.length; _i < _len; _i++) {
        item = _ref[_i];
        if (item.name === "ArticleImages" || item.name === "PromotionalMedia") {
          _results.push(item);
        }
      }
      return _results;
    }).call(this);
    ArticleImages = (function() {
      var _i, _len, _ref, _results;
      _ref = ArticleImages[0].collection;
      _results = [];
      for (_i = 0, _len = _ref.length; _i < _len; _i++) {
        item = _ref[_i];
        if (item.name === "ArticleImages" || item.name === "PromotionalMedia") {
          _results.push(item);
        }
      }
      return _results;
    })();
    relatedAssets = ArticleImages[0].relatedAssets;
    if ((relatedAssets != null) && relatedAssets.length) {
      this.crops = relatedAssets[0].crops;
    }
    if ((this.crops != null) && this.crops.length) {
      this.getThumb("type", "thumbStandard", "thumbStandard");
      this.getThumb("width", 177, "177");
    }
    if (this.thumbs.length > 1) {
      for (i = _i = 0, _ref = this.thumbs.length - 1; 0 <= _ref ? _i <= _ref : _i >= _ref; i = 0 <= _ref ? ++_i : --_i) {
        if (i === 0) {
          this.thumbs[i].setDisplay(true);
        } else {
          this.thumbs[i].setDisplay(false);
        }
      }
    }
    rawRefers = this.data.cms.article.refers;
    if (rawRefers.length && (rawRefers[0].content != null)) {
      matches = rawRefers[0].content.match(/<[aA].*?>.*?<\/[aA]>/g);
      for (_j = 0, _len = matches.length; _j < _len; _j++) {
        match = matches[_j];
        tr = new ValueRefer;
        tr.setValue(match);
        this.refers.push(tr);
      }
    }
  }

  TemplateScoop.prototype.getThumb = function(property, expection, name) {
    var item, v;
    item = (function() {
      var _i, _len, _ref, _results;
      _ref = this.crops;
      _results = [];
      for (_i = 0, _len = _ref.length; _i < _len; _i++) {
        item = _ref[_i];
        if (item[property] === expection) {
          _results.push(item);
        }
      }
      return _results;
    }).call(this);
    if (item.length && (item[0].content != null)) {
      v = new ValueThumb(name);
      v.setValue("http://i1.nyt.com/" + item[0].content);
      return this.thumbs.push(v);
    }
  };

  return TemplateScoop;

})(Template);

var TemplateWordpress,
  __hasProp = {}.hasOwnProperty,
  __extends = function(child, parent) { for (var key in parent) { if (__hasProp.call(parent, key)) child[key] = parent[key]; } function ctor() { this.constructor = child; } ctor.prototype = parent.prototype; child.prototype = new ctor(); child.__super__ = parent.prototype; return child; };

TemplateWordpress = (function(_super) {

  __extends(TemplateWordpress, _super);

  TemplateWordpress.prototype.thumbFactory = new ThumbFactory;

  function TemplateWordpress(data) {
    var icon, v;
    TemplateWordpress.__super__.constructor.apply(this, arguments);
    this.setUrl(this.data.blogpost.url);
    this.headline.setValue(this.data.blogpost.post_title);
    this.byline.setValue(this.data.blogpost.byline);
    this.summary.setValue(this.data.blogpost.post_excerpt);
    this.kicker.setValue(this.data.blogpost.kicker);
    icon = this.thumbFactory.get(data.blogpost.url, data.blogpost.post_categories);
    if (icon !== null) {
      v = new ValueThumb("thumbStandard");
      v.setValue(icon);
      this.thumbs.push(v);
    }
  }

  return TemplateWordpress;

})(Template);

var TemplateSkimmer,
  __hasProp = {}.hasOwnProperty,
  __extends = function(child, parent) { for (var key in parent) { if (__hasProp.call(parent, key)) child[key] = parent[key]; } function ctor() { this.constructor = child; } ctor.prototype = parent.prototype; child.prototype = new ctor(); child.__super__ = parent.prototype; return child; };

TemplateSkimmer = (function(_super) {

  __extends(TemplateSkimmer, _super);

  TemplateSkimmer.prototype.thumbFactory = new ThumbFactory;

  function TemplateSkimmer(data) {
    var icon, matches, v;
    TemplateSkimmer.__super__.constructor.apply(this, arguments);
    this.setUrl(this.data.url);
    this.headline.setValue(this.data.title);
    if (this.data.byline) {
      matches = this.data.byline.match(/(<.*?>)(.*)(<\/.*?>)/);
      if ((matches[2] != null) && matches[2]) {
        this.byline.setValue(matches[2]);
      } else {
        this.byline.setValue("");
        this.byline.setDisplay(false);
      }
    } else {
      this.byline.setValue("");
      this.byline.setDisplay(false);
    }
    this.summary.setValue(this.data.summary);
    this.kicker.setValue(this.data.sectionDisplayName);
    icon = this.thumbFactory.get(data.url);
    if (icon !== null) {
      v = new ValueThumb("thumbStandard");
      v.setValue(icon);
      this.thumbs.push(v);
    }
  }

  return TemplateSkimmer;

})(Template);

var Value;

Value = (function() {

  Value.prototype.name = null;

  Value.prototype.value = null;

  Value.prototype.display = null;

  function Value(name) {
    if (name == null) {
      name = null;
    }
    this.display = true;
    if (name) {
      this.setName(name.capitalize());
    }
  }

  Value.prototype.save = function() {
    return {
      name: escape(this.name),
      value: escape(this.value),
      display: this.display
    };
  };

  Value.prototype.test = function() {
    return this.value && this.display;
  };

  Value.prototype.set = function(n, v, d) {
    this.setName(unescape(n));
    this.setValue(unescape(v));
    return this.setDisplay(d);
  };

  Value.prototype.get = function() {
    return [this.getName(), this.getValue(), this.getDisplay()];
  };

  Value.prototype.setName = function(n) {
    return this.name = unescape(n);
  };

  Value.prototype.getName = function() {
    return this.name;
  };

  Value.prototype.setDisplay = function(d) {
    return this.display = d;
  };

  Value.prototype.getDisplay = function() {
    return this.display;
  };

  Value.prototype.setValue = function(v) {
    return this.value = unescape(jsprettify.prettifyStr(v));
  };

  Value.prototype.getValue = function() {
    return this.value;
  };

  Value.prototype.update = function() {
    var $value, selector;
    selector = this.getName();
    $value = $("#Value_" + selector);
    if ($value.length) {
      this.setValue($value.val());
    }
    if ($value.length && selector !== "Headline") {
      return this.setDisplay($("#Display_" + selector).is(':checked'));
    }
  };

  Value.prototype.generateRow = function() {
    var checked, display, html, name, value, _ref;
    _ref = this.get(), name = _ref[0], value = _ref[1], display = _ref[2];
    checked = "";
    if (display) {
      checked = "checked";
    }
    html = "";
    html += "<tr>";
    if (name !== "Headline") {
      html += "<td><input id=\"Display_" + name + "\" type=\"checkbox\" " + checked + " /></td>";
    } else {
      html += "<td>&nbsp;</td>";
    }
    html += "<td>";
    html += "<p>" + name + "</p>";
    html += "<textarea id=\"Value_" + name + "\">" + value + "</textarea>";
    if (name === "Headline") {
      html += "<p><input type=\"submit\" id=\"AddKicker\" value=\"Add Kicker\"> <input type=\"submit\" id=\"AddLastName\" value=\"Add Last Name\"></p>";
    }
    html += "</td>";
    html += "</tr>";
    return html;
  };

  return Value;

})();

var ValueRefer,
  __hasProp = {}.hasOwnProperty,
  __extends = function(child, parent) { for (var key in parent) { if (__hasProp.call(parent, key)) child[key] = parent[key]; } function ctor() { this.constructor = child; } ctor.prototype = parent.prototype; child.prototype = new ctor(); child.__super__ = parent.prototype; return child; };

ValueRefer = (function(_super) {

  __extends(ValueRefer, _super);

  ValueRefer.prototype.href = null;

  ValueRefer.prototype.text = null;

  ValueRefer.prototype.icons = ["audio", "document", "graphic", "interactive", "map", "photo", "slideshow", "trailer", "video"];

  ValueRefer.prototype.icon = "";

  function ValueRefer(name) {
    if (!(name != null)) {
      name = "Refer";
    }
    ValueRefer.__super__.constructor.call(this, name);
    this.icon = "";
  }

  ValueRefer.prototype.save = function() {
    var saved;
    saved = ValueRefer.__super__.save.call(this);
    saved.href = escape(this.href);
    saved.text = escape(this.text);
    saved.icon = this.icon;
    return saved;
  };

  ValueRefer.prototype.set = function(n, t, h, d, i) {
    this.setName(unescape(n));
    this.setText(unescape(t));
    this.setHref(unescape(h));
    this.setDisplay(d);
    return this.setIcon(i);
  };

  ValueRefer.prototype.get = function() {
    return [this.getName(), this.getText(), this.getHref(), this.getDisplay()];
  };

  ValueRefer.prototype.getValue = function() {
    var label;
    if (this.icon === "") {
      return "<article class=\"story\"><h2 class=\"story-heading\"><a href=\"" + this.href + "\">" + this.text + "</a><span class=\"product-label theme-nyt-now\"><span class=\"visually-hidden\">NYT Now</span><i class=\"icon dot-logo-icon\"></i></span></h2></article></li>";

    } else {
      label = this.icon.capitalize();
      if (label === "Slideshow") {
        label = "Slide Show";
      }
      return "<a href=\"" + this.href + "\"><span class=\"icon " + this.icon + "\">" + label + "</span>: " + this.text + "</a>";
    }
  };

  ValueRefer.prototype.setValue = function(v) {
    var matches;
    this.value = v;
    matches = this.value.match(/<a href="(.*?)">(.*)<\/.*?>/);
    if (matches) {
      this.href = matches[1];
      return this.text = matches[2];
    }
  };

  ValueRefer.prototype.setText = function(t) {
    this.text = jsprettify.prettifyStr(t);
    return this.setValue("<a href=\"" + this.href + "\">" + this.text + "</a>");
  };

  ValueRefer.prototype.getText = function() {
    return this.text;
  };

  ValueRefer.prototype.setHref = function(h) {
    this.href = h;
    return this.setValue("<a href=\"" + this.href + "\">" + this.text + "</a>");
  };

  ValueRefer.prototype.getHref = function() {
    return this.href;
  };

  ValueRefer.prototype.setIcon = function(i) {
    return this.icon = i;
  };

  ValueRefer.prototype.getIcon = function() {
    return this.icon;
  };

  ValueRefer.prototype.update = function(iter) {
    var $href, $select, $value, selector;
    selector = this.getName() + "_" + iter;
    $value = $("#Value_" + selector);
    $href = $("#Value_" + selector + "_Href");
    $select = $("#Select_" + selector);
    if ($value.length) {
      this.setText($value.val());
    }
    if ($href.length) {
      this.setHref($href.val());
    }
    if ($value.length) {
      this.setDisplay($("#Display_" + selector).is(':checked'));
    }
    return this.setIcon($select.find("option:selected").val());
  };

  ValueRefer.prototype.generateRow = function(iter) {
    var checked, display, href, html, icon, iconName, name, value, _i, _len, _ref, _ref1;
    _ref = this.get(), name = _ref[0], value = _ref[1], href = _ref[2], display = _ref[3];
    name += "_" + iter;
    checked = "";
    if (display) {
      checked = "checked";
    }
    html = "";
    html += "<tr>";
    html += "<td><input id=\"Display_" + name + "\" type=\"checkbox\" " + checked + " /></td>";
    html += "<td>";
    html += "<p>" + name + "</p>";
    html += "<textarea id=\"Value_" + name + "\">" + value + "</textarea>";
    html += "<p>";
    html += "<p>Icon</p>";
    html += "<select id=\"Select_" + name + "\">";
    html += "<option value=\"\"></option>";
    _ref1 = this.icons;
    for (_i = 0, _len = _ref1.length; _i < _len; _i++) {
      icon = _ref1[_i];
      iconName = icon.capitalize();
      html += "<option value=\"" + icon + "\">" + iconName + "</option>";
    }
    html += "</select>";
    html += "</p>";
    html += "<p>Href</p>";
    html += "<textarea id=\"Value_" + name + "_Href\">" + href + "</textarea>";
    html += "</td>";
    html += "</tr>";
    return html;
  };

  return ValueRefer;

})(Value);

var ValueThumb,
  __hasProp = {}.hasOwnProperty,
  __extends = function(child, parent) { for (var key in parent) { if (__hasProp.call(parent, key)) child[key] = parent[key]; } function ctor() { this.constructor = child; } ctor.prototype = parent.prototype; child.prototype = new ctor(); child.__super__ = parent.prototype; return child; };

ValueThumb = (function(_super) {

  __extends(ValueThumb, _super);

  function ValueThumb() {
    return ValueThumb.__super__.constructor.apply(this, arguments);
  }

  ValueThumb.prototype.setValue = function(v) {
    return this.value = v.trim();
  };

  ValueThumb.prototype.generateRow = function(iter) {
    var checked, display, html, name, size, src, _ref;
    _ref = this.get(), name = _ref[0], src = _ref[1], display = _ref[2];
    if (name === "ThumbStandard") {
      size = 'width="50" height="50"';
    } else if (name === "177") {
      size = 'width="177"';
    }
    checked = "";
    if (display) {
      checked = "checked";
    }
    html = "";
    html += "<tr>";
    html += "<td><input id=\"Display_Thumb\" name=\"Display_Thumb\" type=\"radio\" " + checked + " value=\"" + iter + "\" /></td>";
    html += "<td>";
    html += "<p>" + name + "</p>";
    html += "<img src=\"" + src + "\" " + size + " />";
    html += "</td>";
    html += "</tr>";
    return html;
  };

  return ValueThumb;

})(Value);

var Element,
  __hasProp = {}.hasOwnProperty,
  __extends = function(child, parent) { for (var key in parent) { if (__hasProp.call(parent, key)) child[key] = parent[key]; } function ctor() { this.constructor = child; } ctor.prototype = parent.prototype; child.prototype = new ctor(); child.__super__ = parent.prototype; return child; };

Element = (function(_super) {

  __extends(Element, _super);

  Element.prototype.id = null;

  Element.prototype.$ElementsManager = null;

  Element.prototype.values = [];

  function Element(id) {
    var value, _i, _len, _ref;
    if (isNaN(id)) {
      this.id = id;
    } else {
      this.id = "Element_" + id;
    }
    this.$ElementsManager = $("#ElementsManager");
    _ref = this.values;
    for (_i = 0, _len = _ref.length; _i < _len; _i++) {
      value = _ref[_i];
      this[value] = null;
      this[value + "Backup"] = null;
    }
  }

  Element.prototype.save = function() {
    var save, value, _i, _len, _ref;
    save = {
      id: this.id
    };
    _ref = this.values;
    for (_i = 0, _len = _ref.length; _i < _len; _i++) {
      value = _ref[_i];
      save[value] = this[value];
    }
    save["class"] = this.constructor.name;
    return save;
  };

  Element.prototype.append = function(html) {
    var that;
    this.$ElementsManager.append(html);
    this.$div = $("#" + this.id);
    that = this;
    return this.$div.on("dblclick", function(event) {
      return that.handleDblclick(event);
    });
  };

  Element.prototype.handleDblclick = function(event) {
    this.generateEdit();
    return $("#LayoutManager").fadeOut(function() {
      return $("#Edit").fadeIn();
    });
  };

  Element.prototype.generateEdit = function(html) {
    var $table, that;
    this.backup();
    $table = $("#Edit table");
    html += "<tr>\n	<td>\n		<input type=\"submit\" value=\"Save\" id=\"EditSave\" />\n		<input type=\"submit\" value=\"Cancel\" id=\"EditCancel\" />\n	</td>\n</tr>";
    $table.empty().append(html);
    that = this;
    $table.find("#EditCancel").on("click", function(event) {
      return that.handleCancel();
    });
    $table.find("#EditSave").on("click", function(event) {
      return that.handleSave();
    });
    $table.find("input, textarea").on("change", function(event) {
      return that.handleChange();
    });
    return $table.find("input, textarea").on("keyup", function(event) {
      return that.handleChange();
    });
  };

  Element.prototype.backup = function() {
    var value, _i, _len, _ref, _results;
    _ref = this.values;
    _results = [];
    for (_i = 0, _len = _ref.length; _i < _len; _i++) {
      value = _ref[_i];
      _results.push(this[value + "Backup"] = this[value]);
    }
    return _results;
  };

  Element.prototype.restore = function() {
    var value, _i, _len, _ref, _results;
    _ref = this.values;
    _results = [];
    for (_i = 0, _len = _ref.length; _i < _len; _i++) {
      value = _ref[_i];
      _results.push(this[value] = this[value + "Backup"]);
    }
    return _results;
  };

  Element.prototype.closeEdit = function() {
    return $("#Edit").fadeOut(function() {
      return $("#LayoutManager").fadeIn();
    });
  };

  Element.prototype.handleCancel = function() {
    this.closeEdit();
    this.restore();
    return $.publish("LayoutManager/updateLayout");
  };

  Element.prototype.handleChange = function() {
    var $value, selector, value, _i, _len, _ref;
    _ref = this.values;
    for (_i = 0, _len = _ref.length; _i < _len; _i++) {
      value = _ref[_i];
      selector = value.capitalize();
      $value = $("#Value_" + selector);
      if ($value.length) {
        this[value] = $value.val();
      }
    }
    return $.publish("LayoutManager/updateLayout");
  };

  Element.prototype.handleSave = function() {
    this.closeEdit();
    return $.publish("LayoutManager/updateLayout");
  };

  return Element;

})(PositionsManager);

var ElementCenterable,
  __hasProp = {}.hasOwnProperty,
  __extends = function(child, parent) { for (var key in parent) { if (__hasProp.call(parent, key)) child[key] = parent[key]; } function ctor() { this.constructor = child; } ctor.prototype = parent.prototype; child.prototype = new ctor(); child.__super__ = parent.prototype; return child; };

ElementCenterable = (function(_super) {

  __extends(ElementCenterable, _super);

  ElementCenterable.prototype.values = ["isCentered"];

  function ElementCenterable(id) {
    ElementCenterable.__super__.constructor.call(this, id);
    this.isCentered = true;
  }

  ElementCenterable.prototype.html = function(position) {
    return "";
  };

  ElementCenterable.prototype.generateEdit = function() {
    var checked, html, name, value, _i, _len, _ref;
    html = "";
    _ref = this.values;
    for (_i = 0, _len = _ref.length; _i < _len; _i++) {
      value = _ref[_i];
      name = value.capitalize();
      value = this[value];
      checked = "";
      if (this.isCentered) {
        checked = "checked";
      }
      html = "";
      html += "<tr>";
      html += "<td>";
      html += "<p><input id=\"Display_" + name + "\" name=\"Display_" + name + "\" type=\"checkbox\" " + checked + "/> Center?</p>";
      html += "</td>";
      html += "</tr>";
    }
    return ElementCenterable.__super__.generateEdit.call(this, html);
  };

  ElementCenterable.prototype.handleChange = function() {
    var $value, selector, value, _i, _len, _ref;
    _ref = this.values;
    for (_i = 0, _len = _ref.length; _i < _len; _i++) {
      value = _ref[_i];
      selector = value.capitalize();
      $value = $("#Display_" + selector);
      this[value] = $value.is(':checked');
    }
    return $.publish("LayoutManager/updateLayout");
  };

  return ElementCenterable;

})(Element);

var ElementKicker,
  __hasProp = {}.hasOwnProperty,
  __extends = function(child, parent) { for (var key in parent) { if (__hasProp.call(parent, key)) child[key] = parent[key]; } function ctor() { this.constructor = child; } ctor.prototype = parent.prototype; child.prototype = new ctor(); child.__super__ = parent.prototype; return child; };

ElementKicker = (function(_super) {

  __extends(ElementKicker, _super);

  ElementKicker.prototype.values = ["text"];

  function ElementKicker(id, text) {
    var html;
    ElementKicker.__super__.constructor.call(this, id);
    if (!text) {
      text = "Kicker";
    }
    this.text = text;
    html = "<div id=\"" + this.id + "\" class=\"_element _elementKicker\">Kicker: " + text + "</div>";
    this.append(html);
  }

  ElementKicker.prototype.html = function() {
    return "<h3 class=\"kicker\">" + this.text + "</h3>";
    // return "<h3 class=\"kicker\" style=\"margin-top:12px\">" + this.text + "</h3>";
  };

  ElementKicker.prototype.closeEdit = function() {
    $("#" + this.id).html("Kicker: " + this.text);
    return ElementKicker.__super__.closeEdit.call(this);
  };

  ElementKicker.prototype.generateEdit = function() {
    var html, name, value, _i, _len, _ref;
    html = "";
    _ref = this.values;
    for (_i = 0, _len = _ref.length; _i < _len; _i++) {
      value = _ref[_i];
      name = value.capitalize();
      value = this[value];
    }
    html = "";
    html += "<tr>";
    html += "<td>";
    html += "<p>" + name + "</p>";
    html += "<textarea id=\"Value_" + name + "\">" + value + "</textarea>";
    html += "</td>";
    html += "</tr>";
    return ElementKicker.__super__.generateEdit.call(this, html);
  };

  return ElementKicker;

})(Element);

var ElementSundayReview,
  __hasProp = {}.hasOwnProperty,
  __extends = function(child, parent) { for (var key in parent) { if (__hasProp.call(parent, key)) child[key] = parent[key]; } function ctor() { this.constructor = child; } ctor.prototype = parent.prototype; child.prototype = new ctor(); child.__super__ = parent.prototype; return child; };

ElementSundayReview = (function(_super) {

  __extends(ElementSundayReview, _super);

  function ElementSundayReview(id, data) {
    var html;
    if (data == null) {
      data = null;
    }
    ElementSundayReview.__super__.constructor.call(this, id);
    html = "<div id=\"" + this.id + "\" class=\"_element _elementSundayReview\">Sunday Review</div>";
    this.append(html);
    if (data !== null) {
      this.isCentered = data.isCentered;
    }
  }

  ElementSundayReview.prototype.html = function(position) {
    return '<h2 class="section-heading" style="font-family:nyt-karnak-display,nyt-karnak-display-130124,georgia,times new roman,times,serif;-webkit-font-smoothing: antialiased;"><a href="http://www.nytimes.com/pages/opinion/index.html">Sunday Review</a></h2>';    
  // return '<h2 class="section-heading sunday-review"><a href="http://www.nytimes.com/pages/opinion/index.html">Sunday Review</a></h2>';    
  
  };


  // img for SR: <h4 class="sectionHeaderHome"><a href="http://www.nytimes.com/pages/opinion/index.html?hp#sundayreview" ><img src="http://graphics8.nytimes.com/packages/images/nytdesign/2014/opinion/homepage/sundayReviewHpL177.png" border="0" /></a></h4>

  return ElementSundayReview;

})(ElementCenterable);

var ElementTheOpinionPages,
  __hasProp = {}.hasOwnProperty,
  __extends = function(child, parent) { for (var key in parent) { if (__hasProp.call(parent, key)) child[key] = parent[key]; } function ctor() { this.constructor = child; } ctor.prototype = parent.prototype; child.prototype = new ctor(); child.__super__ = parent.prototype; return child; };

ElementTheOpinionPages = (function(_super) {

  __extends(ElementTheOpinionPages, _super);

  function ElementTheOpinionPages(id) {
    var html;
    ElementTheOpinionPages.__super__.constructor.call(this, id);
    html = "<div id=\"" + this.id + "\" class=\"_element _elementTheOpinonPages\">The Opinion Pages</div>";
    this.append(html);
  }

  ElementTheOpinionPages.prototype.html = function(position) {
      return '<h2 class="section-heading"><a href="http://www.nytimes.com/pages/opinion/index.html">The Opinion Pages</a></h2>';
    
  };


  return ElementTheOpinionPages;

})(ElementCenterable);


var ElementTheOpinionPagesIntl,
  __hasProp = {}.hasOwnProperty,
  __extends = function(child, parent) { for (var key in parent) { if (__hasProp.call(parent, key)) child[key] = parent[key]; } function ctor() { this.constructor = child; } ctor.prototype = parent.prototype; child.prototype = new ctor(); child.__super__ = parent.prototype; return child; };

ElementTheOpinionPagesIntl = (function(_super) {

  __extends(ElementTheOpinionPagesIntl, _super);

  function ElementTheOpinionPagesIntl(id) {
    var html;
    ElementTheOpinionPagesIntl.__super__.constructor.call(this, id);
    html = "<div id=\"" + this.id + "\" class=\"_element _elementTheOpinonPagesIntl\">The Opinion Pages (Intl)</div>";
    this.append(html);
  }


   ElementTheOpinionPagesIntl.prototype.html = function(position) {
      return '<h2 class="section-heading"><a href="http://www.nytimes.com/pages/opinion/international/index.html">The Opinion Pages</a></h2>';
    
  };

    return ElementTheOpinionPagesIntl;

})(ElementCenterable);
