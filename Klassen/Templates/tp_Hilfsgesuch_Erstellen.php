<form action="angebot_erstellen.php" method="POST">   
    <div class="layout">     
        <h1>Angebot erstellen:</h1>
        <div class="error"><?php echo $this->error ?></div>
        <div class="success"><?php echo $this->success ?></div>
        <label for="title">Titel:</label><input id="title" name="titel" type="text" value="<?php echo $this->alte_Werte[0] ?>" required>
        <label for="kategorie">Kategorie:</label>
        <select name="kategorie" id="kategorie">
                <?php foreach ($this->kategorien as $erg):?> 
                        <option value="<?php echo $erg[0] ?>">
                            <?php echo $erg[1] ?> 
                        </option>;                
                <?php endforeach;?>
            </select>
        <label for="beschreibung">Beschreibung:</label>
        <textarea id="beschreibung" name="beschreibung" required><?php echo $this->alte_Werte[1] ?></textarea>
        <label for="lat">Breitengrad:</label>
        <input id="lat" name="lat" type="number" step="any" value="" >
        <label for="lon">Längengrad:</label>
        <input id="lon" name="lon" type="number" step="any" value="" >
        <div id="map" class="hidden"></div>
        <button type="submit" name="abgeschickt" value="abgeschickt">Erstellen</button>
    </div>
</form>