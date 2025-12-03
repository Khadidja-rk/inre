<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Chocolate Shop - Register</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            width: 100%;
            min-height: 100vh;
            font-family: Arial, sans-serif;
            margin: 0;
            background: #f3f3f3;
        }

        /* HEADER */

        .header {
            width: 100%;
            height: 95vh;
            position: relative;
        }

        .img {
            width: 100%;
            height: 100%;
            background-image: url('bg.png');
            background-size: cover;
            background-position: center;
        }

        .h1 {
            /* position: absolute; */
            /* top: 25%;
            left: 20%;
            transform: translate(-50%, -50%); */
            font-family: Georgia, 'Times New Roman', Times, serif;
            color: white;
            font-size: 1.4em;
            text-shadow: 2px 2px 4px #000;
        }


        .content {

            position: absolute;
            top: 50px;
            left: 150px;
            display: grid;
            justify-content: center;
            /* align-content: center; */
            grid-template-columns: auto;
            grid-template-rows: auto auto;
        }

        /* BUTTON BAR */

        .container {
            width: 100%;
            display: flex;
            justify-content: center;
            gap: 20px;
            margin: 40px 0;
        }

        .container a,
        .container button {
            padding: 14px 28px;
            background: linear-gradient(135deg, #1E4F8A, #102C4A);
            color: white;
            border: none;
            border-radius: 10px;
            font-size: 16px;
            cursor: pointer;
            text-decoration: none;
            font-weight: bold;
            transition: 0.3s;
        }

        .container a:hover,
        .container button:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
        }

        /* REGISTER FORM */

        .reg-img {
            width: 100%;
            padding-bottom: 50px;
        }

        .register {
            margin: auto;
            width: 800px;
        }

        .form-container {
            margin: 80px auto 40px;
            padding: 40px;
            background: white;
            border-radius: 20px;
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.2);
            animation: slideUp 0.6s ease-out;
        }

        @keyframes slideUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .form-container h2 {
            text-align: center;
            color: #1E4F8A;
            margin-bottom: 30px;
            font-size: 2em;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            color: #555;
            font-weight: 600;
            margin-bottom: 8px;
        }

        input,
        select {
            width: 100%;
            padding: 12px 15px;
            border: 2px solid #e0e0e0;
            border-radius: 10px;
            font-size: 1em;
            background: #f9f9f9;
        }

        input:focus,
        select:focus {
            outline: none;
            border-color: #1E4F8A;
            background: white;
            box-shadow: 0 0 0 3px rgba(139, 69, 19, 0.1);
        }

        .submit-btn {
            width: 100%;
            padding: 15px;
            background: linear-gradient(135deg, #1E4F8A, #102C4A);
            color: white;
            border: none;
            border-radius: 10px;
            font-size: 1.1em;
            font-weight: bold;
            cursor: pointer;
            transition: 0.3s;
        }

        .submit-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(139, 69, 19, 0.3);
        }

        @media (max-width: 900px) {
            .register {
                width: 95%;
            }

            .h1 {
                left: 50%;
                font-size: 1.2em;
            }
        }
    </style>
</head>

<body>

    <!-- HEADER -->
    <div class="header">
        <div class="img"></div>
        <div class="content">
            <div class="h1">
                <h1>
                    Welcome To </h1>
                <h1 style="padding:0;padding-left: 70px;"> 2026 In</h1>
                <h1 style="padding:0; padding-left: 120px;">ChocolateShop</h1>

            </div>

            <div class="images">
                <img src="img1.png" width="220" height="180" style="border-radius:6%;top:100px; left:60px;position:relative;">
                <img src="img2.png" width="220" height="180" style="border-radius:6%;">
            </div>
        </div>
    </div>

    <!-- BUTTONS -->
    <div class="container">
        <button>ADD A NEW CUSTOMER</button>
        <a href="list.php">SEE CUStOMERS LIST</a>
    </div>

    <!-- REGISTER -->
    <div class="reg-img">
        <div class="register">
            <div class="form-container">

                <h2>Customer Registration</h2>

                <form action="register.php" method="POST">

                    <div class="form-group">
                        <label>👤 Username</label>
                        <input type="text" name="username" required>
                    </div>

                    <div class="form-group">
                        <label>📧 Email</label>
                        <input type="email" name="email" required>
                    </div>

                    <div class="form-group">
                        <label>📱 Phone</label>
                        <input type="tel" name="phone" required>
                    </div>
                   <div class="form-group">
                        <label>🌍 Country</label>
                        <input type="text" name="country" required>
                    </div>
                    <div class="form-group">
                        <label>🍫 Chocolate Type</label>
                        <select name="type" required>
                            <option value="" disabled selected>Select your Chocolate Type</option>
                            <option value="dark">Dark Chocolate</option>
                            <option value="milk">Milk Chocolate</option>
                            <option value="white">White Chocolate</option>
                            <option value="dubai">Dubai Chocolate</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label> Price </label>
                        <input type="number" name="price" required>
                    </div>

                    <button class="submit-btn" type="submit">Register Now</button>

                </form>
            </div>
        </div>
    </div>

</body>

</html>
<?php if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = htmlspecialchars($_POST['username']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $type = htmlspecialchars($_POST['type']);
    $country = htmlspecialchars($_POST['country']);
    $price = $_POST['price'];
    $conn = new mysqli("localhost", "root", "", "site_db", 3307);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $stmt = $conn->prepare("INSERT INTO users (username, email, phone , type , country ,price) VALUES (?, ? , ?, ?, ? , ? )");
    $stmt->bind_param("ssssss", $username, $email, $phone, $type, $country,$price);
    $stmt->execute();
    if ($stmt->affected_rows > 0) {
        echo "Registration successful for user: " . $username;
    } else {
        echo "Error while registering.";
    }
    $stmt->close();
    $conn->close();
}
