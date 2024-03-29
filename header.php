<html>
<head>
    <meta charset="UTF-8">
    <title>Requiz</title>
    <link rel="shortcut icon" href="/img/color_requin.png">
    <link href="https://fonts.googleapis.com/css?family=Barriecito&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/main.css">
	<script type="text/javascript" src="/js/md5.js"></script>
	<script type="text/javascript" src="/js/axios.js"></script>
	<script type="text/javascript" src="/js/main.js"></script>
</head>
<body>
    <div id="header">
        <header>
            <div class="header_logo">
                <a href="/"><img src="/img/requin.png" alt="LOGO_img"></a>
            </div>
            <div class="header_btns">
                <div id="header_btns_list" class="header_btns_frame">
                </div>
            </div>
        </header>
    </div>
    <div id="login_frame">
        <div id="login">
            <div>
                <p id="login_title" ondragable>LOGIN</p>
                <input type="text" id="login_id" placeholder="ID" class="login_input">
                <input type="password" id="login_pw" placeholder="Password" class="login_input" onkeypress="login(event)">
                <button onclick="login()">login</button>
                <p id="login_register"><a onclick="show_signup()">회원가입</a></p>
            </div>
        </div>
    </div>
    <div id="signup_frame">
        <div id="signup">
            <div>
                <p id="signup_title">Signup</p>
                <div id="signup_name_frame" class="signup_form">
                    <input type="text" id="signup_name" autocomplete="off" placeholder="Nickname" class="signup_input">
                    <button class="overlap_check" onclick="signup_check_name()">Check</button>
                </div>
                <div id="signup_id_frame" class="signup_form">
                    <input type="text" id="signup_id" autocomplete="off" placeholder="ID" class="signup_input">
                    <button class="overlap_check" onclick="signup_check_id()">Check</button>
                </div>
                <input type="password" id="signup_pw" autocomplete="off" placeholder="Password" class="signup_input">
                <input type="password" id="signup_pw_check" autocomplete="off" placeholder="Confirm Password" class="signup_input">
                <button class="signup_btn" onclick="signup()">Signup</button>
                <p id="login_register"><a onclick=" hide_signup(); show_login()">로그인 하러가기</a></p>
            </div>
        </div>
    </div>
    <div id="login_shadow" onclick="hide_login(); hide_signup()"></div>
</body>