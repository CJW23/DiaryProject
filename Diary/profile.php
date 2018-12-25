<!-- 프로필 변경 --!>
<?php
     $servername = "localhost:3307";
     $username = "root";
     $password = "awdsd123";
     $dbname = "gamepw";
     $conn = new mysqli($servername, $username, $password, $dbname);
     $message = $_POST['message'];
     $id = $_POST['ids'];

     if(!isset($_FILES['profile'])){
        echo "업로드 없음";
    }
    
    $img_size=getimagesize($_FILES['profile']['tmp_name']);
    
    do{
        $time=explode('',microtime());
        $fileName=$time[1].substr($time[0],2,6).'.'.strtoupper($imgext);
        $filePath=$_SERVER['DOCUMENT_ROOT'].'/lastpj/image';
    }while($result->num_rows > 0);
    
    $upload_filename=date("dhis").$_FILES['profile']['name'];
    $file_size=$_FILES['profile']['size'];
    $file_type=$_FILES['profile']['type'];
    $path=$filePath."/".$upload_filename; 
     
    $sql= "update userlist set proimage='image/$upload_filename', promessage='$message' where userid='$id'";
    $a=move_uploaded_file($_FILES['profile']['tmp_name'],$path);
    $conn->query($sql);
    $prevPage = $_SERVER["HTTP_REFERER"];
    header("location:".$prevPage);
?>