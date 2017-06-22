<!--SOURCE OF INSPIRATION: https://codepen.io/colorlib/pen/rxddKy (Accessed 10.06.2017)-->
<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="basic_structure.css">
    <link rel="stylesheet" href="abfrage.css">

    <style>
      /*PlayPause Button design*/
      .playbutton{
        background-color: #fafafa;
        border: 1px solid #cacece;
        display: inline-block;
        display: inline-block;
        margin: 0 10px 0 0;
        padding: 4px 25px;
        font-size: 11px;
        font-family: "Roboto", sans-serif;
        line-height: 1.8;
        cursor: pointer;
      }
      /*Video Design*/
      video{
        margin: 5px 0 0;
        width: 100%;
        height: auto;
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
        <progress value="25" max="100"></progress>
      </head class="playbutton"er>
        <div style="text-align:center">
          <video id="video" width="360">
            <source src="bspvideo.mp4" type="video/mp4">
            HTML5 wird von ihrem Geraet nicht unterstuetzt
          </video>
          <br>
            <button class="playbutton" onclick="playPause()">Play/Pause</button>
            <button class="playbutton" onclick="Reset()">Replay</button>
        </div>
      <button class="button">weiter</button>
      <button class="button">zurueck</button>
    </div>
    <script src="javascript.js"></script>
  </body>
</html>
