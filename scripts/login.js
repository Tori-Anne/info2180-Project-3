//Login Javascript Document

function validation(){
    var password = document.forms["loginForm"]["pwrd"];
	var email = document.forms["loginForm"]["email"];
	
	validatePassword();
	validateEmail();
	
	
	function validatePassword(){
		if (password.value == ""){
			alert("Invalid");
			return false;
		}
		else{
			return true;
		}
	}
		
		
	function validateEmail(){
		if (email.value == ""){
			alert("Invalid");
			return false;
		}			
		else{
			return true;
		}
	}
	
	
}