$('#tablaEstados').DataTable({
    "ajax": "/mostrarEstados",
    "type": "get",
    "order": [[1, "asc"]],
    "responsive": true,
    "fixedHeader": true,
    "columns": [
        { data: 'nombre' },
        {
            "data": 'id',

            "render": function (data) {
                let botones = '';
                botones = `<a class="btn btn-success mt-1" href="/estado_minicipios/${data}">Municipios</a>
                   `;
                return botones;
               
            }
        },
    ],
    "language": {
        "lengthMenu": "Mostrar _MENU_ registros por pagina",
        "zeroRecords": "No se encontraron registros",
        "info": "Mostrando pagina _PAGE_ de _PAGES_",
        "infoEmpty": "Registros no disponibles",
        "infoFiltered": "(Mostrando  _MAX_ del total de registros)",
        "search": "Buscar:",
        "paginate": {
            "first": "Primero",
            "last": "Ultimo",
            "next": "Siguiente",
            "previous": "Anterior"
        },

    },
});


const cargarEstados=()=>{

    $.ajax({
        type: "get",
        url: "/cargarEstados",
        success: function (response) {
            Swal.fire({
              title: "Accion realizada corectamente",
              text: "Se ha actualizado exitosamente",
              icon: "success",
              confirmButtonText: "Cerrar",
            }).then(() => {
              location.reload();
            });
        },
         error: function (errores) {
          Swal.fire({
            title: 'Error en esta accion',
            icon: "error",
            confirmButtonText: "Cerrar",
          });
        }
    });
};