<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Document</title>
    <style>
        .list {
            border: 5px solid black;
            padding: 5px;
        }

        .item {
            border: 5px solid blue;
            margin-bottom: 5px;
            padding: 5px;
        }

        .question,
        .answer {
            width: 100%;
        }

        .delete {
            cursor: pointer;
        }
    </style>
</head>

<body>
    <div class="list"></div>
    <button onclick="addItem()">추가</button>
    ​
    <script>
        const store = {
            list: []
        };

        function addItem() {
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

        const listElement = document.querySelector(".list");
        function renderList() {
            wrappedList = store.list.map(
                (item, index) => 
                `<div class="item">
                <div class="index">${index + 1}</div>
                <input
                class="question"
                placeholder="질문"
                onchange="changeItem(${index}, 'question', this.value)"
                value="${item.question}"
                />
                <input
                class="answer"
                placeholder="질문"
                onchange="changeItem(${index}, 'answer', this.value)"
                value="${item.answer}"
                />
                <div class="delete" onclick="deleteItem(${index})">삭제</div>
            </div>`
            );
            listElement.innerHTML = wrappedList;
        }
    </script>
</body>

</html>