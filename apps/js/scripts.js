/*
* $Id: scripts.js 413 2011-09-27 20:27:26Z jon $
* @author Jon Chretien
* @path /apps/js/scripts.js
* @overview common scripts for designdev apps
* @copyright (c)2006 - 2011 The New York Times Company
*/

var Design = Design || {};

Design.Utils = (function() {

  function getElementsByClassName(name,elem) {
    var scope;
    if (elem) {
      scope = elem;
    } else {
      scope = document;
    }
    var results = [];
    var elems = scope.getElementsByTagName("*"), max = elems.length;
    for (var i=0; i < max; i++) {
      if (elems[i].className.indexOf(name) !== -1) {
        results[results.length] = elems[i];
      }
    }
    return results;
  }

  return {
    getElementsByClassName:getElementsByClassName
  };

}());

Design.Toggler = (function() {

  var toggleButton,
      toggleContent,
      toggleContainers = Design.Utils.getElementsByClassName('toggleContainer'),
      max = toggleContainers.length;

  function toggleClassNames() {
    this.blur();
    if(/hide/.test(this.toggleContent.className)) {
      this.className = this.className.replace('collapsed', 'expanded');
      this.toggleContent.className = this.toggleContent.className.replace('hide', 'show');
    } else if(/show/.test(this.toggleContent.className)) {
      this.className = this.className.replace('expanded', 'collapsed');
      this.toggleContent.className = this.toggleContent.className.replace('show', 'hide');
    }
    return false;
  }

  function addClickEvents() {
    for (var i=0; i < max; i++) {
      toggleButton = Design.Utils.getElementsByClassName('toggleButton', toggleContainers[i])[0]; 
      toggleContent = Design.Utils.getElementsByClassName('toggleContent', toggleContainers[i])[0];
      toggleButton.toggleContent = toggleContent;
      toggleButton.onclick = toggleClassNames;
    }
  }

  return {
    init:addClickEvents
  };

}());