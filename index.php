<?php
// Initialize variables for submitted data
$name = $email = $password = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data when the form is submitted
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9fafc;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            width: 400px;
            background: #ffffff;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
            padding: 20px;
        }
        h1 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: 600;
            color: #555;
        }
        input {
            width: 100%;
            padding: 12px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 14px;
            background-color: #fdfdfd;
            transition: border-color 0.3s;
        }
        input:focus {
            border-color: #007bff;
            outline: none;
        }
        button {
            width: 100%;
            padding: 12px;
            background: #007bff;
            border: none;
            border-radius: 5px;
            color: white;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        button:hover {
            background: #0056b3;
        }
        .output {
            margin-top: 20px;
            background: #f8f9fa;
            padding: 15px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .output.hide {
            display: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Registration Form</h1>
        <form method="POST" action="">
            <label for="name">Full Name:</label>
            <input type="text" id="name" name="name" value="<?php echo $name; ?>" placeholder="Enter your full name" required>

            <label for="email">Email Address:</label>
            <input type="email" id="email" name="email" value="<?php echo $email; ?>" placeholder="Enter your email" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" value="<?php echo $password; ?>" placeholder="Enter your password" required>

            <button type="submit">Submit</button>
        </form>

        <!-- Output Section -->
        <?php if ($_SERVER["REQUEST_METHOD"] == "POST"): ?>
            <div class="output" id="output">
                <h3>Submitted Details:</h3>
                <p><strong>Full Name:</strong> <?php echo $name; ?></p>
                <p><strong>Email:</strong> <?php echo $email; ?></p>
                <p><strong>Password:</strong> <?php echo $password; ?></p>
            </div>
            <script>
                setTimeout(function() {
                    document.getElementById('output').style.display = 'none';
                }, 5000); // Hide the output after 5 seconds
            </script>
        <?php endif; ?>
    </div>
</body>
</html>
