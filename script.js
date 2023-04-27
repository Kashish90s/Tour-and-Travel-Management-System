let searchBtn = document.querySelector("#search-btn");
let searchBar = document.querySelector(".search-bar-container");
let formBtn = document.querySelector("#login-btn");
let loginForm = document.querySelector(".login-form-container");
let formClose = document.querySelector("#form-close");
let menu = document.querySelector("#menu-bar");
let navbar = document.querySelector(".navbar");
let videoBtn = document.querySelectorAll(".vid-btn");

window.onscroll = () => {
  searchBtn.classList.remove("fa-times");
  searchBar.classList.remove("active");
  menu.classList.remove("fa-times");
  navbar.classList.remove("active");
  loginForm.classList.remove("active");
};

menu.addEventListener("click", () => {
  menu.classList.toggle("fa-times");
  navbar.classList.toggle("active");
});

searchBtn.addEventListener("click", () => {
  searchBtn.classList.toggle("fa-times");
  searchBar.classList.toggle("active");
});

formBtn.addEventListener("click", () => {
  loginForm.classList.add("active");
});

formClose.addEventListener("click", () => {
  loginForm.classList.remove("active");
});

videoBtn.forEach((btn) => {
  btn.addEventListener("click", () => {
    document.querySelector(".controls .active").classList.remove("active");
    btn.classList.add("active");
    let src = btn.getAttribute("data-src");
    document.querySelector("#video-slider").src = src;
  });
});

//settings buttons

var settingBtn = document.getElementById("setting-btn");
var settingMenu = document.getElementById("setting-menu");

settingBtn.addEventListener("mouseenter", function () {
  settingMenu.classList.add("show");
});

settingMenu.addEventListener("mouseleave", function () {
  settingMenu.classList.remove("show");
});

//profile settings

function goToProfileSettings() {
  window.location.href = "profile-settings.html"; // Replace with the URL of your profile settings page
}
var loadFile = function (event) {
  var image = document.getElementById("output");
  image.src = URL.createObjectURL(event.target.files[0]);
};
//declearing html elements

//logout settings
function showLogoutConfirmation() {
  document.getElementById("logout-confirmation").style.display = "block";
}

function hideLogoutConfirmation() {
  document.getElementById("logout-confirmation").style.display = "none";
}

function logout() {
  // Perform logout action here
  console.log("Logout successful.");
  hideLogoutConfirmation();
}

// This line creates a new instance of the Swiper class and assigns it to the variable swiper. The .review-slider parameter specifies the CSS selector for the element that will be used as the container for the Swiper slider.

var swiper = new Swiper(".review-slider", {
  spaceBetween: 20, // This line sets the space (in pixels) between each slide in the slider to 20.

  loop: true, //the slider will automatically loop back to the beginning once it reaches the end.

  autoplay: {
    delay: 2500, //: This line sets the delay (in milliseconds) between each slide to 2500, or 2.5 seconds.
    disableOnInteraction: false, //This line specifies that autoplay should not be disabled when the user interacts with the slider (e.g., by clicking on a slide).
  },

  breakpoints: {
    // This line specifies the breakpoints for the slider.
    640: {
      //This line specifies the first breakpoint, which applies when the screen width is less than or equal to 640 pixels.
      slidesPerView: 1, // This line sets the number of slides per view to 1 when the screen width is less than or equal to 640 pixels.
    },
    768: {
      //: This line specifies the second breakpoint, which applies when the screen width is between 641 and 768 pixels.
      slidesPerView: 2, //this line sets the number of slides per view to 2 when the screen width is between 641 and 768 pixels.
    },
    1024: {
      //This line specifies the third breakpoint, which applies when the screen width is greater than or equal to 1024 pixels.
      slidesPerView: 3, //This line sets the number of slides per view to 3 when the screen width is greater than or equal to 1024 pixels.
    },
  },
});
