<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dokončne objednavky</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f2f2f2;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 1200px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .message {
            margin: 20px 0;
        }
        .form-control:disabled, .form-control[readonly] {
            background-color: #e9ecef;
            opacity: 1;
        }
    </style>
	<meta http-equiv="refresh" content="1">
</head>
<body>
    <div class="container">
        <h1 class="text-center">Objednávky</h1>

        <?php
        // Pripojenie k databáze
        $db_server = "sql20.dnsserver.eu"; 
        $db_login = "db91123xdenis";
        $db_password = "8toT*wlT2bc.J3";
        $db_name = "db91123xdenis";
		
        // Vytvorenie spojenia
        $dbh = mysqli_connect($db_server, $db_login, $db_password, $db_name);

        // Kontrola spojenia
        if (!$dbh) {
            die("Spojenie zlyhalo: " . mysqli_connect_error());
        }

        //akcia na zmenu stavu objednavky
        if (isset($_GET['action'])) {
            $id = $_GET['action'];
            $stmt = $dbh->prepare("UPDATE obj SET stav='2' WHERE id = ?");
            $stmt->bind_param("i", $id);
            if ($stmt->execute()) {
                echo "<div class='alert alert-success message'>Objednávka s ID $id bola úspešne prijatá.</div>";
            } else {
                echo "<div class='alert alert-danger message'>Chyba pri aktualizácii objednávky: " . $stmt->error . "</div>";
            }
            $stmt->close();
        }

        // Funkcia pre odstránenie objednávky
        if (isset($_GET['delete'])) {
            $id = $_GET['delete'];
            $stmt = $dbh->prepare("DELETE FROM obj WHERE id = ?");
            $stmt->bind_param("i", $id);
            if ($stmt->execute()) {
                echo "<div class='alert alert-success message'>Objednávka s ID $id bola úspešne odstránená.</div>";
            } else {
                echo "<div class='alert alert-danger message'>Chyba pri odstraňovaní objednávky: " . $stmt->error . "</div>";
            }
            $stmt->close();
        }

        // Funkcia pre úpravu objednávky
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['update'])) {
            $id = $_POST['id'];
            $cisloobj = $_POST['cisloobj'];
            $cas = $_POST['cas'];
            $stav = $_POST['stav'];
            $obsah_objednavky = $_POST['obsah_objednavky'];
            $suma = $_POST['suma'];
            $platba = $_POST['platba'];
            $telefon = $_POST['telefon'];

            $stmt = $dbh->prepare("UPDATE obj SET 
                cisloobj = ?, 
                cas = ?, 
                stav = ?, 
                obsah_objednavky = ?, 
                suma = ?, 
                platba = ?, 
                telefon = ? 
                WHERE id = ?");
            $stmt->bind_param("sssssssi", $cisloobj, $cas, $stav, $obsah_objednavky, $suma, $platba, $telefon, $id);

            if ($stmt->execute()) {
                echo "<div class='alert alert-success message'>Objednávka s ID $id bola úspešne upravená.</div>";
            } else {
                echo "<div class='alert alert-danger message'>Chyba pri úprave objednávky: " . $stmt->error . "</div>";
            }
            $stmt->close();
        }

        // Zobrazenie formulára na úpravu objednávky
        if (isset($_GET['edit'])) {
            $id = $_GET['edit'];
            $stmt = $dbh->prepare("SELECT * FROM obj WHERE id = ?");
            $stmt->bind_param("i", $id);
            $stmt->execute();
            $result_single = $stmt->get_result();
            $order = $result_single->fetch_assoc();
            $stmt->close();
            ?>

            <h2 class="text-center">Úprava objednávky</h2>
            <form action="donaska.php" method="post">
                <input type="hidden" name="id" value="<?= htmlspecialchars($order['id']) ?>">
                <div class="form-group">
                    <label for="cisloobj">Číslo objednávky</label>
                    <input type="text" class="form-control" id="cisloobj" name="cisloobj" value="<?= htmlspecialchars($order['cisloobj']) ?>" required>
                </div>
                <div class="form-group">
                    <label for="cas">Čas</label>
                    <input type="text" class="form-control" id="cas" name="cas" value="<?= htmlspecialchars($order['cas']) ?>" required>
                </div>
                <div class="form-group">
                    <label for="stav">Stav</label>
                    <input type="text" class="form-control" id="stav" name="stav" value="<?= htmlspecialchars($order['stav']) ?>" required>
                </div>
                <div class="form-group">
                    <label for="obsah_objednavky">Obsah objednávky</label>
                    <textarea class="form-control" id="obsah_objednavky" name="obsah_objednavky" rows="3" required><?= htmlspecialchars($order['obsah_objednavky']) ?></textarea>
                </div>
                <div class="form-group">
                    <label for="suma">Suma objednávky</label>
                    <input type="text" class="form-control" id="suma" name="suma" value="<?= htmlspecialchars($order['suma']) ?>" required>
                </div>
                <div class="form-group">
                    <label for="platba">Platba</label>
                    <input type="text" class="form-control" id="platba" name="platba" value="<?= htmlspecialchars($order['platba']) ?>" required>
                </div>
                <div class="form-group">
                    <label for="telefon">Telefón</label>
                    <input type="text" class="form-control" id="telefon" name="telefon" value="<?= htmlspecialchars($order['telefon']) ?>" required>
                </div>
                <button type="submit" name="update" class="btn btn-primary">Uložiť zmeny</button>
            </form>

            <?php
        }

        // SQL dotaz na získanie všetkých objednávok
        $stmt = $dbh->prepare("SELECT * FROM obj WHERE stav='2' ORDER BY id DESC");
        $stmt->execute();
        $result = $stmt->get_result();
        ?>
        
        <!-- Tabuľka s údajmi o objednávkach -->
        <table class='table table-bordered table-striped'>
            <thead class='thead-dark'>
                <tr>
                    <th>ID</th>
                    <th>Číslo objednávky</th>
                    <th>Čas</th>
                    <th>Stav</th>
                    <th>Obsah objednávky</th>
                    <th>Suma objednávky</th>
                    <th>Platba</th>
                    <th>Telefón</th>
                   
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $result->fetch_assoc()): ?>
                    <tr>
                        <td><?= htmlspecialchars($row['id']) ?></td>
                        <td><?= htmlspecialchars($row['cisloobj']) ?></td>
                        <td><?= htmlspecialchars($row['cas']) ?></td>
                        <td><?= htmlspecialchars($row['stav']) ?></td>
                        <td><?= htmlspecialchars($row['obsah_objednavky']) ?></td>
                        <td><?= htmlspecialchars($row['suma']) ?></td>
                        <td><?= htmlspecialchars($row['platba']) ?></td>
                        <td><?= htmlspecialchars($row['telefon']) ?></td>
                        <td>
                            <a href="donaska.php?action=<?= htmlspecialchars($row['id']) ?>" class="btn btn-primary btn-sm">ok</a>
                            <a href="donaska.php?edit=<?= htmlspecialchars($row['id']) ?>" class="btn btn-warning btn-sm">Upraviť</a>
                            <a href="donaska.php?delete=<?= htmlspecialchars($row['id']) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Ste si istý, že chcete odstrániť túto objednávku?');">Odstrániť</a>
                        </td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>

        <!-- Zatvorenie spojenia -->
        <?php $stmt->close(); ?>
        <?php $dbh->close(); ?>
    </div>
</body>
</html>
