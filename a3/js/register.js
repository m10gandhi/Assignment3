function storeDetails(){

  var email = document.getElementById('email').value;
  var ppassword = document.getElementById('ppassword').value;

  if(document.getElementById('rememberMe').checked){

    // https://www.w3schools.com/Html/tryit.asp?filename=tryhtml5_webstorage_session
    if(typeof(Storage) !== "undefined") {
      localStorage.setItem("email", email);
      localStorage.setItem("ppassword", ppassword);

    } else {
        showSnackbar("Sorry, your browser does not support web storage...");
    }
  }

  return true;
}


// https://www.w3schools.com/
function validateForm(){

    var firstName = document.getElementById('fname').value;
    var lastName = document.getElementById('lname').value;
    var email = document.getElementById('email').value;
    var phoneNumber = document.getElementById('phone').value;
    var confirmPassword = document.getElementById('cpassword').value;

    var validateName = /^[a-zA-Z]*$/;

    var flag = true

    if( !validateName.test(firstName)){
      showSnackbar("First Name can't contain a number");
      document.getElementById("mfname").className = "form-group has-error has-feedback";
      flag = false;
    }
    else {
      document.getElementById("mfname").className = "form-group has-success has-feedback";

    }

    if( !validateName.test(lastName)){
      showSnackbar("Last Name can't contain a number");
      document.getElementById("mlname").className = "form-group has-error has-feedback";
      flag = false;
    }
    else {
      document.getElementById("mlname").className = "form-group has-success has-feedback";

    }

    if(phoneNumber.length != 10){
      showSnackbar("Invalid Phone Number Format");
      document.getElementById("mphone").className = "form-group has-error has-feedback";
      flag = false;
    }
    else {
      document.getElementById("mphone").className = "form-group has-success has-feedback";

    }

   

    if(flag == false){
      return false;
    }
    else{

      return true;
    }


  }

function showSnackbar(message){
  var snackbar = document.getElementById("snackbar");
  document.getElementById("snackeyText").innerHTML = String(message);
  snackbar.className = "show";
  setTimeout(function(){ snackbar.className = snackbar.className.replace("show", ""); }, 3000);
}
