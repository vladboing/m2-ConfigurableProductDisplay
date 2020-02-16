define([
    'jquery'
], function ($) {
    'use strict';
    return function () {
        window.setTimeout(function(){
            $(".super-attribute-select option:contains(Out of Stock)").attr('disabled',true);
        }, 600);
    };
});