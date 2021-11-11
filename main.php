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
    </style>
</head>

<body>
    <div class="main-container">
        <header>
            <div id='main-page-link'>아과다</div>
            <div id='login-link'>로그인</div>
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
                        <button class='login-button'>
                            <p style='font-size: 24px;'>로그인</p>
                        </button>
                        <button class='join-button'>
                            <p style='font-size: 24px;'>회원가입</p>
                        </button>
                    </div>
                </div>
            </div>
            <div class="modal-con con2">
                <div class='login-form con con2'>
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
                        <button class='join-button'>
                            <p style='font-size: 24px;'>회원가입</p>
                        </button>
                    </div>
                </div>
            </div>
            <!-- 로그인 팝업 -->
        </main>
        <footer>
            <p style='font-size: 24px;'>contact us! <a href="crushed7@o.cnu.ac.kr">email</a> <a
                    href="https://github.com/hi-jin/WnC_navy">github</a></p>
        </footer>
    </div>
    <script src="/script/jquery-3.6.0.js"></script>
    <script>
        $(document).ready(function () {
            $('#main-page-link').click(() => { location.href = "/" });

            // 로그인 팝업
            $('#login-link').click(() => {
                $("#modal").fadeIn(300);
                $(".con1").fadeIn(300);
            });

            $('.join-button').click(() => {
                $("#modal").fadeIn(300);
                $(".modal-con").fadeOut(300);
                $(".con2").fadeIn(300);
            });

            $("#modal, .close").on('click', function () {
                $("#modal").fadeOut(300);
                $(".modal-con").fadeOut(300);
            });

        });

        function clickCheck(target) {
            document.querySelectorAll(`input[type=checkbox]`)
                .forEach(el => el.checked = false);

            target.checked = true;
        }
    </script>
</body>

</html>