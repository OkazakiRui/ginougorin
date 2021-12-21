const res = document.getElementById("res");
const text = document.getElementById("text");
const inputs = document.querySelectorAll("input");

let r = 0;
let g = 0;
let b = 0;

inputs.forEach(input => input.addEventListener("input", ({ target }) => {
  switch (target.id) {
    case "r":
      r = target.value;
      break;
    case "g":
      g = target.value;
      break;
    case "b":
      b = target.value;
      break;
  }

  text.innerHTML = `RGB(${r}, ${g}, ${b})`;
  res.style.background = `RGB(${r}, ${g}, ${b})`;
}))