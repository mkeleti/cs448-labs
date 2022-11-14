

function Validate() {
  // Get the value of the input field with id="numb"
  let cat1 = document.getElementById("shiftycat").checked;
  let cat2 = document.getElementById("lazycat").checked;
  let cat3 = document.getElementById("3cat").checked;
  let username = document.getElementById("username").value;
  let password = document.getElementById("pass").value;
  // If x is Not a Number or less than one or greater than 10
  if (cat1 == false && cat2 == false && cat3 == false) {
    alert("Must select a cat");
    return false;
  } else if (username == '' || password == '') {
    alert("Must enter username and password");
    return false;
  }
  return true;
}
