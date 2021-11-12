<?php
    $utype = $_POST['utype'];
    $uid = $_POST['uid'];
    $db = mysqli_connect("localhost", "web", "1284", "web");
    $sql = "update ".$utype." set profile = '0' where id='".$uid."'";
    $result = $db->query($sql);
    if ($result) {
        session_start();
        $_SESSION['profile'] = 0;
        unlink("img/$utype/$uid.png");
        echo "성공적으로 삭제됐습니다.";
    }
?>