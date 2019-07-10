var btn, i, count = 0;
var data = {
	'search_id': getUrlPar('user')
}
axios.post(server+'/service/search-user', data).then((data) => {
	info = data.data;
	count = Object.keys(info.workbook).length;
	document.getElementById('list_user_id').appendChild(document.createTextNode('Id: '+info.user.id));
	document.getElementById('list_user_name').appendChild(document.createTextNode('Name: '+info.user.name));
	if(sessionStorage.getItem('token') != null) {
		axios.post(server+'/auth/token-access', {}, header_token).then((data) => {
			if(getUrlPar('user') == data.data.user_id) {
				var btn_place = document.getElementById('quiz_profile_input');
				var a = document.createElement('a');
				btn = document.createElement('button');
				btn_place.appendChild(btn);
				btn.setAttribute('id', 'btn_profile_edit');
				a.setAttribute('id', 'btn_profile_edit_a');
				a.setAttribute('href', '/user/index.php');
				a.appendChild(document.createTextNode('회원정보 수정'));
				btn.appendChild(a);
				make_list(1);
			} else {
				make_list(0);
			}
		}).catch(() => {
			alert('로그인 세션이 만료되었습니다');
			sessionStorage.clear();
			location.reload();
		});
	} else {
		make_list(0);
	}
}).catch((error) => {
	console.log(error);
	alert('존재하지 않는 유저입니다');
	location.href = '/';
});
function make_list(check) {
	var list = document.getElementById('quiz_list');
	for(i = 0; i < count; i++) {
		var div = document.createElement('div');
		var title = document.createElement('div');
		div.setAttribute('class', 'quiz_list_frame');
		title.setAttribute('class', 'quiz_list_title');
		title.setAttribute('onclick', 'location.href="quiz_read.php?uuid='+info.workbook[i].uuid+'"');
		list.appendChild(div);
		div.appendChild(title);
		title.appendChild(document.createTextNode(info.workbook[i].name));
		if(check) {
			var btn = document.createElement('button');
			var div_add = document.createElement('div');
			btn.setAttribute('class', 'quiz_list_edit');
			btn.appendChild(document.createTextNode('수정하기'));
			div.appendChild(btn);
			div_add.setAttribute('class', 'no_list');
			div.appendChild(div_add);
		}
	}
	if(check) {
		var div = document.createElement('div');
		var btn = document.createElement('button');
		var a = document.createElement('a');
		div.setAttribute('id', 'quiz_list_add_button_frame');
		list.appendChild(div);
		btn.setAttribute('id', 'quiz_add_button');
		a.appendChild(document.createTextNode('+'));
		a.setAttribute('id', 'quiz_add_text');
		a.setAttribute('href', 'quiz_write.php');
		btn.appendChild(a);
		div.appendChild(btn);
	}
}