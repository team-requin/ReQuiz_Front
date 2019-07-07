<?php
include("header.php");
?>
<script>
	quizList(getUrlPar('user'));
</script>
<div id="quiz_list_frame">
    <div id="quiz_profile">
        <img src="http://placehold.it/200x200" alt="profile">
        <div id="quiz_profile_input">
            <p id="list_user_id" class="profile_user_account"></p>
            <p id="list_user_name" class="profile_user_nickname"></p>
            <button id="profile_edit">수정</button>
        </div>
    </div>
    <div id="quiz_list">
        <div class="quiz_list_frame">
            <div class="quiz_list_title">제목</div>
            <button class="quiz_list_modify">수정</button>
        </div>
        <div class="quiz_list_frame">
            <div class="quiz_list_title">제목</div>
            <button class="quiz_list_modify">수정</button>
        </div>
        <div class="quiz_list_frame">
            <div class="quiz_list_title">제목</div>
            <button class="quiz_list_modify">수정</button>
        </div>
        <div class="quiz_list_frame">
            <div class="quiz_list_title">제목</div>
            <button class="quiz_list_modify">수정</button>
        </div>
    </div>
</div>

<?php
include("footer.php");
?>