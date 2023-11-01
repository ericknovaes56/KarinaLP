const btnsNavBar = document.querySelectorAll(".navbtn");
const line = document.querySelector('.line');
const menu = document.querySelector(".menu")

const sectionsArray = []

const setLineOnButton = (button) =>{
    var buttonWidth = button.clientWidth;
    var left = button.offsetLeft;
    var corresao = left + (buttonWidth - line.clientWidth) / 2;
    line.style.left = corresao + 'px';
}


btnsNavBar.forEach((button, i) => {


  if (button.parentNode.dataset.to){
    var getElement = document.querySelector("#"+button.parentNode.dataset.to)
    if(getElement){
      sectionsArray.push(getElement)
    }
  }

  if (i === 0) {
    setLineOnButton(button)
  }


});

window.addEventListener("scroll", (e) => {
  sectionsArray.forEach(section => {
    var scrollTop = window.scrollY;
    const posicaoElementoTop = section.offsetTop - menu.clientHeight - 15;
    const posicaoElementoDown = section.offsetHeight + posicaoElementoTop;

    if (scrollTop < sectionsArray[0].offsetTop - menu.clientHeight - 15){
      setLineOnButton(btnsNavBar[0])
      return
    }

    if (scrollTop >= posicaoElementoTop && scrollTop <= posicaoElementoDown){
      btnsNavBar.forEach(button => {
        var parent = button.parentNode
        if (parent.dataset.to == section.id){
          setLineOnButton(button)
        }
      });
    }

    
  });
});





