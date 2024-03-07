
$(document).ready(function() {
    $('.btn-delete').click(function() {
        var deleteButton = (this)
      var id = $(this).data('id');

      Swal.fire({
        title: '¿Estás seguro?',
        text: 'Esta acción no se puede deshacer',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#d33',
        cancelButtonColor: '#3085d6',
        confirmButtonText: 'Eliminar',
        cancelButtonText: 'Cancelar'
      }).then((result) => {
        console.log(result);
        if (result.isConfirmed) {
          $.ajax({
            url: 'delete-user/' + id,
            type: 'get',
            success: function(response) {
              // Aquí puedes mostrar un mensaje de éxito si es necesario
              deleteButton.closest('tr').remove();
              Swal.fire('Eliminado', 'El registro ha sido eliminado', 'success');

              // También puedes actualizar la tabla o realizar cualquier otra acción necesaria
            },
            error: function(xhr, status, error) {
              // Aquí puedes manejar los errores si es necesario
            }
          });
        }
      });
    });
  });


  setTimeout(function(){
    document.getElementById('success').style.display = 'none';
  }, 3000)


  document.getElementById('exampleInputFile').addEventListener('change', function(event) {
    var inputFile = event.target;

    var label = inputFile.nextElementSibling;
    var fileName = inputFile.files[0].name;
    label.innerText = fileName;
    console.log(label.innerText)
});


