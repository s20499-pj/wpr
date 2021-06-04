<?php
    echo "a <br>";
if (!$db = mysqli_connect("localhost", "root", "password","MovieService")) {
    exit("Nie udało się połączyć <br>");
}
else {
    echo "Udało się połączyć z bazą <br>";



    echo "b <br>";
    $query = "select * from movie";

    $result = mysqli_query($db,$query);
    if(!$result){
        echo "Nie udało się <br>";
    }
    else{
        echo "Udało się pobrać dane <br>";
    }

    $result = mysqli_query($db,$query);
    while($rows = mysqli_fetch_row($result)){
        foreach ($rows as $row){
            echo $row;
        }
        echo "<br>";
    }

    $result = mysqli_query($db,$query);
    while($arr=mysqli_fetch_array($result))
    {
        echo $arr['id']."<br>";
    }

    $result = mysqli_query($db,$query);
    if ($result) {
        $x = mysqli_num_rows($result);
        echo "Jest ". $x. " rekordów <br>";
    }
    else{
        echo "Brak rekordów <br>";
    }



    echo "c <br>";
    $insert = "INSERT INTO movie (title, category, director, rating) VALUES ('Straszny film','Horror','stave jober',1)";
    $dqresult = mysqli_query($db, $insert);

    $result = mysqli_query($db,$query);
    $x = mysqli_num_rows($result);
    echo "Teraz jest ". $x. " rekordów <br>";

    mysqli_close($db);
}
?>
