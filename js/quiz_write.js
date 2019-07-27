const store = {
    list: []
};
function addItem() {
    if (store.list.length >= 20) {
        return alert('더 이상 만들 수 없습니다.');
    }
    store.list.push({ question: "", answer: "" });
    renderList();
}
function deleteItem(indexWillDelete) {
    store.list = store.list.filter(
        (item, index) => index !== indexWillDelete
    );
    renderList();
}
function changeItem(index, key, value) {
    store.list[index][key] = value;
}

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

document.getElementsByClassName('quiz_make_btn')[0].onclick = function() {
    
    
    
    // history.back();
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