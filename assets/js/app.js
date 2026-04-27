let img_slider = document.getElementsByClassName("img__slider");

let step = 0;
let nbr_img = img_slider.length;

let prev = document.querySelector(".slider--container__prev");
let next = document.querySelector(".slider--container__next");

let dots = document.getElementsByClassName("slider_dot");

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

if (next && prev && nbr_img > 0 && dots.length >= nbr_img) {
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
}

// Add scroll event listener to the window
window.addEventListener("scroll", function () {
  var button = document.getElementById("back-to-top");
  if (button) {
    // Check if the element exists
    if (
      window.pageYOffset > 400 &&
      window.pageYOffset + window.innerHeight <
        document.documentElement.scrollHeight
    ) {
      button.style.display = "block";
    } else {
      button.style.display = "none";
    }
  }
});

// Add click event listener to the back-to-top button
const backToTopButton = document.getElementById("back-to-top");

if (backToTopButton) {
  backToTopButton.addEventListener("click", function () {
    window.scrollTo({
      top: 0,
      behavior: "smooth",
    });
  });
}

let toggle = document.querySelector(".navbar--container__burger");
let body = document.querySelector("body");

if (toggle) {
  toggle.addEventListener("click", function () {
    body.classList.toggle("open");
    document.querySelector(".navbar--container__menu").classList.toggle("open");
  });
}

function limitLinkedInFeedPosts() {
  const feedHost = document.querySelector(".sk-ww-linkedin-page-post");
  if (!feedHost) {
    return false;
  }

  const feedGrid = feedHost.querySelector(".grid-linkedin-page-post");
  const feedPosts = Array.from(
    feedHost.querySelectorAll(".grid-item-linkedin-page-post")
  );

  if (!feedGrid || feedPosts.length === 0) {
    return false;
  }

  feedPosts.slice(1).forEach(function (feedPost) {
    const postWrapper = feedPost.closest("span") || feedPost;
    postWrapper.remove();
  });

  const firstPost = feedPosts[0];
  firstPost.style.position = "relative";
  firstPost.style.left = "auto";
  firstPost.style.top = "auto";
  feedGrid.style.height = "auto";

  const profileBlock = feedHost.querySelector(
    ".linkedin-page-post-user-root-container"
  );
  if (profileBlock) {
    profileBlock.remove();
  }

  const bottomButtons = feedHost.querySelector(
    ".sk-linkedin-page-post-bottom-btn-container"
  );
  if (bottomButtons) {
    bottomButtons.remove();
  }

  return true;
}

const linkedinFeed = document.querySelector(".sk-ww-linkedin-page-post");

if (linkedinFeed) {
  let isUpdatingLinkedinFeed = false;

  const applyLinkedinFeedLimit = function () {
    if (isUpdatingLinkedinFeed) {
      return;
    }

    isUpdatingLinkedinFeed = true;
    limitLinkedInFeedPosts();
    isUpdatingLinkedinFeed = false;
  };

  const linkedinFeedObserver = new MutationObserver(function () {
    applyLinkedinFeedLimit();
  });

  linkedinFeedObserver.observe(linkedinFeed, {
    childList: true,
    subtree: true,
  });

  applyLinkedinFeedLimit();
  window.addEventListener("load", applyLinkedinFeedLimit);
  window.setTimeout(applyLinkedinFeedLimit, 1000);
  window.setTimeout(applyLinkedinFeedLimit, 2500);
}

