<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan PHP</title>
</head>
<body>
    <h3>Text Hello World</h3>
    <?php 
        echo "Hello World"
    ?>

    <br>
    <h3>Komentar</h3>
    <?php 
    
        // komentar section
        # komentar section
        /* komentar section */

        $x = 5 /* + 15 */ + 5;
        echo $x
    ?>

    <br>
    <h3>Case Sensitive</h3>
    <?php 
        $color = "red";
        echo "My car is " . $color . "<br>";
        // echo "My house is " . $COLOR . "<br>"; 
        // echo "My boat is " . $coLOR . "<br>"; 
    ?>

    <br>
    <h3>Variabel</h3>
    <?php 
        echo $txt = "Hello World <br>";
        echo $x = 5 . "<br>";
        echo $y = 10.5;
    ?>


    <br>
    <h3>Var 1</h3>
    <?php 
        $txt = "PPW1";
        echo "I love $txt! <br>";
        echo "I love" . $txt . "!";
    ?>


    <br>
    <h3>Var 2</h3>
    <?php 
        $txt = "PPW1";
        
    ?>


    <br>
    <h3>Var 3</h3>
    <?php 
        $x = 5;
        $y = 4;
        echo $x + $y;
    ?>


    <br>
    <h3>Panjang String</h3>
    <?php 
        echo strlen("Hello World!");
    ?>


    <br>
    <h3>Jumlah Kata</h3>
    <?php 
        echo str_word_count("Hello World!");
    ?>


    <br>
    <h3>Reverse String</h3>
    <?php 
        echo strrev("Hello World!");
    ?>


    <br>
    <h3>Find Word</h3>
    <?php 
        echo strpos("Hello World!", "World");
    ?>


    <br>
    <h3>Replace Word</h3>
    <?php 
        echo str_replace("World", "Dolly", "Hello World!");
    ?>
    

    <br>
    <h3>Fungsi</h3>
    <?php 
        function writeMsg(){
            echo "Hello World";
        }

        writeMsg();
    ?>


    <br>
    <h3>Fungsi degan 1 Argumen</h3>
    <?php 
        function familyName($fname){
            echo "$fname Jaeger. <br>";
        }

        familyName("Jani");
        familyName("Hege");
        familyName("Stale");
        familyName("Kai Jim");
        familyName("Borge");
    ?>


    <br>
    <h3>Fungsi dengan 2 Argumen </h3>
    <?php
        function famName($fname, $fyear){
            echo "$fname Jaeger. Born in $fyear <br>";
        }

        famName("Hege", "1975");
        famName("Stale", "1978");
        famName("Kai Jim", "1983");
    ?>


    <br>
    <h3>Fungsi dengan default argumen</h3>
    <?php
        function setHeight($minheight = 50){
            echo "The height is : $minheight <br>";
        }

        setHeight(350);
        setHeight();
        setHeight(135);
        setHeight(80);
    ?>


    <br>
    <h3>Fungsi dengan Kembalian</h3>
    <?php
        function sum($x, $y){
            $z = $x + $y;
            return $z;
        }

        echo "5 + 10 = " . sum(5, 10) . "<br>";
        echo "7 + 13 = " . sum(7, 13) . "<br>";
        echo "2 + 4 = " . sum(2, 4);
    ?>
</body>
</html>