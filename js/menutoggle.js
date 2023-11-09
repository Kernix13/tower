/** @type {HTMLElement} */
const hamburger = document.querySelector('.hamburger');
/** @type {HTMLElement} */
const navMenu = document.querySelector('.header-menu');

/**
 * @description - Hamburger menu event listener
 * 
 * @param {EventType}
 * @param {Function}
 * @type {AddEventListener}
 */
hamburger.addEventListener('click', () => {

  hamburger.classList.toggle('active');
  navMenu.classList.toggle('active');

  // Toggle aria-expanded boolean
  /** @type {boolean} */
  let menuOpen = navMenu.classList.contains('active');
  /** @type {boolean} */
  let newMenuOpenStatus = menuOpen;
  hamburger.setAttribute('aria-expanded', newMenuOpenStatus);
});

// Close mobile menu
document.querySelectorAll('.nav-link').forEach(link =>
  /**
   * @description - Close mobile menu on click
   * 
   * @param {EventType}
   * @param {Function}
   * @type {AddEventListener}
   */
  link.addEventListener('click', () => {
    hamburger.classList.remove('active');
    navMenu.classList.remove('active');
  })
);