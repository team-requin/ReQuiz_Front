<?php
include("header.php");
?>
<div id="quiz_solve">
    <div class="quiz_solve_wrapper">
        <!-- <div class="quiz_solve_workbook_title">
            <span>문제집</span>
        </div> -->
        <button class="quiz_solve_button" id="quiz_solve_stop">stop</button>
        <div class="quiz_solve_content_wrapper">
            <div class="quiz_solve_content_question">
                <div class="quiz_solve_num">Q</div>
                <div class="quiz_solve_title">문제 제목</div>
            </div>
            <div class="quiz_solve_content_answer">
                <!-- <div class="quiz_solve_answer">답</div> -->
                <div class="quiz_solve_input_frame">
                    <input type="text" class="quiz_solve_input" autofocus="on">
                </div>
            </div>
        </div>
        
        <div class="quiz_solve_buttons">
            <div>
                <button class="quiz_solve_button" id="quiz_before_stop">before</button>
                <button class="quiz_solve_button" id="quiz_next_stop">next</button>
            </div>
        </div>
    </div>
</div>

<?php
include("footer.php");
?>