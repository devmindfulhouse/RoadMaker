let img_slider = document.getElementsByClassName("img__slider");

let step = 0;
let nbr_img = img_slider.length;

let prev = document.querySelector(".slider--container__prev");
let next = document.querySelector(".slider--container__next");

let dots = document.getElementsByClassName("slider_dot");
console.log(dots);

function removeActiveImages() {
  for (let i = 0; i < nbr_img; i++) {
    img_slider[i].classList.remove("active");
    dots[i].classList.remove("active");
  }
}

function updateActiveDot() {
  for (let i = 0; i < nbr_img; i++) {
    if (i === step) {
      dots[i].classList.add("active");
    } else {
      dots[i].classList.remove("active");
    }
  }
}

nextSlide = function () {
  step++;
  if (step >= nbr_img) {
    step = 0;
  }
  removeActiveImages();
  img_slider[step].classList.add("active");
  updateActiveDot();
};

next.addEventListener("click", function () {
  nextSlide();
});

prev.addEventListener("click", function () {
  step--;
  if (step < 0) {
    step = nbr_img - 1;
  }
  removeActiveImages();
  img_slider[step].classList.add("active");
  updateActiveDot();
});

setInterval(function () {
  nextSlide();
}, 5000);

window.onscroll = function () {
  var button = document.getElementById("back-to-top");
  if (
    document.documentElement.scrollTop > 400 &&
    document.documentElement.scrollTop + window.innerHeight <
      document.documentElement.scrollHeight
  ) {
    button.style.display = "block";
  } else {
    button.style.display = "none";
  }
};

document.getElementById("back-to-top").addEventListener("click", function () {
  window.scrollTo({ top: 0, behavior: "smooth" });
});
