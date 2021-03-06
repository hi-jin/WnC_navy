<?php
    session_start();
    if (isset($_SESSION['user_id'])) {
        echo "<script>location.href='/main.php';</script>";
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
        .container {
            display: flex;
            height: 500px;
        }

        .item {
            flex-grow: 1;
            border: 1px solid gray;
            border-color: lightgrey;
        }

        main>div {
            display: flex;
            flex-direction: row;
            justify-content: space-around;
            align-items: center;
        }

        @media (max-width: 700px) {
            main>div {
                flex-direction: column;
            }
        }
    </style>
</head>

<body>
    <div class="main-container">
        <header>
            <div id='main-page-link'>아과다</div>
        </header>
        <span style="width: 100%;
    background: papayawhip; padding-top: 40px; text-align: center;">
            <div class="main-title">
                <p style="font-size: 48px;
            font-family: 'Gaegu', cursive;">우리는!</p>
                <div>
                    <p><span style="font-size: 48px; font-family: 'Black Han Sans', sans-serif;">아</span>무에게나</p>
                    <p><span style="font-size: 48px; font-family: 'Black Han Sans', sans-serif;">과</span>외받지</p>
                    <p>않는<span style="font-size: 48px; font-family: 'Black Han Sans', sans-serif;">다</span>.</p>
                </div>
            </div>
        </span>
        <main>
            <div>
                <p style='font-size: 32px;'>
                    아과다에서 과외쌤을 찾아보세요! <br>
                    실패 없는 과외 매칭 서비스
                </p>
                <a href="/main.php">
                    <p style="font-size: 48px;">바로가기</p>
                </a>
            </div>
            <br><br>
            <p style='font-size: 32px;'>아과다에서는...</p>
            <p style='font-size: 24px;'>1. 평점이 높은 선생님을 찾기 쉽습니다.</p>
            <p style='font-size: 24px;'>2. (todo)수강 전 과외 선생님과 채팅을 할 수 있습니다.</p>
        </main>
        <footer>
            <p style='font-size: 24px;'>contact us! <a href="">email</a> <a href="https://github.com/hi-jin/WnC_navy">github</a></p>
        </footer>
    </div>
    <script src="/script/jquery-3.6.0.js"></script>
    <script>
        $(document).ready(function () {
            $('#main-page-link').click(() => { location.href = "/" });
        });
    </script>
</body>

</html>