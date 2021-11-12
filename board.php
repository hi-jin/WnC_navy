<?php include  $_SERVER['DOCUMENT_ROOT']."root/workspace/db.php"; ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset = "utf-8">
        <title>게시판</title>
        <link rel="stylesheet" type="text/css" href="/css/board.css" />
    </head>
    <body>
        <div id="board_area">
            <h1>과외 학생 모집<h1>
            <div id="search_area">
                <form action="search.php">
                <select name="searchType" id="searchType">
                    <option value="all" selected="selected">전체</option>
                    <option value="title">제목</option>
                    <option value="total">모집인원</option>
                    <option value="teacher">선생님</option>
                </select>
                <input type="text" name="searchWord" id="searchWord" onclick="clickText(this.id)">
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
            <?php
             // board테이블에서 idx를 기준으로 내림차순해서 5개까지 표시
             $db = mysqli_connect("localhost", "web", "1284", "web");   
             $sql = "select * from board order by id desc limit 0,5"; 
                    while($board = $db->query($sql)->fetch_array(MYSQLI_ASSOC))
                    {
                        //title변수에 DB에서 가져온 title을 선택
                        $title=$board["title"]; 
                        if(strlen($title)>30)
                        { 
                            //title이 30을 넘어서면 ...표시
                            $title=str_replace($board["title"],mb_substr($board["title"],0,30,"utf-8")."...",$board["title"]);
                        }
            ?>
            <tbody>
                <tr>
                    <td>
                        <?php echo $board['id']; ?>
                    </td>
                    <td>
                        <a href=""><?php echo $title;?></a>
                    </td>
                    <td>
                        <?php echo $board['total']?>
                    </td>
                    <td>
                        <?php echo $board['teacher']?>
                    </td>
                    <td>
                        <?php echo $board['regDate']?>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
            </table>
            <div id="write_btn">
                <a href="/root/workspace/write.php"><button>글작성</button></a>
            </div>
        </div>
    </body>
</html>