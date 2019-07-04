<?php
include("header.php");
?>
<link href="https://fonts.googleapis.com/css?family=Barriecito&display=swap" rel="stylesheet">
<div id="login">
    <div>
        <p id="login_title">LOGIN</p>
        <input type="text" placeholder="login" class="login_input">
        <input type="password" placeholder="password" class="login_input">
        <button>login</button>
        <p id="login_register"><a href="#">회원가입</a></p>
    </div>
</div>
<div id="login_frame" onclick="show_login()">
    <p id="title">REQUIZ</p>
    <div>
        <input placeholder="plz write a id" type="text" id="user_id"/>
        <button type="button" id="search">search</button>
    </div>
</div>
<script src="/js/main.js"></script>
<?php
include("footer.php");
?>