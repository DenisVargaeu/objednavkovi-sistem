<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prihlasovacia stránka</title>
    <style>
        /* Použijeme rovnaký CSS ako predtým */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
            background: linear-gradient(135deg, #5dade2 0%, #7dcea0 100%);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #2c3e50;
        }

        .login-container {
            background-color: rgba(255, 255, 255, 0.9);
            padding: 50px;
            border-radius: 25px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 420px;
            text-align: center;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .login-container:hover {
            transform: scale(1.02);
            box-shadow: 0 15px 60px rgba(0, 0, 0, 0.2);
        }

        h2 {
            margin-bottom: 30px;
            font-size: 36px;
            color: #2980b9;
            font-weight: 600;
        }

        .input-group {
            margin-bottom: 25px;
            text-align: left;
        }

        label {
            display: block;
            font-size: 16px;
            color: #34495e;
            margin-bottom: 8px;
            font-weight: 500;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 15px;
            font-size: 16px;
            background-color: #ecf0f1;
            border: 2px solid #bdc3c7;
            border-radius: 15px;
            transition: border-color 0.3s ease, box-shadow 0.3s ease;
            color: #2c3e50;
            outline: none;
        }

        input[type="text"]:focus,
        input[type="password"]:focus {
            border-color: #1abc9c;
            box-shadow: 0 0 8px rgba(26, 188, 156, 0.6);
        }

        button {
            width: 100%;
            padding: 15px;
            background-color: #1abc9c;
            color: white;
            font-size: 18px;
            font-weight: 600;
            border: none;
            border-radius: 15px;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        button:hover {
            background-color: #16a085;
            transform: translateY(-2px);
        }

        .forgot-password {
            margin-top: 20px;
            font-size: 14px;
            text-align: center;
        }

        .forgot-password a {
            color: #1abc9c;
            text-decoration: none;
            font-weight: 600;
        }

        .forgot-password a:hover {
            text-decoration: underline;
        }

        @media (max-width: 600px) {
            .login-container {
                width: 90%;
                padding: 30px;
            }

            h2 {
                font-size: 28px;
            }

            button {
                font-size: 16px;
            }
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Prihlásenie</h2>
        <form action="login.php" method="post">
            <div class="input-group">
                <label for="username">Užívateľské meno:</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="input-group">
                <label for="password">Heslo:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit">Prihlásiť sa</button>
        </form>
        <div class="forgot-password">
            <a href="#">Zabudli ste heslo?</a>
        </div>
    </div>
</body>
</html>
