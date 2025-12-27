<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Chocolate Shop - Clients</title>

    <style>
        * {
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            width: 100%;
            min-height: 100vh;
            margin: 0;
            background: #f2f2f2;
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

        .h1 h1{
          
            font-family: Georgia, 'Times New Roman', Times, serif;
            color: white;
            font-size: 2.7em;
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




        /* BUTTON */

        .back-btn {
            margin: 40px auto 10px;
            display: flex;
            justify-content: center;
        }

        .back-btn a {
            padding: 12px 25px;
            background: linear-gradient(135deg, #1E4F8A, #102C4A);
            color: white;
            text-decoration: none;
            border-radius: 10px;
            font-weight: bold;
            transition: 0.3s;
        }

        .back-btn a:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 18px rgba(0, 0, 0, 0.3);
        }

        /* TABLE */

        .clients {
            width: 100%;
            display: flex;
            justify-content: center;
            margin-bottom: 60px;
        }

        table {
            width: 85%;
            background: white;
            border-collapse: collapse;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.2);
        }

        th,
        td {
            padding: 14px;
            text-align: center;
        }

        th {
            background: linear-gradient(135deg, #1E4F8A, #102C4A);
            color: white;
        }

        tr:nth-child(even) {
            background: #f9f9f9;
        }

        tr:hover {
            background: #ffe2c6;
            transition: 0.2s;
        }

        td {
            color: #333;
        }

        @media (max-width: 900px) {
            table {
                width: 95%;
            }
        }
    </style>
</head>

<body>

    <?php
    $conn = new mysqli("localhost", "phpuser", "eve", "site_db");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT username, email, phone, type, country , price FROM users";
    $result = $conn->query($sql);
    ?>

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

    <!-- BACK BUTTON -->
    <div class="back-btn">
        <a href="register.php">⬅ Back To Register</a>
    </div>

    <!-- TABLE -->
    <div class="clients">
        <table>
            <thead>
                <tr>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Phone Number</th>
                   <th>Country</th>
                    <th>Chocolate Type</th>
                     <th>Price</th>
                  
                </tr>
            </thead>

            <tbody>

                <?php
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row["username"] . "</td>";
                        echo "<td>" . $row["email"] . "</td>";
                        echo "<td>" . $row["phone"] . "</td>";
                         echo "<td>" . $row["country"] . "</td>";
                        echo "<td>" . $row["type"] . "</td>";
                        echo "<td>" . $row["price"] . "</td>";
                   
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='5'>No users found</td></tr>";
                }

                $conn->close();
                ?>

            </tbody>
        </table>
    </div>

</body>

</html>
