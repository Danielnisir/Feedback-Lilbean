<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <meta charset="UTF-8">
    <title>Feedback</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="stylesheet" href="css/style.css">

    <style>
        #customers {
            font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #customers td, #customers th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #customers tr:nth-child(even), #customers tr:nth-child(odd) {
            background-color: #f2f2f2;
        }

        #customers tr:hover {
            background-color: #ddd;
        }

        #customers th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #4CAF50;
            color: white;
        }

        .block {
            display: block;
            width: 100%;
            border: none;
            background-color: #4CAF50;
            color: white;
            padding: 14px 28px;
            font-size: 16px;
            cursor: pointer;
            text-align: center;
        }

        .block:hover {
            background-color: #ddd;
            color: black;
        }
    </style>
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="logo.jpg" alt="Lil Bean Café" class="rounded-circle logo-img" height="60" onerror="this.onerror=null;this.src='default-logo.png';">
        </a>
        Lil Bean Café
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <!-- Add your nav items here -->
            </ul>
            <form class="d-flex">
                <!-- Add search form or other items here -->
            </form>
            <form action="logout.php" method="POST"> 
                <div class="w3-show-inline-block">
                    <div class="w3-bar">
                        <center>
                            <input type="submit" value="LogOut" name="logout" class="w3-btn w3-black">
                        </center>
                    </div>
                </div>  
            </form>
        </div>
    </div>
</nav>


    <?php 
    session_start();
    require 'config.php';
    if (isset($_SESSION['login_user'])) {
        $userLoggedIn = $_SESSION['login_user'];
        $result = mysqli_query($con, "SELECT * FROM poll");

        echo "<table border='1' id='customers'>
        <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Customer Service</th>
        <th>Food Quality</th>
        <th>Staff Attentiveness</th>
        <th>Freshness of the Ingredients</th>
        <th>Suggestions</th>
        </tr>";

        while ($row = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>" . $row['name'] . "</td>";
            echo "<td>" . $row['email'] . "</td>";
            echo "<td>" . $row['phone'] . "</td>";
            echo "<td>" . $row['feedback1'] . "</td>";
            echo "<td>" . $row['feedback2'] . "</td>";
            echo "<td>" . $row['feedback3'] . "</td>";
            echo "<td>" . $row['feedback4'] . "</td>";
            echo "<td>" . $row['suggestions'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        //header("Location: index.php");
    }
    ?>

    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
</body>
</html>
