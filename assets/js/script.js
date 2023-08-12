function toggleMenu() {
  const menuBar = document.getElementById('menubar');
  const body = document.body;
  menuBar.classList.toggle('active');
  body.classList.toggle('menu-open');

  if (body.classList.contains('menu-open')) {
      body.style.top = `-${window.scrollY}px`;
  } else {
      const scrollY = parseInt(body.style.top || '0');
      body.style.top = '';
      window.scrollTo(0, -scrollY);
  }
}

function toggleMenuBar() {
  $('.menubar').animate({ width: 'toggle' }, 200);
  $('body').toggleClass('menu-open');
}

const scrollButton = document.querySelector('.scrolltop');

scrollButton.addEventListener('click', () => {
    // Menggulirkan halaman kembali ke bagian atas
    window.scrollTo({
        top: 0,
        behavior: 'smooth' // Efek animasi saat pengguliran
    });
});