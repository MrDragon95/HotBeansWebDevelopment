/*eslint-disable no-unused-vars*/
/*jslint browser: true*/
/*global $, jQuery*/
/*global document, alert*/

var menu = document.getElementById("navigation");

function showMenu() {
    "use strict";
    menu.style.right = "0";
}

function hideMenu() {
    "use strict";
    menu.style.right = "-200px";
}

function contactFunction() {
    "use strict";
    $.ajax({
        url: "https://api.apispreadsheets.com/data/ZdB3MVK6BzDxqJib/",
        type: "post",
        data: $("#contactForm").serializeArray(),
        success: function () {
            alert("Messege Sent");
        },
        error: function () {
            alert("An Error Has Occured. Please Try Again Later");
        }
    });
}

function applyFunction() {
    "use strict";
    $.ajax({
        url: "https://api.apispreadsheets.com/data/gk2q49jUB7NtLWsm/",
        type: "post",
        data: $("#applyForm").serializeArray(),
        success: function () {
            alert("Application Sent");
        },
        error: function () {
            alert("An Error Has Occured. Please Try Again Later");
        }
    });
}