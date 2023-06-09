<form action="angebot_erstellen.php" method="POST">   
    <div class="layout">     
        <h1>Angebot erstellen:</h1>
        <div class="error"><?php echo $this->error ?></div>
        <div class="success"><?php echo $this->success ?></div>
        <input readonly hidden name="UTOKEN" type="text" value="<?php echo $this->alte_Werte[0] ?>">
        <label for="title">Titel:</label><input id="title" name="titel" type="text" value="<?php echo $this->alte_Werte[1] ?>" required>
        <label for="kategorie">Kategorie:</label>
        <select name="kategorie" id="kategorie">
                <?php foreach ($this->kategorien as $erg):?> 
                        <option value="<?php echo $erg[0] ?>">
                            <?php echo $erg[1] ?> 
                        </option>;                
                <?php endforeach;?>
            </select>
        <label for="beschreibung">Beschreibung:</label>
        <textarea id="beschreibung" name="beschreibung" required><?php echo $this->alte_Werte[2] ?></textarea>
        <label for="lat">Breitengrad:</label>
        <input id="lat" name="lat" type="number" step="any" value="" >
        <label for="lon">Längengrad:</label>
        <input id="lon" name="lon" type="number" step="any" value="" >
        <div id="mapInfo" class="hidden"></div>
        <div id="map" class="hidden">
            <div id="lade" onclick="loadMap(starte_map_erstellen)"> <p>Geo Picker Laden</p> </div>
            <div id="hinweis"><p>Hierbei werden Daten von einem fremden Server geladen. Dabei wird Ihre IP-Addresse weitergegeben.</p></div>
        </div>
        <button type="submit" name="abgeschickt" value="abgeschickt">Erstellen</button>
    </div>
</form>