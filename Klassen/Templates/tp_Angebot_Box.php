<?php foreach ($this->kategorien as $anzeige): ?>
    <div>
        <p class="ueberschrift"> 
            <?php echo $anzeige[2] ?>
        </p>
        <a class="beschreibung" href="Pins/angebot_eins.php?id=<?php echo urlencode($anzeige[0])?>">
            <?php echo $anzeige[5] ?>...
        </a>
        <a class="autor" href="Konto/konto_uebersicht.php?id=<?php echo urlencode($anzeige[1])?>">
            <?php echo $anzeige[3].' '.$anzeige[4]  ?>
        </a>
    </div>
<?php endforeach;?>    