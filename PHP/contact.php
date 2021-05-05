<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Contact</title>
    <link rel="stylesheet" href="../CSS/MainStyle.css">
    <link rel="stylesheet" href="../CSS/ContactStyle.css">
    <img src="../graphics/Metsa.jpg" id="bg">
  </head>
  <body>
    <header>
      <h2>Kestävä kehitys</h2>
    </header>
    <div class="Topnav">
      <a href="../EtusivuPage.html">Etusivu</a>
      <a href="../MaaritteluPage.html">Kestävän kehityksen määrittely</a>
      <a href="../KoyhtyminenPage.html">Luonnon köyhtyminen</a>
      <a class="active" href="ContactPage.html">Contact Us</a>
    </div>
    <div class="MainBody">
      <div class="Title">
        <h3>Contact us!</h3>
      </div>
      <div class="Container">
        <form action="#" method="post">
          Etunimi <input type="text" name="etunimi" placeholder="etunimi..."><br/>
          Sukunimi <input type="text" name="sukunimi" placeholder="sukunimi..."><br/>
          Sähköposti <input type="email" name="sPosti" placeholder="etunimi.sukunimi@email.com"><br/>
          Anna Palautetta <br><textarea name="palaute" rows="8" cols="70"></textarea><br/>
          <input type="submit" value="Lähetä" onclick="PHP_Function()"/>
        </form>
      </div>
    </div>
  </body>
  <footer>
    <p>Yhteystiedot</p>
  </footer>
</html>


<?php
  $errors = [];
  $data = [];

  if (empty($_POST["etunimi"])){
    $errors["etunimi"] = "Etunimi puuttuu";
  }

  if (empty($_POST["sukunimi"])){
    $errors["sukunimi"] = "Sukunimi puuttuu";
  }

  if (empty($_POST["sPosti"])){
    $errors["sPosti"] = "Sähköposti puuttuu";
  }

  if (!empty($errors)){
    $data["success"] = false;
    $data["errors"] = $errors;

    echo '<script>alert("Viestiä ei lähetetty")</script>';
  }
  else{
    $data["success"] = true;
    $data["message"] = "success!";

    $etunimi = $_POST["etunimi"];
    $sukunimi = $_POST["sukunimi"];
    $sPosti = $_POST["sPosti"];
    $palaute = $_POST["palaute"];

    echo '<script>alert("Viesti lähetetty")</script>';
    //mail($sPosti, $etunimi . " " . $sukunimi, $palaute);
  }
    //echo json_encode($data);

 ?>
