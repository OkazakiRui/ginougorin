const can = document.getElementById("c");
can.width = 400;
can.height = 300;
c = can.getContext("2d");
c.beginPath();

let color = "red";

const btns = document.querySelectorAll("button");
btns.forEach(btn => btn.addEventListener("click", ({ target }) => color = target.id))

can.addEventListener("mousemove", ({ offsetX, offsetY }) => {
  c.strokeStyle = color;
  c.lineTo(offsetX, offsetY);
  c.stroke();
})