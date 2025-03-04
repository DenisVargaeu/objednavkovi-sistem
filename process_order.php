<?php
$datumimt = date('Y-m-d H:i:s');

///DENIS
    $db_server = "server"; 
        $db_login = "login";
        $db_password = "heslo";
        $db_name = "meno db";;

// Create connection
$dbh0 = mysqli_connect($db_server, $db_login, $db_password, $db_name);

// Check connection
if (!$dbh0) {
    die("Naše služby sú dočasne obmedzené. Pracujeme na ich rýchlom odstránení" . mysqli_connect_error());
}

$data = json_decode(file_get_contents('php://input'), true);

if ($data) {
    $obsah_objednavky = implode(', ', $data['items']);
    $suma = $data['total'];
    $platba = $data['paymentMethod'];
    $phone = $data['phone'];
    $adresa = $data['adresa'];

	$cisloobj = rand(100,999);

    $sql = "INSERT INTO obj (obsah_objednavky, suma, platba, telefon, cisloobj, ulica) VALUES ('$obsah_objednavky', '$suma', '$platba', '$phone', '$cisloobj', '$adresa')";

    if (mysqli_query($dbh0, $sql)) {
        echo "Objednávka bola úspešne uložená.";
    } else {
        echo "Chyba pri ukladaní objednávky: " . mysqli_error($dbh0);
    }

    mysqli_close($dbh0);
} else {
    echo "Neplatné údaje.";
}
?>
