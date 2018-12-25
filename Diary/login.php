<!-- 팩맨 확인DB -->
<?php
    $servername = "localhost:3307";
    $username = "root";
    $password = "awdsd123";
    $dbname = "gamepw";
    $pw = $_POST['inputpw'];
    $id = $_POST['ids'];
    $lock = $_POST['lock'];
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    $sql = "SELECT * FROM userlist where userid='$id'";
    $result = mysqli_query($conn, $sql);
    $tag = 1;
    while($row = mysqli_fetch_array($result)){
        if($row['userpattern'] == $pw){     //맞았으면
            $tag = 0;
            echo ("<script>alert('맞았습니다.');</script>");
            Header("Location:print.php?ids=$id&lock=0");
        } 
    }
    if($tag == 1){      //틀렸으면
        echo ("<script>alert('틀렸습니다.');</script>");
        Header("Location:print.php?ids=$id&lock=$lock");
    }
?>