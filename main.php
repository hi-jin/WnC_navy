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
    </style>
</head>

<body>
    <div class="main-container">
        <header>
            <div id='main-page-link'>아과다</div>
            <div id='login-link'>로그인</div>
        </header>
        <main>
        </main>
        <footer>
            <p style='font-size: x-large;'>contact us! <a href="crushed7@o.cnu.ac.kr">email</a> <a href="https://github.com/hi-jin/WnC_navy">github</a></p>
        </footer>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
    <script src="/script/jquery-3.6.0.js"></script>
    <script>
        $(document).ready(function () {
            $('#main-page-link').click(() => { location.href = "/" });
            $('#login-link').click(() => { location.href = "/login.php" });
        });
    </script>
</body>

</html>