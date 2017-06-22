<!--SOURCE OF INSPIRATION: https://codepen.io/colorlib/pen/rxddKy (Accessed 10.06.2017)-->
<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="basic_structure.css">
    <link rel="stylesheet" href="abfrage.css">
    <style>
    .form .checkbox{
        background-color: #fafafa;
        border: 1px solid #cacece;
        box-shadow: 0 1px 2px rgba(0,0,0,0.05), inset 0px -15px 10px -12px rgba(0,0,0,0.05);
        padding: 9px;
        border-radius: 3px;
        position: relative;
        font-size: 10px;
        text-align: center;
    }
    /*Positionierung der Checkboxen: PROBLEM= KRIEGE ES NICHT HIN DIE CHECKBOXEN RECHTS NEBEN TEXT ZU POSITIONIEREN*/
    #a{
      margin: 2px 0 0;
    }
    #b{
      margin: 2px 0 0;
    }
    #c{
      margin: 2px 0 0;
    }
    #d{
      margin: 2px 0 0;
    }

    /*Hinweis zum Antworten*/
    .form .hinweis{
      margin: 15px 0 0;
      color: #A9A9A9;
      font-size: 13px;
    }
    </style>
  </head>
  <body>
    <div class="form">
      <header>
        <button class="chatbutton">live chat</button>
        <span id='close' onclick='this.parentNode.parentNode.parentNode.removeChild(this.parentNode.parentNode); return false;'>x</span>
        <p class="info" id='szenario'>Szenario: Festival(AUTOMATISCHES UPDATED?)</p>
        <p class="titel">Frage:</p>
      </header>
      <p class="frage" id='frage11'>Der Hase hat sich nicht nachhaltig verhalten. Was haette er stattdessen tun sollen?</p><br>
      <p class="hinweis">Kreuzen Sie die einzige richtige Antwort an! NOTIZ: BEI ERSTELLUNG DES FRAGE-BAUMS MUSS JEDE FRAGE EINE EINDEUTIGE ID ERHALTEN</p>
      <form class="checkbox">
        (A) Nicht ueber das Gras trampeln <input id='a' type="checkbox">
        (B) Die Blumen in Ruhe lassen <input id='b' type="checkbox">
        (C) Weniger essen <input id='c' type="checkbox">
        (D) TEST <input id='d' type="checkbox">
      </form>
      <button class="button">weiter</button>
      <button class="button">zurueck</button>
    </div>
  </body>
</html>
