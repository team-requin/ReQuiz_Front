

function plus_quiz_write() {
    var quiz_write_count = document.getElementsByClassName("quiz_write").length
    if (quiz_write_count >= 20) {
        return alert('더 이상 만들 수 없습니다.');
    }
    var quiz_write_frame = document.getElementById("quiz_write_frame");
    var quiz_write = document.createElement('div');
    var quiz_num = document.createElement('div');
    var p = document.createElement('p');
    var quiz_problem = document.createElement('div');
    var form = document.createElement('form');
    var input_question = document.createElement('input');
    var input_answer = document.createElement('input');
    var button = document.createElement('button');

    input_question.setAttribute('type', 'text');
    input_question.setAttribute('class', 'quiz_question quiz_problems');
    input_question.setAttribute('placeholder', 'Please enter a question');
    
    input_answer.setAttribute('type', 'text');
    input_answer.setAttribute('class', 'quiz_answer quiz_problems');
    input_answer.setAttribute('placeholder', 'Please enter a answer');

    quiz_write.setAttribute('class', 'quiz_write')
    quiz_num.setAttribute('class', 'quiz_num');
    p.appendChild(document.createTextNode(quiz_write_count+1));
    quiz_num.appendChild(p);

    quiz_problem.setAttribute('class', 'quiz_problem');
    button.setAttribute('class', 'quiz_problem_delete');
    button.appendChild(document.createTextNode('삭제하기'));

    form.appendChild(input_question);
    form.appendChild(input_answer);
    quiz_problem.appendChild(form);
    quiz_problem.appendChild(button);
    quiz_write.appendChild(quiz_num);
    quiz_write.appendChild(quiz_problem);
    quiz_write_frame.appendChild(quiz_write);
}

// document.getElementsByClassName[0]("quiz_write")

function delete_quiz_write() {
    var quiz_write = document.getElementsByClassName("quiz_write");
    quiz_write[0].parentNode.removeChild(quiz_write[0]);
}
/* function removeDummy() {
var elem = document.getElementById('dummy');
elem.parentNode.removeChild(elem);
}
*/
/*
var header = document.querySelector("h1");	//제거하고자 하는 엘리먼트
header.parentNode.removeChild(header);
*/