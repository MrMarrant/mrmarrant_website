import "./styles/portfolio.scss";

const letters = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
window.addEventListener("load", (event) => {
  let i = 0;
  let titleValue = document.getElementById("title_name");
  const interval = setInterval(() => {
    titleValue.innerText = titleValue.innerText
      .split("")
      .map((letter, index) => {
        if (index < i) return titleValue.dataset.value[index];
        return letters[Math.floor(Math.random() * 26)];
      })
      .join("");
    if (i >= 9) clearInterval(interval);
    i += 1 / 3;
  }, 30);
});

window.addEventListener(
  "scroll",
  function (event) {
    let i = 0;
    let titleValue = document.getElementById("description_job");
    const interval = setInterval(() => {
      titleValue.innerText = titleValue.dataset.value
        .split("")
        .map((letter, index) => {
          if (index < i) return titleValue.dataset.value[index];
          return letters[Math.floor(Math.random() * 26)];
        })
        .join("");
      if (i >= 25) clearInterval(interval);
      i += 1 / 2;
    }, 30);
  },
  { once: true }
);

window.addEventListener(
  "scroll",
  function (event) {
    let i = 0;
    let titleValue = document.getElementById("description_hobbie");
    const interval = setInterval(() => {
      titleValue.innerText = titleValue.dataset.value
        .split("")
        .map((letter, index) => {
          if (index < i) return titleValue.dataset.value[index];
          return letters[Math.floor(Math.random() * 26)];
        })
        .join("");
      if (i >= 20) clearInterval(interval);
      i += 1 / 3;
    }, 30);
  },
  { once: true }
);