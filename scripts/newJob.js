//New User Javascript Document

function validation(){	
    
    var jobTitle = document.forms["NewJob"]["jobTitle"];
    var jobDescription = document.forms["NewJob"]["jobDescription"];
    var categories = document.forms["NewJob"]["categories"];
    var company = document.forms["NewJob"]["company"];
    var jobLocation = document.forms["NewJob"]["jobLocation"];
    
    var alphaValue = /^[a-zA-Z]+$/;
    
    validateJobTitle();
    validateJobDescription();
    validateCompany();
    validateJobLocation();
    
    function validateJobTitle(){
		if (!jobTitle.value.match(alphaValue)){
			alert("Please enter a valid job title");
			return false;
		}			
		else{
			return true;
		}
	}
	
	
	function validateJobDescription(){
		if (!jobDescription.value.match(alphaValue)){
			alert("Please enter a valid job description");
			return false;
		}			
		else{
			return true;
		}
	}
	
	
	function validateCompany(){
		if (!company.value.match(alphaValue)){
			alert("Please enter a valid company");
			return false;
		}			
		else{
			return true;
		}
	}
	
	
	function validateJobLocation(){
		if (!jobLocation.value.match(alphaValue)){
			alert("Please enter a valid job location");
			return false;
		}			
		else{
			return true;
		}
	}
	
}