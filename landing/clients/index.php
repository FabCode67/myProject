
<?php 
session_start(); 

if (!isset($_SESSION['username'])) {
  $_SESSION['msg'] = "You must log in first";
  header('location: login.php');
}
if (isset($_GET['logout'])) {
  session_destroy();
  unset($_SESSION['username']);
  header("location: login.php");
}
?>




<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about FAB restaurant</title>
    <link rel="stylesheet" href="abouts.css">
    <link rel="stylesheet" type="text/css" href=" https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>








  <div class="header">
  </div>
  <div class="content">
      <!-- notification message -->
      <?php if (isset($_SESSION['success'])) : ?>
        <div class="error success" >
          <h3>
            <?php 
              echo $_SESSION['success']; 
              unset($_SESSION['success']);
            ?>
          </h3>
        </div>
      <?php endif ?>
  
      <!-- logged in user information -->
      
  </div>






    <table border="1" style= "border-collapse: collapse; width: 100%;" >
    <tr>
        <th colspan="2">FAB RESTAURANT</th>
        <th><a href="demo.html">Home</a></th>
        <th><a href="mayChart.htm">myChart</a></th>
        <th><a href="clentResetPswd.php">Reset Passward</a></th>
        <th>  <?php  if (isset($_SESSION['username'])) : ?>
        <p> <a href="index.php?logout='1'">logout</a> </p>
      <?php endif ?> </th>   
    </tr>
    <tr>
        <td rowspan="13" style="background-color: grey;">
            <ul>
                <li><div class="sidenav">
                  <button class="dropdown-btn"> <b>Food</b> 
                 <i class="fa fa-caret-down"></i>
                  </button>
                  <div class="dropdown-container">
                    <a href="#">.meals</a>
                    <a href="#">.breakfast</a>
                    <a href="#">.dissert</a>
                    
                  </li>
                <li><div class="sidenav">
                  <button class="dropdown-btn"> <b>Drinks</b>  
                    <i class="fa fa-caret-down"></i>
                  </button>
                  <div class="dropdown-container">
                    <a href="#">riquer</a>
                    <a href="#">softdrinks</a>
                    </li>
            </ul>
                <div class="sidenav">
                  <button class="dropdown-btn"> <b>Fruits</b>  
                  </button>
                </div>
            </ul>
        </td>
        <td colspan="5" class="back">

       
        <div class="class1">
        <input type="search" name="search" id="search" class="search"> 
        <button> <i class="fa-solid fa-magnifying-glass"></i></button></div>
            <h6>
            <?php  if (isset($_SESSION['username'])) : ?>

              <div class="class2">
              <p>you are welcome <strong><?php echo $_SESSION['username']; ?></strong>
        <?php endif ?> to FAB restaurent <br>
                on this site you are able to select each <br>
                and every kind of food you want <br>
            we have all kinds of meals sor you.</h6></p>
     
              </div>
       
            </td>
    </tr>
    <tr>
    <td>  <img src="images/superghetti.jpg" alt="" style="height: 145px;
    width: 200px;" >
    <div class="myDivv">
    <b>Dishname:</b>
        <span>Supergetthi</span><br>
        <b>Price:</b>
        <span>5$</span><br>
      

      


        <!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="order2.css">
  </head>
<body>
<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">buyNow</button>

<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
  <form class="modal-content" action="/action_page.php">
    <div class="container">
      


      <table style="border-collapse:collapse; width: 100%;">
    <tr>
        <td>
            <img src="images/superghetti.jpg" style="height : 300px; width:300px;" alt="">
        </td>
        <td>
          
          <label for=""><b><u>ORDER</u></b></label> <br>
            <label for="" style = "font-size: 30px; font-weight: 600px;">TYPE: food</label> <br>
            <label for="" style = "font-size: 30px; font-weight: 600px;">NAME: Supergetthi</label> <br>
            <label for="" style = "font-size: 30px; font-weight: 600px;">PRICE: 5$</label> <br>
          </div>
            
           
        </td>
    </tr>

    <tr>
<td> <label for="email"><b>firstName</b></label>
  <input type="text" name="firstname" placeholder="Enter your firstname here" value="" required>
  <td><label for="psw"><b>secondname</b></label>
    <input type="text" name="secondname" placeholder="Enter your secondname here" value="" required>
  </td>
    </tr>
    
    <tr>
<td> <label for="email"><b>Email</b></label>
  <input type="email" name="email" placeholder="Enter your email here" value="" required>
  <td><label for="psw"><b>phoneNO</b></label>
    <input type="tel" name="phone" placeholder="Enter your phoneno here" value="" required>
  </td>
    </tr>
    
    <tr>
<td> <label for="email"><b>Adress</b></label>
  <input type="adress" name="adress" placeholder="Enter your adress here" value="" required>
  <td><label for="psw"><b>location</b></label>
  <input type="password" placeholder="Enter location here" name="psw" required>
</td>
    </tr>
  <tr>
    <td colspan="2" style = "font-size: 30px; font-weight: 600px; text-align: center;">Pay via:</td>
  </tr>
  <tr>
    <td> <a href=""><button  style = "width:100%;">PayPal</button></a></td>
      <td><a href=""><button style = "width:100%;">MOMO</button></a></td>

  </tr>
  <tr>
    <td><a href=""><button style = "width:100%;">WesternUnion</button></a></td>
    <td><a href=""><button style = "width:100%;">AirtelMoney</button></a></td>
  </tr>
    </table>



    </div>
       </td>
    <td> <img src="images/bouchette.jpg" alt="" style="height: 145px;
    width: 200px;" >
    <div class="myDivv">
    <b>Dishname:</b>
        <span>brouchette</span><br>
        <b>Price:</b>
        <span>3$</span>
        <br>
      
        <!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="order2.css">
  </head>
<body>
<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">buyNow</button>

<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
  <form class="modal-content" action="/action_page.php">
    <div class="container">
      


      <table style="border-collapse:collapse; width: 100%;">
    <tr>
        <td>
            <img src="images/bouchette.jpg" style="height : 300px; width:300px;" alt="">
        </td>
        <td>
          
          <label for=""><b><u>ORDER</u></b></label> <br>
            <label for="" style = "font-size: 30px; font-weight: 600px;">TYPE: food</label> <br>
            <label for="" style = "font-size: 30px; font-weight: 600px;">NAME: bouchette</label> <br>
            <label for="" style = "font-size: 30px; font-weight: 600px;">PRICE: 3$</label> <br>
          </div>
            
           
        </td>
    </tr>

    <tr>
