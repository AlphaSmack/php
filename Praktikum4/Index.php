<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Praktikumi juhend 4 - Andmetüübid</title>
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
<br>
<br>
    <?php
        $test = "Ei tea";
        echo "$test kas interpolatsioon töötab";
    ?>
<br>
<br>
    <?php
        $katse = "proov";
        echo "Me peame {$katse}ima, kas ka ka nii saab.";
    ?>
<br><br>

    <?php
        $source = "see tekst on väikeste tähtedega!!!";
        $upper = strtoupper($source);
        echo "<p>{$upper}</p><br>";

        $ucf= ucfirst($source);
        echo "<p>$ucf</p><br>";

        echo strlen($source)."<br><br>";
    ?>
<br>
<h2>Täisarvud</h2>
<br>

    <?php
        $nr1= 4;
        $nr2= 2;
    echo ($nr1+$nr2)*5;
    echo "<br><br>";

    echo pow(5, 2);
    echo "<br><br>";
    echo sqrt(25);
    echo "<br><br>";
    echo rand();
    echo "<br><br>";
    echo rand(10, 25);
    echo "<br><br>";

    $sample_nr = 2;
    $sample_nr = $sample_nr + 13;
    echo $sample_nr;

    echo "<br><br>";

    $sample_nr2 = 15;
    $sample_nr2 += 5;

    echo $sample_nr2;
?>

<h2>Numbri ja stringi liitmine</h2>

    <?php
    echo 5 + "5";
    ?>
<br><br>
    <?php
    echo 5 + "7 teksapüksi";
    ?>

</body>
</html>