const form = document.getElementById('form');




// return false
form.addEventListener('submit', e => {
	e.preventDefault();
	const username = document.getElementById('username').value;
	const email = document.getElementById('email').value;
	const password = document.getElementById('password').value;
	const password2 = document.getElementById('password2').value;
	return checkInputs();
});



function checkInputs() 
{
	// trim to remove the whitespaces
	// const usernameValue = username.value.trim();
	const usernameValue = username
	// const emailValue = email.value.trim();
	const emailValue = email
	// const passwordValue = password.value.trim();
	const passwordValue = password
	// const password2Value = password2.value.trim();
	const password2Value = password2
	console.log(usernameValue)
	console.log(emailValue)
	console.log(passwordValue)
	console.log(password2Value)
	if(usernameValue == '') {
		setErrorFor(username, 'Username cannot be blank');
		return false;
	} 
}
//     // else if(usernameValue.length < 2){
//     //     setErrorFor(username, 'username min 3 char ' );
// 	// 	return false;
//     //    }
//     // else {
// 	// 	setSuccessFor(username);

// 	// }
	
// 	if(emailValue === '') {
// 		setErrorFor(email, 'Email cannot be blank');
// 		return false;
// 	} 
// 	else if (!isEmail(emailValue)) {
// 		setErrorFor(email, 'Not a valid email');
// 		return false;
// 	} 
// 	// else {
// 	// 	setSuccessFor(email);
// 	// }
	
// 	if(passwordValue === '') {
// 		setErrorFor(password, 'Password cannot be blank');
// 		return false;
        
// 	}
// 	//  else {
// 	// 	setSuccessFor(password);
// 	// }
	
// 	if(password2Value === '') {
// 		setErrorFor(password2, 'Password2 cannot be blank');
// 		return false;
// 	}
// 	else if(passwordValue !== password2Value) {
// 		setErrorFor(password2, 'Passwords does not match');
// 		return false;
// 	} 
// 	// else{
// 	// 	setSuccessFor(password2);
// 	// }
	


	
	
// }

// function setErrorFor(input, message) {
// 	const formControl = input.parentElement;
// 	const small = formControl.querySelector('small');
// 	formControl.className = 'form-control error';
// 	small.innerText = message;
// }

// function setSuccessFor(input) {
// 	const formControl = input.parentElement;
// 	formControl.className = 'form-control success';
// }
	
// function isEmail(email) {
// 	return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email);
// }


