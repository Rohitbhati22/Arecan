
@include('inculdes.head')
@include('inculdes.nav')

  <div class="container" style="margin-top: 70px">
    <center style="margin: 14px">
    <h2>
    ⚡Remove Background⚡
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
        <div id="output">
          <div id="output_text"></div>
        <canvas id="canvas" style="height: 200px"></canvas>
        <button id="download" style="display: none;" onclick="downloadImage()" class="btn">Download Image</button>
      </div>
        
      </div>
    </div>

  </div>
      <center style="margin: 14px">
          <input type="file" id="upload" accept="image/*" onchange="previewImage();" style="margin: 7px">
  <button onclick="removeBackground()" class="btn" style="margin: 7px">⚡Remove Background ⚡</button>
    </center>

  </div>
</main>

 <script src="https://cdn.jsdelivr.net/npm/@tensorflow/tfjs"></script>
<script src="https://cdn.jsdelivr.net/npm/@tensorflow-models/coco-ssd"></script>
<script src="https://cdn.jsdelivr.net/npm/@tensorflow-models/body-pix"></script>
    <script>
  const output = document.getElementById('output_text');

   function previewImage() {
            const file = document.getElementById('upload').files[0];
            const imagePreview = document.getElementById('imagePreview');

            if (file) {
                imagePreview.src = URL.createObjectURL(file);
                imagePreview.style.display = 'block';
            } else {
                imagePreview.src = '';
                imagePreview.style.display = 'none';
            }
        }


  async function removeBackground() {
    const fileInput = document.getElementById('upload');
    const canvas = document.getElementById('canvas');
    const ctx = canvas.getContext('2d');
    const downloadBtn = document.getElementById('download');

     if (!document.getElementById('upload').files[0]) {
                output.textContent = 'Please upload an image first.';
                return;
            }

    if (fileInput.files.length > 0) {
      output.textContent = 'Processing...';

       const image = new Image();
        image.src = URL.createObjectURL(fileInput.files[0]);
        image.onload = async () => {
            canvas.width = image.width;
            canvas.height = image.height;
            ctx.drawImage(image, 0, 0);

            // Load the BodyPix model
            const net = await bodyPix.load();

            // Perform segmentation
            const segmentation = await net.segmentPerson(image, {
                flipHorizontal: false,
                internalResolution: 'medium',
                segmentationThreshold: 0.15
            });

            // Prepare and draw the mask
            const coloredPartImage = bodyPix.toMask(segmentation);
            const opacity = 1; // Full opacity
            const maskBlurAmount = 0; // No blur, for sharp edges

            // Draw the mask onto the canvas
            bodyPix.drawMask(
                canvas, image, coloredPartImage, opacity, maskBlurAmount, false
            );

            // Set non-person pixels fully transparent
            const imageData = ctx.getImageData(0, 0, canvas.width, canvas.height);
            const data = imageData.data;
            for (let i = 0; i < data.length; i += 4) {
                if (segmentation.data[i / 4] === 0) { // Check if the pixel is not part of the person
                    data[i + 3] = 0; // Set alpha to 0 (fully transparent)
                }
            }
             output.textContent = 'Completed';
            ctx.putImageData(imageData, 0, 0);

             // Show download button
            downloadBtn.style.display = 'inline';

        };
    }
  }

    function downloadImage() {
    const canvas = document.getElementById('canvas');
    const link = document.createElement('a');
    link.download = 'background-removed.png';
    link.href = canvas.toDataURL("image/png");  // Ensure the canvas is saved as a PNG
    link.click();
}


       </script>
     
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
@include('inculdes.footer')