/*global $, document */

$(document).ready(function () {
    'use strict';
    
    $(".modal-popup").click(function (e) {
        e.preventDefault();
        
        $("#" + $(this).data("modal")).fadeIn(100);
    });
    
    $(".modal .close").click(function () {
        $(this).parents(".modal").fadeOut(100);
    });
});