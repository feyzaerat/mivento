
<footer class="footer">
    <p class="footer-text">All rights reserved | <a href="https://feyzaerat.com">F.K.Erat</a><i>  <?php echo date('Y')?></i> © </p>
</footer>

<script type="text/javascript" rel="script" src="assets/js/navbar.js"></script>
<script type="text/javascript" rel="script" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" rel="script" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.96.1/js/materialize.min.js"></script>
<script type="text/javascript" rel="script" src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.0.1/dropzone.js"></script>
<!--Dropzone script-->
<script>
    $(document).ready(function(){

        initFileUploader("#zdrop");
        function initFileUploader(target) {
            var previewNode = document.querySelector("#zdrop-template");
            previewNode.id = "";
            var previewTemplate = previewNode.parentNode.innerHTML;
            previewNode.parentNode.removeChild(previewNode);


            var zdrop = new Dropzone(target, {
                url: 'upload.php',
                maxFiles:1,
                maxFilesize:30,
                previewTemplate: previewTemplate,
                previewsContainer: "#previews",
                clickable: "#upload-label"
            });

            zdrop.on("addedfile", function(file) {
                $('.preview-container').css('visibility', 'visible');
            });

            zdrop.on("totaluploadprogress", function (progress) {
                var progr = document.querySelector(".progress .determinate");
                if (progr === undefined || progr === null)
                    return;

                progr.style.width = progress + "%";
            });

            zdrop.on('dragenter', function () {
                $('.fileuploader').addClass("active");
            });

            zdrop.on('dragleave', function () {
                $('.fileuploader').removeClass("active");
            });

            zdrop.on('drop', function () {
                $('.fileuploader').removeClass("active");
            });

        }

    });
</script>
<!--Dropzone script end-->