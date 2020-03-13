$(document).ready(function(){
    loadContent();
});


/*funcion para cargar */
function loadContent(){
    loadEvents();
    loadTableUsuarios();
    loadComboboxes();
}
/***************************** caragar data table  *************************************/
var columns = [
    { data: 'id' },
    { data: 'nombre' },
    { data: 'apellido'},
    { data: 'usuario'},
    { data: 'email' },
    { data: 'estado' },
    { data: 'fechaCreacion' },
    { data: 'id', render: function(data){
        return `<td><center>
        <a href=".php?id=` + data + `"  
        data-toggle="tooltip" title="Actualizar" class="btn btn-sm btn-info"> <i class="far fa-edit"></i></a>
        <a href=".php?id=` + data + `"  
        data-toggle="tooltip" title="Eliminar" class="btn btn-sm btn-info"> <i class="fas fa-trash-alt"></i></a>
        </center></td>`;
    }}      

]

function loadComboboxes(){
    loadSelectRol();
    loadSelectEstado();
   // loadSelectEmpleado();
    loadSelectGenero();
    loadSelectDepartamento();
    loadSelectEstadoCivil();
}


/********************************funcion para traer usuario por ajax ******************************/
function loadTableUsuarios(){

    var domContent = '<"DTextraToolbar">rftip';
    
    let tableUsuarios = $('#tableUsuarios').DataTable( {
       "language": jsonEsp,
       "ajax":{
            url :"../../api/usuario/getAll", // json datasource
            type: "get",  // method  , by default get
            scriptCharset: 'utf-8',
	        dataSrc: '',
			dataType: 'json',
			contentType: 'application/json; charset=utf-8',
            error: function(){  // error handling
                alertaFallo("Error al obtener los usuarios");
            }
       },
       "columns" : columns,
       "autoWidth": false,
       dom: domContent,
       'columnDefs': [
        {
            targets: [0, 6],
            width: '5%'
        }
       ],
      
    } );
}


function saveUsuario(modo){
    let usuario = getUsuario();
    let url = '../../api/usuario/' + ( (modo == 'INS') ? "insert" : "update");

    console.log(usuario);
    console.log(url)
     $.ajax({
         url: url,
         type: "post",
         data: usuario,
         dataType: "json",
         success: function(response){
            if(response.hasOwnProperty("estatus")){
                if(response.estatus == 200){
                   alertaExito(response.mensaje);
                } else {
                    alertaFallo(response.mensaje);
                }

            } else {
                alertaFallo("Error al realizar petición");
            }
         }
    });


}


function saveEmpleado(modo){
    let empleado = getEmpleado();
    let url = '../../api/empleado/' + ( (modo == 'INS') ? "insert" : "update");

    console.log(empleado);
    console.log(url)
     $.ajax({
         url: url,
         type: "post",
         data: empleado,
         dataType: "json",
         success: function(response){
            if(response.hasOwnProperty("estatus")){
                if(response.estatus == 200){
                   alertaExito(response.mensaje);
                } else {
                    alertaFallo(response.mensaje);
                }

            } else {
                alertaFallo("Error al realizar petición");
            }
         }
    });


}



/*function getEmpleado(){
    return {
        primerNombre: $("#primerNombre").val(),

        segundoNombre: $("#segundoNombre").val(),
        primerApellido: $("#primerApellido").val(),
        segundoApellido: $("#segundoApellido").val(),
        identidad: $("#identidad").val(),
        idGenero: $("#selectGenero").val(),
        fechaNacimiento: $("#fechaNacimiento").val(),
        idEstadoCivil: $("#selectEstadoCivil").val(),
        telefono: $("#telefono").val(),
        idMunicipio: $("#selectMunicipio").val(),
        correoEmpleado: $("#correoEmpleado").val(),
        direccion: $("#direccion").val(),
    }
}*/


/*

function getUsuario(){
    return {
       

        idUsuario: $("#idUsuario").val(),
        idRol: $("#selectRol").val(),
        idRol: $("#nombre").val(),
        idRol: $("#apellido").val(),
        idRol: $("#telefono").val(),
        nombreUsuario: $("#nombreUsuario").val(),
        password: $("#password").val(),
        passwordConfirmacion: $("#passwordConfirmacion").val(),
        correo: $("#correo").val(),
        idEstado: $("#selectEstado").val(),
        fechaVencimiento: $("#fechaVencimiento").val()
    }
}*/

