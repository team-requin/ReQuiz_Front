<?php
include("header.php");
?>
<link href="https://fonts.googleapis.com/css?family=Barriecito&display=swap" rel="stylesheet">
<div id="main">
    <p id="title">REQUIZ</p>
    <div>
        <input placeholder="plz write a id" type="text" id="user_id"/>
        <button type="button" id="search">search</button>
    </div>
</div>
<div id="login_frame">
    <div id="login">
        <div>
            <p id="login_title">LOGIN</p>
            <input type="text" placeholder="login" class="login_input">
            <input type="password" placeholder="password" id="login_signin" class="login_input">
            <button>login</button>
            <p id="login_register"><a href="#">회원가입</a></p>
        </div>
    </div>
</div>
<div id="login_shadow" onclick="show_login()"></div>
<?php
include("footer.php");
?>