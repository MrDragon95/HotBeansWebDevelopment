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

function ValidateForm(frm) {
    "use strict";
    if (frm.First_Name.value === "") {
        alert('First name is required.');
        frm.First_Name.focus();
        return false;
    }
    if (frm.Last_Name.value === "") {
        alert('Last name is required.');
        frm.Last_Name.focus();
        return false;
    }
    if (frm.Email_Address.value === "") {
        alert('Email address is required.');
        frm.Email_Address.focus();
        return false;
    }
    if (frm.Email_Address.value.indexOf("@") < 1 || frm.Email_Address.value.indexOf(".") < 1) {
        alert('Please enter a valid email address.');
        frm.Email_Address.focus();
        return false;
    }
    if (frm.Position.value === "") {
        alert('Position is required.');
        frm.Position.focus();
        return false;
    }
    if (frm.Phone.value === "") {
        alert('Phone is required.');
        frm.Phone.focus();
        return false;
    }
    return true;
}