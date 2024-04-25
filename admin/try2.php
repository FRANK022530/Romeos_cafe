<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-bottom: 10px;
        }

        input {
            padding: 8px;
            margin-bottom: 10px;
        }

        button {
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }
    </style>
    <title>Number Input</title>
</head>
<body>
    <div class="container">
        <form action="process.php" method="POST">
            <label for="number1">Enter the first number (1-31):</label>
            <input type="number" id="number1" name="number1" min="1" max="31" required>

            <label for="number2">Enter the second number (1-31):</label>
            <input type="number" id="number2" name="number2" min="1" max="31" required>

            <button type="submit" name="cutoff">Submit</button>
        </form>
    </div>
</body>
</html>
