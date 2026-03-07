const formLogin = document.querySelector(".login-form")

formLogin.addEventListener('submit', function(event) {
  event.preventDefault()
  const loadingIcon = document.querySelector(".login-submit-btn svg")
  const submitBtn = document.querySelector(".login-submit-btn")
  loadingIcon.classList.remove('hidden')
  submitBtn.setAttribute("disabled", true)
})