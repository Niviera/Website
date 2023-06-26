<div class="layout">
    <h1>Angebot ändern:</h1>
    <div class="error"><?php echo $this->error ?></div>
    <div class="success"><?php echo $this->success ?></div>
    <label for="title">Titel:</label><input id="title" name="titel" type="text" required value="<?php echo $this->alte_Werte[0] ?>">
    <label for="kategorie">Kategorie:</label>
        <select name="kategorie" id="kategorie" required>
            <?php foreach ($this->kategorien as $erg):?> 
                        <option <?php echo $erg[2] ?> value="<?php echo $erg[0] ?>">
                            <?php echo $erg[1] ?> 
                        </option>;                
            <?php endforeach;?>
        </select>
        <label for="beschreibung">Beschreibung:</label><textarea id="beschreibung" name="beschreibung"
                    type="text" required><?php echo $this->alte_Werte[1] ?></textarea>
        <button type="submit" name="ID" value="<?php echo $this->alte_Werte[2] ?>">Ändern</button>
</div>