<header>
      <div id="header">
            <div class="seitenname">Nachbarschaftshilfe</div>
      </div>
</header>
<nav>
      <div class="navi desktop">
            <ul>
                  <li class="start_position"><a class="letzte" href="<?php echo $start . 'index.php' ?>">Startseite</a></li>
                  <?php
                  if ($_SESSION['UID'] == "") {
                        echo '
                        <li class="registrieren_position"><a href="' . $konto . 'konto_erstellen.php"> Registrieren</a></li>
                        <li class="loginAbmelden_position"><a href="' . $konto . 'login_formular.php"> Login </a>
                        </li>';
                  } else {
                        echo '
                        <li class="eigenes_position"><a class="letzte" href="' . $konto . 'eigenes_konto.php">Konto</a></li>
                        <li class="uebersicht_position"><a href="' . $pins . 'uebersicht.php"> Übersicht</a></li>
                        <li class="erstellen_position"><a href="' . $pins . 'angebot_erstellen.php">Angebot erstellen</a></li>
                        <li class="loginAbmelden_position"><a href="' . $konto . 'abmelden.php">Abmelden</a></li>';
                  }
                  ?>

            </ul>
      </div>

      <div class="navi mobile">
            <a href="<?php echo $start . 'index.php' ?>">Startseite</a>
            <div class="dropdownMenuPoint">
                  <button class=" dropTrigger">Menü</button>
                  <div class="dropdown-content">
                        <?php
                        if ($_SESSION['UID'] == "") {
                              echo '
                        <a href="' . $konto . 'konto_erstellen.php"> Registrieren</a>
                        <a href="' . $konto . 'login_formular.php"> Login </a>';
                        } else {
                              echo '
                        <a href="' . $konto . 'eigenes_konto.php">Konto</a>
                        <a href="' . $pins . 'uebersicht.php"> Übersicht</a>
                        <a href="' . $pins . 'angebot_erstellen.php">Angebot erstellen</a>
                        <a href="' . $konto . 'abmelden.php">Abmelden</a>';
                        }
                        ?>
                  </div>
            </div>
      </div>
</nav>