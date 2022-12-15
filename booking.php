<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "construction";
    //  create a connection
    $conn = mysqli_connect($servername,$username,$password,$database);
    // die of connection was not successful
    if(!$conn){
    die("sorry we failed to connect: ". mysqli_connect_error());
    }

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(isset($_POST['name'])){
            $name = $_POST['name'];
            $address = $_POST["address"];
            $tel = $_POST["tel"];
            $item = $_POST["item"];
            $number = $_POST["number"];
            $sql = "INSERT INTO `form` (`name`, `address`, `contact no`, `item`, `quantity`) VALUES ('$name', '$address', '$tel', '$item', '$number');";
            $result = mysqli_query($conn,$sql);
            if($result){
              echo "The record inserted successfully! <br>";
            
            }else{
              echo "The record was not been inserted! " . mysqli_error($conn);
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- font awesome cdc link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link -->
    <link rel="stylesheet" href="booking.css">
</head>
<body>
    <!-- <header>
 
        <div class="fas fa-bars" id="menu-bar"></div>

        <a href="#" class="logo"><span>T</span>ravel</a> 

         <nav class="navbar">
            <a href="#home">home</a>
            <a href="#book">book</a>
            <a href="#packages">packages</a>
            <a href="#services">services</a>
            <a href="#gallery">gallery</a>
            <a href="#review">review</a>
            <a href="#contact">contact</a>
        </nav> -->

         <!-- <div class="icons">
            <i class="fas fa-search" id="search-btn"></i>
            <i class="fas fa-user" id="login-btn"></i>
        </div>

        <form action="" class="search-bar-container">
            <input type="search" id="search-bar" placeholder="search here...">
            <label for="search-bar" class="fas fa-search"></label>
        </form>

    </header>   -->
    <section class="book" id="book">
        <h1 class="heading">
            <span>r</span>
            <span>e</span>
            <span>q</span>
            <span>u</span>
            <span>i</span>
            <span>r</span>
            <span>n</span>
            <span>m</span>
            <span>e</span>
            <span>n</span>
            <span>t</span>
            <span>s</span>
        </h1>

        <div class="row">

            <div class="images">
                <img src="https://keighranlegal.com/wp-content/uploads/2021/04/Keighran-Legal-construction-legal-advisor.jpg">
            </div>

            <form action="booking.php" method="post">
                <h1>please enter your details</h1>
                <div class="inputBox">
                    <h3>name</h3>
                    <input type="text" placeholder="your name" name="name">
                </div>
                <div class="inputBox">
                    <h3>address</h3>
                    <input type="text" placeholder="enter your address " name="address" >
                </div>
                <div class="inputBox">
                    <h3>contact number</h3>
                    <input type="tel" name="tel">
                </div>
                <div class="inputBox">
                    <h3>select item</h3>
                    <select name="item" style="width: 100%;border: .1rem solid rgba(0, 0, 0, .1);text-transform: none;padding: 1rem;font-size: 1.7rem;">
                    <option name="sand">sand</option>
                    <option name="steel rods">steel rods</option>
                    <option name="paint">paint</option>
                    <option name="cement">cement</option>
                    <option name="pipes">pipes</option>
                    <option name="bricks">bricks</option>
                   
                </select>
                </div>
                <div class="inputBox">
                    <h3>select quantity</h3>
                    <input type="number" name="number">
                </div>
                <input type="submit" class="btn" value="order now" >
                <a href="thanks.html">order now<a>
            </form>
        </div>
    </section>
</body>
<script>
    
</script>
</html>