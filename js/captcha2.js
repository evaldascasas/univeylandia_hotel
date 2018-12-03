var resultat;

function getRandom() {
  return Math.ceil(Math.random()* 4);
}

function generarCaptcha(){
  var imatge = getRandom();
  document.getElementById('txtInput').value="";
  if (imatge === 1) {
    document.getElementById("imatgeCaptcha").src = "imgCap/img1.jpg";
    resultat = "gos";
  }
  else if (imatge === 2) {
    document.getElementById("imatgeCaptcha").src = "imgCap/img2.jpg";
    resultat = "camio";
  }
  else if (imatge === 3) {
    document.getElementById("imatgeCaptcha").src = "imgCap/img3.jpeg";
    resultat = "pilota";
  }
  else if (imatge === 4) {
    document.getElementById("imatgeCaptcha").src = "imgCap/img4.jpg";
    resultat = "bosc";
  }
}

function comprovarCaptcha() {
  var input = document.getElementById('txtInput').value;
  if (resultat === input) {
    //document.getElementById('success').innerHTML = "Correcte";
    alert("Correcte!");
    return true;
  } else {
    //document.getElementById('error').innerHTML = "Error";
    alert("Introdueix un captcha vàlid!");
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
