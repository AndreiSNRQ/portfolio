const dropdownButton = document.querySelector(".dropdown-btn");
const dropdownContent = document.querySelector(".dropdown-content");

dropdownButton.addEventListener("click", () => {
  dropdownContent.classList.toggle("show");
});

const logoutBtn = document.getElementById("logoutBtn");

logoutBtn.addEventListener("click", function (e) {
  e.preventDefault();
  swal({
    title: "Are you sure?",
    text: "Once logged out, you will need to sign in again to access your account.",
    icon: "warning",
    buttons: true,
    dangerMode: true,
  }).then((willLogout) => {
    if (willLogout) {
      swal("You have been logged out successfully!", {
        icon: "success",
      }).then(() => {
        window.location.href = "../Login_startup/furry_login";
      });
    } else {
      swal("You are still logged in!");
    }
  });
});

document.addEventListener("DOMContentLoaded", () => {
  const likeButtons = document.querySelectorAll(".like-btn");
  likeButtons.forEach((button) => {
    button.addEventListener("click", () => {
      const heartIcon = button.querySelector(".heart-icon");
      const likeCount = button.querySelector(".like-count");

      if (heartIcon.style.color === "red") {
        heartIcon.style.color = "gray";
        likeCount.textContent = parseInt(likeCount.textContent) - 1;
      } else {
        heartIcon.style.color = "red";
        likeCount.textContent = parseInt(likeCount.textContent) + 1;
      }
    });
  });

  const commentButtons = document.querySelectorAll(".comment-btn");
  commentButtons.forEach((button) => {
    button.addEventListener("click", (e) => {
      const commentSection = e.target
        .closest(".post")
        .querySelector(".comment-section");
      const commentInput = commentSection.querySelector(".comment-input");
      const commentText = commentInput.value.trim();

      if (commentText !== "") {
        const commentElement = document.createElement("div");
        commentElement.classList.add("comment");
        commentElement.textContent = commentText;

        const commentsList = commentSection.querySelector(".comments-list");
        commentsList.appendChild(commentElement);

        commentInput.value = "";
      }
    });
  });
});
