
// summernote
$(document).ready(function() {
 $('#summernote').summernote({

  toolbar: [
    // [groupName, [list of button]]
    ['style', ['bold', 'italic', 'underline', 'clear']],
    ['font', ['strikethrough', 'superscript', 'subscript']],
    ['fontsize', ['fontsize']],
    
    ],
    height:300,
    focus:true
});
});

//imageupload preview

function readURL(input) {

      if (input.files && input.files[0]) {

        var reader = new FileReader();



        reader.onload = function (e) {

          $('#book-cover-design').attr('src', e.target.result);

        }

        reader.readAsDataURL(input.files[0]);

      }

    }

    $("#book-cover").change(function(){

      readURL(this);

    });