<?php

require_once('config.php');

?>


<?php

if (isset($_POST)) {
    $username = $_POST['username'];
    $password = sha1($_POST['password']);
    $nickname = $_POST['nickname'];
    $phonenumber = $_POST['phonenumber'];
    $email = $_POST['email'];
    
    $sql = "CALL sp_UserRegister(?, ?, ?, ?, ?)";
    $stmt = $db->prepare($sql);
    $result = $stmt->execute([$username, $password, $nickname, $phonenumber, $email]);
}else{
    echo "No data";
}
?>