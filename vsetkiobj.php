<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Objednávky a Analytika</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
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
        .analytics-section {
            margin-top: 40px;
        }
        .analytics-section h2 {
            margin-bottom: 20px;
        }
        .card {
            margin-bottom: 20px;
        }
        table {
            margin-top: 20px;
        }
    </style>
    <meta http-equiv="refresh" content="60"> <!-- Refresh every minute -->
</head>
<body>
    <div class="container">
        <h1 class="text-center">Objednávky a Analytika</h1>

        

        <!-- Tabuľka s údajmi o objednávkach -->
        <table class="table table-bordered table-striped">
            <thead class="thead-dark">
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
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>

        <!-- Analytika -->
        <div class="analytics-section">
            <h2 class="text-center">Analytika Predaja</h2>

            <!-- Najpredávanejšie jedlo -->
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Najpredávanejšie jedlo</h5>
                    <canvas id="bestSellingChart"></canvas>
                </div>
            </div>

            <!-- Počet objednávok -->
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Počet objednávok za deň</h5>
                    <canvas id="ordersChart"></canvas>
                </div>
            </div>

            <!-- Počet dokončených objednávok -->
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Dokončené objednávky za deň</h5>
                    <canvas id="completedOrdersChart"></canvas>
                </div>
            </div>
        </div>

        <script language"javascript">
            // Najpredávanejšie jedlo
            var bestSellingCtx = document.getElementById('bestSellingChart').getContext('2d');
            var bestSellingData = {
                labels: ['<?= htmlspecialchars($best_selling['item_name'] ?? 'Žiadne údaje') ?>'],
                datasets: [{
                    label: 'Počet predajov',
                    data: ['<?= htmlspecialchars($best_selling['total_quantity'] ?? 0) ?>'],
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 1
                }]
            };
            new Chart(bestSellingCtx, {
                type: 'bar',
                data: bestSellingData,
                options: {
                    responsive: true,
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });

            // Počet objednávok
            var ordersCtx = document.getElementById('ordersChart').getContext('2d');
            var ordersData = {
                labels: ['Dnes'],
                datasets: [{
                    label: 'Počet objednávok',
                    data: ['<?= htmlspecialchars($order_count) ?>'],
                    backgroundColor: 'rgba(153, 102, 255, 0.2)',
                    borderColor: 'rgba(153, 102, 255, 1)',
                    borderWidth: 1
                }]
            };
            new Chart(ordersCtx, {
                type: 'line',
                data: ordersData,
                options: {
                    responsive: true,
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });

            // Počet dokončených objednávok
            var completedOrdersCtx = document.getElementById('completedOrdersChart').getContext('2d');
            var completedOrdersData = {
                labels: ['Dnes'],
                datasets: [{
                    label: 'Dokončené objednávky',
                    data: ['<?= htmlspecialchars($completed_count) ?>'],
                    backgroundColor: 'rgba(255, 99, 132, 0.2)',
                    borderColor: 'rgba(255, 99, 132, 1)',
                    borderWidth: 1
                }]
            };
            new Chart(completedOrdersCtx, {
                type: 'pie',
                data: completedOrdersData,
                options: {
                    responsive: true
                }
            });
        </script>
    </div>
</body>
</html>
