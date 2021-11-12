<?php
    session_start();
    if (!isset($_SESSION['user_id'])) {
        echo "<script>alert('로그인 후 이용하실 수 있습니다.'); location.href='/';</script>";
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/reset.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Black+Han+Sans&family=Gaegu:wght@700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="/css/style.css">
    <title>아과다</title>
    <style>
        @media (max-width: 600px) {

            .logo {
                display: none;
            }
        }
    </style>
</head>

<body>
    <div class="main-container">
        <header>
            <div style='display: flex;'>
                <div style="padding-right: 20px;" id='main-page-link'>아과다</div>
                <?php
                    if (isset($_SESSION['user_id'])) {
                        echo "<div id='my-page-link'>마이페이지</div>";
                    }
                ?>
            </div>
            <?php
                if (isset($_SESSION['user_id'])) {
                    echo "<div id='logout-link'>로그아웃</div>";
                } else {
                    echo "<div id='login-link'>로그인</div>";
                }
            ?>
        </header>
        <main>
            <!-- 로그인 팝업 -->
            <div id="modal"></div>
            <div class="modal-con con1">
                <div class='login-form con'>
                    <a href="javascript:;" class="close">X</a>
                    <div>
                        <input type="text" placeholder="아이디를 입력하세요.">
                        <input type="password" placeholder="비밀번호를 입력하세요.">
                        <div>
                            <label><input type="checkbox" name='type' value='teacher' onclick="clickCheck(this)">
                                선생님</label>
                            <label><input type="checkbox" name='type' value='student' onclick="clickCheck(this)">
                                학생</label>
                        </div>
                    </div>
                    <div>
                        <button id='login' class='login-button'>
                            <p style='font-size: 24px;'>로그인</p>
                        </button>
                        <button class='join-button'>
                            <p style='font-size: 24px;'>회원가입</p>
                        </button>
                    </div>
                </div>
            </div>
            <div class="modal-con con2">
                <div class='login-form con'>
                    <a href="javascript:;" class="close">X</a>
                    <div>
                        <input type="text" placeholder="이름을 입력하세요.">
                        <input type="text" placeholder="아이디를 입력하세요.">
                        <input type="password" placeholder="비밀번호를 입력하세요.">
                        <div>
                            <label><input type="checkbox" name='type' value='teacher' onclick="clickCheck2(this)">
                                선생님</label>
                            <label><input type="checkbox" name='type' value='student' onclick="clickCheck2(this)">
                                학생</label>
                        </div>
                    </div>
                    <div>
                        <button id='join' class='join-button'>
                            <p style='font-size: 24px;'>회원가입</p>
                        </button>
                    </div>
                </div>
            </div>
            <!-- 로그인 팝업 -->
            <div class='profile-picture'>
                <?php
                    if ($_SESSION['profile'] == 0) {
                        echo '<img width="150px" src="/img/default_user.png" alt="">';
                    } else {
                        echo '<img width="150px" height="150px" src="/img/'.$_SESSION["user_type"].'/'.$_SESSION['user_id'].'.png" alt="">';
                    }
                ?>
                <form name="reqform" method="post" action="profile_picture.php" enctype="multipart/form-data">
                    <input type="file" name="imgFile" /><br>
                    <input type="submit" value="업로드" />
                    <input id='del-profile' type="button" value="프로필 사진 삭제" />
                </form>
            </div>
        </main>
        <footer>
            <p style='font-size: 24px;'>contact us! <a href="">email</a> <a
                    href="https://github.com/hi-jin/WnC_navy">github</a></p>
        </footer>
    </div>
    <script src="/script/jquery-3.6.0.js"></script>
    <script>
        $(document).ready(function () {
            $('#main-page-link').click(() => { location.href = "/" });
            $('#my-page-link').click(() => { location.href = "/myPage.php" });

            // 로그인 팝업
            $('#login-link').click(() => {
                $("#modal").fadeIn(300);
                $(".con1").fadeIn(300);
                $(".con2").hide();
            });

            $('.join-button').click(() => {
                $(".modal-con").fadeOut(300);
                $(".con2").fadeIn(300);
                $(".con1").hide();
            });

            $("#modal, .close").on('click', function () {
                $("#modal").fadeOut(300);
                $(".modal-con").fadeOut(300);
            });

            $('#logout-link').click(() => {
                location.href = 'logout.php';
            });

            $('#login').click((e) => {
                e.preventDefault();

                let uid = $('.con1 > div > div > input[type="text"]').val()
                let upw = $('.con1 > div > div > input[type="password"]').val()
                let utype = login_type;

                $.ajax({
                    url: "/login.php",
                    type: "POST",
                    data: {
                        uid: uid,
                        upw: upw,
                        utype: utype
                    },
                    success: (result) => {
                        if (result == "로그인 성공") {
                            location.href = "/main.php";
                        }
                        alert(result);
                    },
                    error: (err) => {
                        alert(err);
                    }
                });
            });

            $('#del-profile').click((e) => {
                $.ajax({
                    url: "delete_profile.php",
                    type: "POST",
                    data: {
                        utype: "<?php echo $_SESSION['user_type'] ?>",
                        uid: "<?php echo $_SESSION['user_id'] ?>"
                    },
                    success: (result) => {
                        alert(result);
                    },
                    complete: () => {
                        location.reload();
                    }
                });
            });

            $('#join').click((e) => {
                e.preventDefault();

                let uname = $('.con2 > div > div > input[type="text"]:eq(0)').val()
                let uid = $('.con2 > div > div > input[type="text"]:eq(1)').val()
                let upw = $('.con2 > div > div > input[type="password"]').val()
                let utype = join_type;
                $.ajax({
                    url: "/join.php",
                    type: "POST",
                    data: {
                        uname: uname,
                        uid: uid,
                        upw: upw,
                        utype: utype
                    },
                    success: (result) => {
                        if (result == "회원가입이 완료되었습니다.") {
                            location.href = "/main.php";
                        }
                    },
                    error: (request, status, error) => {
                        alert(err);
                    }
                });
            });
        });

        let login_type = "";
        let join_type = "";

        function clickCheck(target) {
            document.querySelectorAll(`input[type=checkbox]`)
                .forEach(el => el.checked = false);
            login_type = target.value;
            target.checked = true;
        }

        function clickCheck2(target) {
            document.querySelectorAll(`input[type=checkbox]`)
                .forEach(el => el.checked = false);
            join_type = target.value;
            target.checked = true;
        }
    </script>
</body>

</html>