const textType = document.querySelector('.text-description-hero');
let widthText = 2;

document.addEventListener("mouseover", (e) => {
    const positionElement = window.innerWidth;
})
var ml4 = {};
ml4.opacityIn = [0,1];
ml4.scaleIn = [0.1, 1];
ml4.scaleOut = 3;
ml4.durationIn = 800;
ml4.durationOut = 600;
ml4.delay = 500;

anime.timeline({loop: true})
  .add({
    targets: '.ml4 .letters-1',
    opacity: ml4.opacityIn,
    scale: ml4.scaleIn,
    duration: ml4.durationIn
  }).add({
    targets: '.ml4 .letters-1',
    opacity: 0,
    scale: ml4.scaleOut,
    duration: ml4.durationOut,
    easing: "easeInExpo",
    delay: ml4.delay
  }).add({
    targets: '.ml4 .letters-2',
    opacity: ml4.opacityIn,
    scale: ml4.scaleIn,
    duration: ml4.durationIn
  }).add({
    targets: '.ml4 .letters-2',
    opacity: 0,
    scale: ml4.scaleOut,
    duration: ml4.durationOut,
    easing: "easeInExpo",
    delay: ml4.delay
  }).add({
    targets: '.ml4 .letters-3',
    opacity: ml4.opacityIn,
    scale: ml4.scaleIn,
    duration: ml4.durationIn
  }).add({
    targets: '.ml4 .letters-3',
    opacity: 0,
    scale: ml4.scaleOut,
    duration: ml4.durationOut,
    easing: "easeInExpo",
    delay: ml4.delay
  }).add({
    targets: '.ml4',
    opacity: 0,
    duration: 500,
    delay: 500
  });
const menu = document.querySelector('.list-content-menu');
const menuList = document.querySelector('.menu-list');

document.addEventListener('mouseover', (e) => {
  if (e.clientY > 500) {
    menu.style.marginBottom = '0px';
    menuList.style.overflow = 'visible';
  } else if (e.clientY < 600) {
    menu.style.marginBottom = '-320px';
    // menuList.style.overflow = 'hidden';
  }
})
const mouseCursor = document.querySelector('.cursor');

window.addEventListener('mousemove', (e) => {
  mouseCursor.style.top = e.pageY+'px';
  mouseCursor.style.left = e.pageX+'px';
})

// Send Data Visitors



