function myFunction2() {
  var nom = prompt("Introdueix el teu nom:");

  var x = Math.floor(Math.random() * 5 + 1);
  var atr = ["dragon", "cotxes", "barquetes", "laberint", "tasses"];
  var res = atr[x].charAt(0);
  var atraccio = prompt("Quina atraccio tenim que comença per la lletra " + res);
  var conjunt = nom.concat(" la teva atraccio preferida es, " + atraccio);

  if (atraccio == atr[x]) {
    alert("Enhorabona et dius " + conjunt);
  } else alert("oohh no has acertat....");
}

function myFunction3() {

  var myWindow = window.open("", "", "width=200,height=200");

  myWindow.document.write('<head><title>Embarbussaments</title></head>');
  myWindow.document.write('<body>');
  myWindow.document.write('<div id="contenedor">');
  myWindow.document.write('<p> Duc pa sec al sac, massec on sóc i el suco amb suc.</p>');
  myWindow.document.write('<input type="button" value="Repeteix embarbussament" onclick="window.close()"/>');
  myWindow.document.write('</div>');
  myWindow.document.write('</body>');
}

function myFuncion4() {
  var myWindow = window.open("", "", "width=500,height=500");

  myWindow.document.write('<html><head><title>Coneix el teu equip informatic</title></head>');

  myWindow.document.write('<body><p>Els requeriments minims per a poder jugar al mini jocs son:.</p>');
  myWindow.document.write('<p>Chrome 6 o mozilla 10 .</p>');
  myWindow.document.write('<p>Tenir les cookies habilitades.</p>');
  myWindow.document.write('<p>I una resolucio minima de 1080x980.</p>');

  myWindow.document.write('<p id="demo"> </p>');
  var x = "El teu navegador Preferit és: " + navigator.appCodeName;
  myWindow.document.getElementById("demo").innerHTML = x;

  myWindow.document.write('<p id="demo2"> </p>');
  var y = "Tens les cookies en funcionament: " + navigator.cookieEnabled;
  myWindow.document.getElementById("demo2").innerHTML = y;

  myWindow.document.write('<p id="demo3"> </p>');
  var j = "Platform: " + navigator.platform;
  myWindow.document.getElementById("demo3").innerHTML = j;

  myWindow.document.write('<p id="demo4"> </p>');
  var z = "La informacio completa es : " + navigator.userAgent;
  myWindow.document.getElementById("demo4").innerHTML = z;

  myWindow.document.write('<p id="demo5"> </p>');
  var x = "Llenguatge del teu navegador: " + navigator.language;
  myWindow.document.getElementById("demo5").innerHTML = x;

  myWindow.document.write('<p id="demo6"></p>');
  myWindow.document.getElementById("demo6").innerHTML =
  "La teva amplada de pantalla es: " + screen.width;

  myWindow.document.write('<p id="demo7"></p>');
  myWindow.document.getElementById("demo7").innerHTML =
  "La teva altura de pantalla es: " + screen.height;


  var q= "Color Depth: " + screen.colorDepth + " bits per pixel";
  myWindow.document.write('<p id="demo8"> </p>');
  myWindow.document.getElementById("demo8").innerHTML = q;

  myWindow.document.write('</body></html>');
}

 function myfunction5(){

   var text = prompt("Introdueix un text:");
   var cercar = prompt("Quina part de paraula vols cercar?");
   var cercada = text.match(cercar);
   if(cercada==null){
     alert("No s'ha trobat");
   }else {
     alert("S'ha trobat: "+cercada);
   }
 }

 function myfunction6(){

   var text = prompt("Introdueix un text:");
   var cercar = prompt("Quina paraula vols reemplaçar?");
   var trobada = prompt("Quina paraula vols afegir al seu lloc?");

   var remp = text.replace(cercar,trobada);

   alert(remp);
 }

 function myfunction7(){
   var text="Era un home tan babau, tan babau, tan babau, que es va tallar una Orella per què deia que la tenia repetida…";
   alert(text);
   var cercar = prompt("Quina paraula vols buscar?");
   var remp = text.search(cercar);

   if(remp>=0){
     alert("La paraula existeix dins del text i es troba a la posicio: "+remp);
   }else{
     alert("La paraula no existeix dins del text i es troba a la posicio: "+remp);
    }
  }
   function myfunction8(){
     var nom = prompt("Introdueix el teu nom per a separar-lo:");
     var separador="";
     var contador = nom.length;
     var arregloDeSubCadenas = nom.split(separador);
     alert("El teu nom separat per lletres es: "+arregloDeSubCadenas+", el teu nom conte "+contador+" lletres.");
     }

var myWindow;
var myVar;

     function myFunction9() {
       var options = "toolbar=no,scrollbars=no,resizable=no,width=480, height=325";
       //myWindow = window.open("", "myWindow", "width=406, height=307");
       myWindow = window.open("", "myWindow", options);
       myWindow.document.write('<head><title>Bon Nadal</title></head>');
       myWindow.document.write('<body>');
       myWindow.document.write( '<img src ="../img/bonNadal.jpg"/>');
       myWindow.document.write('</body>');
       myWindow.moveTo(0, 350);
       interval();
       tancar();
     }

    function interval() {
       myVar = setInterval(moure, 50);
     }

     function moure(){
       myWindow.moveBy(10, 0);
     }

     function tancarInterval() {
       clearInterval(myVar);
       myWindow.close();
     }

     function tancar() {
        setTimeout(function () { tancarInterval();}, 5000);
      }
