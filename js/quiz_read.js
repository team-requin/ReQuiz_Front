var data  = {
	'uuid': getUrlPar('uuid')
};
axios.post(server+'/service/search-question', data).then(() => {
	
}).catch(() => {
	alert('존재하지 않는 문제입니다');
});