function loadEvents(){
    $("#btnRegistrar").on("click", function(){
        saveUsuario('INS');
    });

    $("#btnRegistrarEmpleado").on("click", function(){
        saveEmpleado('INS');
    });

    $("#selectDepartamento").on("change", function(){
        loadSelectMunicipio($("#selectDepartamento").val());
    });
}


function loadSelectRol(){
    let url = "../../api/rol/getAll"
    $.ajax({
        url: url,
        type: "get",
        dataType: "json",
        success: function(response){
            response.forEach(rol => {
                $("#selectRol").append('<option value="'+ rol.idRol +'">'+ rol.descripcion +'</option>')
            });
        },
        error: function(){
            alertaFallo("Error al obtener los roles de usuario")
        }
    });
}

function loadSelectEstado(){
    let url = "../../api/estado/getAll"
    $.ajax({
        url: url,
        type: "get",
        dataType: "json",
        success: function(response){
            response.forEach(estado => {
                $("#selectEstado").append('<option value="'+ estado.idEstado +'">'+ estado.estado +'</option>')
            });
        },
        error: function(){
            alertaFallo("Error al obtener los estados de usuario")
        }
    });
}



function loadSelectGenero(){
    $("#selectGenero").html('<option value="0">Seleccione Género</option>')
    let url = "../../api/genero/getAll"
    $.ajax({
        url: url,
        type: "get",
        dataType: "json",
        success: function(response){
            response.forEach(genero => {
                $("#selectGenero").append('<option value="'+ genero.idGenero +'">'+ genero.descripcionGenero +'</option>')
            });
        },
        error: function(){
            alertaFallo("Error al obtener los Generos")
        }
    });
}

function loadSelectDepartamento(){
    $("#selectDepartamento").html('<option value="0">Seleccione Departamento</option>')
    let url = "../../api/departamento/getAll"
    $.ajax({
        url: url,
        type: "get",
        dataType: "json",
        success: function(response){
            response.forEach(departamento => {
                $("#selectDepartamento").append('<option value="'+ departamento.idDepartamento +'">'+ departamento.departamento +'</option>')
            });
        },
        error: function(){
            alertaFallo("Error al obtener los Departamentos")
        }
    });
}

function loadSelectMunicipio(idDepartamento){
    let url = "../../api/municipio/getbyiddepartamento/" + idDepartamento;
    $("#selectMunicipio").html("");
    $("#selectMunicipio").html('<option value="0">Seleccione Municipio</option>')
    $.ajax({
        url: url,
        type: "get",
        dataType: "json",
        success: function(response){
            response.forEach(municipio => {
                $("#selectMunicipio").append('<option value="'+ municipio.idMunicipio +'">'+ municipio.municipio +'</option>')
            });
        },
        error: function(){
            alertaFallo("Error al obtener los Municipios")
        }
    });
}

function loadSelectEstadoCivil(){
    $("#selectEstadoCivil").html('<option value="0">Seleccione Estado civil</option>')
    let url = "../../api/estadocivil/getAll"
    $.ajax({
        url: url,
        type: "get",
        dataType: "json",
        success: function(response){
            response.forEach(estadoCivil => {
                $("#selectEstadoCivil").append('<option value="'+ estadoCivil.idEstadoCivil +'">'+ estadoCivil.descripcionEstadoCivil +'</option>')
            });
        },
        error: function(){
            alertaFallo("Error al obtener los Generos")
        }
    });
}





// function loadSelectEmpleado(){
//     let url = "../../api/empleado/getAll";
//     $.ajax({
//         url: url,
//         type: "get",
//         dataType: "json",
//         success: function(response){
//             response.forEach(empleado => {
//                 $("#selectEmpleado").append(`<option value="${empleado.idEmpleado}">${empleado.primerNombre} ${empleado.primerApellido}</option>`)
//             });
//         },
//         error: function(){
//             alertaFallo("Error al obtener los estados de usuario")
//         }
//     });

// }

function alertaFallo(mensaje){
    Swal.fire({
        icon: 'error',
        title: 'Error',
        text: mensaje
      })
}

function alertaExito(mensaje){
    Swal.fire({
        icon: 'error',
        title: 'Éxito',
        text: mensaje
      })
}


var jsonEsp = {
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

}






