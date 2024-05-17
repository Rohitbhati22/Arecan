
@include('inculdes.head')
@include('inculdes.nav')

  <div class="container" style="margin-top: 70px">
    <center style="margin: 14px">
    <h2>
    📌 Image Classification 
    </h2>
    </center>

  <div class="grid">
    <div class="card">
      <div class="card__details">
        <div class="form_fill">
   <label for="file">Upload Image</label>
      <input type="file" accept="image/*;capture=camera" id="file" />
        </div>
    
      </div>
    </div>

    <div class="card">
      <div class="card__details">
       <img id="img" class="card_image">
      </div>
    </div>

  </div>
      <center style="margin: 14px">
    <h2>🧠
 <div id="message">Please wait...loading model...</div>
 </h2>
    </center>

  </div>
</main>

 <script src="https://unpkg.com/ml5@latest/dist/ml5.min.js"></script>

    <script>
        
const message = document.querySelector("#message")
const fileButton = document.querySelector("#file")
const img = document.querySelector("#img")
const synth = window.speechSynthesis

fileButton.addEventListener("change", event => loadFile(event))
img.addEventListener("load", () => userImageUploaded())

const classifier = ml5.imageClassifier('MobileNet', modelLoaded);

function loadFile(event) {
  img.src = URL.createObjectURL(event.target.files[0])
}

function userImageUploaded() {
  message.innerHTML = "Image was loaded!"
  
  classifier.classify(img, (err, results) => {
    console.log(results);
    message.innerHTML = `I think it's a ${results[0].label}!`
    speak(`I think it's a ${results[0].label}!`)
  });
}

// When the model is loaded
function modelLoaded() {
  console.log('Model Loaded!')
  message.innerHTML = "Please upload an image!"
}



function speak(text) {
  if (synth.speaking) {
    return
  }
  if (text !== "") {
    let utterThis = new SpeechSynthesisUtterance(text)
    synth.speak(utterThis)
  }
}
       </script>
     
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
@include('inculdes.footer')