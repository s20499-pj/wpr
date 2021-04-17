<!DOCTYPE html>
<html>
    <head>
        <title>Warsztat2</title>
    </head>
    <body style="background:DimGray; color:white;">
        Warsztat2<br>

        <div>

            <details <?php if (isset($_POST["z1"])) echo "open"; ?>>
                <summary>2.1</summary>
                <form action="Warsztat2.php" method="post">
                    a: <input type="number" name="a" value="<?php echo $_POST["a"]; ?>"><br>
                    b: <input type="number" name="b" value="<?php echo $_POST["b"]; ?>"><br>
                    <label><input type="radio" name="calc" value="add">+</label>
                    <label><input type="radio" name="calc" value="diff">-</label>
                    <label><input type="radio" name="calc" value="multi">*</label>
                    <label><input type="radio" name="calc" value="divi">/</label>
                    <input type="submit" name="z1" value="Oblicz">
                </form>
                <?php
                if (isset($_POST["a"]) && isset($_POST["b"]) && isset($_POST["calc"])){
                    $a = $_POST["a"];
                    $b = $_POST["b"];
                    $action = $_POST["calc"];
                    echo "Wynik to: ";
                    switch ($action) {
                        case "add": {
                            echo $a + $b;
                            break;
                        }
                        case "diff": {
                            echo $a - $b;
                            break;
                        }
                        case "multi": {
                            echo $a * $b;
                            break;
                        }
                        case "divi": {
                            if ($b != 0) {
                                echo $a / $b;
                            } else {
                                echo "Nie dziel przez 0 !";
                            }
                            break;
                        }
                    }
                }
                ?>
                <br><br>
            </details>

            <details <?php if (isset($_POST["z2"])) echo "open"; ?>>
                <summary>2.2 i 2.3</summary>
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
                ?>
            </details>

            <details <?php if (isset($_POST["z4"])) echo "open"; ?>>
                <summary>2.4</summary>
                <form action="Warsztat2.php" method="post">
                    a: <input type="number" name="a" value="<?php echo $_POST["a"]; ?>"><br>
                    <input type="submit" name="z4" value="Jest pierwsza">
                </form>

<?php
$n = $_POST["a"];
if ($n < 1) {
    echo ("To pojęcie nie ma zastosowania dla $n.");
} elseif ($n == 1) {
    echo ('Liczba 1 nie jest ani pierwsza, ani złożona.');
} else {
    $pierwsza = True;
    for ($i = 2; $i < $n; $i++) {
        if ($pierwsza) {
            if ($n % $i == 0) {
                $pierwsza = False;
            }
        }
    }
}
if ($pierwsza) {
    echo ("Liczba $n jest pierwsza.");
} else {
    echo ("Liczba $n nie jest pierwsza.");
}
?>
            </details>
        </div>
    </body>
</html>
