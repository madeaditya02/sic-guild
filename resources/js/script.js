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

let posisiScroll = window.scrollY
document.addEventListener('scroll', function() {
  const header = document.querySelector('header')
  if (posisiScroll < window.scrollY) {
    header.classList.add('-translate-y-full') // Geser ke atas sampai hilang
    header.classList.remove('shadow-lg') // Hapus shadownya
    posisiScroll = window.scrollY
  } else if (posisiScroll > window.scrollY) {
    header.classList.add('shadow-lg') // Tambah shadownya
    header.classList.remove('-translate-y-full') // Geser ke bawah sampai muncul
    posisiScroll = window.scrollY
  }
  // class tailwind translate-y-full menggeser elemennya ke atas/bawah secara full (kalo - ke atas)
})