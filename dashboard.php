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

    if(isset($_POST['username'])){
        $username = $_POST['username'];
        $quantity = $_POST['quantity'];
        $item = $_POST['item'];
        $sql = "INSERT INTO `admin update` (`username`, `update quantity`, `item in stocks`) VALUES ('$username', '$quantity', '$item');";
        $result = mysqli_query($conn,$sql);
        if($result){
          echo "The record updated! <br>";
          header("Location: /swapnilprog/dashboard.php");
        }else{
          echo "The record was not been updated! " . mysqli_error($conn);
        }

    }
    if(isset($_GET['deleteMessage'])){
        $sno = $_GET['deleteMessage'];
    
        $sql = "DELETE FROM `contact us` WHERE `contact us`.`sno` = '$sno'";
        $result = mysqli_query($conn,$sql);
        if($result){
            header("Location: /swapnilprog/dashboard.php#messages");
        }else{
            echo "The record was not been updated! " . mysqli_error($conn);
        }
      }
    if(isset($_GET['deleteUser'])){
        $sno = $_GET['deleteUser'];
    
        $sql = "DELETE FROM `form` WHERE `form`.`sno` = '$sno'";
        $result = mysqli_query($conn,$sql);
        if($result){
          // echo "The record has been deleted successfully! <br>";
          header("Location: /swapnilprog/dashboard.php");
        }else{
          echo "The record was not been updated! " . mysqli_error($conn);
        }
      }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard</title>
    <link rel="stylesheet" href="dashboard.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.1/mdb.min.css" rel="stylesheet" />
</head>

