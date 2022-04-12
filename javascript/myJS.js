function changeText(){
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
        if (input.charAt(i) != " ") {
          atLeastOneChar = true;
  break; }
  } }
    return atLeastOneChar;
}

function isEmail(input) {
    var isAnEmail = false;
    if (input) {
      for (var i=0; i<input.length; i++) {
        if (input.charAt(i) == "@" && input.charAt(i+1)!="") {
          isAnEmail = true;
  break; }
  } }
    return isAnEmail;
}


function checkForm() {
    var mes = "";
    if (! exists(document.reservationForm.firstName.value)){
      mes = mes + "Missing First Name!\n";
    }
    if (! exists(document.reservationForm.familyName.value))
      mes = mes + "Missing Family Name!\n";
    if ((! exists(document.reservationForm.email.value)) || (!isEmail(document.reservationForm.email.value)))
      mes = mes + "Incorrect Email!\n";
    if (! exists(document.reservationForm.date.value))
      mes = mes + "Missing Date!\n";
    if (mes != ""){
      alert(mes);
    }
    if (mes == "")
      alert("Ok, correct!\n Your reservation request should have been sent!");

}

function checkContactForm() {
  var mes = "";
  if (! exists(document.contact.firstName.value)){
    mes = mes + "Missing First Name!\n";
  }
  if (! exists(document.contact.familyName.value))
    mes = mes + "Missing Family Name!\n";
  if ((! exists(document.contact.email.value)) || (!isEmail(document.contact.email.value)))
    mes = mes + "Incorrect Email!\n";
  if (! exists(document.contact.subject.value))
    mes = mes + "Missing Subject!\n";
  if (! exists(document.contact.textarea.value))
    mes = mes + "Missing Message!\n";
  if (mes != ""){
    alert(mes);
  }
  if (mes == "")
    alert("Ok, correct!\n Your request should have been sent!");

}

function closeDisclaimer () {
  document.getElementById('disclaimer').remove();
}


