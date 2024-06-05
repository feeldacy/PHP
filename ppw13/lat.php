<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        echo "<h2>Kondisional If</h2>";
        $t = date("H");
        if ($t < "20") {
            echo "Have a good day! <br>";
        }

        echo "Pukul: $t <br>";
        echo "Timezone: ";
        echo date_default_timezone_get();

        echo "<br><br>";
        
        if ($t < "20") {
            echo "Have a good day! <br>";
        } else {
            echo "Have a good night! <br>";
        }

        if ($t < "10") {
            echo "Have a good morning! <br>";
        } elseif ($t < "20") {
            echo "Have a good day! <br>";
        } else {
            echo "Have a good night! <br>";
        }

        
        
        echo "<h2>Switch</h2>";
        $favcolor = "red";
        switch ($favcolor) {
            case "red":
                echo "Your favorite color is red! <br>";
                break;
            case "blue":
                echo "Your favorite color is blue! <br>";
                break;
            case "green":
                echo "Your favorite color is green! <br>";
                break;
            default:
                echo "Your favorite color is neither red, blue, nor green! <br>";
        }

        echo "<h2>Perulangan</h2>";
        echo "<h4>While</h4>";

        $x = 1;
        while ($x <= 5){
            echo "The number is: $x <br>";
            $x++;
        }

        echo "<h4>Do...While</h4>";
        $z = 1;
        do {
            echo "The number is: $x <br>";
            $x++;
        } while ($x <= 8);

        echo "<h4>For</h4>";
        for ($y = 0; $y <= 10; $y++){
            echo "The number is: $y <br>";
        }

        echo "<h4>For Each</h4>";
        $colors = array("red", "green", "blue", "yellow");
        foreach ($colors as $value){
            echo "$value <br>";
        }

        echo "<h2>Array</h2>";
        echo "<h4>Deklarasi dan akses array</h4>";

        $cars = array("Volvo", "BMW", "Toyota");
        echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . "."; 

        echo "<h4>Mengetahui Panjang Array</h4>";
        echo count($cars);

        echo "<h4>Mengakses Array Melalui Loop</h4>";
        $arrlength = count($cars);
        for ($n = 0; $n < $arrlength; $n++){
            echo $cars[$n];
            echo "<br>";
        }

        echo "<h4>Mendeklarasikan Associative array dan mengaksesnya</h4>";
        $age = array("Peter" => "35", "Ben"=>"37", "Joe"=>"43");
        echo "Peter is " . $age['Peter'] . " years old";

        echo "<h4>Mengakses Semua Nilai Associative Array Dengan Perulangan</h4>";
        foreach($age as $x => $x_value) {
            echo "Key = " . $x . ", Value = " . $x_value;
            echo "<br>";
        }

        echo "<h4>Aray Multidimensi</h4>";
        $vehicles = array
        (
            array("Volvo", 22, 18),
            array("BMW", 15, 13),
            array("Saab", 5, 2),
            array("Land Rover", 17, 15)
        );

        for ($row = 0; $row < 4; $row++) {
            echo "<p><b> Row number $row </b></p>";
            echo "<ul>";
            for ($col = 0; $col < 3; $col++) {
                echo "<li>" . $vehicles[$row][$col] . "</li>";
            }
            echo "</ul>";
        }

    ?>
</body>
</html>