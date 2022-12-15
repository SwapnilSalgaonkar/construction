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
        $name = $_POST["name"];
        $email = $_POST["email"];
        $subject = $_POST["subject"];
        $message = $_POST["message"];
        $number = $_POST["number"];
        $sql = "INSERT INTO `contact us` (`name`, `email`, `number`, `subject`, `message`) VALUES ('$name', '$email', '$number', '$subject', '$message')";
        $result = mysqli_query($conn,$sql);
        if(!$result){
          echo "The record not inserted successfully! <br>";
        }
    }
    if(isset($_POST['username'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $sql = "INSERT INTO `login` (`email`, `password`) VALUES ('$username', '$password')";
        $result = mysqli_query($conn,$sql);
        if(!$result){
          echo "The record not inserted successfully! <br>";
        }else{
            header("Location: /swapnilprog/dashboard.php");
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
    <title>construction </title>

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- font awesome cdc link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link -->
    <link rel="stylesheet" href="styles.css">
</head>
<body >
    
    <!-- header section starts -->
    <header>

        <div class="fas fa-bars" id="menu-bar"></div>

        <a href="#" class="logo">Only<span>steels</span> </a>

        <nav class="navbar">
            <a href="#home">home</a>
            <a href="#book">book</a>
            <a href="#services">services</a>
            <a href="#gallery">gallery</a>
            <a href="#review">review</a>
            <a href="#contact">contact</a>
        </nav>

        <div class="icons">
            <i class="fas fa-search" id="search-btn"></i>
            <i class="fas fa-user" id="login-btn"></i>
        </div>

        <form action="" class="search-bar-container">
            <input type="search" id="search-bar" placeholder="search here...">
            <label for="search-bar" class="fas fa-search"></label>
        </form>

    </header>
    <!-- header section end -->

    <!-- login form container -->

    <div class="login-form-container">

        <i class="fas fa-times" id="form-close"></i>

            <h3>login</h3>
            <form action="index.php" method="post">
                <input type="text" class="box" placeholder="username" name="username">
                <!-- <select name="box" style="width: 100%;border: .1rem solid rgba(0, 0, 0, .1);text-transform: none;padding: 1rem;font-size: 1.7rem;">
                <option>swapnil</option>
                    <option>shlok<option>
                        <option>tushar</option>
</select> -->
                <input type="password" class="box" placeholder="enter your password" name="password">
                <input type="submit" value="login now" class="btn" >
            </form>
            <!-- <input type="checkbox" id="remember"> -->
            
    </div>

    <!-- home section starts -->

    <section class="home" id="home">
        <div class="content">
            <h3>adventure is worthwhile</h3>
            <p>discover new places with us, adventure awaits</p>
            <a href="booking.php" class="btn">Order Now</a>
        </div>

        <!-- <div class="controls">
            <span class="vid-btn active" data-src="images/vid-1.mp4"></span>
            <span class="vid-btn" data-src="images/vid-2.mp4"></span>
            <span class="vid-btn" data-src="images/vid-3.mp4"></span>
            <span class="vid-btn" data-src="images/vid-4.mp4"></span>
            <span class="vid-btn" data-src="images/vid-5.mp4"></span>
        </div> -->

        <div class="video-container">
            <image src="https://www.terra-drone.net/en-media/wp-content/uploads/sites/4/2017/09/Construction-machinery.jpeg" id="video-slider"  ></image>
        </div>
    </section>
    <!-- home section ends -->

    


    <!-- services section starts -->

    <section class="services" id="services">

        <h1 class="heading">
            <span>s</span>
            <span>e</span>
            <span>r</span>
            <span>v</span>
            <span>i</span>
            <span>c</span>
            <span>e</span>
            <span>s</span>
        </h1>

        <div class="box-container">

            <div class="box">
                <i class="fas fa-hotel"></i>
                <h3>affordable hotels</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Explicabo suscipit error quia voluptas fugiat quasi minima in impedit atque. Omnis quod cupiditate qui in nemo distinctio a eum eveniet pariatur.</p>
            </div>
            <div class="box">
                <i class="fas fa-utensils"></i>
                <h3>food and drinks</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Explicabo suscipit error quia voluptas fugiat quasi minima in impedit atque. Omnis quod cupiditate qui in nemo distinctio a eum eveniet pariatur.</p>
            </div>
            <div class="box">
                <i class="fas fa-bullhorn"></i>
                <h3>safety guide</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Explicabo suscipit error quia voluptas fugiat quasi minima in impedit atque. Omnis quod cupiditate qui in nemo distinctio a eum eveniet pariatur.</p>
            </div>
            <div class="box">
                <i class="fas fa-globe-asia"></i>
                <h3>around the world</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Explicabo suscipit error quia voluptas fugiat quasi minima in impedit atque. Omnis quod cupiditate qui in nemo distinctio a eum eveniet pariatur.</p>
            </div>
            <div class="box">
                <i class="fas fa-plane"></i>
                <h3>fastest travel</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Explicabo suscipit error quia voluptas fugiat quasi minima in impedit atque. Omnis quod cupiditate qui in nemo distinctio a eum eveniet pariatur.</p>
            </div>
            <div class="box">
                <i class="fas fa-hiking"></i>
                <h3>adventure</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Explicabo suscipit error quia voluptas fugiat quasi minima in impedit atque. Omnis quod cupiditate qui in nemo distinctio a eum eveniet pariatur.</p>
            </div>
        </div>
    </section>

    <!-- services section ends -->

    <!-- gallery section starts -->

    <section class="gallery" id="gallery">

        <h1 class="heading">
            <span>g</span>
            <span>a</span>
            <span>l</span>
            <span>l</span>
            <span>e</span>
            <span>r</span>
            <span>y</span>
        </h1>

        <div class="box-container">

            <div class="box">
                <img src="https://th.bing.com/th/id/OIP.sJ1jCo2sAbR-K8SFhyxkvAHaE8?pid=ImgDet&rs=1">
                
            </div>
            <div class="box">
                <img src="https://4.bp.blogspot.com/_ApUBxvS2v_g/TJLteyWIO-I/AAAAAAAAAS4/5w1FO0SXlTQ/s1600/IMG_2861.JPG">
               
            </div>
            <div class="box">
                <img src="https://th.bing.com/th/id/OIP.jueY7gtXW-ztz22uEOLIbAHaEP?pid=ImgDet&rs=1">
               
            </div>
            <div class="box">
                <img src="https://thumbs.dreamstime.com/b/blue-pipes-construction-plastic-pvc-nylon-plumbing-infrastructure-earthworks-96112720.jpg">
                
            </div>
            <div class="box">
                <img src="https://www.shirleyindustrialpainters.co.uk/wp-content/uploads/2018/07/david-pisnoy-660309-unsplash.jpg">
                
            </div>
            <div class="box">
                <img src="https://th.bing.com/th/id/R.6df4c942986107567a761bd682f6b058?rik=GOF6VnzpQngP4g&riu=http%3a%2f%2fbasstechintl.com%2fwp-content%2fuploads%2f2014%2f06%2fbricks.jpg&ehk=c4eHjkWG9JHWGJp0YkRmp3jUd5VZvX1QOcFAzfNDaFI%3d&risl=&pid=ImgRaw&r=0">
               
            </div>
            <!-- <div class="box">
                <img src="https://th.bing.com/th/id/OIP.t6cGw9zGcffdfUemkY7u9gHaE_?pid=ImgDet&rs=1">
            </div> -->
            
            


            

        </div>

    </section>
    <!-- gallery section ends -->

    <!-- review section starts -->

    <!-- <section class="review" id="review">

        <h1 class="heading">
            <span>r</span>
            <span>e</span>
            <span>v</span>
            <span>i</span>
            <span>e</span>
            <span>w</span>
        </h1>

        <div class="swiper-container review-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide">
                    <div class="box">
                        <img src="images/pic1.png">
                        <h3>john deo</h3>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint recusandae tempore dolorem quis praesentium maiores! Suscipit, aut. Dolor commodi quo distinctio aut exercitationem nisi, earum illum eum. Reiciendis, minus ratione.</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="box">
                        <img src="images/pic2.png">
                        <h3>john deo</h3>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint recusandae tempore dolorem quis praesentium maiores! Suscipit, aut. Dolor commodi quo distinctio aut exercitationem nisi, earum illum eum. Reiciendis, minus ratione.</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="box">
                        <img src="images/pic3.png">
                        <h3>john deo</h3>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint recusandae tempore dolorem quis praesentium maiores! Suscipit, aut. Dolor commodi quo distinctio aut exercitationem nisi, earum illum eum. Reiciendis, minus ratione.</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="box">
                        <img src="images/pic4.png">
                        <h3>john deo</h3>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint recusandae tempore dolorem quis praesentium maiores! Suscipit, aut. Dolor commodi quo distinctio aut exercitationem nisi, earum illum eum. Reiciendis, minus ratione.</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                    </div>
                </div>
                
            </div>
            
        </div>

    </section> -->
    <!-- review section ends -->

    <!-- contact section starts -->

    <section class="contact" id="contact">

        <h1 class="heading">
            <span>c</span>
            <span>o</span>
            <span>n</span>
            <span>t</span>
            <span>a</span>
            <span>c</span>
            <span>t</span>
        </h1>

        <div class="row">
            <div class="images">
                <img src="https://www.jcount.com/wp-content/uploads/2018/08/Image_1-35.jpeg?6bfec1&6bfec1">
            </div>

            <form action="index.php" method="post">
                <div class="inputBox">
                    <input type="text" placeholder="name" name="name" >
                    <input type="email" placeholder="email" name="email"> 
                </div>
                <div class="inputBox">
                    <input type="number" placeholder="number" name="number">
                    <input type="text" placeholder="subject" name="subject"> 
                </div>
                <textarea placeholder="message" name="message" cols="30" rows="10"></textarea>
                <input type="submit" class="btn" value="send message">
            </form>
        </div>
    </section>

    <!-- contact section ends -->

    <!-- brand section  -->

    <!-- <section class="brand-container">

        <div class="swiper-container brand-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide"><img src="images/1.jpg"></div>
                <div class="swiper-slide"><img src="images/2.jpg"></div>
                <div class="swiper-slide"><img src="images/3.jpg"></div>
                <div class="swiper-slide"><img src="images/4.jpg"></div>
                <div class="swiper-slide"><img src="images/5.jpg"></div>
                <div class="swiper-slide"><img src="images/6.jpg"></div>
            </div>
        </div>

    </section> -->

    <!-- footer section starts -->
    <section class="footer">

        <!-- <div class="box-container">

            <-- <div class="box">
                <h3>about us</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quo magnam non delectus eligendi nulla tempore cupiditate amet, dignissimos nisi unde?</p>
            </div> -->
            <!-- <div class="box">
                <h3>branch locations</h3>
                <a href="#">india</a>
                <!-- <a href="#">USA</a>
                <a href="#">japan</a>
                <a href="#">france</a> -->
            <!-- </div>
            <div class="box">
                <h3>quick links</h3>
                <a href="#">home</a>
                <a href="#">book</a>
               
                <a href="#">services</a>
                <a href="#">gallery</a>
                <a href="#">review</a>
                <a href="#">contact</a>
            </div>
            <div class="box">
                <h3>follow us</h3>
                <a href="#">facebook</a>
                <a href="#">instagram</a>
                <a href="#">twitter</a>
                <a href="#">linkedin</a>
            </div>   -->

        </div>

        <h1 class="credit"> created by <span> swapnil,shlok,tushar</span> | all rights reserved! </h1>

    </section>


    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="script.js"></script>
</body>
</html>