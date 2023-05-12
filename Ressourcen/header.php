<header>
      <div id="header">
            <div class="seitenname">Nachbarschaftshilfe</div>
      </div>
</header>
<nav>
      <div class="navi desktop">
            <ul>
                  <li><a href="<?php echo $start . 'index.php' ?>">Startseite</a></li>
                  <li><a href="<?php echo $konto . 'eigenes_konto.php' ?>">Konto</a></li>
                  <li><a href="<?php echo $pins . 'uebersicht.php' ?>"> Übersicht</a></li>
                  <li><a href="<?php echo $pins . 'angebot_erstellen.php' ?>">Angebot erstellen</a></li>
                  <li style="float: right;"><a href="<?php echo $konto . 'konto_erstellen.php' ?>"> Registrieren
                        </a></li>
                  <li style="float: right;"><a href="<?php echo $konto . 'login.php' ?>"> Login </a>
                  </li>
                  <li style="float: right;"><a href="<?php echo $start . 'index.php' ?>">Abmelden</a></li>
            </ul>
      </div>

      <div class="navi mobile">
            <a class="size" href="<?php echo $start . 'index.php' ?>">Startseite</a>
            <div class="dropdownMenuPoint size">
                  <button class=" dropTrigger">Angebot</button>
                  <div class="dropdown-content">
                        <a href="<?php echo $pins . 'angebot_erstellen.php' ?>">Angebot erstellen</a>
                        <a href="<?php echo $pins . 'uebersicht.php' ?>">Übersicht</a>
                  </div>
            </div>
            <div style="width: 40%"></div>
            <div class="dropdownMenuPoint size">
                  <button class="dropTrigger">Konto</button>
                  <div class="dropdown-content right_Drop">
                        <a href="<?php echo $konto . 'eigenes_konto.php' ?>">Eigene Daten</a>
                        <a href="<?php echo $konto . 'konto_erstellen.php' ?>"> Registrieren </a>
                        <a href="<?php echo $konto . 'konto_erstellen.php' ?>"> Login </a>
                        <a href="<?php echo $start . 'index.php' ?>">Abmelden</a>
                  </div>
            </div>
      </div>
</nav>