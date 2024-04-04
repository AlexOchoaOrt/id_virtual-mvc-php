$(document).ready(function() {
  var $uploadCrop = $('#crop-container').croppie({
    enableExif: true,
    viewport: {
      width: 200,
      height: 200,
      type: 'circle' // Cambiar a 'circle' para recortar en forma circular
    },
    boundary: {
      width: 250,
      height: 250
    },
    // Agregar la opción borderRadius para recortar en forma circular
    borderRadius: {
      width: 200,
      height: 200
    }
  });

  $('#upload').on('change', function () {
    var reader = new FileReader();
    reader.onload = function (e) {
      $uploadCrop.croppie('bind', {
        url: e.target.result
      });
    };
    reader.readAsDataURL(this.files[0]);
  });

  $('#crop-btn').on('click', function() {
    $uploadCrop.croppie('result', {
      type: 'canvas',
      size: 'viewport'
    }).then(function (imgData) {
      $.ajax({
        url: '',
        type: 'POST',
        data: {
          image: imgData
        },
        success: function(response) {
          alert('Imagen cargada correctamente');
        }
      });
    });
  });
});
