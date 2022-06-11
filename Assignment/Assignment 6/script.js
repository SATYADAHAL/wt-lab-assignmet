let containerSpace = document.querySelector(".container");
let xPos = document.querySelector(".axes");
let yPos = document.querySelector(".yaxis");
let boxElements = document.querySelectorAll(".box");
let Xpos, Ypos;
let select = 0;
containerSpace.addEventListener("mousemove", function (event) {
  Xpos = event.clientX;
  Ypos = event.clientY;
  xPos.textContent = Xpos;
  yPos.textContent = Ypos;
});
let move = function () {
  boxElements[select].style.left = `${Xpos}px`;
  boxElements[select].style.top = `${Ypos}px`;
};
for (let i = 0; i < 3; i++) {
  boxElements[i].addEventListener("mousedown", function () {
    select = i;
    containerSpace.addEventListener("mousemove", move);
    boxElements[select].addEventListener("mouseup", function () {
      containerSpace.removeEventListener("mousemove", move);
    });
  });
}
Footer
