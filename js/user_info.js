var id = sessionStorage.getItem('token');
if(!id) {
	alert('먼저 로그인하세요');
	location.href = '/';
}
axios.post(server+'/user-info', {}, header_token).then((data) => {
	var id = data.data.id;
	var name = data.data.name;
	var level = data.data.level;
	var exp = data.data.exp;
	var exper = exp/(level*1.8)*100;
}).catch(() => {
	alert('로그인 세션이 만료되었습니다');
	sessionStorage.clear();
});