<html>
<head>
	<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
	<script>
		function test1() {
			var userdata = {
				"project_name": "Project name",
				"admission_grade": "Nth Grade",
				"developer_list": ["a", "b", "c"],
				"project_image": "encoded to UTF-8",
				"video_url": "Video link URL",
				"content": "Project's Introduction"
			};
			
			axios.get('https://tikaworld0416.gitbook.io/workspace/')
			.then((data) => {
				alert('성공');
				console.log(data.data);
			})
			.catch(() => {
				alert('실패');
			})
		}
	</script>
</head>
</html>