<td> <label for="email"><b>firstName</b></label>
  <input type="text" name="firstname" placeholder="Enter your firstname here" value="" required>
  <td><label for="psw"><b>secondname</b></label>
    <input type="text" name="secondname" placeholder="Enter your secondname here" value="" required>
  </td>
    </tr>
    
    <tr>
<td> <label for="email"><b>Email</b></label>
  <input type="email" name="email" placeholder="Enter your email here" value="" required>
  <td><label for="psw"><b>phoneNO</b></label>
    <input type="tel" name="phone" placeholder="Enter your phoneno here" value="" required>
  </td>
    </tr>
    
    <tr>
<td> <label for="email"><b>Adress</b></label>
  <input type="adress" name="adress" placeholder="Enter your adress here" value="" required>
  <td><label for="psw"><b>location</b></label>
  <input type="password" placeholder="Enter location here" name="psw" required>
</td>
    </tr>
  <tr>
    <td colspan="2" style = "font-size: 30px; font-weight: 600px; text-align: center;">Pay via:</td>
  </tr>
  <tr>
    <td> <a href=""><button  style = "width:100%;">PayPal</button></a></td>
      <td><a href=""><button style = "width:100%;">MOMO</button></a></td>

  </tr>
  <tr>
    <td><a href=""><button style = "width:100%;">WesternUnion</button></a></td>
    <td><a href=""><button style = "width:100%;">AirtelMoney</button></a></td>
  </tr>
    </table>


    </div>
         </td>
        <td > <img src="images/fish.jpg" alt="" style="height: 145px;
    width: 200px;" >
    <div class="myDivv">
    <b>Dishname:</b>
        <span>Fish</span><br>
        <b>Price:</b>
        <span>10$</span>
        <br>
        <!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="order2.css">
  </head>
<body>
<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">buyNow</button>

<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
  <form class="modal-content" action="/action_page.php">
    <div class="container">
      


      <table style="border-collapse:collapse; width: 100%;">
    <tr>
        <td>
            <img src="images/fish.jpg" style="height : 300px; width:300px;" alt="">
        </td>
        <td>
          
          <label for=""><b><u>ORDER</u></b></label> <br>
            <label for="" style = "font-size: 30px; font-weight: 600px;">TYPE: food</label> <br>
            <label for="" style = "font-size: 30px; font-weight: 600px;">NAME: Fish</label> <br>
            <label for="" style = "font-size: 30px; font-weight: 600px;">PRICE: 10$</label> <br>
          </div>
            
           
        </td>
    </tr>

    <tr>
<td> <label for="email"><b>firstName</b></label>
  <input type="text" name="firstname" placeholder="Enter your firstname here" value="" required>
  <td><label for="psw"><b>secondname</b></label>
    <input type="text" name="secondname" placeholder="Enter your secondname here" value="" required>
  </td>
    </tr>
    
    <tr>
<td> <label for="email"><b>Email</b></label>
  <input type="email" name="email" placeholder="Enter your email here" value="" required>
  <td><label for="psw"><b>phoneNO</b></label>
    <input type="tel" name="phone" placeholder="Enter your phoneno here" value="" required>
  </td>
    </tr>
    
    <tr>
<td> <label for="email"><b>Adress</b></label>
  <input type="adress" name="adress" placeholder="Enter your adress here" value="" required>
  <td><label for="psw"><b>location</b></label>
  <input type="password" placeholder="Enter location here" name="psw" required>
</td>
    </tr>
  <tr>
    <td colspan="2" style = "font-size: 30px; font-weight: 600px; text-align: center;">Pay via:</td>
  </tr>
  <tr>
    <td> <a href=""><button  style = "width:100%;">PayPal</button></a></td>
      <td><a href=""><button style = "width:100%;">MOMO</button></a></td>

  </tr>
  <tr>
    <td><a href=""><button style = "width:100%;">WesternUnion</button></a></td>
    <td><a href=""><button style = "width:100%;">AirtelMoney</button></a></td>
  </tr>
    </table>

    </div>
        </td>
        <td ><img src="images/image1.jpg" alt="" style="height: 145px;
    width: 200px;" >
    <div class="myDivv">
    <b>Dishname:</b>
        <span>chicken</span><br>
        <b>Price:</b>
        <span>10$</span>
        <br>
        <!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="order2.css">
  </head>
<body>
<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">buyNow</button>

<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
  <form class="modal-content" action="/action_page.php">
    <div class="container">
      


      <table style="border-collapse:collapse; width: 100%;">
    <tr>
        <td>
            <img src="images/image1.jpg" style="height : 300px; width:300px;" alt="">
        </td>
        <td>
          
          <label for=""><b><u>ORDER</u></b></label> <br>
            <label for="" style = "font-size: 30px; font-weight: 600px;">TYPE: food</label> <br>
            <label for="" style = "font-size: 30px; font-weight: 600px;">NAME: chicken</label> <br>
            <label for="" style = "font-size: 30px; font-weight: 600px;">PRICE: 10$</label> <br>
          </div>
            
           
        </td>
    </tr>

    <tr>
<td> <label for="email"><b>firstName</b></label>
  <input type="text" name="firstname" placeholder="Enter your firstname here" value="" required>
  <td><label for="psw"><b>secondname</b></label>
    <input type="text" name="secondname" placeholder="Enter your secondname here" value="" required>
  </td>
    </tr>
    
    <tr>
<td> <label for="email"><b>Email</b></label>
  <input type="email" name="email" placeholder="Enter your email here" value="" required>
  <td><label for="psw"><b>phoneNO</b></label>
    <input type="tel" name="phone" placeholder="Enter your phoneno here" value="" required>
  </td>
    </tr>
    
    <tr>
<td> <label for="email"><b>Adress</b></label>
  <input type="adress" name="adress" placeholder="Enter your adress here" value="" required>
  <td><label for="psw"><b>location</b></label>
  <input type="password" placeholder="Enter location here" name="psw" required>
</td>
    </tr>
  <tr>
    <td colspan="2" style = "font-size: 30px; font-weight: 600px; text-align: center;">Pay via:</td>
  </tr>
  <tr>
    <td> <a href=""><button  style = "width:100%;">PayPal</button></a></td>
      <td><a href=""><button style = "width:100%;">MOMO</button></a></td>

  </tr>
  <tr>
    <td><a href=""><button style = "width:100%;">WesternUnion</button></a></td>
    <td><a href=""><button style = "width:100%;">AirtelMoney</button></a></td>
  </tr>
    </table>
    </div>
         </td>
        <td ><img src="images/image8.jpg" alt="" style="height: 145px;
    width: 200px;" >
    <div class="myDivv">
    <b>Dishname:</b>
        <span>merange</span><br>
        <b>Price:</b>
        <span>4$</span>
        <br>
        <!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="order2.css">
  </head>
