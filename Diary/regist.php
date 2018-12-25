<!-- 팩맨 패턴 DB 등록 -->
<?php
    $servername = "localhost:3307";
    $username = "root";
    $password = "awdsd123";
    $dbname = "gamepw";
    $pw = $_GET['pss'];
    $ids = $_GET['ids'];
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    if($pw!=1)
    {
        echo "<script>alert($ids)</script>";
        $sql = "UPDATE userlist SET userpattern='$pw' WHERE userid='$ids'";   //패턴 등록
        if ($conn->query($sql) === TRUE) {
            echo "<script>alert('비밀번호가 설정되었습니다.');</script>";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        echo("<script>history.back();</script>"); 
    }
    else{
        echo "<script>alert('비밀번호로 설정할 수 없습니다.');</script>"; 
        echo("<script>history.back();;</script>"); 
    }

?>