<body id="body-pd">
    <section>
        <header class="header" id="header">
            <div class="header_toggle">
                <i class="bx bx-menu" id="header-toggle"></i>
            </div>
            <!-- <div class="header_img">
                <img src="https://i.imgur.com/hczKIze.jpg" alt="" />
            </div> -->
        </header>
        <div class="l-navbar" id="nav-bar">
            <nav class="nav">
                <div>
                    <a href="#" class="nav_logo">
                        <i class="bx bx-layer nav_logo-icon"></i>
                        <span class="nav_logo-name">BLOGGERS.</span>
                    </a>
                    <div class="nav_list">
                        <a href="#create" class="nav_link active">
                            <i class="bx bx-grid-alt nav_icon"></i>
                            <span class="nav_name">Create Blog</span>
                        </a>
                        <a href="#blogsDetails" class="nav_link">
                            <i class="bx bx-bar-chart-alt-2 nav_icon"></i>
                            <span class="nav_name">blogs details</span>
                        </a>
                        <!-- <a href="#userDetail" class="nav_link">
                            <i class="bx bx-user nav_icon"></i>
                            <span class="nav_name">Users details</span>
                        </a> -->
                        <a href="#messages" class="nav_link">
                            <i class="bx bx-message-square-detail nav_icon"></i>
                            <span class="nav_name">Messages</span>
                        </a>
                        <!-- <a href="#" class="nav_link">
                            <i class="bx bx-bookmark nav_icon"></i>
                            <span class="nav_name">Bookmark</span>
                        </a>
                        <a href="#" class="nav_link">
                            <i class="bx bx-folder nav_icon"></i>
                            <span class="nav_name">Files</span>
                        </a> -->
                    </div>
                </div>
                <a href="index.html" class="nav_link">
                    <i class="bx bx-log-out nav_icon"></i>
                    <span class="nav_name">SignOut</span>
                </a>
            </nav>
        </div>
    </section>
    <section>
        <!--Container Main start-->
        <div class="pt-2 height-200 bg-light">
            <section id="create">
                <div class="card mb-5 mx-5">
                    <div class="card-body display-5">
                        <h5 class="card-title"><strong>admin section</strong></h5>
                        <!-- <p class="card-text">
                            With supporting text below as a natural lead-in to additional
                            content.
                        </p> -->
                        <button type="button" class="btn btn-primary btn-lg" data-mdb-toggle="modal"
                            data-mdb-target="#exampleModal">
                            edit
                        </button>
                    </div>
                </div>

                <!-- Button trigger modal -->

                <!-- Modal -->
                <div class="modal top fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true" data-mdb-backdrop="true" data-mdb-keyboard="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">

                                <button type="button" class="btn-close" data-mdb-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="dashboard.php" method="post" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label>username</label>
                                        <input type="text" class="form-control" id="blogTitle"
                                            placeholder="admin username" name="username" />
                                    </div>
                                    <div class="my-3 form-group">
                                        <label>update quantity</label>
                                        <input type="number" class="form-control" id="blogTitle" placeholder=""
                                            name="quantity" />
                                    </div>
                                    <label>items in stock</label>
                                    <select class="form-select" aria-label="Default select example" name="item">
                                        <option value="sand">sand</option>
                                        <option value="steel rod">steel rods</option>
                                        <option value="paint">paint</option>
                                        <option value="cement">cement</option>
                                        <option value="pipes">pipes</option>
                                        <option value="bricks">bricks</option>
                                    </select>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">
                                            Close
                                        </button>
                                        <button type="submit" class="btn btn-primary">
                                            update
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="blogsDetails" class="card mb-5 mx-5">
                <div class="row">
                    <!-- Grid column -->
                    <!-- <div class="col-md-12">
                        <h2 class="pt-3 pb-4 text-center font-bold font-up deep-purple-text">
                           <strong>Blog Details</strong> 
                        </h2>
                    </div> -->
                    <!-- Grid column -->
                    <!-- </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 mb-4">
                            <div class="card">
                                <img src="https://images.unsplash.com/photo-1477862096227-3a1bb3b08330?ixlib=rb-1.2.1&auto=format&fit=crop&w=700&q=60"
                                    alt="" class="card-img-top" />
                                <div class="card-body">
                                    <h5 class="card-title">Sunset</h5>
                                    <p class="card-text">
                                        Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                        Ut eum similique repellat a laborum, rerum voluptates
                                        ipsam eos quo tempore iusto dolore modi dolorum in
                                        pariatur. Incidunt repellendus praesentium quae!
                                    </p>
                                    <button type="submit" class="btn btn-outline-success btn-sm">
                                        Edit
                                    </button>
                                    <button type="submit" class="btn btn-outline-danger btn-sm">
                                        Delete
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mb-4">
                            <div class="card">
                                <img src="https://images.unsplash.com/photo-1516214104703-d870798883c5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=700&q=60"
                                    alt="" class="card-img-top" />
                                <div class="card-body">
                                    <h5 class="card-title">Sunset</h5>
                                    <p class="card-text">
                                        Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                        Ut eum similique repellat a laborum, rerum voluptates
                                        ipsam eos quo tempore iusto dolore modi dolorum in
                                        pariatur. Incidunt repellendus praesentium quae!
                                    </p>
                                    <button type="submit" class="btn btn-outline-success btn-sm">
                                        Edit
                                    </button>
                                    <button type="submit" class="btn btn-outline-danger btn-sm">
                                        Delete
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mb-4">
                            <div class="card">
                                <img src="https://images.unsplash.com/photo-1516214104703-d870798883c5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=700&q=60"
                                    alt="" class="card-img-top" />
                                <div class="card-body">
                                    <h5 class="card-title">Sunset</h5>
                                    <p class="card-text">
                                        Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                        Ut eum similique repellat a laborum, rerum voluptates
                                        ipsam eos quo tempore iusto dolore modi dolorum in
                                        pariatur. Incidunt repellendus praesentium quae!
                                    </p>
                                    <button type="submit" class="btn btn-outline-success btn-sm">
                                        Edit
                                    </button>
                                    <button type="submit" class="btn btn-outline-danger btn-sm">
                                        Delete
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mb-4">
                            <div class="card">
                                <img src="https://images.unsplash.com/photo-1477862096227-3a1bb3b08330?ixlib=rb-1.2.1&auto=format&fit=crop&w=700&q=60"
                                    alt="" class="card-img-top" />
                                <div class="card-body">
                                    <h5 class="card-title">Sunset</h5>
                                    <p class="card-text">
                                        Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                        Ut eum similique repellat a laborum, rerum voluptates
                                        ipsam eos quo tempore iusto dolore modi dolorum in
                                        pariatur. Incidunt repellendus praesentium quae!
                                    </p>
                                    <button type="submit" class="btn btn-outline-success btn-sm">
                                        Edit
                                    </button>
                                    <button type="submit" class="btn btn-outline-danger btn-sm">
                                        Delete
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="userDetail">
                <div class="card mb-10 my-5 mx-5">
                    <div class="card-body"> -->
                    <!-- Grid row -->
                    <!-- <div class="row">
                            <!-- Grid column -->
                    <!-- <div class="col-md-12">
                                <h2 class="pt-3 pb-4 text-center font-bold font-up deep-purple-text">
                                   <strong>form details</strong> 
                                </h2>
                            </div> -->
                    <!-- </div>
                            <table class="table table-striped text-center">
                            <thead>
                                <tr>
                                    <th>sno</th>
                                    <th>username</th>
                                    <th>password</th> -->
                    <!-- </tr>
    </thead> -->
                    <!-- Grid column -->
                </div>
                <div class="row">
                    <!-- Grid column -->
                    <div class="col-md-12">
                        <h2 class="pt-3 pb-4 text-center font-bold font-up deep-purple-text">
                            <strong>form details</strong>
                        </h2>
                    </div>
                    <!-- Grid column -->
                </div>
                <!-- Grid row -->
                <!--Table-->
                <table class="table table-striped text-center">
                    <!--Table head-->

                    <thead>
                        <tr>
                            <th>Sno</th>
                            <th>Name</th>
                            <th>address</th>
                            <th>contact no</th>
                            <th>select item</th>
                            <th>select quantity</th>
                            <!-- <th>Email</th>
                                    <th>password</th> -->
                            <!-- <th>action</th> -->
                        </tr>
                    </thead>
                    <!--Table head-->
                    <!--Table body-->
                    <tbody>
                        <?php 
                                $sql = "SELECT * FROM `form`";
                                $result = mysqli_query($conn,$sql);
                                $Sno = false;
                                $count = 1;
                                while($row = mysqli_fetch_assoc($result)){
                                    echo "<tr>";
                                    echo "<th>".$count."</th>";
                                    echo "<td>".$row['name']."</td>";
                                    echo "<td>".$row['address']."</td>";
                                    echo "<td>".$row['contact no']."</td>";
                                    echo "<td>".$row['item']."</td>";
                                    echo "<td>".$row['quantity']."</td>";
                                    echo "<td>
                                    <button id='u".$row['sno']."' type='button' rel='tooltip' class='deleteUser btn btn-danger btn-round btn-just-icon btn-sm'>delete User</button>
                                    </td>";
                                    echo "</tr>";
                                    $Sno = true;  
                                    $count = $count+1;      
                                }
                                if(!$Sno){
                                    echo "<p class='card-text text-center'> no users yet</p>";
                                }
                                ?>



                    </tbody>
                    <!--Table body-->
                </table>
                <!--Table-->
        </div>
        </div>
    </section>

    <section id="messages">
        <div class="card mb-10 my-5 mx-5">
            <div class="row">
                <!-- Grid column -->
                <div class="col-md-12">
                    <h2 class="pt-3 pb-4 text-center font-bold font-up deep-purple-text">
                        <strong>Messages</strong>
                    </h2>
                </div>
                <!-- Grid column -->
            </div>
            <div class="container m-3 mx-0">

                <?php
                    $sql = "SELECT * FROM `contact us`";
                    $result = mysqli_query($conn,$sql);
                    $Sno = false;
                    while($row = mysqli_fetch_assoc($result)){
                        echo "<div class='card-body mb-2' style='background-color: #eaeef3;'>";
                        echo "<h5 class='card-title text-primary'>".$row['subject']."</h5>";
                        echo "<p class='card-text'>".$row['message']."</p>";
                        echo "<p class='card-text'><small class='text-muted'> - ".$row['name']."(@".$row['email'].")</small></p>";
                        echo "<button id='d".$row['sno']."' type='button' rel='tooltip' class=' deleteMsg btn btn-danger btn-round btn-just-icon btn-sm'>
                                <i class='material-icons' id='z".$row['sno']."' >mark as read</i>
                                </button></div>";
                        $Sno = true;        
                    }
                    if(!$Sno){
                        echo "<p class='card-text text-center'> no messages yet</p>";
                    }
                    ?>
            </div>
        </div>
        </div>
    </section>
    </div>
    <!--Container Main end-->
    </section>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.1/mdb.min.js"></script>
    <script src="dashboard.js"></script>
    <script>
        deletesUser = document.getElementsByClassName("deleteUser");
        Array.from(deletesUser).forEach((element) => {
            element.addEventListener("click", (e) => {
                sno = e.target.id.substr(1);
                //   console.log("hello "+sno);
                if (confirm('want to delete?')) {
                    window.location = `/swapnilprog/dashboard.php?deleteUser=${sno}`;
                }
            })
        })
        deletesMsg = document.getElementsByClassName("deleteMsg");
        Array.from(deletesMsg).forEach((element)=>{
                element.addEventListener("click",(e)=>{
                sno = e.target.id.substr(1);
                //   console.log("hello"+sno);
                if(confirm('want to delete?')){
                    window.location = `/swapnilprog/dashboard.php?deleteMessage=${sno}`;
                }
            })
        })
    </script>
</body>

</html>