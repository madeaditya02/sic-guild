// Memunculkan shadow ketika navbar discroll
document.addEventListener('scroll', () => {
  document.querySelector('header').classList.toggle('scrolled', window.scrollY > 0)
})

// Memunculkan/menghilangkan navbar
document.querySelector('.nav-toggle').addEventListener('click', () => {
  document.querySelector('.nav-menu').classList.toggle('show')
  document.querySelector('.auth-group').classList.toggle('show')
})

// Memunculkan/menghilangkan auth menu, hilangkan jika diklik luarnya (outside click)
// const authGroup = document.querySelector('.auth-group')
// function outsideClick(event) {
//   const popover = document.querySelector('.auth-group .auth-menu')
//   if (!(event.target == popover || popover.contains(event.target) || event.target == authGroup || authGroup.contains(event.target))) {
//     popover.classList.remove('show')
//   }
// }
// authGroup.addEventListener('click', (event) => {
//   const popover = document.querySelector('.auth-group .auth-menu')
//   event.preventDefault()
//   if (event.target != popover && !popover.contains(event.target)) {
//     document.querySelector('.auth-group .auth-menu').classList.toggle('show')
//     document.addEventListener('click', outsideClick)
//   }
// })