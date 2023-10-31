const btnsNavBar = document.querySelectorAll(".navbtn");
const line = document.querySelector('.line');

btnsNavBar.forEach(button => {
  button.addEventListener("click", () => {

    var buttonWidth = button.clientWidth;
    var left = button.offsetLeft;
    var corresao = left + (buttonWidth - line.clientWidth) / 2;
    line.style.left = corresao + 'px';
    
  });
});
