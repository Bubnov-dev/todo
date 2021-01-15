const togglePassword1 = document.getElementById('togglePassword1');
const togglePassword2 = document.getElementById('togglePassword2');
const showOrHidePassword1 = () => {
alert("Fsdffasd");

  let password = document.getElementById('old-password');
	  if (password.type === 'password') {
	    password.type = 'text';
	  } else {
	    password.type = 'password';
	  }
};

const showOrHidePassword2 = () => {
alert("Fsdffasd");

  let password = document.getElementById('new-password');
	  if (password.type === 'password') {
	    password.type = 'text';
	  } else {
	    password.type = 'password';
	  }
};


togglePassword1.addEventListener('change', showOrHidePassword1);
togglePassword2.addEventListener('change', showOrHidePassword2);