<body>
<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">buyNow</button>

<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
  <form class="modal-content" action="/action_page.php">
    <div class="container">
      


      <table style="border-collapse:collapse; width: 100%;">
    <tr>
        <td>
            <img src="images/image8.jpg" style="height : 300px; width:300px;" alt="">
        </td>
        <td>
          
          <label for=""><b><u>ORDER</u></b></label> <br>
            <label for="" style = "font-size: 30px; font-weight: 600px;">TYPE: food</label> <br>
            <label for="" style = "font-size: 30px; font-weight: 600px;">NAME: merange</label> <br>
            <label for="" style = "font-size: 30px; font-weight: 600px;">PRICE: 4$</label> <br>
          </div>
            
           
        </td>
    </tr>

    <tr>
<td> <label for="email"><b>firstName</b></label>
  <input type="text" name="firstname" placeholder="Enter your firstname here" value="" required>
  <td><label for="psw"><b>secondname</b></label>
    <input type="text" name="secondname" placeholder="Enter your secondname here" value="" required>
  </td>
    </tr>
    
    <tr>
<td> <label for="email"><b>Email</b></label>
  <input type="email" name="email" placeholder="Enter your email here" value="" required>
  <td><label for="psw"><b>phoneNO</b></label>
    <input type="tel" name="phone" placeholder="Enter your phoneno here" value="" required>
  </td>
    </tr>
    
    <tr>
<td> <label for="email"><b>Adress</b></label>
  <input type="adress" name="adress" placeholder="Enter your adress here" value="" required>
  <td><label for="psw"><b>location</b></label>
  <input type="password" placeholder="Enter location here" name="psw" required>
</td>
    </tr>
  <tr>
    <td colspan="2" style = "font-size: 30px; font-weight: 600px; text-align: center;">Pay via:</td>
  </tr>
  <tr>
    <td> <a href=""><button  style = "width:100%;">PayPal</button></a></td>
      <td><a href=""><button style = "width:100%;">MOMO</button></a></td>

  </tr>
  <tr>
    <td><a href=""><button style = "width:100%;">WesternUnion</button></a></td>
    <td><a href=""><button style = "width:100%;">AirtelMoney</button></a></td>
  </tr>
    </table>
    </div>
      </td>

    </tr>
    <tr>
    <td>  <img src="images/image6.jpg" alt="" style="height: 145px;
    width: 200px;" >
    <div class="myDivv">
    <b>Dishname:</b>
        <span>riquer</span><br>
        <b>Price:</b>
        <span>15$</span><br>
        <!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="order2.css">
  </head>
<body>
<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">buyNow</button>

<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
  <form class="modal-content" action="/action_page.php">
    <div class="container">
      


      <table style="border-collapse:collapse; width: 100%;">
    <tr>
        <td>
            <img src="image6.jpg" style="height : 300px; width:300px;" alt="">
        </td>
        <td>
          
          <label for=""><b><u>ORDER</u></b></label> <br>
            <label for="" style = "font-size: 30px; font-weight: 600px;">TYPE: drinks</label> <br>
            <label for="" style = "font-size: 30px; font-weight: 600px;">NAME: riquer</label> <br>
            <label for="" style = "font-size: 30px; font-weight: 600px;">PRICE: 15$</label> <br>
          </div>
            
           
        </td>
    </tr>

    <tr>
<td> <label for="email"><b>firstName</b></label>
  <input type="text" name="firstname" placeholder="Enter your firstname here" value="" required>
  <td><label for="psw"><b>secondname</b></label>
    <input type="text" name="secondname" placeholder="Enter your secondname here" value="" required>
  </td>
    </tr>
    
    <tr>
<td> <label for="email"><b>Email</b></label>
  <input type="email" name="email" placeholder="Enter your email here" value="" required>
  <td><label for="psw"><b>phoneNO</b></label>
    <input type="tel" name="phone" placeholder="Enter your phoneno here" value="" required>
  </td>
    </tr>
    
    <tr>
<td> <label for="email"><b>Adress</b></label>
  <input type="adress" name="adress" placeholder="Enter your adress here" value="" required>
  <td><label for="psw"><b>location</b></label>
  <input type="password" placeholder="Enter location here" name="psw" required>
</td>
    </tr>
  <tr>
    <td colspan="2" style = "font-size: 30px; font-weight: 600px; text-align: center;">Pay via:</td>
  </tr>
  <tr>
    <td> <a href=""><button  style = "width:100%;">PayPal</button></a></td>
      <td><a href=""><button style = "width:100%;">MOMO</button></a></td>

  </tr>
  <tr>
    <td><a href=""><button style = "width:100%;">WesternUnion</button></a></td>
    <td><a href=""><button style = "width:100%;">AirtelMoney</button></a></td>
  </tr>
    </table>
    </div>
        </td>
    <td> <img src="images/drink1.jpg" alt="" style="height: 145px;
    width: 200px;" >
    <div class="myDivv">
    <b>Dishname:</b>
        <span>superGin</span><br>
        <b>Price:</b>
        <span>30$</span>
        <br>
        <!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="order2.css">
  </head>
<body>
<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">buyNow</button>

<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
  <form class="modal-content" action="/action_page.php">
    <div class="container">
      


      <table style="border-collapse:collapse; width: 100%;">
    <tr>
        <td>
            <img src="image6.jpg" style="height : 300px; width:300px;" alt="">
        </td>
        <td>
          
          <label for=""><b><u>ORDER</u></b></label> <br>
            <label for="" style = "font-size: 30px; font-weight: 600px;">TYPE: drinks</label> <br>
            <label for="" style = "font-size: 30px; font-weight: 600px;">NAME: riquer</label> <br>
            <label for="" style = "font-size: 30px; font-weight: 600px;">PRICE: 15$</label> <br>
          </div>
            
           
        </td>
    </tr>

    <tr>
<td> <label for="email"><b>firstName</b></label>
  <input type="text" name="firstname" placeholder="Enter your firstname here" value="" required>
  <td><label for="psw"><b>secondname</b></label>
    <input type="text" name="secondname" placeholder="Enter your secondname here" value="" required>
  </td>
    </tr>
    
    <tr>
