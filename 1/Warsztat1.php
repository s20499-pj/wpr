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

            <details <?php if (isset($_POST["z2"])) echo "open"; ?>>
                <summary>1.2</summary>
                <form action="Warsztat1.php" method="post">
                    a: <input type="number" name="a" value="<?php echo $_POST["a"]; ?>"><br>
                    b: <input type="number" name="b" value="<?php echo $_POST["b"]; ?>"><br>
                    <input type="submit" name="z2" value="Oblicz pole prostokąta">
                </form>
                Pole prostokąta to <?php echo $_POST["a"]*$_POST["b"]; ?>
                <br><br>
            </details>

            <details <?php if (isset($_POST["z3"])) echo "open"; ?>>
                <summary>1.3</summary>
                <form action="Warsztat1.php" method="post">
                    a: <input type="number" name="a" value="<?php echo $_POST["a"]; ?>"><br>
                    <input type="submit" name="z3" value="Oblicz pierwiastek">
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

            <details <?php if (isset($_POST["z5"])) echo "open"; ?>>
                <summary>1.5</summary>
                <form action="Warsztat1.php" method="post">
                    a: <input type="text" name="text1" value="<?php echo $_POST["a"]; ?>"><br>
                    b: <input type="text" name="text2" value="<?php echo $_POST["b"]; ?>"><br>
                    <input type="submit" name="z5" value="Wypisz napisy">
                </form>
                <?php
                $napis1 = $_POST['text1'];
                $napis2 = $_POST['text2'];
                echo '%' . $napis2 . ' ' . $napis1 . '%$#';
                ?>
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
                    case 4:
                    case 6:
                    case 9:
                    case 11: echo ' ma 30 dni';
                }
                ?>
                <br><br>
            </details>

            <details <?php if (isset($_POST["z8"])) echo "open"; ?>>
                <summary>1.8</summary>
                <form action="Warsztat1.php" method="post">
                    a: <input type="number" name="a" value="<?php echo $_POST["a"]; ?>"><br>
                    b: <input type="number" name="b" value="<?php echo $_POST["b"]; ?>"><br>
                    c: <input type="number" name="c" value="<?php echo $_POST["c"]; ?>"><br><br>
                    <input type="submit" name="z8" value="Posortuj liczby">
                </form>
                <?php
                $arr[]=$_POST["a"];
                $arr[]=$_POST["b"];
                $arr[]=$_POST["c"];
                if($arr[0]>$arr[1]&&$arr[0]>$arr[2]&&$arr[1]>$arr[2]) echo ($arr[0].' '.$arr[1].' '.$arr[2].'<br>'.$arr[2].' '.$arr[1].' '.$arr[0]);
                if($arr[0]>$arr[1]&&$arr[0]>$arr[2]&&$arr[1]<$arr[2]) echo ($arr[0].' '.$arr[2].' '.$arr[1].'<br>'.$arr[1].' '.$arr[2].' '.$arr[0]);
                if($arr[1]>$arr[0]&&$arr[1]>$arr[2]&&$arr[0]>$arr[2]) echo ($arr[1].' '.$arr[0].' '.$arr[2].'<br>'.$arr[2].' '.$arr[0].' '.$arr[1]);
                if($arr[1]>$arr[0]&&$arr[1]>$arr[2]&&$arr[0]<$arr[2]) echo ($arr[1].' '.$arr[2].' '.$arr[0].'<br>'.$arr[0].' '.$arr[2].' '.$arr[1]);
                if($arr[2]>$arr[0]&&$arr[2]>$arr[1]&&$arr[0]>$arr[1]) echo ($arr[2].' '.$arr[0].' '.$arr[1].'<br>'.$arr[1].' '.$arr[0].' '.$arr[2]);
                if($arr[2]>$arr[0]&&$arr[2]>$arr[1]&&$arr[0]<$arr[1]) echo ($arr[2].' '.$arr[1].' '.$arr[0].'<br>'.$arr[0].' '.$arr[1].' '.$arr[2]);
                ?>
                <br><br>
            </details>

            <details <?php if (isset($_POST["z10"])) echo "open"; ?>>
                <summary>1.10</summary>
                <form action="Warsztat1.php" method="post">
                    a: <input type="number" min="1" name="a" value="<?php echo $_POST["a"]; ?>"><br><br>
                    <input type="submit" name="z10" value="Narysuj wzór">
                </form>
                <?php
                for ($i = 0; $i < $_POST["a"]; $i++) {
                    for($j = 0; $j<=$i; $j++){
                        echo '*';
                    }
                    echo '<br>';
                }
                for($i=0; $i<$_POST["a"]; $i++){
                    for($j=$_POST["a"]; $j>$i; $j--){
                        echo '*';
                    }
                    echo '<br>';
                }
                for ($i = 0; $i < $_POST["a"]; $i++) {
                    for($j=0; $j<$_POST["a"]; $j++){
                        if($j<$i) echo '&nbsp;';
                        else echo '*';
                    }
                    echo '<br>';
                }
                for ($i = 0; $i < $_POST["a"];) {
                    $i++;
                    for($j= $_POST["a"]; $j>0; $j--){
                        if($j>$i) echo '&nbsp;';
                        else echo '*';
                    }
                    echo '<br>';
                }
                ?>
            </details>

            <details <?php if (isset($_POST["z12"])) echo "open"; ?>>
                <summary>1.11</summary>
                <form action="Warsztat1.php" method="post">
                    <input type="text" name="txt" value="<?php echo $_POST["txt"]; ?>"><br><br>
                    <input type="submit" name="z12" value="Sprawdź pangram">
                </form>
                <?php

                $alphabet = array('a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z');
                $array = str_split(strtolower($_POST["txt"]));
                foreach ($array as $char) {
                    $key = array_search($char, $alphabet);
                    if (isset($key)) {
                        unset($alphabet[$key]);
                    }
                }
                if (!$alphabet) {
                    echo "true";
                }
                else echo "false";
                ?>
            </details>
        </div>
    </body>
</html>
