
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recipt</title>
    <style>
        *{
            margin:0;
            padding:0;
        }
        #img1{
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 50%;
        }
        .billdiv
        {
            padding:20px;
            background-color:#fdd9eb;
            text-align:start !important;
        }
    </style>
</head>
<body>
    <?php
    $name=$_POST['fname'];
    $address = $_POST['address'];
    $city =$_POST['city'];
    $state =$_POST['state'];
    $pincode = $_POST['pincode'];
    
    ?>
    <div class="billdiv">
        <h1>Billing Details</h1>
        <h3>Name : <?php echo $name;?></h3>    
        <p>Shipping Address: <br>
            <?php echo $address;?>
            <br>
            <b>City</b>: <?php echo $city ?> - <?php echo $pincode?><br>
            <b>State</b>: <?php echo $state?>
        </p>
        <h4>Payment Method : Card</h4>
        <h4>Estimated Delivery Date : In 3 to 4 Working Days</h4>

    </div>
    <div style="text-align:center;">
    <img src="thank you img.jpg" id="img1" alt=" Thank you">
    <a href="./home.php" style="text-align:center;">Continue Shopping</a>
    </div>
</body>
</html>