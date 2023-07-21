document.getElementById('login-form').addEventListener('submit', function (e) {
	e.preventDefault();
	const email = document.getElementById('email').value;
	const password = document.getElementById('password').value;

	//just checks if it's not empty for now
	if (email.trim() !== '' && password.trim() !== '') {
		window.location.href = 'profile.php';
	} else {
		alert('Invalid email or password. Please try again.');
	}
});