<td> <label for="email"><b>Email</b></label>
  <input type="email" name="email" placeholder="Enter your email here" value="" required>
  <td><label for="psw"><b>phoneNO</b></label>
    <input type="tel" name="phone" placeholder="Enter your phoneno here" value="" required>
  </td>
    </tr>
    
    <tr>
<td> <label for="email"><b>Adress</b></label>
  <input type="adress" name="adress" placeholder="Enter your adress here" value="" required>
  <td><label for="psw"><b>location</b></label>
  <input type="password" placeholder="Enter location here" name="psw" required>
</td>
    </tr>
  <tr>
    <td colspan="2" style = "font-size: 30px; font-weight: 600px; text-align: center;">Pay via:</td>
  </tr>
  <tr>
    <td> <a href=""><button  style = "width:100%;">PayPal</button></a></td>
      <td><a href=""><button style = "width:100%;">MOMO</button></a></td>

  </tr>
  <tr>
    <td><a href=""><button style = "width:100%;">WesternUnion</button></a></td>
    <td><a href=""><button style = "width:100%;">AirtelMoney</button></a></td>
  </tr>
    </table>
    </div>
        </td>
        <td > <img src="images/drink2.jpg" alt="" style="height: 145px;
    width: 200px;" >
    <div class="myDivv">
    <b>Dishname:</b>
        <span>Lemon</span><br>
        <b>Price:</b>
        <span>20$</span>
        <br>
            <!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="order2.css">
  </head>
<body>
<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">buyNow</button>

<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
  <form class="modal-content" action="/action_page.php">
    <div class="container">
      


      <table style="border-collapse:collapse; width: 100%;">
    <tr>
        <td>
            <img src="image6.jpg" style="height : 300px; width:300px;" alt="">
        </td>
        <td>
          
          <label for=""><b><u>ORDER</u></b></label> <br>
            <label for="" style = "font-size: 30px; font-weight: 600px;">TYPE: drinks</label> <br>
            <label for="" style = "font-size: 30px; font-weight: 600px;">NAME: riquer</label> <br>
            <label for="" style = "font-size: 30px; font-weight: 600px;">PRICE: 15$</label> <br>
          </div>
            
           
        </td>
    </tr>

    <tr>
<td> <label for="email"><b>firstName</b></label>
  <input type="text" name="firstname" placeholder="Enter your firstname here" value="" required>
  <td><label for="psw"><b>secondname</b></label>
    <input type="text" name="secondname" placeholder="Enter your secondname here" value="" required>
  </td>
    </tr>
    
    <tr>
<td> <label for="email"><b>Email</b></label>
  <input type="email" name="email" placeholder="Enter your email here" value="" required>
  <td><label for="psw"><b>phoneNO</b></label>
    <input type="tel" name="phone" placeholder="Enter your phoneno here" value="" required>
  </td>
    </tr>
    
    <tr>
<td> <label for="email"><b>Adress</b></label>
  <input type="adress" name="adress" placeholder="Enter your adress here" value="" required>
  <td><label for="psw"><b>location</b></label>
  <input type="password" placeholder="Enter location here" name="psw" required>
</td>
    </tr>
  <tr>
    <td colspan="2" style = "font-size: 30px; font-weight: 600px; text-align: center;">Pay via:</td>
  </tr>
  <tr>
    <td> <a href=""><button  style = "width:100%;">PayPal</button></a></td>
      <td><a href=""><button style = "width:100%;">MOMO</button></a></td>

  </tr>
  <tr>
    <td><a href=""><button style = "width:100%;">WesternUnion</button></a></td>
    <td><a href=""><button style = "width:100%;">AirtelMoney</button></a></td>
  </tr>
    </table>
    </div>
         </td>
        <td ><img src="images/drink3.jpg" alt="" style="height: 145px;
    width: 200px;" >
    <div class="myDivv">
    <b>Dishname:</b>
        <span>amarura</span><br>
        <b>Price:</b>
        <span>90$</span>
        <br>
            <!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="order2.css">
  </head>
<body>
<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">buyNow</button>

<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
  <form class="modal-content" action="/action_page.php">
    <div class="container">
      


      <table style="border-collapse:collapse; width: 100%;">
    <tr>
        <td>
            <img src="image6.jpg" style="height : 300px; width:300px;" alt="">
        </td>
        <td>
          
          <label for=""><b><u>ORDER</u></b></label> <br>
            <label for="" style = "font-size: 30px; font-weight: 600px;">TYPE: drinks</label> <br>
            <label for="" style = "font-size: 30px; font-weight: 600px;">NAME: riquer</label> <br>
            <label for="" style = "font-size: 30px; font-weight: 600px;">PRICE: 15$</label> <br>
          </div>
            
           
        </td>
    </tr>

    <tr>
<td> <label for="email"><b>firstName</b></label>
  <input type="text" name="firstname" placeholder="Enter your firstname here" value="" required>
  <td><label for="psw"><b>secondname</b></label>
    <input type="text" name="secondname" placeholder="Enter your secondname here" value="" required>
  </td>
    </tr>
    
    <tr>
<td> <label for="email"><b>Email</b></label>
  <input type="email" name="email" placeholder="Enter your email here" value="" required>
  <td><label for="psw"><b>phoneNO</b></label>
    <input type="tel" name="phone" placeholder="Enter your phoneno here" value="" required>
  </td>
    </tr>
    
    <tr>
<td> <label for="email"><b>Adress</b></label>
  <input type="adress" name="adress" placeholder="Enter your adress here" value="" required>
  <td><label for="psw"><b>location</b></label>
  <input type="password" placeholder="Enter location here" name="psw" required>
</td>
    </tr>
  <tr>
    <td colspan="2" style = "font-size: 30px; font-weight: 600px; text-align: center;">Pay via:</td>
  </tr>
  <tr>
    <td> <a href=""><button  style = "width:100%;">PayPal</button></a></td>
      <td><a href=""><button style = "width:100%;">MOMO</button></a></td>

  </tr>
  <tr>
    <td><a href=""><button style = "width:100%;">WesternUnion</button></a></td>
    <td><a href=""><button style = "width:100%;">AirtelMoney</button></a></td>
  </tr>
    </table>
    </div>
        </td>
        <td ><img src="images/drink4.jpg" alt="" style="height: 145px;
    width: 200px;" >
    <div class="myDivv">
    <b>Dishname:</b>
        <span>orange</span><br>
        <b>Price:</b>
        <span>90$</span>
        <br>
            <!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="order2.css">
  </head>
