<?php
include("header.php");
?>
<div id="main">
    <div>
        <p id="title">REQUIZ</p>
        <div>
            <input placeholder="Please enter the ID to search" type="text" id="user_id" onkeypress="search_user(event)" />
            <button type="button" id="user_search" onclick="search_user()">Search</button>
        </div>
    </div>
</div>
<?php
include("footer.php");
?>