/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!*****************************************!*\
  !*** ./resources/assets/js/sitewide.js ***!
  \*****************************************/
$(document).ready(function () {
  $('header .navbar .sidebar-toggler').click(function () {
    $('.sidebar').toggleClass('open', 1000);
    $('.contentMain').toggleClass('full', 1200);
  });
  $('.sidebar .sidebarCollapseBtn').click(function () {
    $('.sidebar').toggleClass('open', 1000);
    $('.contentMain').toggleClass('full', 1200);
  });
  $('.confirm-delete-btn').click(function (event) {
    var form = $(this).closest("form");
    var name = $(this).data("name");
    event.preventDefault();
    swal({
      title: "Are you sure you want to delete this record?",
      text: "If you delete this, it will be gone forever.",
      icon: "warning",
      type: "warning",
      buttons: ["Cancel", "Yes!"],
      dangerMode: true,
      closeOnEsc: true,
      confirmButtonText: 'Yes, delete it!'
    }).then(function (willDelete) {
      if (willDelete) {
        form.submit();
      }
    });
  });
  $('.confirm-log-clear-btn').click(function (event) {
    var form = $(this).closest("form");
    var name = $(this).data("name");
    event.preventDefault();
    swal({
      title: "Are you sure you want to clear the log?",
      text: "If you clear the log, it's gone forever!",
      icon: "warning",
      type: "warning",
      buttons: ["Cancel", "Yes!"],
      dangerMode: true,
      closeOnEsc: true,
      confirmButtonText: 'Yes, clear it!'
    }).then(function (willDelete) {
      if (willDelete) {
        form.submit();
      }
    });
  });

  //Initiate main datatables settings
  $('.dataTablesTable').DataTable();
});
/******/ })()
;