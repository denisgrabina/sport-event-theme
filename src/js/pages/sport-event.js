const body = document.querySelector("body");
const ctaLink = document.querySelector(".cta-link");

// Events template

if (body.classList.contains("page-template-event")) {
  document.addEventListener(
    "DOMContentLoaded",
    () => (body.style.display = "block")
  );
  const playerContainer = document.querySelector(".players");
  const leftPlayer = playerContainer.children[0];
  const rightPlayer = playerContainer.children[1];
  const coef = document.querySelector(".coef");
  const w1Coef = document.querySelector(".w1");
  const w2Coef = document.querySelector(".w2");
  const xCoef = document.querySelector(".x");
  const coefs = [w1Coef, xCoef, w2Coef];

  // check coefs exist
  for (let i = 0; i < coefs.length; ++i)
    if (!coefs[i].textContent) coef.style.visibility = "hidden";

  // animate players
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
}

// Champions

if (body.classList.contains("page-template")) {
  document.addEventListener(
    "DOMContentLoaded",
    () => (body.style.display = "block")
  );

	if (window.innerWidth > "1024") {
		
	}
	document.addEventListener(
    "DOMContentLoaded",
    () => viewPort()
  );

  function viewPort() {
    window.addEventListener("resize", applyViewPort);
		
    window.addEventListener("orientationchange", () => {
      applyViewPort();
    });

    applyViewPort();
  }

	function applyViewPort() {
		const doc = document.documentElement;
		doc.style.setProperty('--app-height', `${window.innerHeight}px`);
	}
}

// Gravitec

const addConvScript = e => {
  const script = document.createElement("script");
  script.type = "text/javascript";
  script.src =
    "https://juntives-unding.icu/conversion.js?cid=OPTIONAL&payout=OPTIONAL&txid=OPTIONAL";
  document.getElementsByTagName("head")[0].appendChild(script);
  return false;
};

ctaLink.addEventListener("click", addConvScript);
