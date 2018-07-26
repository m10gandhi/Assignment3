function storeDetails(){

  var email = document.getElementById('email').value;
  var password = document.getElementById('password').value;

  if(document.getElementById('rememberMe').checked){

    // https://www.w3schools.com/Html/tryit.asp?filename=tryhtml5_webstorage_session
    if(typeof(Storage) !== "undefined") {
      localStorage.setItem("email", email);
      localStorage.setItem("password", password);

    } else {
        showSnackbar("Sorry, your browser does not support web storage...");
    }
  }

  return true;
}




// https://www.w3schools.com/

function showSnackbar(message){
  var snackbar = document.getElementById("snackbar");
  document.getElementById("snackeyText").innerHTML = String(message);
  snackbar.className = "show";
  setTimeout(function(){ snackbar.className = snackbar.className.replace("show", ""); }, 3000);
}
