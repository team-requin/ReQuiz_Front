axios.post(server+'/service/search-question', {'uuid': getUrlPar('uuid')}).then((data) => {
	var list = list = document.getElementById('quiz_read_wrapper');
	var ul, li_q, li_a, i;
	document.getElementById('quiz_read_title').appendChild(document.createTextNode(data.data.name));
	for(i = 0; data.data.list[i] != null; i++) {
		ul = document.createElement('ul');
		li_q = document.createElement('li');
		li_a = document.createElement('li');
		
		ul.setAttribute('class', 'quiz_read_ul');
		
		li_q.setAttribute('class', 'quiz_read_question');
		li_q.appendChild(document.createTextNode(data.data.list[i].question));
		ul.appendChild(li_q);
		
		li_a.setAttribute('class', 'quiz_read_answer');
		li_a.appendChild(document.createTextNode(data.data.list[i].answer));
		ul.appendChild(li_a);
		
		list.appendChild(ul);
	}
}).catch(() => {
	alert('존재하지 않는 문제입니다');
	location.href = '/';
});
//document.getElementById('quiz_read_goto_solve').set