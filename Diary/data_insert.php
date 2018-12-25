<!--게시글 업로드 -->
<?php
$title = $_POST['title'];
$open = $_POST['open'];
$story = $_POST['story'];
$userid = $_POST['userid'];


if(!empty($title) || !empty(!open) || !empty($city) || !empty($story)){
    $host = "localhost:3307";
    $dbUsername = "root";
    $dbPassword = "awdsd123";
    $dbname = "gamepw";
    $conn = new mysqli($host,$dbUsername, $dbPassword, $dbname);
    $fileName = array();
    $filePath = array();
    $upload_filename = array();
    $path = array();
    $imgname = array();
    if(mysqli_connect_error()){

         die('Connect Error('. mysqli_connect_errno().')'.mysqli_connect_error());
    }
    else{
        if(!isset($_FILES['filenam1'])){
            echo "업로드 없음";
        }
        $img_size=getimagesize($_FILES['filenam1']['tmp_name']);
        do{
            $time=explode('',microtime());
            $fileName[0]=$time[1].substr($time[0],2,6).'.'.strtoupper($imgext);
            $filePath[0]=$_SERVER['DOCUMENT_ROOT'].'/lastpj/image';
        }while($result->num_rows > 0);
        $upload_filename[0]=date("dhis").$_FILES['filenam1']['name'];
        $path[0]=$filePath[0]."/".$upload_filename[0]; 
        $a=move_uploaded_file($_FILES['filenam1']['tmp_name'],$path[0]);
        $imgname[0] = 'image/'.$upload_filename[0];

        
           
            $img_size=getimagesize($_FILES['filenam2']['tmp_name']);
            do{
                $time=explode('',microtime());
                $fileName[1]=$time[1].substr($time[0],2,6).'.'.strtoupper($imgext);
                $filePath[1]=$_SERVER['DOCUMENT_ROOT'].'/lastpj/image';
            }while($result->num_rows > 0);
            $upload_filename[1]=date("dhis").$_FILES['filenam2']['name'];
            $path[1]=$filePath[1]."/".$upload_filename[1]; 
            $a=move_uploaded_file($_FILES['filenam2']['tmp_name'],$path[1]);
            if(!empty($_FILES['filenam2']['name']))
             $imgname[1] = 'image/'.$upload_filename[1];
        
      

        
            $img_size=getimagesize($_FILES['filenam3']['tmp_name']);
            do{
                $time=explode('',microtime());
                $fileName[2]=$time[1].substr($time[0],2,6).'.'.strtoupper($imgext);
                $filePath[2]=$_SERVER['DOCUMENT_ROOT'].'/lastpj/image';
            }while($result->num_rows > 0);
            $upload_filename[2]=date("dhis").$_FILES['filenam3']['name'];
            $path[2]=$filePath[2]."/".$upload_filename[2]; 
            $a=move_uploaded_file($_FILES['filenam3']['tmp_name'],$path[2]);
            if(!empty($_FILES['filenam3']['name']))
            $imgname[2] = 'image/'.$upload_filename[2];
       

        
            $img_size=getimagesize($_FILES['filenam4']['tmp_name']);
            do{
                $time=explode('',microtime());
                $fileName[3]=$time[1].substr($time[0],2,6).'.'.strtoupper($imgext);
                $filePath[3]=$_SERVER['DOCUMENT_ROOT'].'/lastpj/image';
            }while($result->num_rows > 0);
            $upload_filename[3]=date("dhis").$_FILES['filenam4']['name'];
            $path[3]=$filePath[3]."/".$upload_filename[3]; 
            $a=move_uploaded_file($_FILES['filenam4']['tmp_name'],$path[3]);
            if(!empty($_FILES['filenam4']['name']))
            $imgname[3] = 'image/'.$upload_filename[3];
        

        
            $img_size=getimagesize($_FILES['filenam5']['tmp_name']);
            do{
                $time=explode('',microtime());
                $fileName[4]=$time[1].substr($time[0],2,6).'.'.strtoupper($imgext);
                $filePath[4]=$_SERVER['DOCUMENT_ROOT'].'/lastpj/image';
            }while($result->num_rows > 0);
            $upload_filename[4]=date("dhis").$_FILES['filenam5']['name'];
            $path[4]=$filePath[4]."/".$upload_filename[4]; 
            $a=move_uploaded_file($_FILES['filenam5']['tmp_name'],$path[4]);
            if(!empty($_FILES['filenam5']['name']))
            $imgname[4] = 'image/'.$upload_filename[4];
       

        echo ("<script language=javascript>alert('등록완료');</script>");
        $INSERT = "INSERT Into $userid (title, open, story, img1, img2, img3, img4, img5) values(?,?,?,?,?,?,?,?)";
        $stmt = $conn->prepare($INSERT);
        

        $stmt-> bind_param("ssssssss", $title, $open, $story, $imgname[0], $imgname[1], $imgname[2], $imgname[3], $imgname[4]);
        $stmt-> execute();
        $prevPage = $_SERVER["HTTP_REFERER"];
        header("location:".$prevPage);
    }
}
?>