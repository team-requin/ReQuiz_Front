<?php
include("header.php");
?>
<script>
	quizList(getUrlPar('user'));
</script>
<div id="quiz_list_frame">
    <div id="quiz_profile">
        <img src="http://placehold.it/200x200" alt="profile">
        <div id="quiz_profile_input">
            <i>asd</i>
            <button>수정</button>
        </div>
    </div>
    <div id="quiz_list">
        <div>
            <div>제목</div><button>수정</button>
        </div>
        <div>
            <div>제목</div><button>수정</button>
        </div>
        <div>
            <div>제목</div><button>수정</button>
        </div>
        <div>
            <div>제목</div><button>수정</button>
        </div>
        <div>
            <div>제목</div><button>수정</button>
        </div>
        <button class="quiz_add_button">+플러스</button>
    </div>
</div>

<?php
include("footer.php");
?>