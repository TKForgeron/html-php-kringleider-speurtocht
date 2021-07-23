<!DOCTYPE html>
<html>
<title>Jippie Speurtocht</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<script src="https://use.fontawesome.com/3397298754.js"></script>
<style>
body,h1 {font-family: "Raleway", sans-serif}
body, html {height: 100%}
.bgimg {
  background-image: url('img/sawa.jpg');
  min-height: 100%; 
  background-position: center;
  background-size: cover;
}
</style>
<body>

<div class="bgimg w3-display-container w3-animate-opacity w3-text-white">
  <div class="w3-display-topleft w3-padding-large w3-xlarge">
    opdracht_1
  </div>


  <div class="w3-display-middle w3-center">
    <h1 class="w3-jumbo w3-center w3-animate-top">rebus</h1>
    <hr class="w3-border-white" style="margin:auto;width:50%">
    <br>
    <img src="img/rebus.png" style="max-width: 100%">
    <p class="w3-large w3-black w3-text-white w3-center">Los de rebus op en plak het antwoord van de volgende vraag achteraan.
      <?php
        if (time() < strtotime('18:51:00') && time() > strtotime('18:48:30')) {
          echo "Hoeveel poorten heeft het nieuwe Jerusalem?";
        }
        else {
          echo "Hoeveel discipelen/apostelen waren er nog in leven ten tijde van Jezus' opstanding?";
          }
      ?>                                   
    </p>
    <a href="vraag2.php" class="w3-btn w3-black w3-right"><i class="fa fa-arrow-right"></i></a>
  </div>
  

  <div class="w3-display-bottomleft w3-padding-large">
    Gemaakt door mij <i class="fa fa-thumbs-up"></i>
  </div>
</div>

</body>
</html>