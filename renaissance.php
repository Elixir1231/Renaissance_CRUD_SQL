<?php
    session_start();
    if(!isset($_SESSION['Username'])){
        header('location:login.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="logo.png" type="image/icon type">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" 
			  rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Renaissance</title>
</head>
<style>
* {
    font-family: 'Times New Roman', Times, serif;
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    scroll-behavior: smooth;
}

body {
    font-family: 'Times New Roman', Times, serif;
    scroll-behavior: smooth;
}

header {
    color: #fff;
    padding: 10px 0;
    background-color: hsla(0, 0%, 0%, 0.4);
    position: absolute;
    width: 100%;
    box-shadow: 0px 0px 15px 10px hsla(0, 0%, 0%, 0.4);
}

nav ul {
    list-style-type: none;
    text-align: right;
    margin-top: 10px;
    margin-right: 10vh;
}

nav li {
    display: inline;
    margin: 0 40px;
    
}

nav a {
    text-decoration: none;
    color: whitesmoke;
}

.container1{
    height: 105vh;
    background-image: image-set('nike.jpg');
    background-repeat: no-repeat;
    background-size: contain;
    background-position: right;
    background-color: #151517;
}

.container1 .nike1{
   width: 800px;
}

.container1 .text{
    margin-left: 125px;
    padding-top: 30vh;
    color: ghostwhite;
}

.container1 h1{
    font-size: 70px;
    text-shadow: 5px 0px 5px #151517;
}

.container1 p{
    padding-top: 15vh;
}

.container2{
    background-color: #151517 ; 
    box-shadow: 0px 0px 50px 70px #151517;
    position: relative;
    height: 70vh;
    margin-top: -60px;
    z-index: 200;
}

.container2 .carousel{
    width: 350px;
    padding-top: 2%;
    
}

.container2 ul{
    display: flex;
    margin-left: 15px;
}

.container2 li{
    padding-left: 10%;
}

.container2 ul .text{
    padding-top: 5%;
    color: ghostwhite;
}

.container3{
    background-color: #0f0c0c; 
    box-shadow: 0px 0px 50px 70px #0f0c0c;
    height: 185vh;
    z-index: 0;
}

.container3 .images{
    margin-left: 50vh;
}

.container3 .up{
    position: relative;
    z-index: 100;
    filter: drop-shadow(20px 10px 6px #131313);
}

.container3 .down{
    position: relative;
    z-index: 100;
    margin-left: 10vh;
    filter: drop-shadow(-20px 10px 6px #131313);
}

.container3 .photo1{
    position: relative;
    margin-top: -45vh;
    margin-right: 30vh;
    z-index: 0;
    text-align: right;
    color: ghostwhite;
}

.container3 .photo2{
    position: relative;
    margin-top: 10vh;
    margin-bottom: -45vh;
    margin-left: -20vh;
    z-index: 0;
    text-align: left;
    color: ghostwhite;
}

.container3 .border{
    border: ghostwhite;
    border-radius: 5vh;
    height: 145vh;
    margin-top: -160vh;
    margin-left: 10vh;
    margin-right: 10vh;
    border-width: 5px;
}

.container3 .text{
    padding-left: 25vh;
    padding-top: 10vh;
    color: ghostwhite;
}

.container3 .text h1{
    font-size: 65px;
    
}

.container4{
    background-color: black; 
    box-shadow: 0px 0px 50px 100px black;
    height: 190vh;
    position: relative;
    z-index: 100;
}

.container4 .image{
    position: relative;
    padding-left: 60vh;
    margin-top: -12vh;
    z-index: 1;
}

.container4 .title{
    position: relative;
    z-index: 0;
    text-align: center;
    color: ghostwhite;
}

.container4 .title h1{
    font-size: 110px;
}

.container4 .image1{
    transform: scaleX(-1);
    transform: rotateX(200deg);
    filter: blur(4px);
    margin-left: 60vh;
    margin-top: -3vh;
    z-index: 1;
    position: relative;
}

.container4 .box1{
    position: relative;
    z-index: 5;
    height:75vh;
    width:180vh;
    background-color: #151517;
    border-radius: 5vh;
    background-color: hsla(0, 0%, 10%, .9);
    margin-top: -125vh;
    margin-left: 13vh;
    color: ghostwhite;
}

.box1 h5{
    padding-top: 3vh;
}

.php{
    padding:40px;
}

.php p{
    padding-top: 20px;
    padding-left: 2vh;
    
}


.php a{
    padding-left: 30px;
}

.php a button{
    opacity:0;
    transition: 0.3s;
}

.php p:hover button{
    opacity:1;
}

.php .scroll{
    background-color: ;
    border-radius: 5vh;
    height: 300px;
    overflow: scroll;
    overflow-x: hidden;
    margin-top:2vh;
    background-color: hsla(0, 0%, 0%, .2);
}

</style>

<body>

    <header>
        <nav>
            <ul>
                <img src="logo.png" style="width: 40px;float: left;">
                <li><a href="#a">Home</a></li>
                <li><a href="#b">Carousel</a></li>
                <li><a href="#c">Rebirth</a></li>
                <li><a href="#d">Assignment</a></li>
                <li><a href="logout.php">Log Out</a></li>
            </ul>   
        </nav>
    </header>


    <section id="a">
        <div class="container1">
            <div class="text">
                <h6>
                    Hi "<?php echo $_SESSION['Username']?>"
                    —————— Welcome to 
                </h6>
                <h1>
                    AGE OF <br>
                    THE RENAISSANCE
                </h1>
                <p>
                    <a href="#d" style="text-decoration: none; color: ghostwhite;">—See More—</a> 
                </p>
            </div>
        </div>
    </section>
    

    <section id="b">
        <div class="container2">
            <div class="carousel">
                <ul>
                    <li>
                        <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                              <div class="carousel-item active" data-bs-interval="2000">
                                <img src="1pic.jpeg" class="d-block w-100" alt="">
                              </div>
                              <div class="carousel-item" data-bs-interval="2000">
                                <img src="2pic.jpeg" class="d-block w-100" alt="">
                              </div>
                              <div class="carousel-item" data-bs-interval="2000">
                                <img src="5pic.jpg" class="d-block w-100" alt="">
                              </div>
                              <div class="carousel-item" data-bs-interval="2000">
                                <img src="6pic.jpg" class="d-block w-100" alt="">
                              </div>
                              <div class="carousel-item" data-bs-interval="2000">
                                <img src="7pic.jpg" class="d-block w-100" alt="">
                              </div>
                              <div class="carousel-item" data-bs-interval="2000">
                                <img src="8pic.jpg" class="d-block w-100" alt="">
                              </div>
                              <div class="carousel-item" data-bs-interval="2000">
                                <img src="9pic.jpg" class="d-block w-100" alt="">
                              </div>
                            </div>
                        </div>

                        <div class="text">
                            <h4>
                                PAINTING
                            </h4>
                            <hr>
                            <h5>
                                <b>Renaissance painting</b>
                            </h5>
                            <p>
                                Gradual shift from the abstract forms of the medieval period to the representational forms of the 15th century.
                            </p>
                        </div>
                    </li>
                    <li>
                        <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                              <div class="carousel-item active" data-bs-interval="2000">
                                <img src="apic.jpg" class="d-block w-100" alt="...">
                              </div>
                              <div class="carousel-item" data-bs-interval="2000">
                                <img src="bpic.jpg" class="d-block w-100" alt="...">
                              </div>
                              <div class="carousel-item" data-bs-interval="2000">
                                <img src="cpic.jpg" class="d-block w-100" alt="...">
                              </div>
                              <div class="carousel-item" data-bs-interval="2000">
                                <img src="dpic.jpg" class="d-block w-100" alt="...">
                              </div>
                              <div class="carousel-item" data-bs-interval="2000">
                                <img src="epic.jpg" class="d-block w-100" alt="...">
                              </div>
                              <div class="carousel-item" data-bs-interval="2000">
                                <img src="fpic.jpg" class="d-block w-100" alt="...">
                              </div>
                              <div class="carousel-item" data-bs-interval="2000">
                                <img src="gpic.jpg" class="d-block w-100" alt="...">
                              </div>
                            </div>
                        </div>

                        <div class="text">
                            <h4>
                                SCULPTURE
                            </h4>
                            <hr>
                            <h5>
                                <b>Renaissance sculpture</b>
                            </h5>
                            <p>
                                Recovery of the sculpture of classical antiquity.
                            </p>
                        </div>
                    </li>
                    <li>
                        <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                              <div class="carousel-item active" data-bs-interval="2000">
                                <img src="a1.jpg" class="d-block w-100" alt="...">
                              </div>
                              <div class="carousel-item" data-bs-interval="2000">
                                <img src="b2.jpg" class="d-block w-100" alt="...">
                              </div>
                              <div class="carousel-item" data-bs-interval="2000">
                                <img src="c3.jpg" class="d-block w-100" alt="...">
                              </div>
                              <div class="carousel-item" data-bs-interval="2000">
                                <img src="d4.jpg" class="d-block w-100" alt="...">
                              </div>
                              <div class="carousel-item" data-bs-interval="2000">
                                <img src="e5.jpg" class="d-block w-100" alt="...">
                              </div>
                              <div class="carousel-item" data-bs-interval="2000">
                                <img src="f6.jpg" class="d-block w-100" alt="...">
                              </div>
                              <div class="carousel-item" data-bs-interval="2000">
                                <img src="g7.jpg" class="d-block w-100" alt="...">
                              </div>
                            </div>
                        </div>

                        <div class="text">
                            <h4>
                                ARCHITECTURE
                            </h4>
                            <hr>
                            <h5>
                                <b>Renaissance architecture</b>
                            </h5>
                            <p>
                                The classical notions of beauty based on proportion and symmetry.
                            </p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    

        <div class="container3">
            <div class="images">
                <div class="up">
                    <img src="up.png">
                </div>

            <section id="c">    
                <div class="photo1">
                    <img src="davinci1.jpg" style="width: 400px;">
                    <h1>The Last Supper</h1>
                </div>
            </section>

                <div class="text">
                    <h1>—REBIRTH—</h1>
                </div>

                <div class="photo2">
                    <h1>Leonardo Da Vinci</h1>
                    <img src="davinci2.jpg" style="width: 400px;">
                </div>
                
                <div class="down">
                    <img src="down (1).png">
                </div>
            </div>
            <div class="border"></div>
        </div>

    
    <section id="d">
        <div class="container4">
            <div class="title">
                <h1>
                    RENAISSANCE
                </h1>
            </div>
            <div class="image">
                <img src="angel.png" style="width: 420px;">
            </div>
            <div class="image1">
                <img src="angel.png" style="width: 420px;">
            </div>

            <div class="box1">
                <h5 style=" text-align: center; color:ghostwhite;">ASSIGNMENT</h5>

                <div class="php">
                <form method="POST" action="upload.php" enctype="multipart/form-data">
                    <input type="file" name="file">
                    <button type="submit" class="btn btn-outline-success" name="upload">Submit</button>
                </form>
                <div class="scroll">
                <?php
                $files=scandir("uploads");
                for($a=2;$a<count($files);$a++)
                {
                    ?>
                    <p>➡   
                        <?php echo $files[$a];?>

                        <a href="uploads/<?php echo $files[$a];?>" download="<?php echo $files[$a];?>" 
                        style="text-decoration:none;">
                        <button type="button" class="btn btn-outline-secondary">Dowload</button> &nbsp;
                        </a>
                        <a href="delete.php?name=uploads/<?php echo $files[$a];?>" style="color:#B22727;text-decoration:none">
                        <button type="button" class="btn btn-outline-danger">Delete</button>
                        </a>
                    </p>
                    <?php
                }
                ?>
                </div>

            </div>
        </div>

    </section>
  
   

    <footer>
        
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" 
     		 crossorigin="anonymous"></script>
   
</body>
</html>
