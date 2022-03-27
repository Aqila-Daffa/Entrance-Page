function confirmation_function() {
  var username = document.getElementById("usName").value;
  var email = document.getElementById("eml").value;
  var pass = document.getElementById("pass").value;
  var passRule = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,20}$/;
  var conPass = document.getElementById("conPass").value.indexOf(pass);
  var submit = "T";

  if (username.length == 0 || email.length == 0 || pass.length == 0 || conPass.length == 0) {
    alert("Please fill the data completely!😊");
    submit = "F";
  } else if (conPass == -1) {
    alert("Recheck your confirmation password, make sure both are the same!");
    submit = "F";
  } else if (!pass.match(passRule)) {
    alert("Your Password must contain at least 1 Number and 1 Uppercase and Lowercase letter, and at least has 6 until 20 Characters!");
    submit = "F";
  }
  if (submit == "T") {
    alert("Congratulation, you have successfully registered! 👏");
  }
}

function valid_function() {
  var email = document.getElementById("eml").value;
  var pass = document.getElementById("Pass").value;
  var submit = "T";

  if (email.length == 0 || pass.length == 0) {
    alert("Please fill both of your Email and Password!😊");
    submit = "F";
  }
}
