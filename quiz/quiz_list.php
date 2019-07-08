<?php
include("header.php");
?>
<script src="/js/quiz_list.js"></script>
<div id="quiz_list_frame">
    <div id="quiz_profile">
        <img src="http://placehold.it/200x200" alt="profile">
        <div id="quiz_profile_input">
            <p id="list_user_id" class="profile_user_account"></p>
            <p id="list_user_name" class="profile_user_nickname"></p>
        </div>
    </div>
    <div id="quiz_list">
        <div class="quiz_list_add_button_frame">
            <button class="quiz_add_button">추가하기</button>
        </div>
    </div>
    <!-- <div class="no_list">
        <span>게시물이 존재하지 않습니다.</span>
    </div> -->
</div>

<?php
include("footer.php");
?>