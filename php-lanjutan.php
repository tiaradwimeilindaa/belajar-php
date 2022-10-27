<?php

// $nama = "EXO";

// echo $nama;
// echo "<br/>";
// echo $nama;
// echo "<br/>";

//PERULANGAN

// $no = 10;
// $i = 0;

// for ($i=0; $i<$no; $i++){
//      $n = $i + 1;
//      echo $n."" .$nama."<br/>";
// }

// WHILE BIASANYA DIPAKAI DATABASE
// while ($i <$no) {
//      $n= $i + 1;
//      echo $n."".$nama. "<br/>";
//      $i++;
// }

// ini adalah komentar 1 baris, jadi kalau saya enter
// do {
//     $n= $i + 1;
//     echo $n."".$nama. "<br/>";
//     $i++;
// } while ($i < $no)

// $data = array("baekhyun","chanyeol","d.o.","kai","suho","sehun");

// echo $data[2];

// foreach($data as  $value) {
//     echo $value. "<br>";
// }

// PERCABANGAN

// if ($nama == "EXO"){
//     echo $nama." adalah grup visual";
// } else if ($nama == "EXO"){
//     echo $nama."adalah grup korea";
// }

// switch($nama){
//     case "EXO":
//         $pesan = $nama. " adalah boyband vocal dan visual";
//     break;
//     case "BTS":
//         $pesan = $nama. " adalah boyband vocal dan rapper";
//     break;
//         default :
//         $pesan = $nama. " adalah boyband korea selatan";
// }
// echo $pesan;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Input nama dan diulang </h1>
    <form action="<?php $_SERVER["PHP_SELF"] ?>" method="post">
        <label>Nama</label>
        <input type="text" name="nama">
        <label>Jumlah</label>
        <input type="text" name="no"> 
        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
        if (!empty($_POST["submit"])){

            switch($_POST["nama"]){
                case "EXO":
                    $pesan = $_POST["nama"]. " adalah boyband vocal dan visual";
                break;
                case "BTS":
                    $pesan = $_POST["nama"]. " adalah boyband vocal dan rapper";
                break;
                default :
                    $pesan = $_POST["nama"]. " adalah boyband korea selatan";
            }
            
            for ($i = 0; $i<$_POST["no"];$i++){
                echo $pesan."<br>";
            }
        }else {
            echo "Anda belum input nama dan jumlah";
        }
    ?>
</body>
</html>