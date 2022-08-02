<?php
require("connection1.php");
if(isset($_POST['go'])){

    $foodName = $_REQUEST["nam"];
    $foodType = $_REQUEST["type"];
    $foodPrice = $_REQUEST["price"];
    $foodqty = $_REQUEST["qty"];
    $upload = $_REQUEST["upload"];
    $foodDesc = $_REQUEST["desc"];
$query = "INSERT INTO food(type, name, price, qty, pic, discripton)
 VALUES('$foodType', '$foodName', '$foodPrice', '$foodqty', '$upload', '$foodDesc')";
$rc = mysqli_query($con, $query);

if($rc){
    echo "data is sent";
}
else{
    echo "data is failed" .mysqli_error($con);
}



}
 if(isset($_POST['ret'])){
    $query = "SELECT * FROM food";
    $re = mysqli_query($con, $query);
    if($re){
        while($row = mysqli_fetch_array($re)){
            echo   "<br/>".$row["id"]. " ".$row['type']. " ".$row['name']. " ".$row['price']. " ".$row['qty']. " ".$row['pic']." ".$row['discripton']." |EDIT|"." |DELETE| "." |UPDATE| "."<br/>";
        }
    }
    echo "data from my database";
 }


?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>addDrinks</title>
    <link rel="stylesheet" href="adddrinks.css">
</head>
<body>
    <form method = "POST" action="">
        <div class="container">
            <div class="dv1">
                <label for="">drinkName</label> <br>
                <input type="text" name="nam" >
            </div>
            <div class="dv1">
                <label for="">drinkType</label> <br>
                <input type="text" name="type" >
            </div>
            <div class="dv1">
                <label for="">drinkPrice</label> <br>
                <input type="text" name="price" >
            </div>
            <div class="dv1">
                <label for="">Quantity</label> <br>
                <input type="text" name="qty" >
            </div>
            <div class="dv1">
                <label for="">uploaddrink</label> <br>
                <input type="file" name="upload"  >
            </div>
            <div class="dv1">
                <label for="">dicription</label> <br>
                <input type="textarea" name = "desc" >
            </div>
            <div class="dv1">
                <div class="buto">
                    <input type="submit" name="go" value="addDrinks">
                </div>
            <div class="dv1">
                <div class="buto">
                    <input type="submit" name="ret" value="Retrieve">
                </div>
               
            </div>
        </div>
    </form>
</body>
</html>