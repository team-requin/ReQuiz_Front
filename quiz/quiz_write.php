<?php
include("header.php");
?>
<div id="quiz_write_frame">
    <div class="quiz_write_title">
        <input class="quiz_write_title_input" type="text" placeholder="Please enter a workbook title" autofocus="on" />
    </div>

    <div class="quiz_write">
        <div class="quiz_num">1</div>
        <div class="quiz_problem">
            <form>
                <input type="text" class="quiz_question quiz_problems" placeholder="Please enter a question">
                <input type="text" class="quiz_answer quiz_problems" placeholder="Please enter a answer">
            </form>
            <button class="quiz_problem_delete" onclick="delete_quiz_write()">삭제하기</button>
        </div>
    </div>
    <!--
    <div class="quiz_write">
        <div class="quiz_num">
            <p>1</p>
        </div>
        <div class="quiz_problem">
            <form>
                <input type="text" class="quiz_question quiz_problems" placeholder="Please enter a question">
                <input type="text" class="quiz_answer quiz_problems" placeholder="Please enter a answer">
            </form>
        </div>
    </div>
    -->
</div>
<div id="quiz_write_bottom">
    <button class="quiz_add_problem" onclick="plus_quiz_write()">+플러스</button>
    <div class="quiz_make_frame">
        <button class="quiz_make_btn">만들기</button>
    </div>
</div>
<script src="/js/quiz_write.js"></script>
<?php
include("footer.php");
?>