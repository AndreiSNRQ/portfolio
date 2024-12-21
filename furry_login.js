const modal = document.getElementById("modal");
const modalTrigger = document.getElementById("modal-trigger");
const defaultItem = document.getElementById("default-item");

modalTrigger.addEventListener("click", () => {
  modal.style.display = "block";
  defaultItem.style.display = "none";
});

window.onclick = function (event) {
  if (event.target == modal) {
    modal.style.display = "none";
    defaultItem.style.display = "block";
  }
};

// const form = document.getElementById("modal");

// form.addEventListener('submit', (event) => {
//     event.preventDefault();

//     const username = document.getElementById('email').value;
//     const password = document.getElementById('password').value;

//     // Default credentials
//     const defaultUsername = 'john@gmail.com';
//     const defaultPassword = '1';

//     if (username === defaultUsername && password === defaultPassword) {
//         // Redirect to the next page
//         window.location.href = '../user/home.html'; // Replace 'nextpage.html' with your desired URL
//     } else {
//         alert('Invalid username or password');
//     }
// });

// const loginButton = document.getElementById("loginButton");
// const emailInput = document.getElementById("email");
// const passwordInputField = document.getElementById("password");

// loginButton.addEventListener("click", function () {
//   const email = emailInput.value.trim();
//   const password = passwordInputField.value.trim();

//   if (email === "" || password === "") {
//     swal("Error!", "Please fill in all fields!", "error");
//     return;
//   }

//   const correctEmail = "john@gmail.com";
//   const correctPassword = "1";

//   if (email === correctEmail && password === correctPassword) {
//     swal("Success!", "You have logged in successfully!", "success").then(() => {
//       window.location.href = "../User/home";
//     });
//   } else {
//     swal("Error!", "Incorrect email or password!", "error");
//   }
// });
