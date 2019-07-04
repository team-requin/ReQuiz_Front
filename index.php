<?php
include("header.php");
?>
<div id="main">
    <div>
        <p id="title">REQUIZ</p>
        <div>
            <input placeholder="Please enter the ID to search" type="text" id="user_id"/>
            <button type="button" id="user_search">Search</button>
        </div>
    </div>
</div>

<div id="login_frame">
    <div id="login">
        <form>
            <p id="login_title">LOGIN</p>
            <input type="text" id="login_id" placeholder="ID" class="login_input">
            <input type="password" id="login_pw" placeholder="Password" class="login_input">
            <button onclick="login()">login</button>
            <p id="login_register"><a href="#" onclick="show_signup()">회원가입</a></p>
        </form>
    </div>
</div>
<div id="signup_frame">
    <div id="signup">
        <form>
            <p id="signup_title">Signup</p>
            <input type="text" placeholder="Nickname" class="signup_input">
            <input type="text" placeholder="ID" class="signup_input">
            <input type="password" placeholder="Password" class="signup_input">
            <input type="password" placeholder="Confirm Password" class="signup_input">
            <button>Signup</button>
        </form>
    </div>
</div>
<div id="login_shadow" onclick="hide_login(); hide_signup()"></div>
<?php
include("footer.php");
?>