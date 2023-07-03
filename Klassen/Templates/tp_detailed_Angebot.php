<!-- Content -->
<div id="angeboteins">
    <!-- Title -->
    <div id="Container_Angebot" class="Container_Angebot">
        <div class="box3">
            <h1> <?php echo $this->kategorien['titel'] ?> </h1>
        </div>
        <div id="error" class="error"><?php echo $this->nachricht ?></div>
        <div class="box1">
            <img src= <?php  echo '../Bilder/profile/'. $this->kategorien['bild'] ?> alt="Profil Bild">
            <!-- Name -->
            <p><?php echo $this->kategorien['vorname']. ' '. $this->kategorien['nachname'] ?></p>
            </div>
            <!-- Beschreibung -->
            <div class="box2">
                <p>
                    <?php echo $this->kategorien['beschreibung'] ?>
                </p>
            </div>
        <div class="box4">
            <a href= <?php echo "mailto:".$this->kategorien['email']?>>
                Nachricht
            </a>
        </div>
        <input hidden id="lat" value="<?php echo $this->kategorien['lat'] ?>">
        <input hidden id="lon" value="<?php echo $this->kategorien['lon'] ?>">
        <iframe src="" class="hidden" id="karte"></iframe>   
        <div id="iframe_laden" class="hidden iframe_laden"> <button onclick="karte_laden()">Karte Laden</button></div>  
    </div>
    
</div>

