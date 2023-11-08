const distance = '30px',
      duration = 1500,
      delay = 100



document.addEventListener("DOMContentLoaded", function() {
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
function calcularEmprestimo(valor, parcelas) {

  const taxa = 16.46

  var juros = taxa / 100; 
  var parcela = valor * juros / (1 - Math.pow(1 + juros, -parcelas));
  return parcela.toFixed(2);
  
}
  const valorEmprestimo = 700;
  const numParcelas = 18;
  
  const valorParcela = calcularEmprestimo(valorEmprestimo, numParcelas);

  
  console.log(`Valor da parcela: R$ ${valorParcela}`);