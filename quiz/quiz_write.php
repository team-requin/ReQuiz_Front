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
                <button class="quiz_add_problem">+플러스</button>
            </form>
        </div>
    </div>
    <div class="quiz_making_btn">
        <button>make!</button>
    </div>
</div>
<?php
include("footer.php");
?>