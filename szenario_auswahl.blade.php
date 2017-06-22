<!--SOURCE OF INSPIRATION: https://codepen.io/colorlib/pen/rxddKy (Accessed 10.06.2017)-->
<!--SOURCE (HORIZONTAL SCROLLMENU): https://flickity.metafizzy.co/ (Accessed 12.06.2017)-->
<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="https://unpkg.com/flickity@2.0.8/dist/flickity.css" media="screen">
    <link rel="stylesheet" href="basic_structure.css">
    <link rel="stylesheet" href="auswahl.css">
  </head>
    <body>
        <div class="form">
            <header>
              <input type="text" name="search" placeholder="Suchen..">
              <p class="kategorie">Kategorie: Nachhaltigkeit (AUTOMATISCHES UPDATEN?)</p>
              <p class="titel">Szenario-Auswahl</p>
            </header>
              <div class="menu">
                <div class="menu-cell"><a href='#'>Festival</a></div>
                <div class="menu-cell"><a href='#'>Hausbau</a></div>
                <div class="menu-cell"><a href='#'>Verkehr</a></div>
                <div class="menu-cell"><a href='#'>Im Arbeitsalltag</a></div>
              </div>
              <button class="button"><a href='#'>zurueck</a></button>
        </div>
      <script src="https://unpkg.com/flickity@2.0.8/dist/flickity.pkgd.min.js"></script>
    </body>
    <script>
      var flkty = new Flickity( '.menu', {
        // options
        cellAlign: 'left',
        contain: true
      });
    </script>
</html>
