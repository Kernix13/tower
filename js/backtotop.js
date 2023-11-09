/** @type {HTMLElement} */
const backToTopButton = document.querySelector("#back-to-top-btn");

window.addEventListener("scroll", scrollFunction);

/**
 * @description - Display or hide back-to-top btn based on scrollY
 * 
 * @function scrollFunction
 */
function scrollFunction() {
  if (window.scrollY > 300) {
    // Show backToTopButton
    if(!backToTopButton.classList.contains("btnEntrance")) {
      backToTopButton.classList.remove("btnExit");
      backToTopButton.classList.add("btnEntrance");
      backToTopButton.style.display = "block";
    }
  }
  else {
    // Hide backToTopButton
    if(backToTopButton.classList.contains("btnEntrance")) {
      backToTopButton.classList.remove("btnEntrance");
      backToTopButton.classList.add("btnExit");
      setTimeout(function() {
        backToTopButton.style.display = "none";
      }, 125);
    }
  }
}

backToTopButton.addEventListener("click", smoothScrollBackToTop);

/**
 * @description - Control scroll animation
 * 
 * @function smoothScrollBackToTop
 */
function smoothScrollBackToTop() {
  /** @type {number} */
  const duration = 1250;
  /** @type {object} */
  let start = null;

  /** @type {number} */
  const startPosition = window.scrollY;
  /** @type {number} */
  const distanceToTop = -1 * startPosition;

  window.requestAnimationFrame(step);

  /**
   * @description - Synchronize animation using timestamp
   * 
   * @param {date} timestamp 
   * @function step
   */
  function step(timestamp) {
    if (!start) start = timestamp;

    /** @type {date} */
    const progress = timestamp - start;
    window.scrollTo(0, easeInOutCubic(progress, startPosition, distanceToTop, duration));

    if (progress < duration) window.requestAnimationFrame(step);
  }
}

/**
 * @description - Cubic-bezier function for scroll animation
 * 
 * @param {date} prog 
 * @param {pixels} startPos 
 * @param {pixels} dist 
 * @param {date} dur 
 * @function easeInOutCubic
 * @returns {number}
 */
function easeInOutCubic(prog, startPos, dist, dur) {
  prog /= dur / 2;
  if (prog < 1) {
    return (dist / 2) * prog * prog * prog + startPos;
  }
  prog -= 2;
  return (dist / 2) * (prog * prog * prog + 2) + startPos;
}