document.addEventListener("DOMContentLoaded", function () {
  //loading画面anime
  const keyName = "visited";
  const keyValue = true;

  const isElementPresent = (element) => {
    return element !== null && typeof element !== "undefined";
  };

  if (!sessionStorage.getItem(keyName)) {
    sessionStorage.setItem(keyName, keyValue);
    const loadingAreaGrey = document.querySelector("#loading");
    const loadingAreaGreen = document.querySelector("#loading-screen");
    const loadingText = document.querySelector("#loading p");

    if (
      isElementPresent(loadingAreaGrey) &&
      isElementPresent(loadingAreaGreen) &&
      isElementPresent(loadingText)
    ) {
      window.addEventListener("load", () => {
        loadingAreaGrey.animate(
          {
            opacity: [1, 0],
            visibility: "hidden",
          },
          {
            duration: 2000,
            delay: 1200,
            easing: "ease",
            fill: "forwards",
          }
        );
        loadingAreaGreen.animate(
          {
            translate: ["0 100vh", "0 0", "0 -100vh"],
          },
          {
            duration: 2000,
            delay: 800,
            easing: "ease",
            fill: "forwards",
          }
        );
        loadingText.animate(
          [
            {
              opacity: 1,
              offset: 0.8,
            },
            {
              opacity: 0,
              offset: 1,
            },
          ],
          {
            duration: 1200,
            easing: "ease",
            fill: "forwards",
          }
        );
      });
    }
  } else {
    const loadingAreaGrey = document.querySelector("#loading");
    if (isElementPresent(loadingAreaGrey)) {
      loadingAreaGrey.style.display = "none";
    }
  }

  const loadingAreaLeft = document.querySelector("#loading-left");
  if (isElementPresent(loadingAreaLeft)) {
    const loadingAreaLeft = document.querySelector("#loading-left");
    const keyframes = {
      transform: ["scaleX(1)", "scaleX(0)"],
    };

    const options = {
      duration: 1000,
      delay: 200,
      easing: "ease",
      fill: "forwards",
    };

    window.addEventListener("load", () => {
      loadingAreaLeft.animate(keyframes, options);
    });
  }

  const openBtns = document.querySelectorAll(".openbtn");
  openBtns.forEach(function (btn) {
    btn.addEventListener("click", function () {
      this.classList.toggle("active");
      document.getElementById("mask-menu").classList.toggle("show");
    });
  });

  //side-menuをコンテンツに沿わせて表示させる
  const container = document.getElementById("main-container");
  const aside = document.getElementById("aside");
  const offsetY = 20;
  if (container && aside) {
    container.style.minHeight = aside.clientHeight + "px";

    window.addEventListener("scroll", () => {
      const containerRect = container.getBoundingClientRect();
      const isReachBottom = (aside, containerRect, offsetY) => {
        if (aside.clientHeight < window.innerHeight) {
          if (containerRect.bottom <= aside.clientHeight + offsetY) {
            return true;
          } else {
            return false;
          }
        } else {
          if (containerRect.bottom < window.innerHeight - offsetY) {
            return true;
          } else {
            return false;
          }
        }
      };

      if (isReachBottom(aside, containerRect, offsetY)) {
        aside.classList.add("is-end");
        aside.classList.add("is-fixed");
        aside.style.left = "";
      } else if (containerRect.top < offsetY) {
        aside.classList.add("is-fixed");
        aside.classList.remove("is-end");
        aside.style.left = containerRect.left + "px";
      } else {
        aside.classList.remove("is-fixed");
        aside.classList.remove("is-end");
        aside.style.left = "";
      }
    });
  }

  //front-page-aboutにて使用
  const animateFade = (entries, obs) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        entry.target.animate(
          {
            opacity: [0, 1],
            filter: ["blur(.4rem)", "blur(0)"],
            tanslate: ["0 4rem", 0],
          },
          {
            duration: 2000,
            easing: "ease",
            fill: "forwards",
          }
        );
        obs.unobserve(entry.target);
      }
    });
  };
  const fadeObserver = new IntersectionObserver(animateFade);
  const fadeElements = document.querySelectorAll(".fadein");
  fadeElements.forEach((fadeElement) => {
    fadeObserver.observe(fadeElement);
  });

  //fadein実装（aboutスキルコンテンツ、works一覧にて）
  const animateFadeUp = (entries, obs) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        entry.target.classList.add("fadeup");
        obs.unobserve(entry.target);
      }
    });
  };
  const fadeUpObserver = new IntersectionObserver(animateFadeUp);
  const fadeUpElements = document.querySelectorAll(
    ".works-section-image-wrap, .production-contents-wrap"
  );
  fadeUpElements.forEach((fadeupElement) => {
    fadeUpObserver.observe(fadeupElement);
  });

  const item = document.querySelector(".skill-content");

  if (item) {
    const callback = function (entries, observer) {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          entry.target.classList.add("circle-animation-active");
          observer.unobserve(entry.target);
        }
      });
    };

    const io = new IntersectionObserver(callback);
    io.observe(item);
  }
});
