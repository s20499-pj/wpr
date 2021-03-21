<!DOCTYPE html>
<html>
    <head>
        <title>Warsztat1</title>
    </head>
    <body style="background:DimGray; color:white;">
        Warsztat1<br>

        <div>
            <details open>
                <summary>1.1</summary>
                <ul style="list-style-type:none;">
                    <?php
                    echo 'Witaj w świecie PHP!!!';
                    ?>
                </ul>
                <br><br>
            </details>

            <details <?php if (isset($_POST["_1.2"])) echo "open"; ?>>
                <summary>1.2</summary>
                <form action="Warsztat1.php" method="post">
                    a: <input type="number" name="a" value="<?php echo $_POST["a"]; ?>"><br>
                    b: <input type="number" name="b" value="<?php echo $_POST["b"]; ?>"><br>
                    <input type="submit" name="_1.2" value="Oblicz pole prostokąta">
                </form>
                Pole prostokąta to <?php echo $_POST["a"]*$_POST["b"]; ?>
                <br><br>
            </details>

            <details <?php if (isset($_POST["_1.3"])) echo "open"; ?>>
                <summary>1.3</summary>
                <form action="Warsztat1.php" method="post">
                    a: <input type="number" name="a" value="<?php echo $_POST["a"]; ?>"><br>
                    <input type="submit" name="_1.3" value="Oblicz pierwiastek">
                </form>
                Pierwiastek kwadratowy z c=<?php echo round(sqrt($_POST["a"]),2); ?>
                <br><br>
            </details>

            <details <?php if (isset($_POST["z4"])) echo "open"; ?>>
                <summary>1.4</summary>
                <form action="Warsztat1.php" method="post">
                    a: <input type="number" name="a" value="<?php echo $_POST["a"]; ?>"><br>
                    b: <input type="number" name="b" value="<?php echo $_POST["b"]; ?>"><br>
                    <input type="submit" name="z4" value="Wykonaj obliczenia">
                </form>
                <?php echo "a+b=".$_POST["a"]+$_POST["b"]; ?><br>
                <?php echo "a-b=".$_POST["a"]-$_POST["b"]; ?><br>
                <?php echo "a*b=".$_POST["a"]*$_POST["b"]; ?><br>
                <?php if($_POST["b"]!=0) echo "a/b=".$_POST["a"]/$_POST["b"]; ?>
                <br><br>
            </details>

            <details <?php if (isset($_POST["z6"])) echo "open"; ?>>
                <summary>1.6</summary>
                <form action="Warsztat1.php" method="post">
                    a: <input type="number" name="a" value="<?php echo $_POST["a"]; ?>"><br>
                    b: <input type="number" name="b" value="<?php echo $_POST["b"]; ?>"><br>
                    c: <input type="number" name="c" value="<?php echo $_POST["c"]; ?>"><br><br>
                    <input type="submit" name="z6" value="Zbuduj trójkąt">
                </form>
                <?php
                if($_POST["a"]>0 &&
                   $_POST["b"]>0 &&
                   $_POST["c"]>0 &&
                   $_POST["a"]+$_POST["b"]>$_POST["c"] &&
                   $_POST["a"]+$_POST["c"]>$_POST["b"] &&
                   $_POST["b"]+$_POST["c"]>$_POST["a"]){
                    echo "Da się zbudować trójkąt";}
                else echo "BŁĄD";
                ?>
                <br><br>
            </details>

            <details <?php if (isset($_POST["z7"])) echo "open"; ?>>
                <summary>1.7</summary>
                <form action="Warsztat1.php" method="post">
                    a: <input type="number" min="1" max="12" name="a" value="<?php echo $_POST["a"]; ?>"><br>
                    <input type="submit" name="z7" value="Jaki to miesiąc?">
                </form>
                <?php
                $nr=$_POST['a'];
                switch ($nr)
                {
                    case 1:echo 'styczeń';break;
                    case 2:echo 'luty';break;
                    case 3:echo 'marzec';break;
                    case 4:echo 'kwiecień';break;
                    case 5:echo 'maj';break;
                    case 6:echo 'czerwiec';break;
                    case 7:echo 'lipiec';break;
                    case 8:echo 'sierpień';break;
                    case 9:echo 'wrzesień';break;
                    case 10:echo 'październik';break;
                    case 11:echo 'listopad';break;
                    case 12:echo 'grudzień';break;
                }
                switch($nr)
                {
                    case 1:
                    case 3:
                    case 5:
                    case 7:
                    case 8:
                    case 10:
                    case 12: echo ' ma 31 dni'; break;
                    case 2: echo ' ma 28 lub 29 dni'; break;
                    default: echo ' ma 30 dni';
                }
                ?>
            </details>
        </div>
    </body>
</html>
