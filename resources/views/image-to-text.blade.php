
@include('inculdes.head')
@include('inculdes.nav')

  <div class="container" style="margin-top: 70px">
    <center style="margin: 14px">
    <h2>
    ✒️ Image To Text 
    </h2>
    </center>

  <div class="grid">
    <div class="card">
      <div class="card__details">
        <div class="form_fill">
            <div id="imagePreviewContainer">
        <img id="imagePreview" src="" alt="Image Preview" style="max-width: 100%; max-height: 400px; display: none;">
    </div>
    
        </div>
    
      </div>
    </div>

    <div class="card">
      <div class="card__details">
         <div id="output"></div>
      </div>
    </div>

  </div>
      <center style="margin: 14px">
          <input type="file" id="imageInput" accept="image/*" onchange="previewImage();" style="margin: 7px">
  <button onclick="extractText()" class="btn" style="margin: 7px">📑 Extract Text</button>
    </center>

  </div>
</main>
    <script src="https://cdn.jsdelivr.net/npm/tesseract.js@2.1.1"></script>

    <script>
           function previewImage() {
            const file = document.getElementById('imageInput').files[0];
            const imagePreview = document.getElementById('imagePreview');

            if (file) {
                imagePreview.src = URL.createObjectURL(file);
                imagePreview.style.display = 'block';
            } else {
                imagePreview.src = '';
                imagePreview.style.display = 'none';
            }
        }

        function extractText() {
            const output = document.getElementById('output');
            const image = document.getElementById('imageInput').files[0];
            const imagePreview = document.getElementById('imagePreview');

            if (!image) {
                output.textContent = 'Please upload an image first.';
                return;
            }

            output.textContent = 'Processing...';

            Tesseract.recognize(
                imagePreview.src,
                'eng',
                {
                    logger: m => console.log(m)  // Log progress
                }
            ).then(({ data: { text } }) => {
                output.textContent = text;
            }).catch(error => {
                console.error('Error:', error);
                output.textContent = 'Failed to process image.';
            });
        }
       </script>
     
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
@include('inculdes.footer')