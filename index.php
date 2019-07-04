<?php
include("header.php");
?>
<link href="https://fonts.googleapis.com/css?family=Barriecito&display=swap" rel="stylesheet">

<div id="main">
    <div>
        <p id="title">REQUIZ</p>
        <div>
            <input placeholder="plz write a id" type="text" id="user_id"/>
            <button type="button" id="search">search</button>
        </div>
    </div>
</div>

<div id="login_frame">
    <div id="login">
        <div>
            <p id="login_title">LOGIN</p>
            <input type="text" placeholder="ID" class="login_input">
            <input type="password" placeholder="Password" class="login_input">
            <button>login</button>
            <p id="login_register"><a href="#" onclick="show_signup()">회원가입</a></p>
        </div>
    </div>
</div>
<div id="signup_frame">
    <div id="signup">
        <div>
            <p id="signup_title">Signup</p>
            <input type="text" placeholder="Nickname" class="signup_input">
            <input type="text" placeholder="ID" class="signup_input">
            <input type="password" placeholder="Password" class="signup_input">
            <input type="password" placeholder="Confirm Password" class="signup_input">
            <button>Signup</button>
        </div>
    </div>
</div>
<div id="login_shadow" onclick="hide_login(); hide_signup()"></div>
<?php
include("footer.php");
?>