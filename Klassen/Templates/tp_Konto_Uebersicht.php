<form method="POST" action="eigenes_konto.php">
        <div class="layout">
            <h1> Eigenes Konto </h1>
            <div class="error"><?php echo $this->nachricht ?></div>
            <div class="profil_Bild">
                <img src=<?php echo "../Bilder/profile/" . $this->alte_Werte['bild'] ?> alt="Profil Bild">
            </div>
            <div class="Container_konto">
                <label for="vorname">Vorname:</label><input id="vorname" name="vorname" type="text" value=<?php echo $this->alte_Werte['vorname'] ?>>
                <label for="nachname">Nachname:</label><input id="nachname" name="nachname" type="text" value=<?php echo $this->alte_Werte['nachname'] ?>>
                <label for="straße">Straße:</label><input id="straße" name="straße" type="text" value="<?php echo $this->alte_Werte['adresse'] ?>">
                <label for="plz">PLZ:</label><input id="plz" name="plz" type="text" value=<?php echo $this->alte_Werte['plz'] ?>>
                <label for="stadt">Stadt:</label><input id="stadt" name="stadt" type="text" value=<?php echo $this->alte_Werte['stadt'] ?>>
                <label for="email">Email:</label><input id="email" name="email" type="email" value=<?php echo $this->alte_Werte['email'] ?>>
                <label for="bearbeiten">Daten bearbeiten:</label><input id="bearbeiten" name="bestaetigt" type="checkbox" required>
            </div>
            <button type="submit" name="aendern">Ändern</button>
        </div>
</form>