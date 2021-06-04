<!DOCTYPE html>
<html>
    <head>
        <title>Warsztat4</title>
    </head>
    <body style="background:DimGray; color:white;">
        <?php session_start(); ?>
        Warsztat4<br>
        <div>
            <details <?php if (isset($_POST["z2"])) echo "open"; ?>>
                <summary>4.1</summary>
                <form action="Warsztat2.php" method="post">
                    <label>Imię <input type="text" name="imie" size="20" reqiured></label><br>
                    <label>Nazwisko <input type="text" name="nazwisko" size="20" reqiured></label><br>
                    <label>Licza osób <input type="number" name="osoby" min="1" max="4" value="<?php echo $_POST["a"]; ?>"></label><br>
                    <label>Data przyjadu <input type="date" name="przyjazd" size="5" reqiured></label><br>
                    <label>Data wyjazdu <input type="date" name="wyjazd" size="5" reqiured></label><br>
                    <label>Adres<br>Ulica </label><input type="text" name="ulica" size="20" reqiured>
                    <label>Nr domu </label><input type="text" name="dom" size="5" reqiured>
                    <label>Nr mieszkania </label><input type="text" name="mieszkanie" size="5"><br>
                    <label>Nr karty </label><input type="number" name="karta" size="20" min=0000000000000000 max=9999999999999999 reqiured><br>
                    <label>Email </label><input type="email" name="email" size="10" reqiured><br>
                    <label>Nr telefonu </label><input type="number" name="tel" size="10" min=111111111 max=999999999 reqiured><br>
                    <label>Łóżko dla dziecka <input type="checkbox" name="dziecko" value="true"></label><br>
                    <label>Kliumatyzacja <input type="checkbox" name="klimatyzacja" value="true"></label><br>
                    <input type="submit" name="z2" value="Wyślij">
                </form>
                <?php
                setcookie("Imię", $_POST[imie], time()+60+60);
                setcookie("Nazwisko", $_POST[nazwisko], time()+60+60);
                setcookie("Liczba osób", $_POST[osoby], time()+60+60);
                echo ("<br> Podsumowanie: <br><br>
                    Imię: $_POST[imie] <br>
                    Nazwisko: $_POST[nazwisko]<br>
                    Liczba osób: $_POST[osoby]<br>
                    Przyjazd: $_POST[przyjazd]<br>
                    Wyjazd: $_POST[wyjazd]<br>
                    Adres: $_POST[ulica] $_POST[dom] $_POST[mieszkanie]<br>
                    Numer karty: $_POST[karta]<br>
                    Email: $_POST[email]<br>
                    Numer telefonu: $_POST[tel]<br>
                    Łóżko dla dziecka: $_POST[dziecko]<br>
                    Klimatyzacja $_POST[klimatyzacja]");
                session_destroy();
                ?>
            </details>
        </div>
    </body>
</html>
