<?php
$success=0;
$user=0;

if($_SERVER['REQUEST_METHOD']=='POST'){
    include 'connect.php';
    $Username=$_POST['Username'];
    $Password=$_POST['Password'];

    // $sql="insert into `registration`(Username,Password)
    // values('$Username','$Password')";
    // $result=mysqli_query($con,$sql);

    // if($result){
    //         echo "done";
    // }else{
    //     die(mysqli_error($con));
    // }

    $sql="Select * from `registration` where
    Username='$Username'";

    $result=mysqli_query($con,$sql);
    if($result){
        $num=mysqli_num_rows($result);
        if($num>0){
            $user=1;
        }else{
            $sql="insert into `registration`(Username,Password)
            values('$Username','$Password')";
            $result=mysqli_query($con,$sql);
            if($result){
                $success=1;
                session_start();
           $_SESSION['Username']=$Username;
           header('location:login.php');
            }else{
                die(mysqli_error($con));
                }
        }
}
}

?>

<!doctype html>
<html lang="ar">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.rtl.min.css">

    <title>Renaissance</title>
    <link rel="icon" href="logo.png" type="image/icon type">

    <style>
      @import url('https://fonts.googleapis.com/css2?family=Poppins');

      *{
        margin: 0;
        paddin: 0;
        box-sizing: border-box;
        font-family: 'Times New Roman', Times, serif;
      }

      body{
        background-color:	#0E0D0D;
      }
      
      .container{
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 75%;
        height: 550px;
        border-radius: 5px;
        background: transparent;
        marging-top: 20px;
      }

      .container .content{
        position: absolute;
        width: 55%;
        height: 100%;
        border-radius: 5px 0 0 5px;
        padding: 8%;
      }

      .content h1{
        font-size: 80px;
        color: #e4e4e4;
        font-weight: 900; 
        margin-left: -25vh;
        margin-top: -10vh;
        position: relative;
        z-index: 0;
        text-shadow: 2px 2px black;
      }

      .content img{
        position: relative;
        z-index: 1;
        height:535px;
        margin-top: -17.5vh;
        margin-left: -30vh;
      }
      
      p{
        color: #e4e4e4;
        margin-top: -3%;
        margin-left: 1%;
        letter-spacing: 1.7px;
        text-shadow: -1px 1px 2px #000,
				  1px 1px 2px #000,
				  1px -1px 0 #000,
				  -1px -1px 0 #000;
      }

      .container .loginbox{
        position: absolute;
        padding: 5%;
        top: 0;
        right: 0;
        width: calc(100% - 56.2%);
        height: 100%;
        border-radius: 0 5px 5px 0;
        backdrop-filter: blur(100px);
        box-shadow: rgba(0, 0, 0, 0.15) 2.4px 2.4px 3.2px;
        color: ghostwhite;
        z-index: 2;
      }

      .container .loginbox h5{
        text-align: center;
      }

      .background{
        width: 100%;
        height: 100vh;
        background: url('mother.png') no-repeat;
        background-size: 200vh;
        margin-left:-100px;
        background-position: center;
        filter: blur(10px);
      }

      .table{
        color: #e4e4e4;
      }

      .mb-3{
        position: relative;
        width: 100%;
        height:50px;
        border-bottom: 1px solid black;
        margin: 25px 0;
        
      }
      
     .mb-3 input{
      width: 100%;
      height: 100%;
      background: transparent;
      border: none;
      outline: none;
      color: ghostwhite;
     }

     label{
      position: absolute;
      top: 50%;
      left: 0;
      transform: translateY(-50%);
      color: black;
     }

      .a{
        padding-top: 4%;
        padding-left: 28%;
      }

      .b{
        padding-top: 4%;
        padding-left: 26%;
      }

      button{
        width: 100%;
      }

      .signup{
        margin-top:20px;
      }

      .signup h5{
        margin-top:20px;
      }

      .signup button{
        width: 30%;
      }

      .loginbox img{
        padding-top:3vh;
        width:30px;
      }

    </style>

  </head>

  <body>
<?php
if($user){
    echo '
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Pataka!!</strong> Naa nani oi!!
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
}
?>

<?php
if($success){
    echo '
    <div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Human na</strong> Signed up naka :>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
}
?>
  

  <div class="background"></div>

 
      
  <div class="container">

<div class="content">
<h1>RENAISSANCE</h1>
<img src="mother.png">
</div>

         <div class="loginbox">
         
          <h5><strong>SIGNIN PAGE</strong></h5>
          
         <form action="sign.php" method="post">
         <b>
<div class="mb-3">
<div class="a">
  <input type="text" name="Username" autocomplete="off">
  </div>
  <label>Username:</label>
</div>


<div class="mb-3">
<div class="b">
  <input type="password" name="Password" autocomplete="off">
  </div>
  <label>Password:</label>
</div>

    </b>


    <button type="submit" class="btn btn-outline-dark" style="color:ghostwhite;" name="submit">Submit</button>
    <a href="login.php"><img src="turn-back.png"></a>
  
         </div>

    
   
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" 
     		 crossorigin="anonymous"></script>
  </body>
</html>