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
                <li><a href="stellen.php">Stellenbezeichnungen</a></li>
                <li><a class="active" href="tbb.php">TBB betreiben</a></li>
                <li><a  href="suche.html">Suche</a></li>
            </ul>
        </div>
        <div id="headline">TBB Generator</div>
        <main>
            <form style="padding-top: 10px;" action="action_page.php" method="get">
                <label style="padding-right:3px;">Einsatz</label>
                <input list="einsaetze">
                <datalist id="einsaetze">
                <?php while($row = mysqli_fetch_array($reinsatzName)) { ?>
            <option value="<?php echo $row['einsatzId']; ?>"><?php echo $row['einsatzName']; ?></option> <?php } ?>       
             </datalist>
                <input style="height: 30px;" type="reset">
            </input>
            </form>
            <label class="switch">
                <input type="checkbox" name="messagetype" id="messagetype">
                <span class="slider"></span>
              </label>
              <form  id="tbbinput" action="/action_page.php" method:"get">
            <label style="padding-right: 61px;"> Wir:</label>
                <input type="text" id="wir" value="EAL THW" required>
            <br><br><br>
            <label style="padding-right: 1.5px;">Gegenstellen:</label>
                <input list="gegenstelle" required>
                <datalist id=gegenstelle>
                    <option value="Gegenstelle 1">
                    <option value="Gegenstelle 2">
                    <option value="Gegenstelle 3">
                </datalist>
                <input style="height: 30px;" type="reset">
                <br><br>
            <input id="tbbsafe" type="submit" value="Speichern">
            </form>
            <p style="padding-left: 1050px;"><?php date_default_timezone_set("Europe/Berlin");echo "Taktische Zeit: " . date("dHiMY");?></p>
        </main>
    </body>
</html>