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
// ====================================

// CHANGE TAB FUNCTIONS
// MAIN COUNTER
var counter = 0;
// VARIABLE SECTION
  // PROGRESS BAR NUMBERS
  const progressNum1 = document.getElementById("prog1");
  const progressNum2 = document.getElementById("prog2");
  const progressNum3 = document.getElementById("prog3");
  const progressNum4 = document.getElementById("prog4");
  const progressNum5 = document.getElementById("prog5");

  // FORM TABLETS
  const tab1 = document.getElementById("personal");
  const tab2 = document.getElementById("contact");
  const tab3 = document.getElementById("education");
  const tab4 = document.getElementById("upload");
  const tab5 = document.getElementById("agreement");

// DEFAULT FUNCTION
showTabs();
tryThis();


// ONCLICK FUNCTION: PREVIOUS BUTTON


function nextbtn() {
    counter++;
    buttonLimiter();
    showTabs();
}

// ONCLICK FUNCTION: PREVIOUS BUTTON
function prevbtn() {
    counter--;
    buttonLimiter();
    showTabs();
}

function buttonLimiter() {
    // Limit the "NEXT" button 
    if (counter == 5) {
      document.getElementById("next").disabled = true;
    } else {
      document.getElementById("next").disabled = false;
    }

    // limit the prev button
    if (counter == 0) {
      document.getElementById("prev").disabled = true;
    } else {
      document.getElementById("prev").disabled = false;
    }
    console.log(counter)
}

function showTabs() {
  // COUNTER ZERO: DEFAULT FIRST 
  if (counter == 0) {
    progressNum1.style.border = "2px solid blue";
    progressNum2.style.border = "2px solid black";
    progressNum3.style.border = "2px solid black";
    progressNum4.style.border = "2px solid black";
    progressNum5.style.border = "2px solid black";

    tab1.style.display = "grid";
    tab2.style.display = "none";
    tab3.style.display = "none";
    tab4.style.display = "none";
    tab5.style.display = "none";

    document.getElementById("prev").style.display = "none";
  }

  if (counter == 1) {
    progressNum1.style.border = "2px solid blue";
    progressNum2.style.border = "2px solid blue";
    progressNum3.style.border = "2px solid black";
    progressNum4.style.border = "2px solid black";
    progressNum5.style.border = "2px solid black";

    tab1.style.display = "none";
    tab2.style.display = "grid";
    tab3.style.display = "none";
    tab4.style.display = "none";
    tab5.style.display = "none";

    document.getElementById("prev").style.display = "block";
  }

  if (counter == 2) {
    progressNum1.style.border = "2px solid blue";
    progressNum2.style.border = "2px solid blue";
    progressNum3.style.border = "2px solid blue";
    progressNum4.style.border = "2px solid black";
    progressNum5.style.border = "2px solid black";

    tab1.style.display = "none";
    tab2.style.display = "none";
    tab3.style.display = "grid";
    tab4.style.display = "none";
    tab5.style.display = "none";
  }

  if (counter == 3) {
    progressNum1.style.border = "2px solid blue";
    progressNum2.style.border = "2px solid blue";
    progressNum3.style.border = "2px solid blue";
    progressNum4.style.border = "2px solid blue";
    progressNum5.style.border = "2px solid black";

    tab1.style.display = "none";
    tab2.style.display = "none";
    tab3.style.display = "none";
    tab4.style.display = "grid";
    tab5.style.display = "none";

    document.getElementById("next").innerHTML = "NEXT";
    document.getElementById("next").type = "button"

  }

  if (counter == 4) {
    progressNum1.style.border = "2px solid blue";
    progressNum2.style.border = "2px solid blue";
    progressNum3.style.border = "2px solid blue";
    progressNum4.style.border = "2px solid blue";
    progressNum5.style.border = "2px solid blue";

    tab1.style.display = "none";
    tab2.style.display = "none";
    tab3.style.display = "none";
    tab4.style.display = "none";
    tab5.style.display = "grid";

    document.getElementById("next").innerHTML = "SUBMIT";
    document.getElementById("next").type = "button"
  }

  if (counter == 5) {
    document.getElementById("next").type = "submit"
  }
}

function validator() {
  var inputArray = [];
    inputArray[0] = document.forms["form"]["givenname"];
    inputArray[1] = document.forms["form"]["familyname"];
    inputArray[2] = document.forms["form"]["address"];
    inputArray[3] = document.forms["form"]["country"];
    inputArray[4] = document.forms["form"]["state"];

    if (inputArray[0].value == "") {
      inputArray[0].style.border = "1px solid red";
      inputArray[1].style.border = "1px solid red";
    } else {
      inputArray[0].style.border = "none";
    }

    if (inputArray[1].value == "") {
      inputArray[1].style.border = "1px solid red";
      inputArray[2].style.border = "1px solid red";
    } else {
      inputArray[1].style.border = "none";
    }

    if (inputArray[2].value == "") {
      inputArray[2].style.border = "1px solid red";
      inputArray[3].style.border = "1px solid red";
    } else {
      inputArray[2].style.border = "none";
    }

    if (inputArray[3].value == "") {
      inputArray[3].style.border = "1px solid red";
      inputArray[4].style.border = "1px solid red";
    } else {
      inputArray[3].style.border = "none";
    }

    if (inputArray[4].value == "") {
      inputArray[4].style.border = "1px solid red";
    } else {
      inputArray[4].style.border = "none";
    }

    if (inputArray[0].value != "" &&
        inputArray[1].value != "" &&
        inputArray[2].value != "" &&
        inputArray[3].value != "" &&
        inputArray[4].value != "") {
      document.getElementById("next").disabled = false;
    } else {
      document.getElementById("next").disabled = true;
    }

}

