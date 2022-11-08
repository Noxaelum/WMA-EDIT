// NAVBAR COMMANDS
var prevScrollpos = window.pageYOffset;
window.onscroll = function() {
var currentScrollPos = window.pageYOffset;
if (prevScrollpos > currentScrollPos) {
    document.getElementById("navbar").style.top = "0";
} else {
    document.getElementById("navbar").style.top = "-70px";
}
prevScrollpos = currentScrollPos;
}

// const scriptURL = 'https://script.google.com/macros/s/AKfycbx_toWenhwdhQSZ_GnHmIODsFRnS27QgjH9PT2Kqjj0J5gnxWTtAWvtxCxvMgGCszJm3Q/exec'
//   const form = document.forms['myform']

//   form.addEventListener('submit', e => {
//     e.preventDefault()
//     fetch(scriptURL, { method: 'POST', body: new FormData(form)})
//       .then(response => console.log('Success!', response))
//       .catch(error => console.error('Error!', error.message))
//   })

// var form = document.getElementById('sheetdb-form');
//         form.addEventListener("submit", e => {
//           e.preventDefault();
//           fetch(form.action, {
//               method : "POST",
//               body: new FormData(document.getElementById("sheetdb-form")),
//           }).then(
//               response => response.json()
//           ).then((html) => {
//             // you can put any JS code here
//             window.open('page2.html', '_blank');

//           });
//         });

function termsAgree() {
    if (document.getElementById("agree").checked === true && document.getElementById("yes").checked === true){
        console.log(1);
        document.getElementById("submit").disabled = false;
    } else {
        document.getElementById("submit").disabled = true;
    }
}

function recall() {
    document.getElementById("logo").click();
}

function showfield(name){
    if(name=='Other')document.getElementById('div1').style.display="block";
    else document.getElementById('div1').style.display="none";
}

function change() {
    document.getElementById("other").value = document.getElementById("other_option").value;
}
 
function hidefield() {
    document.getElementById('div1').style.display='none';
}

function validate() {
    
    var a = document.forms["myForm"]["givenname"].value;
    var b = document.forms["myForm"]["familyname"].value;
    var c = document.forms["myForm"]["address"].value;
    var d = document.forms["myForm"]["country"].value;
    var e = document.forms["myForm"]["state"].value;

    var f = document.forms["myForm"]["phone1"].value;
    var g = document.forms["myForm"]["email"].value;

    var h = document.forms["myForm"]["profession"];

    var i = document.forms["myForm"]["resume"];
    var j = document.forms["myForm"]["credential"];
    var k = document.forms["myForm"]["reference"];
    var l = document.forms["myForm"]["passport"];



    if (a == "" || a == null) {
        alert("Please fill up First Name")
        return false; 
    } 
    else  if (b == "" || b == null) {
        alert("Please fill up Last Name")
        return false; 
    }
    else  if (c == "" || c == null) {
        alert("Please fill up Address")
        return false; 
    }
    else  if (d == "" || d == null) {
        alert("Please fill up Country")
        return false; 
    }
    else  if (e == "" || e == null) {
        alert("Please fill up State")
        return false; 
    }
    else  if (f == "" || f == null) {
        alert("Please fill up Phone Number")
        return false; 
    }
    else  if (g == "" || g == null) {
        alert("Please fill up Email")
        return false; 
    }
    else  if (h.selectedIndex=="" || h.selectedIndex=="" == null) {
        alert("Please select profession!")
        return false; 
    }
    else if (i.files.length == 0) {
        alert("Please upload Resume")
        return false; 
    }
    else if (j.files.length == 0) {
        alert("Please upload Credentials")
        return false; 
    }
    else if (k.files.length == 0) {
        alert("Please upload References")
        return false; 
    }
    else if (l.files.length == 0) {
        alert("Please upload Passport")
        return false; 
    }
    else {
        return true;
    }

}


function fileChecker() {
    var i = document.forms["myForm"]["resume"];
    var j = document.forms["myForm"]["credential"];
    var k = document.forms["myForm"]["reference"];
    var l = document.forms["myForm"]["passport"];
    if (i.files.length == 1) {
        document.getElementById("resume_label").style.backgroundColor = "green";
    }else{
        document.getElementById("resume_label").style.backgroundColor = "red";
    }
    
    if (j.files.length == 1) {
        document.getElementById("credential_label").style.backgroundColor = "green";
    }else{
        document.getElementById("credential_label").style.backgroundColor = "red";
    }

    if (k.files.length == 1) {
        document.getElementById("reference_label").style.backgroundColor = "green";
    }else{
        document.getElementById("reference_label").style.backgroundColor = "red";
    }

    if (l.files.length == 1) {
        document.getElementById("passport_label").style.backgroundColor = "green";
    }else{
        document.getElementById("passport_label").style.backgroundColor = "red";
    }
}