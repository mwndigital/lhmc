/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!**************************************!*\
  !*** ./resources/assets/js/admin.js ***!
  \**************************************/
$(document).ready(function () {
  //Code for only above Mobile
  if ($(window).width() > 993) {
    //Code to make the main nav dropdowns work
    $('.navbar .navbar-nav li.dropdown').hover(function () {
      $(this).find('a.dropdown-toggle').addClass('show');
      $(this).find('ul.dropdown-menu').addClass('show');
      console.log('menu item hovered');
    }, function () {
      $(this).find('a.dropdown-toggle').removeClass('show');
      $(this).find('ul.dropdown-menu').removeClass('show');
    });
  }
});
/******/ })()
;