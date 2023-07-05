<div class="layout_Konto_Uebersicht">
    <h3>
        Kontaktdaten:
    </h3>
    <!-- Bild-->
    <div class="profil_Bild">
        <img src=<?php echo "../Bilder/profile/" . $this->alte_Werte['bild'] ?> alt="Profil Bild">
    </div>
    <!-- Kontoinformationen -->
    <div class="kontoinformationen">
        <div class="layout_kategorie schrift">
            <div class="kategorie">Vorname</div>
            <div class="doppelpunkt">:</div>
        </div>
        <div class="info schrift">
            <?php echo $this->alte_Werte['vorname']; ?>
        </div>
        <div class="layout_kategorie schrift">
            <div class="kategorie">Nachname</div>
            <div class="doppelpunkt">:</div>
        </div>
        <div class="info schrift">
            <?php echo $this->alte_Werte['nachname']; ?>
        </div>
        <div class="layout_kategorie schrift">
            <div class="kategorie">Straße</div>
            <div class="doppelpunkt">:</div>
        </div>
        <div class="info schrift">
            <?php echo $this->alte_Werte['adresse']; ?>
        </div>
        <div class="layout_kategorie schrift">
            <div class="kategorie">PLZ</div>
            <div class="doppelpunkt">:</div>
        </div>
        <div class="info schrift">
            <?php echo $this->alte_Werte['plz']; ?>
        </div>
        <div class="layout_kategorie schrift">
            <div class="kategorie">Stadt</div>
            <div class="doppelpunkt">:</div>
        </div>
        <div class="info schrift">
            <?php echo $this->alte_Werte['stadt'] ?>
        </div>
        <div class="layout_kategorie schrift">
            <div class="kategorie">Tel-Nr.</div>
            <div class="doppelpunkt">:</div>
        </div>
        <div class="info schrift">
            <?php echo $this->alte_Werte['tele']; ?>
        </div>
        <div class="layout_kategorie schrift">
            <div class="kategorie">E-Mail</div>
            <div class="doppelpunkt">:</div>
        </div>
        <div class="info schrift">
            <?php echo $this->alte_Werte['email']; ?>
        </div>
    </div>
</div>