<body>
<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">buyNow</button>

<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
  <form class="modal-content" action="/action_page.php">
    <div class="container">
      


      <table style="border-collapse:collapse; width: 100%;">
    <tr>
        <td>
            <img src="image6.jpg" style="height : 300px; width:300px;" alt="">
        </td>
        <td>
          
          <label for=""><b><u>ORDER</u></b></label> <br>
            <label for="" style = "font-size: 30px; font-weight: 600px;">TYPE: drinks</label> <br>
            <label for="" style = "font-size: 30px; font-weight: 600px;">NAME: riquer</label> <br>
            <label for="" style = "font-size: 30px; font-weight: 600px;">PRICE: 15$</label> <br>
          </div>
            
           
        </td>
    </tr>

    <tr>
<td> <label for="email"><b>firstName</b></label>
  <input type="text" name="firstname" placeholder="Enter your firstname here" value="" required>
  <td><label for="psw"><b>secondname</b></label>
    <input type="text" name="secondname" placeholder="Enter your secondname here" value="" required>
  </td>
    </tr>
    
    <tr>
<td> <label for="email"><b>Email</b></label>
  <input type="email" name="email" placeholder="Enter your email here" value="" required>
  <td><label for="psw"><b>phoneNO</b></label>
    <input type="tel" name="phone" placeholder="Enter your phoneno here" value="" required>
  </td>
    </tr>
    
    <tr>
<td> <label for="email"><b>Adress</b></label>
  <input type="adress" name="adress" placeholder="Enter your adress here" value="" required>
  <td><label for="psw"><b>location</b></label>
  <input type="password" placeholder="Enter location here" name="psw" required>
</td>
    </tr>
  <tr>
    <td colspan="2" style = "font-size: 30px; font-weight: 600px; text-align: center;">Pay via:</td>
  </tr>
  <tr>
    <td> <a href=""><button  style = "width:100%;">PayPal</button></a></td>
      <td><a href=""><button style = "width:100%;">MOMO</button></a></td>

  </tr>
  <tr>
    <td><a href=""><button style = "width:100%;">WesternUnion</button></a></td>
    <td><a href=""><button style = "width:100%;">AirtelMoney</button></a></td>
  </tr>
    </table>
    </div>
         </td>
    </tr>
    <tr>
    <td>  <img src="images/pineapple.jpg" alt="" style="height: 145px;
    width: 200px;" >
    <div class="myDivv">
    <b>Dishname:</b>
        <span>pineaple</span><br>
        <b>Price:</b>
        <span>2$</span><br>
           <!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="order2.css">
  </head>
<body>
<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">buyNow</button>

<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
  <form class="modal-content" action="/action_page.php">
    <div class="container">
      


      <table style="border-collapse:collapse; width: 100%;">
    <tr>
        <td>
            <img src="image6.jpg" style="height : 300px; width:300px;" alt="">
        </td>
        <td>
          
          <label for=""><b><u>ORDER</u></b></label> <br>
            <label for="" style = "font-size: 30px; font-weight: 600px;">TYPE: drinks</label> <br>
            <label for="" style = "font-size: 30px; font-weight: 600px;">NAME: riquer</label> <br>
            <label for="" style = "font-size: 30px; font-weight: 600px;">PRICE: 15$</label> <br>
          </div>
            
           
        </td>
    </tr>

    <tr>
<td> <label for="email"><b>firstName</b></label>
  <input type="text" name="firstname" placeholder="Enter your firstname here" value="" required>
  <td><label for="psw"><b>secondname</b></label>
    <input type="text" name="secondname" placeholder="Enter your secondname here" value="" required>
  </td>
    </tr>
    
    <tr>
<td> <label for="email"><b>Email</b></label>
  <input type="email" name="email" placeholder="Enter your email here" value="" required>
  <td><label for="psw"><b>phoneNO</b></label>
    <input type="tel" name="phone" placeholder="Enter your phoneno here" value="" required>
  </td>
    </tr>
    
    <tr>
<td> <label for="email"><b>Adress</b></label>
  <input type="adress" name="adress" placeholder="Enter your adress here" value="" required>
  <td><label for="psw"><b>location</b></label>
  <input type="password" placeholder="Enter location here" name="psw" required>
</td>
    </tr>
  <tr>
    <td colspan="2" style = "font-size: 30px; font-weight: 600px; text-align: center;">Pay via:</td>
  </tr>
  <tr>
    <td> <a href=""><button  style = "width:100%;">PayPal</button></a></td>
      <td><a href=""><button style = "width:100%;">MOMO</button></a></td>

  </tr>
  <tr>
    <td><a href=""><button style = "width:100%;">WesternUnion</button></a></td>
    <td><a href=""><button style = "width:100%;">AirtelMoney</button></a></td>
  </tr>
    </table>
    </div>
        </td>
    <td> <img src="images/apples.jpg" alt="" style="height: 145px;
    width: 200px;" >
    <div class="myDivv">
    <b>Dishname:</b>
        <span>apples</span><br>
        <b>Price:</b>
        <span>3$</span>
        <br>
            <!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="order2.css">
  </head>
<body>
<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">buyNow</button>

<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
  <form class="modal-content" action="/action_page.php">
    <div class="container">
      


      <table style="border-collapse:collapse; width: 100%;">
    <tr>
        <td>
            <img src="image6.jpg" style="height : 300px; width:300px;" alt="">
        </td>
        <td>
          
          <label for=""><b><u>ORDER</u></b></label> <br>
            <label for="" style = "font-size: 30px; font-weight: 600px;">TYPE: drinks</label> <br>
            <label for="" style = "font-size: 30px; font-weight: 600px;">NAME: riquer</label> <br>
            <label for="" style = "font-size: 30px; font-weight: 600px;">PRICE: 15$</label> <br>
          </div>
            
           
        </td>
    </tr>

    <tr>
<td> <label for="email"><b>firstName</b></label>
  <input type="text" name="firstname" placeholder="Enter your firstname here" value="" required>
  <td><label for="psw"><b>secondname</b></label>
    <input type="text" name="secondname" placeholder="Enter your secondname here" value="" required>
  </td>
    </tr>
    
    <tr>
<td> <label for="email"><b>Email</b></label>
  <input type="email" name="email" placeholder="Enter your email here" value="" required>
  <td><label for="psw"><b>phoneNO</b></label>
    <input type="tel" name="phone" placeholder="Enter your phoneno here" value="" required>
  </td>
    </tr>
    
    <tr>
