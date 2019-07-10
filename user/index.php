<?php
include('header.php');
?>
<script src="/js/user_info.js"></script>
<div id="mypage_wrapper">
    <div id="mypage_content_wrapper">
        <div id="mypage_main" class="mypage_content">
            <div id="mypage_profile_wrapper">
                <p id="mypage_profile_hello">안녕하세요, xxx님!!</p>
                <img src="/img/user_index_background.png" alt="mypage_background_img">
                <div id="mypage_exp_wrapper">
                    <div id="mypage_exp">
                        <div id="mypage_exp_percent">퍼센트</div>
                    </div>
                </div>
            </div>

            <div id="mypage_input_wrapper">
                <input type="text" class="myapge_input">
                <input type="text" class="myapge_input">
                <input type="password" class="myapge_input">
                <input type="password" class="myapge_input">
            </div>
        </div>

        <div id="mypage_bottom_wrapper" class="mypage_content">
            <div id="mypage_bottom">
                <button id="mypage_btn">
                    <p id="mypage_btn_end" onclick="back_page()">수정완료</p>
                </button>
            </div>
        </div>
    </div>
</div>
<?php
include('footer.php');
?>