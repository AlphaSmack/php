<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>harjutus-2 - PHP põhitõed</title>
</head>
<body>
    <h2>Muutujad</h2>
    <?php
        $var = 10;
        echo $var ."<br>";

        $var = 20;
        echo $var ."<br>"
    ?>

    <h2>Stringid</h2>
    <?php
        echo 'Esimene string';
        echo '<br>';
        $t=24;
        $s=26;
        echo $t,$s;
    ?>

    <h2>Nimekirja väljastamine muutujate ja stringide abil</h2>
    <?php
        $student1="Aile";
        $student2="Tõnis";
        $student3="Keijo";
        $student4="Merili";
        $student5="Maile";
    ?>

    <ul>
        <?php
            echo "<li>".$student1."</li>";
            echo "<li>".$student2."</li>";
            echo "<li>".$student3."</li>";
            echo "<li>".$student4."</li>";
            echo "<li>".$student5."</li>";
        ?>
    </ul>
<br>
    <?php
        $firstName="Risto";
        $lastName=" Mikelsaar";
        $fullName = $firstName.$lastName;

        echo $fullName;
    ?>

</body>
</html>