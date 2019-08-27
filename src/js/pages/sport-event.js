const body = document.querySelector("body");
const playerContainer = document.querySelector(".player-container");
const leftPlayer = playerContainer.children[0];
const rightPlayer = playerContainer.children[1];

playerContainer.addEventListener("mouseover", translatePlayerElement);
playerContainer.addEventListener("mouseout", translatePlayerElement);

function translatePlayerElement(e) {
  const leftContainerWidth = body.offsetWidth / 2;
  const isDesktop = body.offsetWidth > 768;
	
  if (isDesktop) {
    if (e.pageX <= leftContainerWidth) {
      leftPlayer.classList.toggle("translated-left");
      rightPlayer.classList.toggle("translated-left");
    } else {
      leftPlayer.classList.toggle("translated-right");
      rightPlayer.classList.toggle("translated-right");
    }
  }
}
console.log('teeest123');





