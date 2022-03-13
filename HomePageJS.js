window.onload= function changeText(){
    var text = ["Zoological Museum", "Mineralogical Museum", "Archaeological Museum", "Botanical Museum"];
    var counter = 0;
    var elem = document.getElementById("changeText");
    var inst = setInterval(change, 3000);

    function change() {
        elem.innerHTML = text[counter];
        counter++;
        if (counter >= text.length) {
            counter = 0;
        }
    }
}

function getToday(){
    var today = new Date();
    var dd = today.getDate() + 1;
    var mm = today.getMonth() + 1;
    var yyyy = today.getFullYear();

    if (dd < 10) {
    dd = '0' + dd;
    }

    if (mm < 10) {
    mm = '0' + mm;
    }
        
    today = yyyy + '-' + mm + '-' + dd;
    christmas = '2022' + '-' + '12' + '-' + '25';
    document.getElementById("date").setAttribute("min", today);
    
}

function exists(input) {
    var atLeastOneChar = false;
    if (input) {
      for (var i=0; i<input.length; i++) {
        if (input.charAt(i) != " " || input.charAt(i) != "-") {
          atLeastOneChar = true;
  break; }
  } }
    return atLeastOneChar;
}

function isEmail(input) {
    var isAnEmail = false;
    if (input) {
      for (var i=0; i<input.length; i++) {
        if (input.charAt(i) == "@") {
          isAnEmail = true;
  break; }
  } }
    return isAnEmail;
}


function checkForm() {
    var mes = "";
    if (! exists(document.reservationForm.firstName.value)){
      mes = mes + "Missing First Name!\n";
      return false;
    }
    if (! exists(document.reservationForm.familyName.value))
      mes = mes + "Missing Family Name!\n";
    if ((! exists(document.reservationForm.email.value)) || (!isEmail(document.reservationForm.email.value)))
      mes = mes + "Incorrect Email!\n";
    if (document.reservationForm.number.value=="-")
      mes = mes + "Missing Number of people!\n";
    if (! exists(document.reservationForm.date.value))
      mes = mes + "Missing Date!\n";
      if (document.reservationForm.timeslot.value=="-")
      mes = mes + "Missing Timeslot!\n";
    if (mes != ""){
      alert(mes);
    }
    if (mes == "")
      alert("Ok, correct!\nThe form should now be sent to " +
            "the server through " +
  "document.reservationForm.submit()");

}



