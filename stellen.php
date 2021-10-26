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
                <li><a class="active" href="stellen.php">Stellenbezeichnungen</a></li>
                <li><a href="tbb.html">TBB betreiben</a></li>
                <li><a href="suche.html">Suche</a></li>
            </ul>
        </div>
        <div id="headline">TBB Generator</div>
        <main>
            <h2>Erstelle einen Einsatz</h2>
            <p>Startet ein neuer Einsatz? Dann lege diesen an. Kontrolliere aber bitte vorher unter Suche Einsatz
            bereits ein Einsatz angelegt wurde! Bitte benenne auch den Namen unserer FMZ</p>
            <form name=einsatz style="padding-left: 400px;"  action="/tbbgenerator/phpScripts/postEinsatz.php" method="post">
                <table>
                    <tr>
                    <td>EinsatzName</td>
                    <td><input type="text" id="einsatzName" name="einsatzName" required></td>
                    <tr>
                    <tr>
                    <td>FMZ Name</td>
                    <td><input type="text" id="fmzName" name="fmzName" required></td>
                    </table>
                <label style="padding-left: 160px;"></label>
                <input type="submit" value="Anlegen" id="submitEinsatz">
              </form>
              <hr>
              <h2>Suche nach einem laufenden Einsatz</h2>
            <p>Läuft der Einsatz schon und du möchtest weitere Stellen hinzufügen, dann suche dir den entsprechenden Einsatz raus.</p>
            <form style="padding-left: 500px;">    
            <input type=text name="geteinsaetze" list="einsaetze"/>
                <datalist id="einsaetze">
                <?php while($row = mysqli_fetch_array($reinsatzName)) { ?>
            <option value="<?php echo $row['einsatzName']; ?>"><?php echo $row['einsatzName']; ?></option> <?php } ?>       
             </datalist>
            <br><br>
                <label style="padding-left: 50px;"></label>
                <input type="reset">
                </form>
              <br>
              <hr>
              <h2>Erfassen von Gegenstellen</h2>
              <p>Hier werden alle Gegenstellen aufgenommen.</p>
              <form style="padding-left: 500px;" action="/action_page.php" method="post">
                <label for="gegen"></label>
                <input type="text" id="gegen" name="gegen" required><br><br>
                <label style="padding-left: 60px;"></label>
                <input type="submit" value="Anlegen">
              </form>
        </main>
    </body>
</html>