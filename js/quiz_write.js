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

const listElement = document.querySelector("#quiz_write_frame");
function renderList() {
    const wrappedList = store.list.map(
        (item, index) =>
            `
            <div class="quiz_write">
                <div class="quiz_num">${index + 1}</div>
                <div class="quiz_problem">
                    <form>
                        <input class="quiz_question quiz_problems" placeholder="question" onchange="changeItem(${index}, 'question', this.value)" value="${item.question}"/>
                        <input class="quiz_answer quiz_problems" placeholder="answer" onchange="changeItem(${index}, 'answer', this.value)" value="${item.answer}"/>
                    </form>
                </div>
                <button class="quiz_problem_delete" onclick="deleteItem(${index})">삭제</button>
            </div>
            `
    );
    listElement.innerHTML = wrappedList;
}

document.getElementsByClassName('quiz_make_btn')[0].onclick = function() {
    
    
    
    // history.back();
}