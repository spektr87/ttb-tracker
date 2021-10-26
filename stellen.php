<?php
include('connect.php')
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
        <div class="navibar">
            <ul id="menu">
                <li><a href="home.html">Startseite</a></li>
                <li><a class="active" href="stellen.html">Stellenbezeichnungen</a></li>
                <li><a href="tbb.html">TBB betreiben</a></li>
                <li><a href="suche.html">Suche</a></li>
            </ul>
        </div>
        <div id="headline">TBB Generator</div>
        <main>
            <h2>Erstelle einen Einsatz</h2>
            <p>Startet ein neuer Einsatz? Dann lege diesen an. Kontrolliere aber bitte vorher unter Suche Einsatz
            bereits ein Einsatz angelegt wurde!</p>
            <form align="center" action="/action_page.php" method="post">
                <label for="einsatz">
                <input type="text" id="einsatz" name="einsatz" required><br><br>
                <input type="submit" value="Anlegen" id="submitEinsatzName">
              </label>
              </form>
              <hr>
              <h2>Suche nach einem laufenden Einsatz</h2>
            <p>Läuft der Einsatz schon und du möchtest weitere Stellen hinzufügen, dann suche dir den entsprechenden Einsatz raus.</p>
            <form align="center">    
            <input list="einsätze">
                <datalist id="einsätze">
                <?php while($row = mysqli_fetch_array($reinsatzName)) { ?>
            <option value="<?php echo $row['einsatzName']; ?>"><?php echo $row['einsatzName']; ?></option> <?php } ?>
                </datalist><br><br>
                <input type="reset">
                </form>
              <br>
              <hr>
              <h2>Erfassen von FmZ Stellenbeschreibung</h2>
              <p>Hir wird der Name der FmZ dokumentiert</p>
              <form align="center" action="/action_page.php" method="post">
                <label for="wir"></label>
                <input type="text" id="wir" name="wir" required><br><br>
                <input type="submit" value="Anlegen">
              </form><br>
              <hr>
              <h2>Erfassen von Gegenstellen</h2>
              <p>Hier werden alle Gegenstellen aufgenommen. Bitte bei Mehrfacheintragung durch "," trennen</p>
              <form align="center" action="/action_page.php" method="post">
                <label for="gegen"></label>
                <input type="text" id="gegen" name="gegen" required><br><br>
                <input type="submit" value="Anlegen">
              </form>
        </main>
    </body>
</html>