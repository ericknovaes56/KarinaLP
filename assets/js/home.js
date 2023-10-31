const btnsNavBar = document.querySelectorAll(".navbtn");
const line = document.querySelector('.line');


const setLineOnButton = (button) =>{
    var buttonWidth = button.clientWidth;
    var left = button.offsetLeft;
    var corresao = left + (buttonWidth - line.clientWidth) / 2;
    line.style.left = corresao + 'px';
}


btnsNavBar.forEach((button, i) => {

  if (i === 0) {
    setLineOnButton(button)
  }

  button.addEventListener("click", () => {
    setLineOnButton(button)
  });

});
