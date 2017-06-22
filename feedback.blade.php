<!--SOURCE OF INSPIRATION: https://codepen.io/colorlib/pen/rxddKy (Accessed 10.06.2017)-->
<!DOCTYPE html>
<html>
  <head>
    <script src="javascript.js"></script>
    <link rel="stylesheet" href="basic_structure.css">
    <link rel="stylesheet" href="abfrage.css">
    <link rel="stylesheet" href="feedback.css">
    <style>
    </style>
  </head>
  <body>
    <div class="form">
    <header>
      <p class="info" id='szenario'>Szenario: Festival(AUTOMATISCHES UPDATED?)</p>
      <progress value="100" max="100"></progress>
      <p class="titel">Abgeschlossen!</p>
      <div style="text-align:left">
        <p class="headerinfo">Anzahl richtig beantwortet:</p><p class="headerfeeback" id='richtiganzahl' style="text-align:right">X</p>
        <p class="headerinfo">Anzahl falsch beantwortet:</p><p class="headerfeeback" id='falschanzahl' style="text-align:right">Y</p>
        <p class="headerinfo">Richtig in Prozent:</p><p class="headerfeeback" id='richtigprozent' style="text-align:right">Z</p>
      </div>
    </header>
      <!--Navigation-->
      <div class="dropdown">
        <button class="dropbtn">Falsche Antworten:</button>
        <div class="dropdown-content">
          <a href="#">Element=<li>Frage(Schwarz)</li> + <li>Falsche Antwort(Rot)</li> + <li>Korrekte Antwort(Gruen)</li> </a>
          <a href="#">Element</a>
          <a href="#">Element</a>
        </div>
      </div>
      <!--Ende Navigation-->
      <button class="button">szenario Wiederholen</button>
      <button class="button">zurueck zur Auswahl</button>
   </div>
  </body>
</html>
