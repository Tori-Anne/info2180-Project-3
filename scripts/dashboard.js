window.onload = function() {
    let available_jobs = document.getElementById("availableJobs");
    
    function getRequestOne(){
        var requestOne = new XMLHttpRequest();
		requestOne.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
				requestOne.responseText;
			}
			else {
				alert('There was a problem with the request.');
			}
		};
		requestOne.open('GET', 'dashboard.php', true);
		requestOne.send();
	}
	
	
	function getRequestTwo(){
        var requestTwo = new XMLHttpRequest();
		requestTwo.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
				requestTwo.responseText;
			}
			else {
				alert('There was a problem with the request.');
			}
		};
		requestTwo.open('GET', 'newJob.php', true);
		requestTwo.send();
	}
	
	
}