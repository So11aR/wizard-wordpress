document.addEventListener("DOMContentLoaded", function(event) { 
  let miniVklad = document.querySelectorAll(".miniVklad");

  miniVklad[0].classList.add('active')

  let tabs__content = document.querySelectorAll(".tabs__content");

  tabs__content[0].classList.add('active')

  let programm = document.querySelectorAll(".programmProductElem");
  programm[0].classList.add('smeta')
  programm[1].classList.add('plan')
  programm[2].classList.add('bim')
});



