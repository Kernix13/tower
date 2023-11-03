const backToTopButton = document.querySelector("#back-to-top-btn");

window.addEventListener("scroll", scrollFunction);

/**
 * Display or hide back-to-top btn based on scrollY
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
 * Control scroll animation
 */
function smoothScrollBackToTop() {
  const duration = 1250;
  let start = null;

  const startPosition = window.scrollY;
  const distanceToTop = -1 * startPosition;

  window.requestAnimationFrame(step);

  /**
   * Synchronize animation using timestamp
   * @param {milliseconds} timestamp 
   */
  function step(timestamp) {
    if (!start) start = timestamp;

    const progress = timestamp - start;
    window.scrollTo(0, easeInOutCubic(progress, startPosition, distanceToTop, duration));

    if (progress < duration) window.requestAnimationFrame(step);
  }
}

/**
 * 
 * Cubic-bezier function for scroll animation
 * 
 * @param {milliseconds} prog 
 * @param {pixels} startPos 
 * @param {pixels} dist 
 * @param {milliseconds} dur 
 * @returns 
 */
function easeInOutCubic(prog, startPos, dist, dur) {
  prog /= dur / 2;
  if (prog < 1) {
    return (dist / 2) * prog * prog * prog + startPos;
  }
  prog -= 2;
  return (dist / 2) * (prog * prog * prog + 2) + startPos;
}