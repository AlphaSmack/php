<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>harjutus-2 - PHP põhitõed</title>
</head>

<body>
<h1>See dokument on minu esimene katsetus PHP-ga</h1>
    <?php echo "Esimene echo"; ?>
<br>
    <?php echo "Esimene pool " . " ja teine pool."; ?>
<br>
    <?php echo 5.2 + 4.6."<br>";
          echo 6.2 - 2.2."<br>";
          echo 3 * 4 ."<br>";
          echo 12 / 3 ."<br>";
    ?>
<br><br>
    <?php
        //See  siin on kommentaar
    ?>
<br><br>
    <?php
        $var = 54321;
        echo $var;
    ?>
</body>
</html>