<td> <label for="email"><b>Adress</b></label>
  <input type="adress" name="adress" placeholder="Enter your adress here" value="" required>
  <td><label for="psw"><b>location</b></label>
  <input type="password" placeholder="Enter location here" name="psw" required>
</td>
    </tr>
  <tr>
    <td colspan="2" style = "font-size: 30px; font-weight: 600px; text-align: center;">Pay via:</td>
  </tr>
  <tr>
    <td> <a href=""><button  style = "width:100%;">PayPal</button></a></td>
      <td><a href=""><button style = "width:100%;">MOMO</button></a></td>

  </tr>
  <tr>
    <td><a href=""><button style = "width:100%;">WesternUnion</button></a></td>
    <td><a href=""><button style = "width:100%;">AirtelMoney</button></a></td>
  </tr>
    </table>
    </div>
        </td>
        <td > <img src="images/oranges.jpg" alt="" style="height: 145px;
    width: 200px;" >
    <div class="myDivv">
    <b>Dishname:</b>
        <span>oranges</span><br>
        <b>Price:</b>
        <span>3$</span>
        <br>
            <!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="order2.css">
  </head>
<body>
<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">buyNow</button>

<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
  <form class="modal-content" action="/action_page.php">
    <div class="container">
      


      <table style="border-collapse:collapse; width: 100%;">
    <tr>
        <td>
            <img src="image6.jpg" style="height : 300px; width:300px;" alt="">
        </td>
        <td>
          
          <label for=""><b><u>ORDER</u></b></label> <br>
            <label for="" style = "font-size: 30px; font-weight: 600px;">TYPE: drinks</label> <br>
            <label for="" style = "font-size: 30px; font-weight: 600px;">NAME: riquer</label> <br>
            <label for="" style = "font-size: 30px; font-weight: 600px;">PRICE: 15$</label> <br>
          </div>
            
           
        </td>
    </tr>

    <tr>
<td> <label for="email"><b>firstName</b></label>
  <input type="text" name="firstname" placeholder="Enter your firstname here" value="" required>
  <td><label for="psw"><b>secondname</b></label>
    <input type="text" name="secondname" placeholder="Enter your secondname here" value="" required>
  </td>
    </tr>
    
    <tr>
<td> <label for="email"><b>Email</b></label>
  <input type="email" name="email" placeholder="Enter your email here" value="" required>
  <td><label for="psw"><b>phoneNO</b></label>
    <input type="tel" name="phone" placeholder="Enter your phoneno here" value="" required>
  </td>
    </tr>
    
    <tr>
<td> <label for="email"><b>Adress</b></label>
  <input type="adress" name="adress" placeholder="Enter your adress here" value="" required>
  <td><label for="psw"><b>location</b></label>
  <input type="password" placeholder="Enter location here" name="psw" required>
</td>
    </tr>
  <tr>
    <td colspan="2" style = "font-size: 30px; font-weight: 600px; text-align: center;">Pay via:</td>
  </tr>
  <tr>
    <td> <a href=""><button  style = "width:100%;">PayPal</button></a></td>
      <td><a href=""><button style = "width:100%;">MOMO</button></a></td>

  </tr>
  <tr>
    <td><a href=""><button style = "width:100%;">WesternUnion</button></a></td>
    <td><a href=""><button style = "width:100%;">AirtelMoney</button></a></td>
  </tr>
    </table>
    </div>
         </td>
        <td ><img src="images/bananas.webp" alt="" style="height: 145px;
    width: 200px;" >
    <div class="myDivv">
    <b>Dishname:</b>
        <span>bananas</span><br>
        <b>Price:</b>
        <span>2$</span>
        <br>
            <!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="order2.css">
  </head>
<body>
<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">buyNow</button>

<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
  <form class="modal-content" action="/action_page.php">
    <div class="container">
      


      <table style="border-collapse:collapse; width: 100%;">
    <tr>
        <td>
            <img src="image6.jpg" style="height : 300px; width:300px;" alt="">
        </td>
        <td>
          
          <label for=""><b><u>ORDER</u></b></label> <br>
            <label for="" style = "font-size: 30px; font-weight: 600px;">TYPE: drinks</label> <br>
            <label for="" style = "font-size: 30px; font-weight: 600px;">NAME: riquer</label> <br>
            <label for="" style = "font-size: 30px; font-weight: 600px;">PRICE: 15$</label> <br>
          </div>
            
           
        </td>
    </tr>

    <tr>
<td> <label for="email"><b>firstName</b></label>
  <input type="text" name="firstname" placeholder="Enter your firstname here" value="" required>
  <td><label for="psw"><b>secondname</b></label>
    <input type="text" name="secondname" placeholder="Enter your secondname here" value="" required>
  </td>
    </tr>
    
    <tr>
<td> <label for="email"><b>Email</b></label>
  <input type="email" name="email" placeholder="Enter your email here" value="" required>
  <td><label for="psw"><b>phoneNO</b></label>
    <input type="tel" name="phone" placeholder="Enter your phoneno here" value="" required>
  </td>
    </tr>
    
    <tr>
<td> <label for="email"><b>Adress</b></label>
  <input type="adress" name="adress" placeholder="Enter your adress here" value="" required>
  <td><label for="psw"><b>location</b></label>
  <input type="password" placeholder="Enter location here" name="psw" required>
</td>
    </tr>
  <tr>
    <td colspan="2" style = "font-size: 30px; font-weight: 600px; text-align: center;">Pay via:</td>
  </tr>
  <tr>
    <td> <a href=""><button  style = "width:100%;">PayPal</button></a></td>
      <td><a href=""><button style = "width:100%;">MOMO</button></a></td>

  </tr>
  <tr>
    <td><a href=""><button style = "width:100%;">WesternUnion</button></a></td>
    <td><a href=""><button style = "width:100%;">AirtelMoney</button></a></td>
  </tr>
    </table>
    </div>
        </td>
        <td ><img src="images/berries.jpg" alt="" style="height: 145px;
    width: 200px;" >
    <div class="myDivv">
    <b>Dishname:</b>
        <span>berries</span><br>
        <b>Price:</b>
        <span>1$</span>
        <br>
        


        <!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="order1.css">
  </head>
<body>
<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">buyNow</button>

