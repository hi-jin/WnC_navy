<?php
    session_start();
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

            <!-- 로고 -->
            <span class='logo' style="width: 100%; padding-top: 40px; text-align: center;">
                <div style="padding-bottom: 20px;" class="main-title">
                    <p style="font-size: 48px;
            font-family: 'Gaegu', cursive;">우리는!</p>
                    <div>
                        <p><span style="font-size: 48px; font-family: 'Black Han Sans', sans-serif;">아</span>무에게나</p>
                        <p><span style="font-size: 48px; font-family: 'Black Han Sans', sans-serif;">과</span>외받지</p>
                        <p>않는<span style="font-size: 48px; font-family: 'Black Han Sans', sans-serif;">다</span>.</p>
                    </div>
                </div>
            </span>
            <!-- 로고 -->

            <!-- top5 선생님 -->
            <span class='teacher-view-link'>
                <p><a href="Teacher_list.html">선생님 전체보기</a></p>
            </span>
            
            <div class='best-teachers'>
                <div class='teacher'>
                </div>
                <p class='songyi'><a href='board.php'>모집 게시판으로 이동</a></p>
            </div>
            
            <!-- top5 선생님 -->
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
                        alert(result);
                    },
                    error: (request, status, err) => {
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
