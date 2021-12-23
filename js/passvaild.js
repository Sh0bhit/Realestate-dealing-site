function myFunction() {
    let x = document.getElementById("pass").value;
    let y = document.getElementById("pass2").value;

    let text;
    if (x != y) {
      text = "Input not valid";
    } else {
      text = "Input OK";
    }
    document.getElementById("demo").innerHTML = text;
  }