<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
  <form class="modal-content" action="/action_page.php">
    <div class="container">
      


      <table border="1" style="border-collapse:collapse; width: 100%;">
    <tr>
        <td>
            <img src="image6.jpg" style="height : 300px; width:300px;" alt="">
        </td>
        <td>
            <label for=""><b><u>ORDER</u></b></label> <br>

            <div style = "font-size:30px; font-weight:600;">
            <label for="">name:Riquer</label> <br>
            <label for="">price:200</label> <br>
            <label for="">orderNo: 1</label> <br>
            <label for="">orderDate: 111/11</label> <br>
            <label for="">ordergood: good</label> <br>
          </div>
            
        </td>
    </tr>

    <tr>
<td> <label for="email"><b>firstName</b></label>
  <input type="text" name="firstname" placeholder="Enter your firstname here" value="<?php echo $firstname; ?>">
  <td><label for="psw"><b>secondname</b></label>
    <input type="text" name="secondname" placeholder="Enter your secondname here" value="<?php echo $firstname; ?>">
  </td>
    </tr>
    
    <tr>
<td> <label for="email"><b>Email</b></label>
  <input type="email" name="email" placeholder="Enter your email here" value="">
  <td><label for="psw"><b>phoneNO</b></label>
    <input type="tel" name="phone" placeholder="Enter your phoneno here" value="">
  </td>
    </tr>
    
    <tr>
<td> <label for="email"><b>Adress</b></label>
  <input type="adress" name="adress" placeholder="Enter your adress here" value="">
  <td><label for="psw"><b>location</b></label>
  <input type="password" placeholder="Enter location here" name="psw" required>
</td>
    </tr>
  <tr>
    <td colspan="2">Pay via:</td>
  </tr>
  <tr>
    <td> <a href=""><button>PayPal</button></a></td>
      <td><a href=""><button>MOMO</button></a></td>

  </tr>
  <tr>
    <td><a href=""><button>WesternUnion</button></a></td>
    <td><a href=""><button>AirtelMoney</button></a></td>
  </tr>
    </table>
    
      
      <!-- <label>
        <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
      </label>

      <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p> -->

      <div class="clearfix">
        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
        
      </div>
    </div>
  </form>
</div>

<script src="oreder.js"></script>

</body>
</html>




    </div>
         </td>
    </tr>
    <!-- <tr>
      <td colspan="5">Here is all about a breads you may need</td>
    </tr> -->
    
    <!-- <tr>
    <td>  <img src="images/umureti.jpg" alt="" style="height: 145px;
    width: 200px;" > -->
    <!-- <div class="myDivv">
    <b>Dishname:</b>
        <span>Rope</span><br>
        <b>Price:</b>
        <span>10$</span><br>
           <!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="order2.css">
  </head>
<body>
<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">buyNow</button>

<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
  <form class="modal-content" action="/action_page.php">
    <div class="container">
      


      <table style="border-collapse:collapse; width: 100%;">
    <tr>
        <td>
            <img src="image6.jpg" style="height : 300px; width:300px;" alt="">
        </td>
        <td>
          
          <label for=""><b><u>ORDER</u></b></label> <br>
            <label for="" style = "font-size: 30px; font-weight: 600px;">TYPE: drinks</label> <br>
            <label for="" style = "font-size: 30px; font-weight: 600px;">NAME: riquer</label> <br>
            <label for="" style = "font-size: 30px; font-weight: 600px;">PRICE: 15$</label> <br>
          </div>
            
           
        </td>
    </tr>

    <tr>
<td> <label for="email"><b>firstName</b></label>
  <input type="text" name="firstname" placeholder="Enter your firstname here" value="" required>
  <td><label for="psw"><b>secondname</b></label>
    <input type="text" name="secondname" placeholder="Enter your secondname here" value="" required>
  </td>
    </tr>
    
    <tr>
<td> <label for="email"><b>Email</b></label>
  <input type="email" name="email" placeholder="Enter your email here" value="" required>
  <td><label for="psw"><b>phoneNO</b></label>
    <input type="tel" name="phone" placeholder="Enter your phoneno here" value="" required>
  </td>
    </tr>
    
    <tr>
<td> <label for="email"><b>Adress</b></label>
  <input type="adress" name="adress" placeholder="Enter your adress here" value="" required>
  <td><label for="psw"><b>location</b></label>
  <input type="password" placeholder="Enter location here" name="psw" required>
