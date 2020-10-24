// lazy load blur-up image placeholder stuff for an image from an ACF field

// Cache elements
var featureImage = document.getElementById("lazy-image"),
  placeholderOverlay = document.getElementById("placeholder-overlay");

// Check if the elements exist
if (featureImage && placeholderOverlay) {
  // Create an image with the full size URL
  var img = new Image();
  img.src = featureImage.dataset.imageSrc;

  // When it finishes loading, add it to our hero and fade out the overlay
  img.onload = function() {
    placeholderOverlay.classList.add("fade-out");
    featureImage.style.backgroundImage = "url(" + img.src + ")";
  };
}