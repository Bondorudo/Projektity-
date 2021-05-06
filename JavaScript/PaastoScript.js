function myFunction() {
  var userInput = document.getElementById('inputId').value;
  var paastoMaara = userInput;
  var palaute;

  // Jos päästömäärä on yli 10 palauta
  if (paastoMaara <= 10){
    palaute = "Et saastuta paljoa.";
  }
    // Jos päästömäärä on yli 11 ja alle 50 palauta
  if (paastoMaara >= 11 && paastoMaara <= 50){
  palaute = "Saastutat jonkin verran.";
  }
    // Jos päästömäärä on yli 51 palauta
  if (paastoMaara >= 51){
  palaute = "Saastutat paljon.";
  }
    // Palauttaa oikean palautteen
  document.getElementById('palaute').innerHTML = palaute;
}
