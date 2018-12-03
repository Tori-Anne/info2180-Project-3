//New User Javascript Document

function validation(){	

	var firstName = document.forms["newUser"]["firstName"];
	var lastName = document.forms["newUser"]["lastName"];
	var Password = document.forms["newUser"]["password"];
	var email = document.forms["newUser"]["email"];
	var telephone = document.forms["newUser"]["telephone"];
	
	var alphaValue = /^[a-zA-Z]+$/;
	var regExp = /^(?=.*[0-9])(?=.*[a-zA-Z])(?=.*[A-Z])(?=.{8,})$/;
	
	
	function validateFirstName(){
		if (firstName.value == "" || firstName.value.match(alphaValue)){
			alert("Invalid");
			return false;
		}			
		else{
			return true;
		}
	}
	
	
	function validateLastName(){
		if (lastName.value == "" || lastName.value.match(alphaValue)){
			alert("Invalid");
			return false;
		}			
		else{
			return true;
		}
	}
	
	
	function validatePassword(){
		if (!Password.value.match(regExp)){
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
	
	
	function validateTelephone(){
		if (telephone.value == ""){
			alert("Invalid");
			return false;
		}			
		else{
			return true;
		}
	}
	
	
	
	
}