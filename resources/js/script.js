const tombolNav = document.querySelector('.nav-toggle')
let isOpen = false
tombolNav.addEventListener("click", function() {
  const navigasi = document.querySelector('.nav-menu')
  const authGroup = document.querySelector('.auth-group')
  if (isOpen) {
    isOpen = false
    navigasi.classList.add('hidden')
    navigasi.classList.remove('flex')
    authGroup.classList.add('hidden')
    authGroup.classList.remove('flex')
  } else {
    isOpen = true
    navigasi.classList.remove('hidden')
    navigasi.classList.add('flex')
    authGroup.classList.remove('hidden')
    authGroup.classList.add('flex')
  }
})

document.addEventListener('scroll', function() {
  const header = document.querySelector('header')
  if (window.scrollY > 0) {
    header.classList.add('shadow-lg')
  } else {
    header.classList.remove('shadow-lg')
  }
})