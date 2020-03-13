
var tableHistorial = null;

$(document).ready(function() {
   loadContent();
} );


function loadContent(){
   // loadTableHistorial();
   loadDatetimePicker();

}


function loadDatetimePicker(){
    $('#fechaHoraHamiltton').datetimepicker();
    
}

function loadPaciente(id){
    getPaciente(id).done(function(response){
        $("#nombreCompleto").val(response.nombrePac + ' ' + response.apellidoPac);
        //$("#lugarNacimiento").val(response.)
        //$("#fechaNacimiento")
        $("#fechaIngreso").val(response.fechaIng);
        $("#sexo").val(response.genero);
        $("#clinica").val(response.clinica.nombreClinica);
        $("#edad").val(response.edad);
        $("#expediente").val(response.expediente);
        // $("#")
        // $("#")
        // $("#")
        // $("#")
        // $("#")
        // $("#")
        // $("#")
        // $("#")



        $("#pacienteModal").modal();



    });

}

function getPaciente(id){
    return $.ajax({
        url:"../../api/paciente/" + id,
        type:"get",
        dataType:"json"
    });
}

//////////CAMBIAR//////


var columns = [
    { data: 'idPaciente' },
    { data: 'nombrePac' },
    { data: 'apellidoPac' },
    { data: 'codigoPaciente' },
    { data: 'telefonoPac' },
    { data: 'edad' },
    { data: 'idPaciente', render: function(data){
        return `<td><center>
        <a href="historial-psicologia/` + data + `"  
        data-toggle="tooltip" title="Ir a paciente" class="btn btn-sm btn-info"> <i class="fas fa-sign-in-alt"></i> </a>
        </center></td>`;
    }}    
    

]

function loadTableHistorial(){
    let tableHistorial = $('#lookup').DataTable( {
        
        "language": {
               "sProcessing":     "Procesando...",
               "sLengthMenu":     "Mostrar _MENU_ registros",
               "sZeroRecords":    "No se encontraron resultados",
               "sEmptyTable":     "Ningún dato disponible en esta tabla",
               "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
               "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
               "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
               "sInfoPostFix":    "",
               "sSearch":         "Buscar:",
               "sUrl":            "",
               "sInfoThousands":  ",",
               "sLoadingRecords": "Cargando...",
               "oPaginate": {
                   "sFirst":    "Primero",
                   "sLast":     "Último",
                   "sNext":     "Siguiente",
                   "sPrevious": "Anterior"
               },
               "oAria": {
                   "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
                   "sSortDescending": ": Activar para ordenar la columna de manera descendente"
               }
   
   },
       "ajax":{
            url :"../../api/paciente/getAll", // json datasource
            type: "get",  // method  , by default get
            scriptCharset: 'utf-8',
	        dataSrc: '',
			dataType: 'json',
			contentType: 'application/json; charset=utf-8',
            error: function(){  // error handling
                $(".lookup-error").html("");
                $("#lookup").append('<tbody class="employee-grid-error"><tr><th colspan="3">No data found in the server</th></tr></tbody>');
                $("#lookup_processing").css("display","none");
                
            }
       },
       "columns" : columns,
       "autoWidth": false,
       'columnDefs': [
        {
            targets: [0, 6],
            width: '5%'
        }
       ]
       } );
}