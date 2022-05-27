/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!***********************************!*\
  !*** ./resources/js/AddtoCart.js ***!
  \***********************************/
//alert("test");
$(document).ready(function () {
  $("#add-to-cart").on('click', function (e) {
    var cart_token = $("#cart_token").val();
    var food_id = $("#cart_food_id").val();
    $.post('/add-to-cart', {
      food_id: food_id,
      _token: cart_token
    }, function () {}).done(function (response) {
      // let message = JSON.parse(response)
      console.log(response);
    });
  });
});
/******/ })()
;