/* Makes JS load ony after the page has loaded 
 * use only for scripts that are not required to make the page load
 * Source: https://varvy.com/pagespeed/defer-loading-javascript.html
 */  

function downloadJSAtOnload() {
  var element = document.createElement("script");
  element.src = "defer.js";
  document.body.appendChild(element);
}
  if (window.addEventListener)
  window.addEventListener("load", downloadJSAtOnload, false);
  else if (window.attachEvent)
  window.attachEvent("onload", downloadJSAtOnload);
  else window.onload = downloadJSAtOnload;
