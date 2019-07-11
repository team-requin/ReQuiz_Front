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
}).catch((error) => {
	console.log(error);
	alert('로그인 세션이 만료되었습니다');
	//sessionStorage.clear();
});
function back_page() {
	history.back();
}