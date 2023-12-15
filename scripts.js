var navigationLinks = document.getElementById("navigationLinks");

function showMenu() {
    navigationLinks.style.right = "0";
}

function hideMenu() {
    navigationLinks.style.right = "-200px";
}

function contactFunction() {
    $.ajax({
        url:"https://api.apispreadsheets.com/data/ZdB3MVK6BzDxqJiB/",
        type:"post",
        data:$("#contactForm").serializeArray(),
        success: function(){
          alert("Form Data Submitted :)")
        },
        error: function(){
          alert("There was an error :(")
        }
    });
}

function applyFunction() {
    $.ajax({
        url:"https://api.apispreadsheets.com/data/gk2q49jUB7NtLWsm/",
        type:"post",
        data:$("#applyForm").serializeArray(),
        success: function(){
          alert("Form Data Submitted :)")
        },
        error: function(){
          alert("There was an error :(")
        }
    });
}