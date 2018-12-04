//New User Javascript Document

function validation(){	

	var firstName = document.forms["newUser"]["firstName"];
	var lastName = document.forms["newUser"]["lastName"];
	var Password = document.forms["newUser"]["password"];
	var email = document.forms["newUser"]["email"];
	var telephone = document.forms["newUser"]["telephone"];
	
	var alphaValue = /^[a-zA-Z]+$/;
	var regExp = /^(?=.*[0-9])(?=.*[a-zA-Z])(?=.*[A-Z])(?=.{8,})$/;
	
	validateFirstName();
	validateLastName();
	validatePassword();
	validateEmail();
	validateTelephone();
	
	
	function validateFirstName(){
		if (firstName.value == "" || !firstName.value.match(alphaValue)){
			alert("Please enter a valid first name");
			firstName.focus();
			return false;
		}			
		else{
			return true;
		}
	}
	
	
	function validateLastName(){
		if (lastName.value == "" || !lastName.value.match(alphaValue)){
			alert("Please enter a valid last name");
			lastName.focus();
			return false;
		}			
		else{
			return true;
		}
	}
	
	
	function validatePassword(){
		if (!Password.value.match(regExp)){
			alert("Please enter a valid password");
			Password.focus();
			return false;
		}
		else{
			return true;
		}
	}
		
		
	function validateEmail(){
		if (email.value == ""){
			alert("Please enter a valid email address");
			email.focus();
			return false;
		}			
		else{
			return true;
		}
	}
	
	
	function validateTelephone(){
		if (telephone.value == "" || isNaN(telephone)){
			alert("Please enter a valid telphone number");
			telephone.focus();
			return false;
		}			
		else{
			return true;
		}
	}
	
	//still workimg on this
	$.ajax({
		type: 'post',
		url: 'newuser.php',
		data: {
			//missing
		}
	},
	
	
	
	
}