</td>
    </tr>
  <tr>
    <td colspan="2" style = "font-size: 30px; font-weight: 600px; text-align: center;">Pay via:</td>
  </tr>
  <tr>
    <td> <a href=""><button  style = "width:100%;">PayPal</button></a></td>
      <td><a href=""><button style = "width:100%;">MOMO</button></a></td>

  </tr>
  <tr>
    <td><a href=""><button style = "width:100%;">WesternUnion</button></a></td>
    <td><a href=""><button style = "width:100%;">AirtelMoney</button></a></td>
  </tr>
    </table>
    </div>
        </td>
    <td> <img src="images/image2.jpg" alt="" style="height: 145px;
    width: 200px;" >
    <div class="myDivv">
    <b>Dishname:</b>
        <span>Bread</span><br>
        <b>Price:</b>
        <span>7$</span>
        <br>
        <a href="clients/login.php"><button>buyNow</button></a>
    </div>
         </td>
        <td > <img src="images/bread.jpg" alt="" style="height: 145px;
    width: 200px;" >
    <div class="myDivv">
    <b>Dishname:</b>
        <span>Pizza</span><br>
        <b>Price:</b>
        <span>5$</span>
        <br>
        <a href="clients/login.php"><button>buyNow</button></a>
    </div>
        </td>
        <td ><img src="images/abhinav.jpg" alt="" style="height: 145px;
    width: 200px;" >
    <div class="myDivv">
    <b>Dishname:</b>
        <span>cake</span><br>
        <b>Price:</b>
        <span>3$</span>
        <br>
        <a href="clients/login.php"><button>buyNow</button></a>
    </div>
      </td>
        <td ><img src="images/burger.jpg" alt="" style="height: 145px;
    width: 200px;" >
    <div class="myDivv">
    <b>Dishname:</b>
        <span>Burger</span><br>
        <b>Price:</b>
        <span>9$</span>
        <br>
        <a href="clients/login.php"><button>buyNow</button></a>
    </div>
        </td>
    </tr>
    <tr>
      <td colspan="5">Here is all about a breads you may need</td>
    </tr>
    
    <tr>
    <td>  <img src="images/umureti.jpg" alt="" style="height: 145px;
    width: 200px;" >
    <div class="myDivv">
    <b>Dishname:</b>
        <span>Rope</span><br>
        <b>Price:</b>
        <span>10$</span><br>
       <a href="clients/login.php"><button>buyNow</button></a>
    </div>
        </td>
    <td> <img src="images/image2.jpg" alt="" style="height: 145px;
    width: 200px;" >
    <div class="myDivv">
    <b>Dishname:</b>
        <span>Bread</span><br>
        <b>Price:</b>
        <span>7$</span>
        <br>
        <a href="clients/login.php"><button>buyNow</button></a>
    </div>
         </td>
        <td > <img src="images/bread.jpg" alt="" style="height: 145px;
    width: 200px;" >
    <div class="myDivv">
    <b>Dishname:</b>
        <span>Pizza</span><br>
        <b>Price:</b>
        <span>5$</span>
        <br>
        <a href="clients/login.php"><button>buyNow</button></a>
    </div>
        </td>
        <td ><img src="images/abhinav.jpg" alt="" style="height: 145px;
    width: 200px;" >
    <div class="myDivv">
    <b>Dishname:</b>
        <span>cake</span><br>
        <b>Price:</b>
        <span>3$</span>
        <br>
        <a href="clients/login.php"><button>buyNow</button></a>
    </div>
      </td>
        <td ><img src="images/burger.jpg" alt="" style="height: 145px;
    width: 200px;" >
    <div class="myDivv">
    <b>Dishname:</b>
        <span>Burger</span><br>
        <b>Price:</b>
        <span>9$</span>
        <br>
        <a href="clients/login.php"><button>buyNow</button></a>
    </div>
        </td>
    </tr>
    <tr>
      <td colspan="5">Here is all about a breads you may need</td>
    </tr>
    
    <tr>
    <td>  <img src="images/umureti.jpg" alt="" style="height: 145px;
    width: 200px;" >
    <div class="myDivv">
    <b>Dishname:</b>
        <span>Rope</span><br>
        <b>Price:</b>
        <span>10$</span><br>
       <a href="clients/login.php"><button>buyNow</button></a>
    </div>
        </td>
    <td> <img src="images/image2.jpg" alt="" style="height: 145px;
    width: 200px;" >
    <div class="myDivv">
    <b>Dishname:</b>
        <span>Bread</span><br>
        <b>Price:</b>
        <span>7$</span>
        <br>
        <a href="clients/login.php"><button>buyNow</button></a>
    </div>
         </td>
        <td > <img src="images/bread.jpg" alt="" style="height: 145px;
    width: 200px;" >
    <div class="myDivv">
    <b>Dishname:</b>
        <span>Pizza</span><br>
        <b>Price:</b>
        <span>5$</span>
        <br>
        <a href="clients/login.php"><button>buyNow</button></a>
    </div>
        </td>
        <td ><img src="images/abhinav.jpg" alt="" style="height: 145px;
    width: 200px;" >
    <div class="myDivv">
    <b>Dishname:</b>
        <span>cake</span><br>
        <b>Price:</b>
        <span>3$</span>
        <br>
        <a href="clients/login.php"><button>buyNow</button></a>
    </div>
      </td>
        <td ><img src="images/burger.jpg" alt="" style="height: 145px;
    width: 200px;" >
    <div class="myDivv">
    <b>Dishname:</b>
        <span>Burger</span><br>
        <b>Price:</b>
        <span>9$</span>
        <br>
        <a href="clients/login.php"><button>buyNow</button></a>
    </div>
        </td>
    </tr>
    <tr>
      <td colspan="5">Here is all about a breads you may need</td>
    </tr>
    
    <tr>
    <td>  <img src="images/umureti.jpg" alt="" style="height: 145px;
    width: 200px;" >
    <div class="myDivv">
    <b>Dishname:</b>
        <span>Rope</span><br>
        <b>Price:</b>
        <span>10$</span><br>
       <a href="clients/login.php"><button>buyNow</button></a>
    </div>
        </td>
    <td> <img src="images/image2.jpg" alt="" style="height: 145px;
    width: 200px;" >
    <div class="myDivv">
    <b>Dishname:</b>
        <span>Bread</span><br>
        <b>Price:</b>
        <span>7$</span>
        <br>
        <a href="clients/login.php"><button>buyNow</button></a>
    </div>
         </td>
        <td > <img src="images/bread.jpg" alt="" style="height: 145px;
    width: 200px;" >
    <div class="myDivv">
    <b>Dishname:</b>
        <span>Pizza</span><br>
        <b>Price:</b>
        <span>5$</span>
        <br>
        <a href="clients/login.php"><button>buyNow</button></a>
    </div>
        </td>
        <td ><img src="images/abhinav.jpg" alt="" style="height: 145px;
    width: 200px;" >
    <div class="myDivv">
    <b>Dishname:</b>
        <span>cake</span><br>
        <b>Price:</b>
        <span>3$</span>
        <br>
        <a href="clients/login.php"><button>buyNow</button></a>
    </div>
      </td>
        <td ><img src="images/burger.jpg" alt="" style="height: 145px;
    width: 200px;" >
    <div class="myDivv">
    <b>Dishname:</b>
        <span>Burger</span><br>
        <b>Price:</b>
        <span>9$</span>
        <br>
        <a href="clients/login.php"><button>buyNow</button></a>
    </div>
        </td>
    </tr> -->
    <!-- <tr>
       
        <td 
        colspan="4" 
        style="text-align: center; 
        font-size: 20px;
         font-family: cursive;
        background-color: rgb(235, 138, 12);">
         Here is all about hard food you may want
        </td>
    
    </tr>
    <tr class="hard_food">
        <a href="good.html">
        <td><img src="pics/cats-coming.jpg" alt=""></td>
        <td><img src="pics/fleshy.jpg" alt=""></td>
        <td><img src="pics/ella-olsson.jpg" alt=""></td>
        <td><img src="pics/chan-walrus.jpg" alt=""></td>
    </a>
       
      
    </tr>
    <tr>
       
        <td 
        colspan="4" 
        style="text-align: center; 
        font-size: 20px;
         font-family: cursive;
        background-color: rgb(235, 138, 12);">
         Here is all about hard drinks you may want
        </td>
    
    </tr>
    <tr class="hard_food">
       
        <a href="good.html" >
            <td><img src="pics/drink1.jpg" alt=""></td>
            <td><img src="pics/drink2.jpg" alt=""></td>
            <td><img src="pics/drink3.jpg" alt=""></td>
            <td><img src="pics/drink4.jpg" alt=""></td>
        </a>
    </tr> -->
    </table>
    <script src="about.js"></script>
    <script src="oreder.js"></script>

</body>
</html>