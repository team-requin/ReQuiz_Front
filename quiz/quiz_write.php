<?php
include("header.php");
?>
<div id="quiz_write_frame">
    <div class="quiz_write">
        <div class="quiz_num">
            <p>1</p>
        </div>
        <div class="quiz_problem">
            <form>
                <input type="text" class="quiz_question quiz_problems">
                <input type="text" class="quiz_answer quiz_problems">
            </form>
        </div>
    </div>
    <button class="quiz_add_problem">+플러스</button>
    <div class="quiz_make_frame">
        <button class="quiz_make_btn">만들기</button>
    </div>
</div>
<?php
include("footer.php");
?>