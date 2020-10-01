
<script type="text/javascript">
    function readURL1(input) {
  if (input.files && input.files[0]) {

    var reader = new FileReader();

    reader.onload = function(e) {
      $('#image-upload-wrap2').hide();

      $('#file-upload-image2').attr('src', e.target.result);
      $('#file-upload-content2').show();

      $('#image-title2').html(input.files[0].name);
    };

    reader.readAsDataURL(input.files[0]);

  } else {
    removeUpload1();
  }
}

function removeUpload1() {
  $('#file-upload-input2').replaceWith($('#file-upload-input2').clone());
  $('#file-upload-content2').hide();
  $('#image-upload-wrap2').show();
}
$('#image-upload-wrap1').bind('dragover', function () {
        $('#image-upload-wrap1').addClass('image-dropping');
    });
    $('#image-upload-wrap1').bind('dragleave', function () {
        $('#image-upload-wrap1').removeClass('image-dropping');
});

</script>
