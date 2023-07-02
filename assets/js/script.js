const containerEl = document.querySelector(".container");
const popupContainerEl = document.querySelector(".popup-container");
const popupContainerForSignUp = document.querySelector(".popup-container-for-sign-up");
const btnEl = document.querySelector(".btn");
const btnSignUp = document.querySelector(".btn-sign-up")
const closeIconEl = document.querySelector(".close-icon");
const closeIconSignUp = document.querySelector(".close-icon-sign-up");

const passwordInput = document.querySelector('input[name="password"]');
const togglePasswordButton = document.querySelector('.password-toggle');

togglePasswordButton.addEventListener('click', function() {
  const isPasswordVisible = passwordInput.type === 'text';
  passwordInput.type = isPasswordVisible ? 'password' : 'text';
  togglePasswordButton.classList.toggle('fa-eye');
  togglePasswordButton.classList.toggle('fa-eye-slash');
});

btnEl.addEventListener("click", () => {
  containerEl.classList.add("active");
  popupContainerEl.classList.remove("active");
});
closeIconEl.addEventListener("click", () => {
  popupContainerEl.classList.add("active");
  containerEl.classList.remove("active");
});


btnSignUp.addEventListener("click", () => {
  containerEl.classList.add("active");
  popupContainerForSignUp.classList.remove("active");
});
closeIconSignUp.addEventListener("click", () => {
  popupContainerForSignUp.classList.add("active");
  containerEl.classList.remove("active");
});
