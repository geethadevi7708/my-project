<?php
include('db.php');
$p_id = $_GET['id'];
$query = "select * from products where p_id='$p_id'";
$result = mysqli_query($conn,$query);
$row = mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stylish Beauty</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            text-align: center;
            margin: 0;
            padding: 0;
            background-color: #f4f4f9;
        }
        h1 {
            color: #ff6347;
            padding: 20px;
            background-color: #fff;
            margin-top: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        img {
            border-radius: 10px;
            border: 4px solid #ff6347;
            padding: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
        }
        .message {
            font-size: 20px;
            color: #333;
            margin-top: 20px;
            padding: 15px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .message p {
            margin: 5px 0;
        }
        .delivery-info {
            margin-top: 30px;
            font-size: 18px;
            color: #555;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .container {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Stylish Beauty</h1>
        <img src="images/<?php echo $row['p_image'] ?>" width="200" height="200" alt="<?php echo $row['p_name'] ?>">
        <div class="message">
            <p>Added to cart successfully!</p>
            <p>Welcome!</p>
            <p>Visit again soon!</p>
        </div>
        <div class="delivery-info">
            <p><strong>Delivery date:</strong> 12/07/25</p>
            <p><strong>Delivery address:</strong> Ganapathy Nagar</p>
        </div>
    </div>
</body>
</html>

