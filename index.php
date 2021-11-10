<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
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

        main {
            background-color: seashell;
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
            아과다
        </header>
        <span style="width: 100%;
    background-color: papayawhip; padding-top: 30px; display: flex; flex-direction: column; align-items: center;">
            <div class="main-title">
                <p style="font-size: xxx-large;
            font-family: 'Gaegu', cursive;">우리는!</p>
                <div>
                    <p><span style="font-size: xxx-large; font-family: 'Black Han Sans', sans-serif;">아</span>무에게나</p>
                    <p><span style="font-size: xxx-large; font-family: 'Black Han Sans', sans-serif;">과</span>외받지</p>
                    <p>않는<span style="font-size: xxx-large; font-family: 'Black Han Sans', sans-serif;">다</span>.
                    </p>
                </div>
            </div>
        </span>
        <main>
            <div>
                <p style='font-size: xx-large;'>
                    아과다에서 과외쌤을 찾아보세요! <br>
                    실패 없는 과외 매칭 서비스
                </p>
                <a href="/main.php">
                    <p style="font-size: xxx-large;">바로가기</p>
                </a>
            </div>
            <br><br>
            <p style='font-size: xx-large;'>아과다에서는...</p>
            <p style='font-size: x-large;'>1. 평점이 높은 선생님을 찾기 쉽습니다.</p>
            <p style='font-size: x-large;'>2. (todo)수강 전 과외 선생님과 채팅을 할 수 있습니다.</p>
        </main>
        <footer>
            <p style='font-size: x-large;'>contact us! <a href="">email</a> <a href="">github</a></p>
        </footer>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
    <script src="/script/jquery-3.6.0.js"></script>
    <script>
        $(document).ready(function () {
            $('.item').hover(function () {
                $(this).css('background-color', 'lightgrey');
            }, function () {
                $(this).css('background-color', 'transparent');
            })
        });
    </script>
</body>

</html>