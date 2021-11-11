<!DOCTYPE html>
<html>
    <head>
        <meta charset = "utf-8">
        <title>게시판</title>
        <link rel="stylesheet" type="text/css" href="/css/board.css" />
        <!-- Jquery 가져오기 --> <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
        <!-- bootstrap 가져오기 --> <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> <!-- bootstrap table 가져오기 --> <script src="https://unpkg.com/bootstrap-table@1.15.5/dist/bootstrap-table.min.js"></script>

    </head>
    <body>
        <div id="board_area">
            <h1>과외 학생 모집<h1>
            <div id="search_area">
                <form action="search.php">
                <select name="searchType3" id="searchType3">
                    <option value="all" selected="selected">전체</option>
                    <option value="title">제목</option>
                    <option value="total">모집인원</option>
                    <option value="teacher">선생님</option>
                </select>
                <input type="text" name="searchWord3" id="searchWord3" onclick="clickText(this.id)">
                <input type="submit" value="검색">
                </form>
            </div>
            <table class="type04">
            <thead>
                <tr>
                    <th scope="row">번호</th>
                    <th scope="row">제목</th>
                    <th scope="row">모집인원</th>
                    <th scope="row">선생님</th>
                    <th scope="row">등록일자</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>
            </table>    
            </div>
        </div>
    </body>
</html>