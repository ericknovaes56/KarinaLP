import Utils from './utils.js'

export default class Carousel {

    container
    targetToScroll
    controls
    chidlren
    strength

    constructor(container, targetToScroll, data = {}) {

        try {
            
            container = (typeof container == 'string') ? document.querySelector(container) : container
            targetToScroll = (typeof targetToScroll == 'string') ? container.querySelector(targetToScroll) : targetToScroll
            data.children = (typeof data.children == 'string') ? container.querySelectorAll(data.children) : data.children

            const acceptedTypes = [Node, HTMLElement, Element]
            const { strength, children, scrollToChild } = data


            if(acceptedTypes.every(obj => !(container instanceof obj) && (targetToScroll instanceof obj))){

                throw new Error('O container fornecido não é um objeto DOM ou seletor')

            }

            this.container = container
            this.targetToScroll = targetToScroll
            this.controls = {
                self: this.container.querySelector('.controls'),
                buttons: this.container.querySelectorAll('.controls button')
            }
            this.children = children
            this.strength = strength

            this.controls.buttons.forEach((button) => {
  
                button.addEventListener('click', () => {
                
                    this.scrollCarousel(targetToScroll, {
                        direction: button.dataset.direction,
                        strength: this.strength
                    })
                    
                })
                
            })

            if(typeof scrollToChild == 'boolean' && scrollToChild){

                Array.from(children).forEach((child) => {

                    child.addEventListener('click', () => {

                        this.scrollCarousel(targetToScroll, {
                          childTarget: child,
                        })

                    })

                })

            }

        } catch(e) {

            console.error(e)

        }
        
    }

    scrollCarousel (container, data = {}) {

        const { direction, strength, childTarget } = data
        const directionNumber = { left: -1, right: 1 }
        
        const currentPosition = Boolean(container.style.transform) ? Number(container.style.transform.replace(/\D/g, '')) : 0
        const maxPosition = Array.from(container.children).map(c => c.offsetLeft + c.clientWidth).reduce((p, c) => c) - container.clientWidth
      
        let newPosition = (direction && strength) ? currentPosition + (strength * directionNumber[direction]) : currentPosition
      
        if(childTarget){
      
          newPosition = (childTarget.offsetLeft + childTarget.clientWidth / 2) - container.clientWidth / 2
      
        }
      
        container.style.transform = `translateX(-${Utils.minmax(newPosition, 0, maxPosition)}px)`
      
      }

}