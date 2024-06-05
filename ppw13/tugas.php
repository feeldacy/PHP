<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $num = array(7, 51, 98, 13, 75, 29, 46, 82, 61, 38);
        echo "Data numbers: ";
        for ($x = 0; $x < count($num); $x++){
            echo "$num[$x] ";
        }
        echo "<br><br>";
        echo "Data even numbers: ";
        for ($x = 0; $x < count($num); $x++){
            if ($num[$x] % 2 == 0){
                echo "$num[$x] ";
            }
        }

        echo "<br><br>";

        $students = array
        (
            array("Joko", 21, "Ilmu Komputer"),
            array("Budi", 20, "Teknik Elektro"),
            array("Roni", 18, "Teknik Mesin"),
            array("Sri", 19, "Filsafat"),
            array("Putri", 21, "Hukum"),
            array("Tri", 22, "Matematika")
        );

        for ($row = 0; $row < 6; $row++){
            if ($students[$row][1] > 19){
                echo "<b>Data Mahasiswa: </b><br>";
                echo "Nama Mahasiswa : " . $students[$row][0] . "<br>";
                echo "Umur Mahasiswa : " . $students[$row][1] . "<br>";
                echo "Jurusan Mahasiswa : " . $students[$row][2] . "<br><br>";
            }
        }

    ?>
</body>
</html>