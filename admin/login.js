document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('adminLoginForm');
  
    form.addEventListener('submit', function(event) {
      const username = document.getElementById('username').value;
      const password = document.getElementById('password').value;
  
      if (!isValidUsername(username)) {
        alert('Invalid username! Username should be at least 4 characters long.');
        event.preventDefault();
      }
  
      if (!isValidPassword(password)) {
        alert('Invalid password! Password should be at least 6 characters long.');
        event.preventDefault();
      }
    });
  
    function isValidUsername(username) {
      return username.length >= 4;
    }
  
    function isValidPassword(password) {
      return password.length >= 6;
    }
  });
  