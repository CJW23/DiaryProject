<!--로그인 후 메인 화면 --!>
<DOCTYPE html>
    <html>

    <head>
        <!-- Theme Made By www.w3schools.com - No Copyright -->
        <title>Bootstrap Theme The Band</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="../game.js"></script>

        <style>
            @import url(//fonts.googleapis.com/earlyaccess/hanna.css);
            @import url(//fonts.googleapis.com/earlyaccess/nanumbrushscript.css);
            body {
                
                background-image: url("sij.jpg");
                background-repeat: no-repeat;
                background-size: 100%;
                background-position: center;
                background-attachment: fixed;
            }

            .form-group:nth-child(1) label {
                display: block;
            }

            .form-group:nth-child(1) input[type=text] {
                width: 100%;
                display: inline-block
            }

            .form-group:nth-child(1) input[type=button] {
                margin-left: 10px;
            }

            .form-group:nth-child(7) label {
                display: block;
            }

            .form-group:nth-child(7) input {
                float: left;
                width: 30%;
                margin-right: 3%;
            }

            .form-group:nth-child(7) p {
                float: left;
                margin-right: 3%;
            }

            .form-group:nth-child(7) select {
                width: 26%;
                height: 34px;
                margin-left: 2%;
                border-radius: 4px;
            }

            #pos_canel {
                background-color: black;
                color: white;
                height: 45px;
                width: 100px;
                position: fixed;
                left: 7%;
            }

            #pos_sign {
                background-color: black;
                color: white;
                height: 45px;
                width: 100px;
                position: fixed;
                left: 76%;
            }

            #pos_sign:hover,
            #pos_canel:hover {
                border: 1px solid #333;
                background-color: #fff;
                color: #000;
            }

            #profile {
                position: relative;
                margin: auto;
                border-radius: 100%;
            }

            .row {
                position: relative;
                margin: auto;
            }

            #main_name {
                margin: auto;
                font-size: 28px;
                font-family:  Montserrat;
            }

            body {
                font: 400 15px/1.8 Lato, sans-serif;
                color: #777;
            }

            h3,
            h4 {
                margin: 10px 0 30px 0;
                letter-spacing: 10px;
                font-size: 20px;
                color: #111;
            }

            .container {
                padding: 80px 120px;
            }

            .container_1 {
                padding: 4% 3%;
            }

            .bg-1 {
                background: #2d2d30;
                color: #bdbdbd;
            }

            .bg-2 {
                background: black;
                background-color: rgba( 0,0,0,1.0 );
                < !--#2d2d30-->color: #bdbdbd;
            }

            .bg-1 h3 {
                color: #fff;
            }

            .bg-1 p {
                font-style: italic;
            }

            .thumbnail {
                padding: 0 0 15px 0;
                border: none;
                border-radius: 0;
            }

            .thumbnail p {
                margin-top: 15px;
                color: #555;
            }

            .btn {
                padding: 10px 20px;
                background-color: #333;
                color: #f1f1f1;
                border-radius: 0;
                transition: .2s;
            }

            .btn:hover,
            .btn:focus {
                border: 1px solid #333;
                background-color: #fff;
                color: #000;
            }

            .modal-header,
            h4,
            .close {
                background-color: #333;
                color: #fff !important;
                text-align: center;
                font-size: 30px;
            }

            .modal-header,
            .modal-body {
                padding: 40px 50px;
            }

            .nav-tabs li a {
                color: #777;
            }

            #googleMap {
                width: 100%;
                height: 400px;
                -webkit-filter: grayscale(100%);
                filter: grayscale(100%);
            }

            .navbar {
                font-family: Montserrat, sans-serif;
                margin-bottom: 0;
                background-color: #2d2d30;
                border: 0;
                font-size: 13px !important;
                letter-spacing: 4px;
                opacity: 0.9;
            }

            .navbar li a,
            .navbar .navbar-brand {
                color: #d5d5d5 !important;
            }

            .navbar-nav li a:hover {
                color: #fff !important;
            }

            .navbar-nav li.active a {
                color: #fff !important;
                background-color: #29292c !important;
            }

            .navbar-default .navbar-toggle {
                border-color: transparent;
            }

            .open .dropdown-toggle {
                color: #fff;
                background-color: #555 !important;
            }

            .dropdown-menu li a {
                color: #000 !important;
            }

            .dropdown-menu li a:hover {
                background-color: red !important;
            }

            footer {
                background-color: #2d2d30;
                color: #f5f5f5;
                padding: 32px;
            }

            footer a {
                color: #f5f5f5;
            }

            footer a:hover {
                color: #777;
                text-decoration: none;
            }

            .form-control {
                border-radius: 0;
            }

            textarea {
                resize: none;
            }

            .container-fluid {
                padding-right: 81%;
                background-color: #000
            }

            #menu {
                font-size: 15px;
            }

            #letter {
                font-size: 13px;
            }

            #profile {
                display: block;
                margin-left: auto;
                margin-right: auto;
            }

            #profil {
                font-family: 'Hanna';
                font-size: 30px;
                letter-spacing: 9px;
                text-align: center;
            }
            .col-sm-3 {
                width: 20%;
            }
        </style>
        <script>

            $(document).ready(function () {
                $("#game").load("gamedp.html?ids=<?php echo $_GET['ids']; ?>&lock=<?php echo $_GET['lock']; ?>");     //!!!!!!!게임 페이지로 아이디 전달
            });
            
        </script>
    </head>

    <body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50" style="font-family:THE외계인설명서;">
        <?php
             $servername = "localhost:3307";
             $username = "root";
             $password = "awdsd123";
             $dbname = "gamepw";
             $conn = new mysqli($servername, $username, $password, $dbname);
             $id = $_GET['ids'];
             $lock = $_GET['lock'];
             $query = "SELECT * FROM userlist where userid='$id'";
             $result_set = mysqli_query($conn, $query);
             while($row = mysqli_fetch_array($result_set)){
                $message = $row['promessage'];
                $image = $row['proimage'];
                $locate = $row['locate'];
             }

        ?>
        <script>
            function logout(){
                location.href="joinform.html";
            }
            $(document).ready(function(){
                $("#op").click(function(){
                    $(".all").fadeToggle("slow");
                    if($(this).html()=='열기'){
                        $(this).html('닫기');
                    }
                    else{
                        $(this).html('열기');
                    }
                });
            });
        </script>
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#myPage" id="main_name" >Storygram</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a data-toggle="modal" data-target="#myModainput">WRITE STORY</a>
                        </li>
                        <li>
                            <a value="change" data-toggle="modal" data-target="#myModaprofi">PROFILE</a>
                        </li>
                        <li>
                            <a value="awdawd" data-toggle="modal" data-target="#myModapt" id="letter" onclick="reset();">PATTERN</a>
                        </li>
                        <li>
                            <a href="#" value="end" onclick="logout()">LOGOUT</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container">
            <div class="modal fade" id="myModapt" role="dialog">
                <div class="modal-dialog">
                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-body" id="game">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div>
            <img id="profile" src="<? echo $image;?>" height="200" width="200">
            <br>
            <div >
                <p id="profil" style="font-size:30px; margin-left:1%; color:black; font-family: 'Nanum Brush Script';">
                    <?php echo $message;?>
                </p>
            </div>
            <br>
            <br>
            <br>
            <button class='btn' id='op'>닫기</button>
            <!--  게시글 부분 -->
            <div class="all">
            <div class="bg-2">
                <div class="container_1">
                    <div class="row text-center">
                        <?php
                        if($lock == 0)
                        {
                            $query = "SELECT *FROM $id";
                            $result_set = mysqli_query($conn, $query);
                            while($row = mysqli_fetch_array($result_set)){
                                echo
                                " 
                                <div class='col-sm-3'>
                                    <div class='thumbnail'>
                                        <img src='$row[4]' alt='' style='width:400; height:250;' width='400' height='300'>
                                        <p>
                                            <strong style='font-size: 30px; font-family: Nanum Brush Script;'>$row[1]</strong>
                                        </p>
                                        <button class='btn' data-toggle='modal' data-target='#myModal$row[0]'>OPEN</button>
 
                                    </div>
                                </div>

                                <div class=modal fade id=myModal$row[0] role='dialog' style = 'margin-top : 50px;'>
                                <div class='modal-dialog' style = 'width : 1000px;'>
                                    <!-- 팝업 창 내용-->
                                    <div class='modal-content'>
                                        <div id='myCarousel$row[0]' class='carousel slide' data-ride='carousel'>
                                            <!-- Indicators -->
                                            <ol class='carousel-indicators'>                
                                                <li data-target='#myCarousel$row[0]' data-slide-to='0' class='active'></li>
                                                <li data-target='#myCarousel$row[0]' data-slide-to='1'></li>                
                                                <li data-target='#myCarousel$row[0]' data-slide-to='2'></li>
                                            </ol>
                                          
                                            <!-- Wrapper for slides -->
                                            <div class='carousel-inner' role='listbox' style = 'height : 580px;'>
                                                <div class='item active' style = 'height : 800px;'>
                                                    <img src='$row[4]' alt='New York'  style = 'width :100%; height : 800px;'> 
                                                </div>";
                                                if(!is_null($row[5])){
                                                    echo "
                                                <div class='item' style = 'height : 200px;'>
                                                    <img src='$row[5]' alt='Chicago' style = 'width :100%; height:800px;'>     
                                                </div>";
                                                }
                                                if(!is_null($row[6])){
                                                    echo"
                                                <div class='item' style = 'height : 200px;'>
                                                    <img src='$row[6]' alt='Los Angeles'  style = 'width :100%; height : 800px;'>
                                                </div>";
                                                }
                                                if(!is_null($row[7])){
                                                    echo"
                                                <div class='item' style = 'height : 200px;'>
                                                    <img src='$row[7]' alt='Los Angeles'  style = 'width :100%; height : 800px;'>
                                                </div>";
                                                }
                                                if(!is_null($row[8])){
                                                    echo"
                                                <div class='item' style = 'height : 200px;'>
                                                    <img src='$row[8]' alt='Los Angeles'  style = 'width :100%; height : 800px;'>
                                                </div>";
                                                }
                                                echo "
                                            </div>
                                             <p style = 'font-size : 50px; font-family: Nanum Brush Script;'>
                                                        <script>
                                                            var str = '$row[3]';
                                                        
                                                            document.write(str.substr(0,66));
                                                            document.write('<br>');
                                                            document.write(str.substr(66,66));
                                                            document.write('<br>');
                                                            document.write(str.substr(132,66));
                                                            document.write('<br>');
                                                            document.write(str.substr(198,66));
                                                            document.write('<br>');
                                                            document.write(str.substr(264,66));
                                                            document.write('<br>');
                                                            document.write(str.substr(330,66));
                                                            document.write('<br>');
                                                            document.write(str.substr(396,66));
                                                            document.write('<br>');
                                                            document.write(str.substr(462,39));
                                                            document.write('<br>');
                                                
                                                        </script>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Left and right controls -->
                                <a class='left carousel-control' href='#myCarousel$row[0]' role='button' data-slide='prev' style = 'width : 100px; height : 100px; margin-left : 350px; margin-top : 14%'>
                                    <span class='glyphicon glyphicon-chevron-left' aria-hidden='true'></span>
                                    
                                </a>
                                <a class='right carousel-control' href='#myCarousel$row[0]' role='button' data-slide='next' style = 'width : 100px; height : 100px; margin-right : 350px; margin-top : 14%'>
                                    <span class='glyphicon glyphicon-chevron-right' aria-hidden='true'></span>
                                        
                                </a>
                            </div>";
                            }
                        }
                        else if($lock == 1)
                        {
                            $query = "SELECT *FROM $id where open='1'";
                            $result_set = mysqli_query($conn, $query);
                            while($row = mysqli_fetch_array($result_set)){
                                echo
                                " 
                                <div class='col-sm-3'>
                                    <div class='thumbnail'>
                                        <img src='$row[4]' alt='' style='width:400; height:250;' width='400' height='300'>
                                        <p>
                                            <strong style='font-size: 30px; font-family: Nanum Brush Script;'>$row[1]</strong>
                                        </p>
                                        <button class='btn' data-toggle='modal' data-target='#myModal$row[0]'>OPEN</button>
                                    </div>
                                </div>

                                <div class=modal fade id=myModal$row[0] role='dialog' style = 'margin-top : 50px;'>
                                <div class='modal-dialog' style = 'width : 1000px;'>
                                    <!-- 팝업 창 내용-->
                                    <div class='modal-content'>
                                        <div id='myCarousel$row[0]' class='carousel slide' data-ride='carousel'>
                                            <!-- Indicators -->
                                            <ol class='carousel-indicators'>                
                                                <li data-target='#myCarousel$row[0]' data-slide-to='0' class='active'></li>
                                                <li data-target='#myCarousel$row[0]' data-slide-to='1'></li>                
                                                <li data-target='#myCarousel$row[0]' data-slide-to='2'></li>
                                            </ol>
                                          
                                            <!-- Wrapper for slides -->
                                            <div class='carousel-inner' role='listbox' style = 'height : 580px;'>
                                                <div class='item active' style = 'height : 800px;'>
                                                    <img src='$row[4]' alt='New York'  style = 'width :100%; height : 800px;'> 
                                                </div>";
                                                if(!is_null($row[5])){
                                                    echo "
                                                <div class='item' style = 'height : 200px;'>
                                                    <img src='$row[5]' alt='Chicago' style = 'width :100%; height:800px;'>     
                                                </div>";
                                                }
                                                if(!is_null($row[6])){
                                                    echo"
                                                <div class='item' style = 'height : 200px;'>
                                                    <img src='$row[6]' alt='Los Angeles'  style = 'width :100%; height : 800px;'>
                                                </div>";
                                                }
                                                if(!is_null($row[7])){
                                                    echo"
                                                <div class='item' style = 'height : 200px;'>
                                                    <img src='$row[7]' alt='Los Angeles'  style = 'width :100%; height : 800px;'>
                                                </div>";
                                                }
                                                if(!is_null($row[8])){
                                                    echo"
                                                <div class='item' style = 'height : 200px;'>
                                                    <img src='$row[8]' alt='Los Angeles'  style = 'width :100%; height : 800px;'>
                                                </div>";
                                                }
                                                echo "
                                            </div>
                                             <p style = 'font-size : 50px; font-family: Nanum Brush Script;'>
                                                        <script>
                                                            var str = '$row[3]';
                                                        
                                                        
                                                            document.write(str.substr(0,66));
                                                            document.write('<br>');
                                                            document.write(str.substr(66,66));
                                                            document.write('<br>');
                                                            document.write(str.substr(132,66));
                                                            document.write('<br>');
                                                            document.write(str.substr(198,66));
                                                            document.write('<br>');
                                                            document.write(str.substr(264,66));
                                                            document.write('<br>');
                                                            document.write(str.substr(330,66));
                                                            document.write('<br>');
                                                            document.write(str.substr(396,66));
                                                            document.write('<br>');
                                                            document.write(str.substr(462,39));
                                                            document.write('<br>');
                                                      
                                                        </script>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Left and right controls -->
                                <a class='left carousel-control' href='#myCarousel$row[0]' role='button' data-slide='prev' style = 'width : 100px; height : 100px; margin-left : 350px; margin-top : 14%'>
                                    <span class='glyphicon glyphicon-chevron-left' aria-hidden='true'></span>
                                    
                                </a>
                                <a class='right carousel-control' href='#myCarousel$row[0]' role='button' data-slide='next' style = 'width : 100px; height : 100px; margin-right : 350px; margin-top : 14%'>
                                    <span class='glyphicon glyphicon-chevron-right' aria-hidden='true'></span>
                                        
                                </a>
                            </div>";
                            }
                        }
                         ?>
                    </div>
                </div>
            </div>

            <div class = "item" id="map" style="width:100%; height: 800px; margin--right : 10%;">
                                <script>
                                    function myMap() { 
                                        var pos = <? echo $locate; ?>;
                                        var mapCanvas = document.getElementById("map");
                                        if(pos ==1){
                                            var myCenter = new google.maps.LatLng(37.549814, 126.975836);
                                        }
                                        else if(pos==2){
                                            var myCenter = new google.maps.LatLng(37.454013, 126.704131);
                                        }
                                        else if(pos==3){
                                            var myCenter = new google.maps.LatLng(36.341772, 127.392046);
                                        }
                                        else if(pos==4){
                                            var myCenter = new google.maps.LatLng(35.155238, 126.839984);
                                        }
                                        else if(pos==5){
                                            var myCenter = new google.maps.LatLng(35.831173, 128.568327);
                                        }
                                        else if(pos==6){
                                            var myCenter = new google.maps.LatLng(35.167578, 129.051358);
                                        }
                                        else if(pos==7){
                                            var myCenter = new google.maps.LatLng(33.383343, 126.522190);
                                        }
                                        else if(pos==8){
                                            var myCenter = new google.maps.LatLng(36.305400, 128.881875);
                                        }
                                        else if(pos==9){
                                            var myCenter = new google.maps.LatLng(35.470862, 128.200958);
                                        }
                                        else if(pos==10){
                                            var myCenter = new google.maps.LatLng(37.005475, 127.680356);
                                        }
                                        else if(pos==11){
                                            var myCenter = new google.maps.LatLng(36.721693, 126.804205);
                                        }
                                        else if(pos==12){
                                            var myCenter = new google.maps.LatLng(35.716949, 127.141753);
                                        }
                                        else if(pos==13){
                                            var myCenter = new google.maps.LatLng(34.871446, 126.990438);
                                        }
                                        else if(pos==14){
                                            var myCenter = new google.maps.LatLng(37.838256, 128.109069);
                                        }
                                        else if(pos==15){
                                            var myCenter = new google.maps.LatLng(37.428487, 127.471915);
                                        }
                                        else if(pos==16){
                                            var myCenter = new google.maps.LatLng(37.282463, 127.005851);
                                        }
                                        else if(pos==17){
                                            var myCenter = new google.maps.LatLng(37.735881, 127.071176);
                                        }
                                        else if(pos==18){
                                            var myCenter = new google.maps.LatLng(37.888127, 127.737492);
                                        }
                                        else if(pos==19){
                                            var myCenter = new google.maps.LatLng(37.305849, 127.930202);
                                        }else if(pos==20){
                                            var myCenter = new google.maps.LatLng(37.722965, 128.854552);
                                        }
                                        else if(pos==21){
                                            var myCenter = new google.maps.LatLng(35.545150, 129.256301);
                                        }
                                        else if(pos==22){
                                            var myCenter = new google.maps.LatLng(36.580140, 128.779428);
                                        }
                                        else if(pos==23){
                                            var myCenter = new google.maps.LatLng(34.854224, 128.434002);
                                        }
                                        else if(pos==24){
                                            var myCenter = new google.maps.LatLng(34.788055, 127.638734);
                                        }
                                        else if(pos==25){
                                            var myCenter = new google.maps.LatLng(34.986575, 127.392462);
                                        }
                                        else if(pos==26){
                                            var myCenter = new google.maps.LatLng(34.811361, 126.394209);
                                        }
                                        else if(pos==27){
                                            var myCenter = new google.maps.LatLng(35.964119, 126.713221);
                                        }
                                        else if(pos==28){
                                            var myCenter = new google.maps.LatLng(36.624400, 127.494380);
                                        }
                                        else if(pos==29){
                                            var myCenter = new google.maps.LatLng(36.744558, 126.295705);
                                        }
                                        else if(pos==30){
                                            var myCenter = new google.maps.LatLng(36.798908, 127.200366);
                                        }
                                        var mapOptions = {
                                            center: myCenter, 
                                            zoom: 6.8
                                        };
                                        var map = new google.maps.Map(mapCanvas, mapOptions);

                                        var marker = new google.maps.Marker({
                                            position:myCenter,
                                            animation:google.maps.Animation.BOUNCE   
                                        });
                                        marker.setMap(map);

                                        var myUniversity = new google.maps.Circle({
                                            center: myCenter,
                                            radius: 12000,
                                            strokeColor: "#0000FF",
                                            strokeOpacity: 0.8,
                                            strokeWeight: 2,
                                            fillColor: "#0000FF",
                                            fillOpacity: 0.4
                                        });
                                        myUniversity.setMap(map);
                                    }
                                </script>
                                <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBAlOjojzJqN5CEy7iGWtTTiWgCMiPUhXI&callback=myMap"></script>
                            </div>            
                                </div>

            <div class="modal fade" id="myModaprofi" role="dialog">
                <div class="modal-dialog">
                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">×</button>
                            <h4>PROFILE</h4>
                        </div>

                        <div class="modal-body" style="padding:7% ">
                            <form action="profile.php" method="POST" enctype="multipart/form-data">
                                <input type="hidden" name="ids" value=<? echo $_GET['ids'];?>>
                                <div class="form-group">
                                    <label for="ID">
                                        <span class="glyphicon glyphicon-user"></span>Message</label>
                                    <input type="text" class="form-control" maxLength="20" name="message" id="ID" required>
                                </div>
                                <div class="form-group">
                                    <label for="NAME">
                                        <span class="glyphicon glyphicon-user"></span>Profile</label>
                                    <input type="file" class="form-control" maxLength="20" name="profile" id="name" required>
                                </div>
                                <div class="modal-footer">
                                    <input type="submit" id="pos_sign" value="Sign up">
                                    <input type="button" id="pos_canel" value="cancel" data-dismiss="modal">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 팝업?으로 띄우기 -->
            <div class="modal fade" id="myModainput" role="dialog">
                <div class="modal-dialog">

                    <!-- 팝업 창 내용-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">×</button>
                            <h4>글 등록</h4>
                        </div>

                        <div class="modal-body">


                            <form method="POST" action="data_insert.php" enctype="multipart/form-data">
                                <!-- 등록 하는 부분-->
                                <input type="hidden" name='userid' value=<? echo $_GET[ 'ids'];?>>
                                <div class="form-group">
                                    <p>
                                        <label>
                                            <span class="glyphicon glyphicon-bookmark"></span> 제목</label>
                                    </p>
                                    <input type="text" class="form-control" name="title" id="context" placeholder="제목 입력" required>
                                </div>
                                <div class="form-group">
                                    <p>
                                        <label>
                                            <span class="glyphicon glyphicon-ok"></span> 공개여부</label>
                                        <br>
                                    </p>
                                    <p>
                                        <input type="radio" name="open" value="1" checked required> 공개
                                        <input type="radio" name="open" value="0"> 비공개
                                        <br>
                                    </p>
                                </div>
                                
                                <input type="file" name="filenam1" size="40" required>
                                <input type="file" name="filenam2" size="40">
                                <input type="file" name="filenam3" size="40">
                                <input type="file" name="filenam4" size="40">
                                <input type="file" name="filenam5" size="40">
                        </div>

                        <div class="form-group">
                            <p>
                                <label>
                                    <span class="glyphicon glyphicon-pencil"></span> 내용</label>
                            </p>
                            <textarea cols="10" rows="10" class="form-control" id="content" name="story" placeholder="내용 입력 (500자 이내)" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-block">등록하기 </button>
                    </div>
                    </form>
                </div>
            </div>
        </div>

       

    </body>

    </html>
</DOCTYPE>