<?php
    $dbName = "Nachbarschaftshilfe.db";
    /* Prüfe ob Datenbank existiert, wenn nicht erstelle eine */
    if(!file_exists($dbName)){
        $verbindung = new PDO("sqlite:$dbName");

        /* erstelle Datenbank */
        $query = "
        CREATE TABLE Kategorie (
            ID INTEGER PRIMARY KEY,
            Name TEXT(20)
        );";
        $verbindung->exec($query);

        $query = "CREATE TABLE Stadt (
            PLZ INTEGER PRIMARY KEY,
            Name TEXT(20)
        );";
        $verbindung->exec($query);
        $query = "CREATE TABLE Nutzer (
            ID INTEGER PRIMARY KEY AUTOINCREMENT,
            EMail TEXT(40),
            Vorname TEXT(20),
            Nachname TEXT(20),
            Addresse TEXT(40),
            bild TEXT(40),
            PLZ INTEGER,
            telnr INTEGER,
            passwort TEXT(255),
            FOREIGN KEY(PLZ) REFERENCES Stadt(PLZ)
        );";
        $verbindung->exec($query);
        $query = "CREATE TABLE Hilfsgesuch (
            ID INTEGER PRIMARY KEY AUTOINCREMENT,
            Titel TEXT(40),
            Beschreibung TEXT(1200),
            Kategorie INTEGER,
            Ersteller INTEGER,
            FOREIGN KEY(Kategorie) REFERENCES Kategorie(ID),
            FOREIGN KEY(Ersteller) REFERENCES Nutzer(ID)
        );";
        $verbindung->exec($query);

        /* Sample Data */
        $query = "
        INSERT INTO `Kategorie`(`ID`, `Name`) VALUES ('1','Garten');
        INSERT INTO `Kategorie`(`ID`, `Name`) VALUES ('2','Haushalt');
        INSERT INTO `Kategorie`(`ID`, `Name`) VALUES ('3','abzugeben');
        INSERT INTO `Kategorie`(`ID`, `Name`) VALUES ('4','Renovierung');
        INSERT INTO `Kategorie`(`ID`, `Name`) VALUES ('5','Reparatur');
        INSERT INTO `Kategorie`(`ID`, `Name`) VALUES ('6','Familie');
        INSERT INTO `Stadt`(`PLZ`, `Name`) VALUES ('26655','Westerstede');
        INSERT INTO `Stadt`(`PLZ`, `Name`) VALUES ('26121','Oldenburg');
        INSERT INTO `Stadt`(`PLZ`, `Name`) VALUES ('26160','Bad Zwischenahn');
        INSERT INTO `Nutzer`(`ID`, `EMail`, `Vorname`, `Nachname`, `Addresse`, `PLZ`, `telnr`, `bild`, `passwort`) VALUES ('1','lucaschristoffers1@gmail.com','Lucas','Christoffers','Igelstraße 9a','26655','12414124','Lucas.jpeg','a94a8fe5ccb19ba61c4c0873d391e987982fbbd3');
        INSERT INTO `Nutzer`(`ID`, `EMail`, `Vorname`, `Nachname`, `Addresse`, `PLZ`, `telnr`, `bild`, `passwort`) VALUES ('2','fritz@gmail.com','Fritz','Walter','Bsp 9a','26121','12414124','standart.jpeg','a94a8fe5ccb19ba61c4c0873d391e987982fbbd3');
        INSERT INTO Hilfsgesuch(ID, Titel, Beschreibung, Kategorie, Ersteller) VALUES ('1', 'Rasenmähen', 'Ich suche jemanden, der meinen Rasen mähen kann.', '1', '1');
        INSERT INTO Hilfsgesuch(ID, Titel, Beschreibung, Kategorie, Ersteller) VALUES ('2', 'Umzugshilfe', 'Ich benötige Unterstützung beim Umzug in eine neue Wohnung.', '2', '2');
        INSERT INTO Hilfsgesuch(ID, Titel, Beschreibung, Kategorie, Ersteller) VALUES ('3', 'Möbel abzugeben', 'Ich habe einige Möbel, die ich nicht mehr benötige und gerne verschenken möchte.', '3', '1');
        INSERT INTO Hilfsgesuch(ID, Titel, Beschreibung, Kategorie, Ersteller) VALUES ('4', 'Wände streichen', 'Ich brauche Hilfe beim Streichen meiner Wohnzimmerwände.', '4', '2');
        INSERT INTO Hilfsgesuch(ID, Titel, Beschreibung, Kategorie, Ersteller) VALUES ('5', 'Klempnerarbeiten', 'Es gibt ein Leck in meinem Badezimmer, das repariert werden muss.', '5', '1');
        INSERT INTO Hilfsgesuch(ID, Titel, Beschreibung, Kategorie, Ersteller) VALUES ('6', 'Kinderbetreuung', 'Ich suche jemanden, der auf meine Kinder aufpassen kann.', '6', '2');
        ";
        $verbindung->exec($query);
        $verbindung = null;
    }

    try{
        $verbindung = new PDO("sqlite:$dbName");
    }catch(Exception $e){
        /* TODO: Error handling sql datenbank nicht gefunden! */
    }

?>



