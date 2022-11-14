

function Validate() {
  // Get the value of the input field with id="numb"
  let cat1 = document.getElementById("shiftycat").value;
  let cat2 = document.getElementById("lazycat").value;
  let cat3 = document.getElementById("3cat").value;
  let username = document.getElementById("username").value;
  let password = document.getElementById("pass").value;
  // If x is Not a Number or less than one or greater than 10
  if (cat1 == '' || cat2 == '' || cat3 == '') {
    alert("Must Enter Quantity for each cat");
    return false;
  } else if (username == '' || password == '') {
    alert("Must enter username and password");
    return false;
  }
  else if (username.includes("@") == false) {
    alert("Username must be in the format User@example.com");
    return false;
  }
  return true;
}
