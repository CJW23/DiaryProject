
<!-- 로그인 체크 -->
<?php
    $id = $_POST['id'];
    $password3 = $_POST['password3'];
    
    $conn = mysqli_connect("localhost:3307", "root", "awdsd123", "gamepw");
    $sql = "SELECT * FROM userlist WHERE userid = '$id' and password= '$password3'";
    $result = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($result);

    
    if($count != 1){ //로그인 실패
        echo "<script>alert('awdawd.');</script>";
        echo ("<script language=javascript>location.replace('joinform.html');</script>");}
?>
<html>
<body>
    <form action="print.php" id="sub" method="GET">
        <input type="hidden" name="ids" value="<?php echo $id; ?>">
        <input type="hidden" name="lock" value="1">
    </form>
    
    <script>
        document.getElementById("sub").submit();
        
    </script>
</body>
</html>
<form action="print.php" id="sub" method="GET">
        <input type="hidden" name="ids" value="<?php echo $id; ?>">
    </form>