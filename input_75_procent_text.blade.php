<!--SOURCE OF INSPIRATION: https://codepen.io/colorlib/pen/rxddKy (Accessed 10.06.2017)-->
<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="basic_structure.css">
    <link rel="stylesheet" href="abfrage.css">
    <style>
      /*Scrollbox fuer den Fall wenn der Text nicht auf Bildschirm passt*/
      .scrollbox{
        margin: 10px 0 10px;
        width:100%;
        height:200px;
        line-height:1em;
        overflow:scroll;
        padding:5px;
        text-align: left;
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
        <progress value="75" max="100"></progress>
      </header>
      <div class="scrollbox">
  This 'div' element uses 'overflow:scroll' to create scrollbars whenever the contents of the 'div' become too large.
  This 'div' element uses 'overflow:scroll' to create scrollbars whenever the contents of the 'div' become too large.
  This 'div' element uses 'overflow:scroll' to create scrollbars whenever the contents of the 'div' become too large.
  This 'div' element uses 'overflow:scroll' to create scrollbars whenever the contents of the 'div' become too large.
  This 'div' element uses 'overflow:scroll' to create scrollbars whenever the contents of the 'div' become too large.
  This 'div' element uses 'overflow:scroll' to create scrollbars whenever the contents of the 'div' become too large.
  This 'div' element uses 'overflow:scroll' to create scrollbars whenever the contents of the 'div' become too large.
  This 'div' element uses 'overflow:scroll' to create scrollbars whenever the contents of the 'div' become too large.
  This 'div' element uses 'overflow:scroll' to create scrollbars whenever the contents of the 'div' become too large.
  This 'div' element uses 'overflow:scroll' to create scrollbars whenever the contents of the 'div' become too large.
  </div>

      <button class="button">weiter</button>
      <button class="button">zurueck</button>
    </div>
  </body>
</html>
