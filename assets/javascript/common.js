
function bacaGambar(input) {
   if (input.files && input.files[0]) {
      var reader = new FileReader();

      reader.onload = function (e) {
          $('#frm_preview').attr('src', e.target.result);
      }

      reader.readAsDataURL(input.files[0]);
   }
}

$(document).ready(function() {
  $("#frm_img").change(function(){
   bacaGambar(this);
 });
})(window.jQuery);
