window.alert("Welcome To Job application system");


// Function to show hidden content
function showContent() {
  const hiddenContent = document.querySelectorAll('.content');
  hiddenContent.forEach((content) => {
    content.style.display = 'block';
  });
}

// Button event listener
const button = document.querySelector('.cn');
button.addEventListener('click', () => {
  showContent();
});



const navbar = document.querySelector('.navbar');
const menuIcon = document.querySelector('.icon');

menuIcon.addEventListener('click', () => {
  navbar.classList.toggle('responsive');
});

const links = document.querySelectorAll('a[href^="#"]');

for (const link of links) {
  link.addEventListener('click', clickHandler);
}

function clickHandler(e) {
  e.preventDefault();
  const href = this.getAttribute('href');
  const offsetTop = document.querySelector(href).offsetTop;

  scroll({
    top: offsetTop,
    behavior: 'smooth'
  });
}

const backToTopBtn = document.querySelector('.back-to-top');

window.addEventListener('scroll', () => {
  if (window.pageYOffset > 100) {
    backToTopBtn.style.display = 'block';
  } else {
    backToTopBtn.style.display = 'none';
  }
});

backToTopBtn.addEventListener('click', () => {
  window.scrollTo({
    top: 0,
    behavior: 'smooth'
  });
});



const switchBtn = document.querySelector('.switch input[type="checkbox"]');
switchBtn.addEventListener('change', () => {
  // handle switch toggle logic
});

