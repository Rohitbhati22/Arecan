
@include('inculdes.head');
<link rel="canonical" href="https://tailwinduikit.com/components/E-commerce/Components/partners">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css">
<style>
    body { font-family: Arial, sans-serif; }
    .hero-section { background-color: #f0f0f0; padding: 50px 20px; text-align: center; }
    .hero-head {
      font-size: 24px;
      font-weight: 800;
    }
        .typing-effect {
        display: inline-block;
    }
    .features-section { padding: 20px; }
    .feature { margin-bottom: 20px; }
      .demo-section {
        padding: 50px 20px;
        background-color: #e9ecef;
        text-align: center;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        transition: all 0.3s ease;
    }
    .demo-section:hover {
        transform: scale(1.05);
        box-shadow: 0 6px 12px rgba(0,0,0,0.15);
    }
    .demo-button {
        background-color: #007bff;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 24px; 
        margin: 7px;
        font-size: 16px;
        transition: background-color 0.3s ease;
    }
    .demo-button:hover {
        background-color: #0056b3;
        cursor: pointer;
    }
    .testimonials-section { padding: 20px; }
    .footer { background-color: #333; color: white; padding: 20px 10px; text-align: center; }
    .cta-button { background-color: #007bff; color: white; padding: 10px 20px; text-decoration: none; border-radius: 24px; margin: 14px;}
    .cta-button:hover { background-color: #0056b3; }
    .center-div {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
    }
    .row {
        width: 100%;
  margin: 0 auto;
  display: grid;
  gap: 1rem;
       grid-template-columns: repeat(2, 1fr);
    }
    .row-4 {
        width: 100%;
  margin: 0 auto;
  display: grid;
  gap: 1rem;
       grid-template-columns: repeat(4, 1fr);
    }
    .col {
        width: 100%;

}
.title_text {
  font-size: 28px;
  font-weight: 800;
}
.small_head_text {
  font-size: 18px;
  font-weight: 700;
}

.button-50 {
  appearance: button;
  background-color: #007bff;
  background-image: none;
  border: 1px solid #000;
  border-radius: 4px;
  box-shadow: #fff 4px 4px 0 0,#000 4px 4px 0 1px;
  box-sizing: border-box;
  color: #fff;
  cursor: pointer;
  display: inline-block;
  font-family: ITCAvantGardeStd-Bk,Arial,sans-serif;
  font-size: 14px;
  font-weight: 400;
  line-height: 20px;
  margin: 0 5px 10px 0;
  overflow: visible;
  padding: 12px 40px;
  text-align: center;
  text-transform: none;
  touch-action: manipulation;
  user-select: none;
  -webkit-user-select: none;
  vertical-align: middle;
  white-space: nowrap;
}

.button-50:focus {
  text-decoration: none;
}

.button-50:hover {
  text-decoration: none;
}

.button-50:active {
  box-shadow: rgba(0, 0, 0, .125) 0 3px 5px inset;
  outline: 0;
}

.button-50:not([disabled]):active {
  box-shadow: #fff 2px 2px 0 0, #000 2px 2px 0 1px;
  transform: translate(2px, 2px);
}

@media (min-width: 768px) {
  .button-50 {
    padding: 12px 50px;
  }
}

</style>
@include('inculdes.nav');

<div class="row hero-section">
  <div class="col center-div">
     <h2 class="hero-head">Transform Your Images Instantly with AI</h2>
    <p class="typing-effect m-2"></p>
    <a href="/image-classification" class="button-50" style="margin: 7px">Get Started For Free</a>
  </div>
  <div class="col">

<dotlottie-player src="https://lottie.host/27457b81-3f85-478a-8ddb-fba94cc376d8/uvczGCymtB.json" background="#F0F0F0" speed="1" style="width: 400px; height: 400px" direction="1" playMode="normal" loop autoplay></dotlottie-player>

  </div>
</div>

<section class="container features-section" id="features">
  <center style="margin: 14px;color:#6200ff">
  <h2 class="title_text"><b>What We Offer</b></h2>
  </center>
    <div class="row-4">
        <div class="col">
          <dotlottie-player src="https://lottie.host/37b3e90b-7404-4dcb-a8d7-9846d84d6db7/Gf2JK1LHZp.json" background="#ffffff" speed="1" style="width: 200px; height: 200px" direction="1" playMode="normal" loop autoplay></dotlottie-player>
            <h3 class="small_head_text">Image Classification</h3>
            <p>Categorize your images with advanced AI technology.</p>
        </div>
        <div class="col">
          <dotlottie-player src="https://lottie.host/7fa912a5-dca6-47c2-a4a8-bbdedf1f94a2/KY4n6U7G3j.json" background="#ffffff" speed="1" style="width: 200px; height: 200px" direction="1" playMode="normal" loop autoplay></dotlottie-player>
            <h3 class="small_head_text">Text Extraction</h3>
            <p>Extract text seamlessly from any image.</p>
        </div>
        <div class="col">
          <dotlottie-player src="https://lottie.host/25d97062-2e1a-4f4a-baf9-c183b42a0a4c/awRTheVWBN.json" background="#ffffff" speed="1" style="width: 200px; height: 200px" direction="1" playMode="normal" loop autoplay></dotlottie-player>
            <h3 class="small_head_text">Background Removal</h3>
            <p>Easily remove backgrounds from your images.</p>
        </div>
        <div class="col">
<dotlottie-player src="https://lottie.host/0c2beed2-7be0-46dd-a6f5-45d5da3fc595/TUJJ7jUdRd.json" background="#FFFFFF" speed="1" style="width: 200px; height: 200px" direction="1" playMode="normal" loop autoplay></dotlottie-player>
            <h3 class="small_head_text">Image Editor</h3>
            <p>Access a full suite of editing tools to enhance your photos.</p>
        </div>
    </div>
</section>

<section class="demo-section">
    <div class="container">
        <h2 class="title_text">Try It Now</h2>
        <p class="m-2">Upload your image to see how our AI can transform it in seconds.</p>
        <a href="/image-classification" class="demo-button m-2">Upload Image</a>
    </div>
</section>

@include('inculdes.review')

</main>
<script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

<script>

  
    const texts = ['Edit, enhance, and manipulate your images.', 'Explore powerful, free-to-use AI tools.'];
    let count = 0;
    let index = 0;
    let currentText = '';
    let letter = '';
    const typingElement = document.querySelector('.typing-effect');

    (function type() {
        if (count === texts.length) {
            count = 0;
        }
        currentText = texts[count];
        letter = currentText.slice(0, ++index);

        typingElement.textContent = letter;
        if (letter.length === currentText.length) {
            count++;
            index = 0;
            setTimeout(type, 2000); // Wait for 2s before starting the new sentence
        } else {
            setTimeout(type, 120); // Typing speed in milliseconds
        }
    })();

  // Js Code for medium and large Screen
// more free and premium Tailwind CSS components at https://tailwinduikit.com/
let next = document.getElementById("next");
let prev = document.getElementById("prev");
let defaultTransform = 0;
function goNext() {
  defaultTransform = defaultTransform - 298;
  var slider = document.getElementById("slider");
  if (Math.abs(defaultTransform) >= slider.scrollWidth / 1.2)
    defaultTransform = 0;
  slider.style.transform = "translateX(" + defaultTransform + "px)";
}
function goPrev() {
  var slider = document.getElementById("slider");
  if (Math.abs(defaultTransform) === 0) defaultTransform = 0;
  else defaultTransform = defaultTransform + 298;
  slider.style.transform = "translateX(" + defaultTransform + "px)";
}
next.addEventListener("click", goNext);
prev.addEventListener("click", goPrev);

// Js Code for small Scroll
// more free and premium Tailwind CSS components at https://tailwinduikit.com/

let next2 = document.getElementById("next2");
let prev2 = document.getElementById("prev2");
let defaultTransform2 = 0;
function goNext2() {
  var sizeDiv = document.getElementById("sizeDiv").offsetWidth + 5;
  defaultTransform2 = defaultTransform2 - sizeDiv;
  var slider = document.getElementById("slider2");
  if (Math.abs(defaultTransform2) >= slider.scrollWidth / 1.2)
    defaultTransform2 = 0;
  slider.style.transform = "translateX(" + defaultTransform2 + "px)";
}
function goPrev2() {
  var sizeDiv = document.getElementById("sizeDiv").offsetWidth + 5;
  var slider = document.getElementById("slider2");
  if (Math.abs(defaultTransform2) === 0) defaultTransform2 = 0;
  else defaultTransform2 = defaultTransform2 + sizeDiv;
  slider.style.transform = "translateX(" + defaultTransform2 + "px)";
}
next2.addEventListener("click", goNext2);
prev2.addEventListener("click", goPrev2);

</script>
@include('inculdes.footer')