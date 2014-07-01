/**
 * jQuery serialize object
 * https://gist.github.com/xomyaq/4359945
 */

var $ = require('jquery');

$.fn.serializeObject = function () {
    var obj = {},
        arr = this.serializeArray();

    $.each(arr, function () {
        if (typeof obj[this.name] !== "undefined") {
            if (!obj[this.name].push) {
                obj[this.name] = [obj[this.name]];
            }
            obj[this.name].push(this.value || "");
        } else {
            obj[this.name] = this.value || "";
        }
    });

    return obj;
};
