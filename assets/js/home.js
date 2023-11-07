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

  var data = button.parentNode.hash

  if (data){

    var getElement = document.querySelector(data)

    if(getElement){
      sectionsArray.push(getElement)
    }

  }

  if (i === 0) {
    setLineOnButton(button)
  }

});

if (sectionsArray.length == 0){
  line.remove()
}

window.addEventListener("scroll", (e) => {

  sectionsArray.forEach(section => {
    
    var scrollTop = window.scrollY;

    const posicaoElementoTop = section.offsetTop - menu.clientHeight - 60;
    const posicaoElementoDown = section.offsetHeight + posicaoElementoTop;

    if (scrollTop < sectionsArray[0].offsetTop - menu.clientHeight - 60){
      setLineOnButton(btnsNavBar[0])
      return
    }

    if (scrollTop >= posicaoElementoTop && scrollTop <= posicaoElementoDown){
      btnsNavBar.forEach(button => {
        var parent = button.parentNode.hash.replace('#', "")

        if ( parent == section.id){
          setLineOnButton(button)
        }
      
      });
    }

    
  });
});

// form section

const allInputs = document.querySelectorAll(".input input")
const handleFocusBlur = (event) => {

    var elemento = event.target
    var elementoPai = elemento.parentNode
    const label = elementoPai.querySelector('label');

    if (elemento.value != '') {

        label.classList.add('active', event.type === 'focus');

        return

    }

    label.classList.toggle('active', event.type === 'focus');

};

allInputs.forEach(element => {

    element.addEventListener("focus", handleFocusBlur);
    element.addEventListener("blur", handleFocusBlur);

});


const formatarNumeroDeCelular = (phone) => {
  phone = phone.replace(/\D/g, ''); // Remove todos os caracteres não numéricos.

  if (phone.length > 2) {
    if (phone.length === 11) {
      phone = '(' + phone.substr(0, 2) + ') ' + phone.substr(2, 1) + ' ' + phone.substr(3, 4) + '-' + phone.substr(7);
    } else if (phone.length === 10) {
      phone = '(' + phone.substr(0, 2) + ') ' + phone.substr(2, 4) + '-' + phone.substr(6);
    }
  }

  return phone;
}



const numeroInput = document.querySelector("#telefone");

numeroInput.addEventListener("input", (e) => {
  var input = e.target.value;
  e.target.value = formatarNumeroDeCelular(input);
});
