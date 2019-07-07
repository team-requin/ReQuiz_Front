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
            <p class="profile_user_account">Please enter your account</p>
            <p class="profile_user_nickname">Please enter your Nickname</p>
            <button>수정</button>
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