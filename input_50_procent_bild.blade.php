<!--SOURCE OF INSPIRATION: https://codepen.io/colorlib/pen/rxddKy (Accessed 10.06.2017)-->
<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="basic_structure.css">
    <link rel="stylesheet" href="abfrage.css">
    <style>
      /*Bild responsiv gestaltet*/
      img{
        margin: 10px 0 2px;
        width: 100%;
        height: auto;
      }
      .bild{ /*UMRUNDENDE BOX SEHR HAESSLICH --> VERBESSERN*/
      	border: 1px solid #cacece;
      	box-shadow: 0 1px 2px rgba(0,0,0,0.05), inset 0px -15px 10px -12px rgba(0,0,0,0.05);
      	display: inline-block;
      	position: relative;
        font-size: 11px;
      }
    </style>
  </head>
  <body>
    <div class="form">
      <header>
        <button class="chatbutton">live chat</button>
        <span id='close' onclick='this.parentNode.parentNode.parentNode.removeChild(this.parentNode.parentNode); return false;'>x</span>
        <p class="info" id='szenario'>Szenario: Festival(AUTOMATISCHES UPDATED?)</p>
        <p class="titel">Fortschritt:</p>
        <progress value="50" max="100"></progress>
      </header>
      <div class="bild">
          <img src="bspbild.jpg">
      </div>
      <button class="button">weiter</button>
      <button class="button">zurueck</button>
    </div>
    <script src="javascript.js"></script>
  </body>
</html>
