<?php
include("header.php");
?>
<script src="/js/quiz_read.js"></script>
<div id="quiz_read_frame">
    <div id="quiz_read">
        <div id="quiz_read_wrapper">
            <div id="quiz_read_title_wrapper">
                <p id="quiz_read_title"></p>
            </div>
            <!-- <ul class="quiz_read_ul">
                <li class="quiz_read_question">Requin은 무엇일까요?</li>
                <li class="quiz_read_answer">Requin은 대덕소프트웨어마이스터고등학교 5기 학생들이 만든 팀입니다!</li>
            </ul> -->
        </div>
        <button id="quiz_more_button" onclick="clickMoreList()"><img src="/img/dotdotdot_white.png" alt="dotdotdot_img"></button>
        <div id="quiz_read_goto_solve_frame">
            <button id="quiz_read_goto_solve">문제 풀러가기</button>
        </div>
    </div>
</div>

<?php
include("footer.php");
?>