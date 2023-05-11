function VALIDATION(){
	var name = document.forms.RegForm.user.value;
	var email = document.forms.RegForm.email.value;
	var phone = document.forms.RegForm.mobile.value;
	var comment = document.forms.RegForm.comment.value;
	
	//Javascript reGex for Email Validation.
	var regEmail=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/g;
	// Javascript reGex for Phone Number validation.
	var regPhone=/^\d{10}$/;					
	// Javascript reGex for Name validation
	var regName = /\d+$/g;						

	if (user == "" || regName.test(user)) {
		window.alert("Please enter your name properly.");
		name.focus();
		return false;
			}
	
	if (email == "" || !regEmail.test(email)) {
		window.alert("Please enter a valid e-mail address.");
		email.focus();
		return false;
		}

	if (mobile == "" || !regPhone.test(mobile)) {
		alert("Please enter valid phone number.");
		phone.focus();
		return false;
		}

	if (comment == "") {
		window.alert("Please drop your comment.");
		address.focus();
		return false;
	}
	return true;
		}
	
