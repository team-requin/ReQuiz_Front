<?php
include("header.php");
?>
<div id="quiz_solve">
    <div class="quiz_solve_wrapper">
        <div class="quiz_solve_workbook_title">
            <span>문제집</span>
        </div>

        <div class="quiz_solve_content_wrapper">
            <div class="solve_content_title">
                <div class="quiz_solve_num">문제1</div>
                <div class="quiz_solve_title">문제 제목</div>
            </div>
            <div class="solve_content_answer">
                <div class="quiz_solve_answer">답</div>
            </div>
        </div>
        
        <div class="quiz_solve_bottom">
            <button class="quiz_solve_button" id="quiz_solve_stop">stop</button>
            <button class="quiz_solve_button" id="quiz_before_stop">before</button>
            <button class="quiz_solve_button" id="quiz_next_stop">next</button>
        </div>
    </div>
</div>

<?php
include("footer.php");
?>