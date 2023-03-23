const hamburgerToggle = document.querySelector('.hamburger-toggle');

hamburgerToggle.addEventListener('click', function() {
  this.classList.toggle('active');
});
