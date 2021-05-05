function myFunction() {
  var userInput = document.getElementById('inputId').value;
  var paastoMaara = userInput;
  var palaute;

  if (paastoMaara <= 10){
    palaute = "Et saastuta paljoa.";
  }
  if (paastoMaara >= 11 && paastoMaara <= 50){
  palaute = "Saastutat jonkin verran.";
  }
  if (paastoMaara >= 51){
  palaute = "Saastutat paljon.";
  }
  document.getElementById('palaute').innerHTML = palaute;
}
