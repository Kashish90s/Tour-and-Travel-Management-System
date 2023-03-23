// Get references to the form and input elements
const form = document.querySelector('form');
const usernameInput = document.querySelector('#username');
const passwordInput = document.querySelector('#password');
const rememberMeCheckbox = document.querySelector('input[name="remember-me"]');

// If "Remember me" is checked, pre-fill the username and password fields on page load
if (localStorage.getItem('rememberMe') =='true') {
  const storedUsername = localStorage.getItem('username');
  const storedPassword = localStorage.getItem('password');
  if (storedUsername && storedPassword) {
    usernameInput.value = storedUsername;
    passwordInput.value = storedPassword;
    rememberMeCheckbox.checked = true;
  }
}

// Add an event listener for the form's "submit" event
form.addEventListener('submit', function(event) {
  // Prevent the default form submission behavior
  event.preventDefault();
  
  // Get the values of the input elements
  const username = usernameInput.value;
  const password = passwordInput.value;
  const rememberMe = rememberMeCheckbox.checked;
  
  // Store the values in local storage if "Remember me" is checked
  if (rememberMe) {
    localStorage.setItem('username', username);
    localStorage.setItem('password', password);
    localStorage.setItem('rememberMe', rememberMe);
  } else {
    localStorage.removeItem('username');
    localStorage.removeItem('password');
    localStorage.removeItem('rememberMe');
  }
  
  // Submit the form
  form.submit();
});