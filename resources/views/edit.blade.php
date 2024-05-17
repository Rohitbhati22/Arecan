
@include('inculdes.head')
 <link
            type="text/css"
            href="https://uicdn.toast.com/tui-color-picker/v2.2.6/tui-color-picker.css"
            rel="stylesheet"
    />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tui-image-editor/3.15.2/tui-image-editor.css" integrity="sha512-vH/gDT1D+HjKY/fsEcvPMRLn/fB8qA63IAz2b0nV5xUtPKsqm3ya5OtkYMMdYW6MT/SJnqc+Ex4sTFnWuDVQfg==" crossorigin="anonymous" referrerpolicy="no-referrer" />   
    
    @include('inculdes.nav')

  <div class="container" style="margin-top: 70px">
    <center style="margin: 14px">
    <h2>
    📷 Image Editor 📷
    </h2>
    </center>
 <div class="card" style="height: 700px">
       <div id="tui-image-editor-container"></div>
      </div>
</div>
</main>
<script
        type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/fabric.js/4.4.0/fabric.js"
></script>
<script
        type="text/javascript"
        src="https://uicdn.toast.com/tui.code-snippet/v1.5.0/tui-code-snippet.min.js"
></script>
<script
        type="text/javascript"
        src="https://uicdn.toast.com/tui-color-picker/v2.2.6/tui-color-picker.js"
></script>
<script
        type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/FileSaver.js/1.3.3/FileSaver.min.js"
></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tui-image-editor/3.15.2/tui-image-editor.js" integrity="sha512-EGPsMUvRte/xTbSBMN+PxsnMFL/rISID3g+7S4fQf4EzrvGigjfX54evHf3+MWf32qvNLnwii+kTgYgPWzEUtg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!--<script type="text/javascript" src="js/theme/white-theme.js"></script>-->
<!--<script type="text/javascript" src="js/theme/black-theme.js"></script>-->
<script>
    // Image editor
    var imageEditor = new tui.ImageEditor('#tui-image-editor-container', {
        includeUI: {
            loadImage: {
                path: 'img/sampleImage2.png',
                name: 'SampleImage',
            },
            // theme: blackTheme, // or whiteTheme
            initMenu: 'filter',
            menuBarPosition: 'bottom',
        },
        cssMaxWidth: 700,
        cssMaxHeight: 500,
        usageStatistics: false,
    });
    window.onresize = function () {
        imageEditor.ui.resizeEditor();
    };
</script>
     
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
@include('inculdes.footer')