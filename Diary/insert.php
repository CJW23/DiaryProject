<!--회원가입 후 데이터베이스 --!>
<?php
$userid = $_POST['userid'];
$password = $_POST['password'];
$password2 = $_POST['password2'];
$username = $_POST['username'];
$userage = $_POST['userage'];
$genders = $_POST['genders'];
$useremail = $_POST['useremail'];
$userdomain = $_POST['userdomain'];
$locate = $_POST['city'];
if(!empty($userid) || !empty($password) || !empty($password2) ||
	!empty($username) || !empty($userage) || !empty($genders) || !empty($useremail) || !empty($userdomain)){
		$host = "localhost:3307";
		$dbUsername = "root";
		$dbPassword = "awdsd123";
		$dbname = "gamepw";
		
		$conn = new mysqli($host,$dbUsername, $dbPassword, $dbname);
		
		if(mysqli_connect_error()){
			die('Connect Error('. mysqli_connect_errno().')'.mysqli_connect_error());	
		}else{
			$SELECT = "SELECT userid From userlist Where userid = ? Limit 1";
			$INSERT = "INSERT Into userlist (userid, password, password2, username,
				userage, genders, useremail, userdomain, locate) values(?, ?, ?, ?, ?, ?, ?, ?, ?)";
			$CREATE = "CREATE TABLE $userid( 
					id INT NOT NULL AUTO_INCREMENT,
					title VARCHAR(20) NOT NULL, 
					open varchar(10) NOT NULL, 
					story varchar(300) NOT NULL,
					img1 varchar(300),
					img2 varchar(300),
					img3 varchar(300),
					img4 varchar(300),
					img5 varchar(300),
					PRIMARY KEY (id) 
					)";
			$conn->query($CREATE);
			$stmt = $conn->prepare($SELECT);
			$stmt->bind_param("s", $userid);
			$stmt->execute();
			$stmt->bind_result($userid);
			$stmt->store_result();
			$rnum  = $stmt->num_rows;
			
			if($rnum == 0){
				$stmt->close();
				$stmt = $conn->prepare($INSERT);
				$stmt->bind_param("sssssssss", $userid, $password, $password2, $username, $userage, $genders, $useremail, $userdomain, $locate);
				$stmt->execute();
                echo ("<script language=javascript>alert('회원가입완료');</script>");
				echo ("<script language=javascript>location.replace('joinform.html');</script>");

			}else{
				echo ("<script language=javascript>alert('이미 사용중인 아이디입니다.');</script>");
                echo ("<script language=javascript>location.replace('joinform.html');</script>");

			}
			$stmt->close();
			$conn->close();
		}
}else{
	echo "All failed are required";
	die();
}
?>
