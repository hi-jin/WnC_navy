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

    $db = mysqli_connect('localhost', 'web', '1284', 'web');
    $teacher_id_check_sql = "select id from teacher where id = '$uid'";
    $teacher_id_check = $db->query($teacher_id_check_sql);
    if ($teacher_id_check->num_rows==1) {
        echo "중복된 아이디입니다.";
    } else {
        $student_id_check_sql = "select id from student where id = '$uid'";
        $student_id_check = $db->query($student_id_check_sql);
        if ($student_id_check->num_rows==1) {
            echo "중복된 아이디입니다.";
        } else {
            if ($utype == "teacher") {
                $join_sql = "insert into teacher(id, pw) values('$uid', '$upw')";
                $join_check = $db->query($join_sql);
            } else if ($utype == "student") {
                $join_sql = "insert into student(id, pw) values('$uid', '$upw')";
                $join_check = $db->query($join_sql);
            }
            if ($join_check) {
                echo "회원가입이 완료되었습니다.";
            } else {
                echo "회원가입 오류. 관리자에게 문의해주세요.";
            }
        }
    }

?>