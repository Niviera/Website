<div id="Container_Main_Login"> 
    <form action="Login_formular.php" method="POST">
        <div id="layout">
            <h1>Login:</h1>
            <div class="Container_Label_doppelpunkt">
                <label for="email">E-Mail:</label>
            </div>
            <input id="email" name="email" type="email">
            <div class="Container_Label_doppelpunkt">
                <label for="passwort">Passwort:</label>
            </div>
            <input id="passwort" name="passwort" type="password">
            <div id="Container_Buttons">
                <button type="submit" class="allgemeines_Button_Design ">Login</button>
                <div class="allgemeines_Button_Design button_Abbruch"><a href="konto_erstellen.php"
                        class="pseudo_Button">Registrieren?</a></div>
                <div id="pwvergessen"><a>Passwort vergessen</a></div>
            </div>
        </div>
    </form>
</div>