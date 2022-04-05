var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");

  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {
    slideIndex = 1;
  }

  slides[slideIndex - 1].style.display = "block";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}

window.onscroll = function () {
  scrollFunction();
};

function scrollFunction() {
  if (
    document.body.scrollTop > 200 ||
    document.documentElement.scrollTop > 200
  ) {
    document.getElementById("navbar").style.backgroundColor =
      "rgb(196, 33, 33)";
    document.getElementById("navbar").style.borderBottomColor =
      "rgb(131, 0, 0)";
  } else {
    document.getElementById("navbar").style.backgroundColor = "transparent";
    document.getElementById("navbar").style.borderBottomColor = "transparent";
  }
}

const tafels = document.querySelectorAll(".tafel");

tafels.forEach((tafel) => {
  tafel.addEventListener("click", (e) => {
    const dataAttribute = tafel.getAttribute("data-id");
    console.log(dataAttribute);
    document.querySelector(".reserveerform").style.display = "block";
    tafel.style.backgroundColor = "orange";
  });
});
