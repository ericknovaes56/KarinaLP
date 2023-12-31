const distance = '30px',
      duration = 1500,
      delay = 100


document.addEventListener('DOMContentLoaded', function() {


  const sr = ScrollReveal();
  sr.reveal('.reveal', {
    origin: 'top',
    distance: distance,
    duration: duration,
    delay: delay,
    reset:true,
  });
  sr.reveal('.reveal-left', {
    origin: 'left',
    distance: distance,
    duration: duration,
    delay: delay,
    reset:true,
  });
  sr.reveal('.reveal-right', {
    origin: 'right',
    distance:distance,
    duration: duration,
    delay: delay,
    reset:true,
  });
  sr.reveal('.reveal-bottom', {
    origin: 'bottom',
    distance: distance,
    duration: duration,
    delay: delay,
    reset:true,
  });

});