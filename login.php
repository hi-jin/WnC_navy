<?php
    $uid = $_POST['uid'];
    $upw = $_POST['upw'];
    $utype = $_POST['utype'];

    if ($uid == null) {
        echo "아이디를 입력해주세요.";
    } else if ($upw == null) {
        echo "비밀번호를 입력해주세요.";
    } else if ($utype == null) {
        echo "선생님/학생 중 하나를 선택해주세요.";
    }

    $db = mysqli_connect('localhost', 'root', '1284', 'web');
    
    if ($utype == "teacher") {
        $id_sql = "select id from teacher where id='$uid'";
        $id_result = $db->query($id_sql);
        if ($id_result->num_rows==1) {
            $pw_sql = "select profile, pw from teacher where id='$uid'";
            $pw_result = $db->query($pw_sql);
            $pw_row = $pw_result->fetch_array(MYSQLI_ASSOC);
            if ($pw_row['pw'] == $upw) {
                session_start();
                $_SESSION['user_id'] = $uid;
                $_SESSION['user_type'] = $utype;
                $_SESSION['profile'] = $pw_row['profile'];
                echo "로그인 성공";
            } else {
                echo "아이디 혹은 비밀번호를 확인해주세요.";
            }
        } else {
            echo "아이디 혹은 비밀번호를 확인해주세요.";
        }
    } else if ($utype == "student") {
        $id_sql = "select id from student where id='$uid'";
        $id_result = $db->query($id_sql);
        if ($id_result->num_rows==1) {
            $pw_sql = "select profile, pw from student where id='$uid'";
            $pw_result = $db->query($pw_sql);
            $pw_row = $pw_result->fetch_array(MYSQLI_ASSOC);
            if ($pw_row['pw'] == $upw) {
                session_start();
                $_SESSION['user_id'] = $uid;
                $_SESSION['user_type'] = $utype;
                $_SESSION['profile'] = $pw_row['profile'];
                echo "로그인 성공";
            } else {
                echo "아이디 혹은 비밀번호를 확인해주세요.";
            }
        } else {
            echo "아이디 혹은 비밀번호를 확인해주세요.";
        }
    }
?>
