<?php
include('header.php');
?>
<script src="/js/user_info.js"></script>
<div id="mypage_wrapper">
    <div id="mypage_content_wrapper">
        <div id="mypage_main" class="mypage_content">
            <div id="mypage_profile_wrapper">
                <p id="mypage_profile_hello">안녕하세요, xxx님!!</p>
                <img id="mypage_profile_image" src="../img/color_requin.png" alt="mypage_background_img">
                <div id="mypage_exp_wrapper">
                    <div id="mypage_exp"><div></div></div>
                </div>
                <div id="mypage_exp_percent">1,000</div>
            </div>

            <div id="mypage_input_wrapper">
                <p class="mypage_p">아이디</p>
                <input type="text" class="myapge_input" id="cant_change_id">
                <p id="cant_change_id_text">아이디는 변경이 불가능합니다.</p>
                <div id="mypage_nickname">
                    <p class="mypage_p">닉네임</p>
                    <button id="mypage_overlap_check">중복확인</button>
                </div>
                <input type="text" class="myapge_input">
                <p class="mypage_p">비밀번호</p>
                <input type="password" class="myapge_input">
                <p class="mypage_p">비밀번호 확인</p>
                <input type="password" class="myapge_input">
            </div>
        </div>

        <div id="mypage_bottom_wrapper" class="mypage_content">
            <div id="mypage_bottom">
                <button id="mypage_btn" onclick="back_page()">수정완료</button>
            </div>
        </div>
    </div>
</div>
<?php
include('footer.php');
?>