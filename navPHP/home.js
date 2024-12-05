const dropdownButton = document.querySelector('.dropdown-btn');
const dropdownContent = document.querySelector('.dropdown-content');

dropdownButton.addEventListener('click', 
 () => {
  dropdownContent.classList.toggle('show'); 

});

const logoutBtn = document.getElementById('logoutBtn');

logoutBtn.addEventListener('click', () => {
  // Redirect to the login page or perform other logout actions
  window.location.href = '../Login_startup/furry_login.html'; // Replace 'login.html' with your actual login page URL
});


