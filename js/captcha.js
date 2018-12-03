var resultat;

function getRandom() {
  return Math.ceil(Math.random()* 10);
}

function getRandom2() {
  return Math.ceil(Math.random()* 2);
}

function generarCaptcha(){
  var random1 = getRandom();
  var random2 = getRandom();
  var operacio = getRandom2();

  while (random1 === random2) {
    random1 = getRandom();
    random2 = getRandom();
  }

  if (operacio === 0) {
    resultat = eval("random1 + random2");
    var captcha = random1 + " + " + random2 + " = ?";
    document.getElementById("mainCaptcha").value = captcha;
  }
  else if (operacio === 1) {
    resultat = eval("random1 - random2");
    var captcha = random1 + " - " + random2 + " = ?";
    document.getElementById("mainCaptcha").value = captcha;
  }
  else {
    resultat = eval("random1 * random2");
    var captcha = random1 + " * " + random2 + " = ?";
    document.getElementById("mainCaptcha").value = captcha;
  }
  document.getElementById('txtInput').value = "";
}

function comprovarCaptcha() {
  var input = parseInt(document.getElementById('txtInput').value);
  if (isNaN(input)) {
    document.getElementById('error').innerHTML = "Introdueix un número!";
    return false;
  } else if (resultat == input) {
    document.getElementById('success').innerHTML = "Correcte";
    //alert("Form is validated Successfully");
    return true;
  } else {
    document.getElementById('error').innerHTML = "Error";
    //alert("Please enter a valid captcha.");
    return false;
  }
}

function previCaptcha() {
  if (comprovarCaptcha() == true) {
    location.assign("https://www.w3schools.com");
  }
  else {
    generarCaptcha();
  }
}
