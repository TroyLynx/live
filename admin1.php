<?php
session_start();
//echo "Session Username: " . ($_SESSION['username'] ?? 'not set') . "<br>";
if (isset($_SESSION['username']) && $_SESSION['username']=="admin") {
    # code...
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | live</title>
    <style>
        *{
            margin:0px;
            padding:0px;
        }
        .items{
            display:flex;
            
        }
        .card{
            border:1px solid black;
            border-radius:10px;
            margin:5px;
        }
        .img-card{
            /*width: 20%;*/
            height:auto;
        }
        .desc-card{
            /*width: 20%;*/
            height:auto;
        }
    </style>
</head>
<body>
    <h3>Just some items</h3>

    <form action="admin1.php" method="GET">
        <?php 
        if (isset($_GET['logout'])) {
            # code...
            session_start();
            session_abort();
            session_destroy();
            header("Location:index.php");
        }
        ?>
        <button type="submit" name="logout" value="1">Logout</button>
    </form>

    <div class="items">
        <div class="card">
            <div class="img-card">
                <img src="./assets/cat.jpg" alt="">
            </div>
            <div class="desc-card">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias quas nostrum natus sed possimus, asperiores quasi vel ipsam! Est iure inventore dicta, officiis minima molestias ex animi dolorem reiciendis dolor.
            </div>
            <form action="url.php" method="GET">
                <input type="hidden" name=url value="http://127.0.0.1/emp.txt">
                <button>Read More...</button>
            </form>
        </div>


        <div class="card">
            <div class="img-card">
            <img src="./assets/cat.jpg" alt="">
            </div>
            <div class="desc-card">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias quas nostrum natus sed possimus, asperiores quasi vel ipsam! Est iure inventore dicta, officiis minima molestias ex animi dolorem reiciendis dolor.
            </div>
            <form action="url.php" method="GET">
                <input type="hidden" name=url value="http://127.0.0.1/emp.txt">
                <button>Read More...</button>
            </form>
        </div>


        <div class="card">
            <div class="img-card">
            <img src="./assets/cat.jpg" alt="">
            </div>
            <div class="desc-card">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias quas nostrum natus sed possimus, asperiores quasi vel ipsam! Est iure inventore dicta, officiis minima molestias ex animi dolorem reiciendis dolor.
            </div>
            <form action="url.php" method="GET">
                <input type="hidden" name=url value="http://127.0.0.1/emp.txt">
                <button>Read More...</button>
            </form>
        </div>
    </div>
</body>
</html>
<?php
}else{
   // echo "Session Username: " . ($_SESSION['username'] ?? 'not set') . "<br>";
    //echo "you aint admin";
header("Location:user.php");
exit();
}?>