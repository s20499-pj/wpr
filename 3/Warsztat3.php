<!DOCTYPE html>
<html>
    <head>
        <title>Warsztat3</title>
    </head>
    <body style="background:DimGray; color:white;">
        Warsztat3<br>

        <div>

            <details <?php if (isset($_POST["z1"])) echo "open"; ?>>
                <summary>3.1</summary>
                <form action="Warsztat3.php" method="post">
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
                            require 'function.php';
                            add($a,$b);
                            break;
                        }
                        case "diff": {
                            require 'function.php';
                            diff($a,$b);
                            break;
                        }
                        case "multi": {
                            require 'function.php';
                            multi($a,$b);
                            break;
                        }
                        case "divi": {
                            require 'function.php';
                            divi($a,$b);
                            break;
                        }
                    }
                }
                ?>
                <br><br>
            </details>

            <details
                <?php if (isset($_POST["z2"]) ) echo "open"; ?>>
                <summary>3.2</summary>
                <form method="post">
                    Nick:<br>
                    <input type="text" name="nick"><br>
                    Komentarz:<br>
                    <input type="text" name="komentarz"><br>
                    <input type="submit" name="z2" value="Wyślij komentarz">

                </form>

                <?php
                $fp = fopen("komentarze.txt", "a");
                fwrite($fp, $_POST["nick"]);
                fwrite($fp, " ");
                fwrite($fp, $_POST["komentarz"]);
                fwrite($fp, "\n");
                fclose($fp);
                ?>

            </details>

            <details
                <?php if (isset($_POST["z3"]) || isset($_POST["z3w"])) echo "open"; ?>>
                <summary>3.3</summary>
                <form action="Warsztat3.php" method="post">
                    <label>Imię</label><input type="text" name="imie" size="20" value="<?php echo $_POST["imie"]; ?>" required><br>
                    <label>Nazwisko</label><input type="text" name="nazwisko" size="20" value="<?php echo $_POST["nazwisko"]; ?>" required><br>
                    <label>Licza osób</label><input type="number" name="osoby" min="1" max="4" value="<?php echo $_POST["osoby"]; ?>" required><br>
                    <label>Data przyjadu</label><input type="date" name="przyjazd" size="5" value="<?php echo $_POST["przyjazd"]; ?>" required><br>
                    <label>Data wyjazdu</label><input type="date" name="wyjazd" size="5" value="<?php echo $_POST["wyjazd"]; ?>" required><br>
                    <label>Adres<br>Ulica</label><input type="text" name="ulica" size="20" value="<?php echo $_POST["ulica"]; ?>" >
                    <label>Nr domu</label><input type="text" name="dom" size="5" value="<?php echo $_POST["dom"]; ?>" >
                    <label>Nr mieszkania</label><input type="text" name="mieszkanie" size="5" value="<?php echo $_POST["mieszkanie"]; ?>" ><br>
                    <label>Nr karty</label><input type="number" name="karta" size="20" min=0000000000000000 max=9999999999999999 value="<?php echo $_POST["karta"]; ?>" required><br>
                    <label>Email</label><input type="email" name="email" size="10" value="<?php echo $_POST["email"]; ?>" required><br>
                    <label>Nr telefonu</label><input type="number" name="tel" size="10" min=111111111 max=999999999 value="<?php echo $_POST["tel"]; ?>"><br>
                    <label>Łóżko dla dziecka</label><input type="checkbox" name="dziecko" value="true" value="<?php echo $_POST["dziecko"]; ?>" ><br>
                    <label>Kliumatyzacja</label><input type="checkbox" name="klimatyzacja" value="true" value="<?php echo $_POST["klimatyzacja"]; ?>" ><br>
                    <input type="submit" name="z3" value="Wyślij">
                </form>

                <?php
                if (isset($_POST["imie"]) &&
                    isset($_POST["nazwisko"]) &&
                    isset($_POST["osoby"]) &&
                    isset($_POST["przyjazd"]) &&
                    isset($_POST["wyjazd"]) &&
                    isset($_POST["karta"]) &&
                    isset($_POST["email"])) {

                    $data = array($_POST["imie"],
                                  $_POST["nazwisko"],
                                  $_POST["osoby"],
                                  $_POST["przyjazd"],
                                  $_POST["wyjazd"],
                                  $_POST["ulica"],
                                  $_POST["dom"],
                                  $_POST["mieszkanie"],
                                  $_POST["karta"],
                                  $_POST["email"],
                                  $_POST["tel"],
                                  $_POST["dziecko"],
                                  $_POST["klimatyzacja"]);

                    if (!$file = fopen("form.csv", "a")) {
                        echo "Can not open file with data.";
                    } else {
                        fputcsv($file, $data);
                        fclose($file);
                    }
                }
                ?>

                <form action="Warsztat3.php" method="post">
                    <label>Show results</label><input type="submit" name="z3w" value="Wyświetl">
                </form>

                <?php
                if (isset($_POST["z3w"])) {
                    if (($file = fopen("form.csv", "r")) == TRUE) {
                        while (($data = fgetcsv($file, 0, ",")) == TRUE) {
                            $records = count($data);
                            for ($i = 0; $i < $records; $i++) {
                                echo $data[$i].", ";
                                if($i%13==12){
                                    echo "<br>";
                                }
                            }
                        }
                    }
                    fclose($file);
                }
                ?>
            </details>
        </div>
    </body>
</html>
