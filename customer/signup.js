document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('customerSignupForm');
  
    form.addEventListener('submit', function(event) {
      const username = document.getElementById('username').value;
      const email = document.getElementById('email').value;
      const password = document.getElementById('password').value;
      const confirmPassword = document.getElementById('confirmPassword').value;
  
      if (!isValidUsername(username)) {
        alert('Invalid username! Username should be at least 4 characters long.');
        event.preventDefault();
      }
  
      if (!isValidEmail(email)) {
        alert('Invalid email address!');
        event.preventDefault();
      }
  
      if (!isValidPassword(password)) {
        alert('Invalid password! Password should be at least 6 characters long.');
        event.preventDefault();
      }
  
      if (password !== confirmPassword) {
        alert('Passwords do not match!');
        event.preventDefault();
      }
    });
  
    function isValidUsername(username) {
      return username.length >= 4;
    }
  
    function isValidEmail(email) {
      const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      return emailRegex.test(email);
    }
  
    function isValidPassword(password) {
      return password.length >= 6;
    }
  });
  