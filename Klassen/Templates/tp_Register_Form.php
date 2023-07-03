<div id="RegisterContainerMain" class="RegisterContainerMain">
    <h3>Registrierung:</h3>
    <div class="error"><?php echo $this->nachricht ?></div>
            <form action="konto_erstellen.php" method="POST" enctype="multipart/form-data">
                <div class="ContainerRubrik">
                    <div class="legend">Persönliche Daten:</div>
                    <label for="vorname">Vorname:</label>
                    <input id="vorname" name="vorname" type="text" required value=<?php echo $this->alte_Werte['vorname'] ?> >
                    <br>
                    <label for="nachname">Nachname:</label>
                    <input id="nachname" name="nachname" type="text" value=<?php echo $this->alte_Werte['nachname'] ?>>
                    <br>
                    <label for="tele">Tele.Nr.:</label>
                    <input id="tele" name="tele" type="number" value="<?php echo $this->alte_Werte['tele'] ?>">
                    <br>
                    <label for="straße">Straße:</label>
                    <input id="straße" name="straße" type="text" value="<?php echo $this->alte_Werte['straße'] ?>">
                    <br>
                    <label for="plz">PLZ:</label>
                    <input id="plz" name="plz" type="number" value="<?php echo $this->alte_Werte['plz'] ?>">
                    <br>
                    <label for="stadt">Ort:</label>
                    <input id="stadt" name="stadt" type="text" value="<?php echo $this->alte_Werte['stadt'] ?>">
                </div>
                <div class="ContainerRubrik">
                    <div class="legend">Kontodaten:</div>
                    <label for="email">E-Mail:</label>
                    <input id="email" name="email" type="email" value="<?php echo $this->alte_Werte['email'] ?>" required>
                    <br>
                    <label for="eMailwdh">E-Mail wdh.:</label>
                    <input id="eMailwdh" name="eMailwdh" type="email" value="<?php echo $this->alte_Werte['eMailwdh'] ?>" onkeyup="Email_Vergleich()" required>
                    <br>
                    <label for="passwort">Passwort:</label>
                    <input id="passwort" name="passwort" type="password" required>
                    <br>
                    <label for="passwortwdh">Passwort wdh.:</label>
                    <input id="passwortwdh" name="passwortwdh" type="password" required>
                </div>
                <div class="ContainerRubrik">
                    <div class="legend">Bild hochladen:</div>
                    <label for="dateiHochladen">Datei:</label>
                    <input id="dateiHochladen" name="dateiHochladen" type="file">
                </div>
                <div class="ContainerRubrik">
                    <div class="legend"></div>
                    <label for="datenschutz">Datenschutz:</label>
                    <div class="checkbox_text">
                        <input id="datenschutz" name="datenschutz" type="checkbox" required>
                        <div class="text">
                            Ich habe die <a href="../Datenschutzerklaerung.php"> Datenschutzerklärung</a>
                            zur Kenntnis genommen und bin damit einverstanden, dass die von mir angebenen Daten 
                            elektronisch erhoben und gespeichert werden. Meine Daten werden dabei nur streng 
                            zweckgebunden zur Bearbeitung und Beantwortung meiner Anfragen genutzt.
                        </div>
                    </div>
                    <label for="nutzungsbediungen">Nutzungsbedingungen:</label>
                    <div class="checkbox_text">
                        <input id="nutzungsbediungen" name="nutzungsbediungen" type="checkbox" required>
                        <div class="text">
                            Ich habe die <a href="../Nutzungsbedingung.php"> Nutzungsbedingungen</a>
                            zur Kenntnis genommen und Verstanden. Hiermit erkläre ich mich für einverstanden diese
                            neinzuhalten
                        </div>
                    </div>
                </div>
                <div class="ContainerButtons">
                <div class="zurueckButton allgemeinesDesign"><a href="index.php" class="pseudoButton">Abbrechen</a>
                    </div>
                    <button type="submit" name="abgeschickt" value="abgeschickt"
                        class="buttonDesign allgemeinesDesign">Registrieren</button>
                    
                </div>
            </form>
</div>