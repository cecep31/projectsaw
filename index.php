<!DOCTYPE html>
<html>
<head>
    <title>Metode SAW</title>
    <link rel="stylesheet" type="text/css" href="manatap.css" />
</head>
<body>
<nav>
    <ul>
        <li><a href="/projectsaw">Home</a></li>
        <li><a href="?p=kriteriaadd">Tambah kriteria</a></li>
        <li><a href="?p=alternatifadd">Tambah alternatif</a></li>
        <li><a href="https://github.com/cecep31">Contact Me</a></li>
    </ul>
</nav>

<?php
include "koneksi.php";

// if($_GET["p"] == "kategoriadd"){
//   include "kategoriadd.php";
// }else if($_GET["p"] == "kriteriaedit"){
//   include "kriteriaedit.php";
// }else{
//     include "home.php";
// }


if(isset($_GET['p'])){
    $page = $_GET['p'];

    switch ($page) {
        case 'kriteriaadd':
            include "kriteriaadd.php";
            break;
        case 'cedit':
            include "kriteriaedit.php";
            break;
        case 'cdel':
            include "kriteriadel.php";
            break;
        case 'alternatifadd':
            include "alternatifadd.php";
            break;         
        case 'kriteriaedit':
            include "kriteriaedit.php";
            break;			
        default:
            echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
            break;
    }
}else{
    include "home.php";
}


?>


</body>
</html>