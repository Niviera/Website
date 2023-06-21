<form action="angebot_erstellen.php" method="POST">   
    <div class="layout">     
        <h1>Angebot erstellen:</h1>
        <div class="error"><?php echo $this->error ?></div>
        <div class="success"><?php echo $this->success ?></div>
        <label for="title">Titel:</label><input id="title" name="titel" type="text" required>
        <label for="kategorie">Kategorie:</label>
        <select name="kategorie" id="kategorie">
                <?php foreach ($this->kategorien as $erg):?> 
                        <option value="<?php echo $erg[0] ?>">
                            <?php echo $erg[1] ?> 
                        </option>;                
                <?php endforeach;?>
            </select>
        <label for="beschreibung">Beschreibung:</label>
        <textarea id="beschreibung" name="beschreibung" required></textarea>
        <button type="submit" name="abgeschickt" value="abgeschickt">Erstellen</button>
    </div>
</form>