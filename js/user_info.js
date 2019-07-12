var id = sessionStorage.getItem('token');
if(!id) {
	alert('먼저 로그인하세요');
	location.href = '/';
}
axios.post(server+'/auth/token-access', {}, header_token).then((data) => {
	var id = data.data.user_id;
	var name = data.data.user_name;
	var level = data.data.user_level;
	var exp = data.data.user_exp;
	var exper = exp/(level*10)*100;
	document.getElementById('mypage_profile_hello').appendChild(document.createTextNode('안녕하세요, '+name+'님!!'));
	document.getElementById('exp_bar').style.width = exper+'%';
	document.getElementById('mypage_exp_percent').appendChild(document.createTextNode(exp+'Exp'));
	document.getElementById('cant_change_id').setAttribute('value', id);
	document.getElementById('user_name').setAttribute('value', name);
}).catch((error) => {
	console.log(error);
	alert('로그인 세션이 만료되었습니다');
	sessionStorage.clear();
	location.href = '/';
});
document.getElementById('mypage_btn').onclick = function() {
	alert('수정 완료');
}