<script type="text/javascript">
    function readURL(input) {
  if (input.files && input.files[0]) {

    var reader = new FileReader();

    reader.onload = function(e) {
      $('.image-upload-wrapnews').hide();

      $('.file-upload-imagenews').attr('src', e.target.result);
      $('.file-upload-contentnews').show();

      $('.image-title').html(input.files[0].name);
    };

    reader.readAsDataURL(input.files[0]);

  } else {
    removeUpload();
  }
}

function removeUpload() {
  $('.file-upload-inputnews').replaceWith($('.file-upload-inputnews').clone());
  $('.file-upload-contentnews').hide();
  $('.image-upload-wrapnews').show();
}
$('.image-upload-wrapnews').bind('dragover', function () {
        $('.image-upload-wrapnews').addClass('image-dropping');
    });
    $('.image-upload-wrapnews').bind('dragleave', function () {
        $('.image-upload-wrapnews').removeClass('image-dropping');
});

</script>



<script type="text/javascript">

    $(document).ready(function(){
        fetch_customer_data();
          function fetch_customer_data(query = '')
          {
            $.ajax({
                url:"{{ route('newsletter.action') }}",
                method:'GET',
                data:{query:query},
                dataType:'json',
                success:function(data)
                { 
                  $('tbody').html(data.table_data);
                //$('#total_records').text(data.total_data);
                }
            })
         }
        $(document).on('keyup', '#searchnews', function(){
          var query = $(this).val();
          fetch_customer_data(query);
        });
   });
</script>
