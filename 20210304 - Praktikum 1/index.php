<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reza ANJAY CODE</title>
    <meta name="nim" content="19106050032">
    <meta name="nama" content="Reza Maulana Alfitra">
</head>

<body>
    <?php
    // INI HELLO WORD
    echo "Hello word";
    ?>
    <br>

    <?php
    // INI KOMENTAR BY REZA

    // INI INCREMENT
    $x = 9;
    $x += 10;
    echo "X equals $x";
    
    /* INI
    KOMEN
    PANJANG
    SEKALI */


    echo '<br>';
    // INI ARRAY
    $rezaArray = 1;
    $rezaString = "PangRez";
    $rezaArrayBanyak = ["One", $rezaArray, $rezaString, "Some"];
    $rezaArrayGini = array("Duar", "Njay", "Radong");

    echo '<br>';
    // INI VARIABLE
    $rezaVariable = "Ini isi variable";

    echo '<br>';
    // INI NGEPRIN VARIABLE
    echo $rezaVariable;

    echo '<br>';
    // INI MEMBUAT ENTER DI PHP HTML
    echo $rezaVariable;
    echo '<br/>';
    echo $rezaString;

    echo '<br>';
    // INI VARIABLE INTEGER
    $rezaInt = 69;

    echo '<br>';
    // INI AKSES ARRAY
    echo $rezaArray[1];

    echo '<br>';
    // INI ARRAY MULTI DIMENSI
    $rezaArrayMulti = [["one", "oneone"], ["two", "twotwo"]];
    echo $rezaArrayMulti[1][0];

    echo '<br>';
    // INI OPERASI INT
    $rezaNumberOne = 8;
    $rezaNumberTwo = 9;
    echo $rezaNumberOne * $rezaNumberTwo;

    echo '<br>';
    // INI IF PHP
    if ($rezaNumberOne > $rezaNumberTwo) {
        echo 'Reza number one lebih banyak dari reza number two';
    } else {
        echo 'reza number two lebih banyak dari reza number one';
    }

    echo '<br>';
    // INI IF DENGAN BANYAK KONDISI
    $varOne = 1;
    $varTwo = 9;
    $varThree = 10;

    if ($varOne < $varTwo and $varThree > $varTwo) {
        echo 'varone lebih kecil dari vartwo dan varthree lebih besar dari var two';
    }

    echo '<br>';
    // ESCAPING STRING
    $rezaStr = 'Watashi anjay\'s duar memsky';

    echo '<br>';
    // TERNARY OPERATOR
    $rezaTery = isset($rezaStr) ? "RezaStr ada" : "RezaStr tidak ada";

    echo '<br>';
    // DATE PHP
    echo date("Y-m-d H:i:s");

    echo '<br>';
    // FOREACH PHP
    $anjay = 0;
    foreach ($rezaArrayBanyak as $item) {
        $anjay++;
    }
    echo "rezaArrayBanyak berisi $anjay variable";

    echo '<br>';
    // FUNGSI PHP
    function tmbh($x, $y)
    {
        return $x + $y;
    }

    echo tmbh(1, 2);
    ?>
</body>

</html>