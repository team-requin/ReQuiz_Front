<html>
<head>
    <meta charset="UTF-8">
    <title>Requiz</title>
    <link rel="shortcut icon" href="/img/color_requin.png">
    <link href="https://fonts.googleapis.com/css?family=Barriecito&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/main.css">
	<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
	<script type="text/javascript" src="/js/main.js"></script>
</head>
<body>
    <div id="header">
        <header>
            <div class="header_btns">
                <button id="btn1" class="btn" onclick="show_login()">로그인</button>
                <button id="btn2" class="btn">로그아웃</button>
            </div>
            <div class="header_logo">
                <a href="#"><img src="/img/title_logo.png" alt="LOGO_img"></a>
            </div>
        </header>
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
                <div>
                    <input type="text" autocomplete="off" placeholder="Nickname" class="signup_input">
                    <button class="overlap_check">Check</button>
                </div>
                <div>
                    <input type="text" autocomplete="off" placeholder="ID" class="signup_input">
                    <button class="overlap_check">Check</button>
                </div>
                <input type="password" autocomplete="off" placeholder="Password" class="signup_input">
                <input type="password" autocomplete="off" placeholder="Confirm Password" class="signup_input">
                <button class="signup_btn">Signup</button>
            </form>
        </div>
    </div>
    <div id="login_shadow" onclick="hide_login(); hide_signup()"></div>
</body>