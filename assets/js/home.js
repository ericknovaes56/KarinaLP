import Utils from './utils.js'
import Carousel from './carousel.js'

const btnsNavBar = document.querySelectorAll(".navbtn")
const line = document.querySelector('.line')
const menu = document.querySelector(".menu")

const sectionsArray = []

var scrollSide // <------------- Erick, que djabo de var é essa?

const carousels = {
  modules: new Carousel('.course-infos .modules', '.wrapper', {
    children: '.course-infos .modules .wrapper .module',
    strength: function () {

      const container = document.querySelector('.course-infos .modules .wrapper')
      const { clientWidth } = container
      const computedStyle = getComputedStyle(container)
      
      return clientWidth - (computedStyle.getPropertyValue('--gap').replace(/\D/g, '') * (computedStyle.getPropertyValue('--quantity-view') - 1))

    }(),
    scrollToChild: true,
  }),
  feedbacks: new Carousel('.feedbacks .carousel', '.wrapper', {
    children: '.wrapper .feedback',
    strength: function () {

      const container = document.querySelector('.feedbacks .carousel .wrapper')
      const { clientWidth } = container
      const computedStyle = getComputedStyle(container)
      
      return clientWidth - (computedStyle.getPropertyValue('--gap').replace(/\D/g, '') * (computedStyle.getPropertyValue('--quantity-view') - 1))

    }(),
    scrollToChild: true,
  }),
}

const setLineOnButton = (button) => {

  var buttonWidth = button.clientWidth;
  var left = button.offsetLeft;
  var corresao = left + (buttonWidth - line.clientWidth) / 2;
  line.style.left = corresao + 'px';

}

carousels.modules.children.forEach((module, index, modules) => {

  const openButton = module.querySelector('.open-btn')
  const media = module.querySelector('.media > *')
  const openModule = () => {

    Array.from(modules).filter(m => m != module).forEach((m) => m.classList.remove('open'))

    module.classList.toggle('open')

  }

  if(media.tagName == 'VIDEO'){
    
    media.addEventListener('ended', openModule)

  }

  openButton.addEventListener('click', (e) => {

    if(module.classList.contains('open')){
      
      e.stopPropagation()

    }

    openModule()

  })

})

carousels.feedbacks.children.forEach((feedback, index, feedbacks) => {

  const playButton = feedback.querySelector('.play')
  const closeButton = feedback.querySelector('.close')
  const video = feedback.querySelector('iframe')

  playButton.addEventListener('click', () => {

    Array.from(feedbacks).filter((f) => f != feedback).forEach((f) => f.classList.remove('playing'))
    
    feedback.classList.add('playing')
    
  })
  
  closeButton.addEventListener('click', () => {

    feedback.classList.remove('playing')

    video.src = video.src

  })

})

btnsNavBar.forEach((button, i) => {

  let data = button.dataset.target

  if (data){

    var getElement = document.querySelector("#"+data)

    if(getElement){
      sectionsArray.push(getElement)
      console.log(sectionsArray)
    }

  }

  if (i === 0) {
    setLineOnButton(button)
  }
  button.addEventListener("click",()=>{

    const rightmenu = menu.querySelector(".right-menu")
    rightmenu.classList.toggle("hidden")

    let data = button.dataset.target

    sectionsArray.forEach(section => {
  
      if(section.id == data){



        const elementTop = section.offsetTop - menu.clientHeight
        var scrollY = window.scrollY - 60

        if (scrollY < 60){
          window.scrollTo(0,elementTop)
          return
        }

        if (elementTop >= scrollY){
          scrollY = window.scrollY - 60
          window.scrollTo(0,scrollY)

          setTimeout(() => {
            window.scrollTo(0,elementTop)
          }, 500);
  
        }else{

          scrollY = window.scrollY + 60
          window.scrollTo(0,scrollY)

          setTimeout(() => {
            window.scrollTo(0,elementTop)
          }, 500);

        }


      }
    });


  })

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
      btnsNavBar[0].classList.add('show-color')
      btnsNavBar[1].classList.remove('show-color')
      return
    }

    if (scrollTop >= posicaoElementoTop && scrollTop <= posicaoElementoDown){
      btnsNavBar.forEach(button => {
  
        var parent = button.dataset.target

        if ( parent == section.id){
          setLineOnButton(button)
          button.classList.add('show-color')
        }else{
          button.classList.remove('show-color')
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


const cards = document.querySelectorAll(".card")
cards.forEach(card => {

  card.addEventListener("click",()=>{

    cards.forEach(cardin =>{
      if(cardin.classList.contains("show") && cardin != card ){
        cardin.classList.toggle("show")
        const realHeight = cardin.scrollHeight
        cardin.style.height='60px'
      }
    })

    if (card.classList.contains('show')){
      card.classList.toggle("show")
      const realHeight = card.scrollHeight
      card.style.height='60px'
    }else{
      card.classList.toggle("show")
      const realHeight = card.scrollHeight
      card.style.height=realHeight+'px'
    }
  })
});

const buguer = document.querySelectorAll(".buguer")

buguer.forEach(element => {
  element.addEventListener("click", ()=>{
    var rightmenu = menu.querySelector(".right-menu")
    rightmenu.classList.toggle("hidden")
  })
});




// invite form to table


const formHome = document.querySelector('.form-home')


formHome.addEventListener('submit', async (event) => {

  event.preventDefault()

  const button = formHome.querySelector('.enviar')
  const formData = new FormData(formHome)

  var dadosDoFormulario = {};

  for (var pair of formData.entries()) {
    dadosDoFormulario[pair[0]] = pair[1];
  }

  if (!dadosDoFormulario) return


  for (var key in dadosDoFormulario) {
    if (!dadosDoFormulario[key]) {
        createAlert(false,"O campo '" + key + "' está vazio.");
        return
    }
  }

  button.innerHTML="<i class='bx bx-loader-alt bx-spin' style='color:#ffffff' ></i>"
  button.setAttribute('disabled', 'true');


  if (await inviteForm(dadosDoFormulario)){

    button.innerHTML="Enviar"
    button.removeAttribute('disabled');
    formHome.reset()
    allInputs.forEach(element => {

      element.parentNode.querySelector('label').classList.remove('active')
    
    });

  }



})



async function inviteForm(obj){
  
  var link = 'https://api.sheetmonkey.io/form/ayJt6t1vif8b6bwjG67FrY'

  const formDataFields = obj

  const requestSheetMonkey = await fetch(link, {
      method: 'POST',
      headers: {
          'Content-Type': 'application/json'
      },
      body: JSON.stringify(formDataFields)
  })

  if(requestSheetMonkey.ok && requestSheetMonkey.status == 200){

      createAlert(true,'Enviado com sucesso !')
      return true
      
  } else {

    createAlert(false , `failed Code -> ${requestSheetMonkey.status} fale com desenvolvedor`)()
    return false

  }

}

function createAlert(status, msg) {

  const div = document.createElement('div')
  div.classList.add('alert')

  if (status) {

    div.innerHTML="<i class='bx bxs-check-circle'></i>"+msg
    div.classList.add('alert-success')

  }else{

    div.innerHTML="<i class='bx bxs-error'></i>"+msg
    div.classList.add('alert-error')

  }

  document.body.appendChild(div)

  setTimeout(() => {
    div.classList.add('showing-alerts')
  }, 500);

  setTimeout(() => {
    div.classList.remove('showing-alerts')
    setTimeout(() => {
      div.remove()
    }, 1000);
  }, 5000);
    
}
