<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beautiful Calculator</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-r from-blue-100 to-purple-100 min-h-screen flex items-center justify-center">
    <div class="w-full max-w-md p-8 bg-white rounded-2xl shadow-2xl">
        <h1 class="text-3xl font-bold text-center text-gray-800 mb-8">Mini Calculator</h1>
        <form action="" method="POST" class="space-y-6">
            <div class="space-y-4">
                <input class="w-full p-3 text-lg border-2 border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 transition" type="number" name="Number1" placeholder="Enter first number" required>
                <select class="w-full p-3 text-lg border-2 border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 transition" name="operator" required>
                    <option value="add">+</option>
                    <option value="sub">-</option>
                    <option value="mul">×</option>
                    <option value="div">÷</option>
                </select>
                <input class="w-full p-3 text-lg border-2 border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 transition" type="number" name="Number2" placeholder="Enter second number" required>
            </div>
            <button class="w-full bg-blue-500 hover:bg-blue-600 text-white font-bold py-3 px-4 rounded-lg transition duration-300 ease-in-out transform hover:scale-105 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50" type="submit">Calculate</button>
        </form>
        <?php 
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $NUMB1 = $_POST['Number1'];
            $NUMB2 = $_POST['Number2'];
            $operator = $_POST['operator'];

            switch($operator) {
                case "add":
                    $result = $NUMB1 + $NUMB2;
                    $symbol = "+";
                    break;
                case "sub":
                    $result = $NUMB1 - $NUMB2;
                    $symbol = "-";
                    break;
                case "mul":
                    $result = $NUMB1 * $NUMB2;
                    $symbol = "×";
                    break;
                case "div":
                    $result = $NUMB2 != 0 ? $NUMB1 / $NUMB2 : "Error: Division by zero";
                    $symbol = "÷";
                    break;
            }

            if (isset($result)) {
                echo "<div class='mt-8 p-4 bg-gray-100 rounded-lg'>";
                echo "<h2 class='text-xl font-semibold text-center text-gray-800'>Result</h2>";
                echo "<p class='text-center text-2xl mt-2'>{$NUMB1} {$symbol} {$NUMB2} = {$result}</p>";
                echo "</div>";
            }
        }
        ?>
    </div>
</body>
</html>