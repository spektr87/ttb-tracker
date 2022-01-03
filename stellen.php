<!DOCTYPE html>
<html>
<?php
include('connect.php')
?>
    <head>
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
        <div class="navibar">
            <ul id="menu">
                <li><a href="home.html">Startseite</a></li>
                <li><a class="active" href="stellen.php">Stellenbezeichnungen</a></li>
                <li><a href="tbb.php">TBB betreiben</a></li>
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
                        <td colspan="2" align="center">EinsatzName</td></tr>
                    <tr>
                        <td><input type="text" id="einsatzName" name="einsatzName" required></td>
                    </tr>
                    <tr>
                        <td colspan="2" align="center">FMZ Name</td>
                    </tr>
                    <tr>
                        <td><input type="text" id="fmzName" name="fmzName" required></td>
                    </tr>
                    <tr>
                        <td colspan="2" align="center"><input type="submit" value="Anlegen" id="submitEinsatz"></td>
                    </tr>
                </table>
                <label style="padding-left: 160px;"></label>
              </form>
              <hr>
              <h2>Lege Gegenstellen an</h2>
            <p>Läuft der Einsatz schon und du möchtest weitere Stellen hinzufügen, dann suche dir den entsprechenden Einsatz raus und lege die Gegenstelle an. </p>
            <form style="padding-left: 400px;" action="/tbbgenerator/phpScripts/postGegenstelle.php" method="post">  
            <table> 
                <tr>
                     <td colspan="2" align="center">Einsatz</td>
                </tr>
                <tr>
                    <td><input type=text name="einsatzId" list="einsaetze"/>
                        <datalist id="einsaetze">
                         <?php while($row = mysqli_fetch_array($reinsatzName)) { ?>
                        <option value="<?php echo $row['einsatzId']; ?>"><?php echo $row['einsatzName']; ?></option> <?php } ?>       
                        </datalist>
                    </td>
                </tr>
                <tr><td colspan="2" align="center">Name Gegenstelle</td></tr>
                <tr>    
                    <td> 
                        <input type="text" id="gegenstelleName" name="gegenstelleName" required>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" align="center">
                        <input type="reset">
                    </td>
                </tr>
                <tr>
                    <td colspan="2"align="center">
                        <input type="submit" value="Anlegen">
                    </td>   
                </tr>
                </table>
              </form>
        </main>
    </body>
</html>