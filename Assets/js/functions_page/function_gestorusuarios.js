$(document).ready(function () {
  setTimeout(() => { getAllUsers() }, 300);
  tableGestorUsuarios = startTable("tableGestorUsuarios");

});



/*
    @descripcion    = getAllUsers() es un llamado ajax que permite mostrar todos los usuarios ingresado al sistema
    @return         = array de los usuarios del sistema
*/

const getAllUsers = () => {

  $.ajax({
    url: base_url + 'gestorusuarios/obtenerUsuariosController',
    type: "GET",
    data: {},
    dataType: "json",
    beforeSend: () => { overlay(true) },
    success: (objData) => {
      overlay(false);

      if (objData.status === "success") {

        let htmlTable = `
            <thead>
              <tr>
                <th>#</th>
                <th>Nombres y apellido</th>
                <th>Cédula</th>
                <th>Correo</th>
                <th>Rol</th>
                <th>Acciones</th>
              </tr>
            </thead>
            <tbody>
        `;

        objData.data.forEach((element, key) => {

          let jsonInfo = JSON.stringify(element);
          let estadoUsuario = (element.estado_descripcion === 'usuario inactivo') ? 0 : 1; // 1 activo, 0 inactivo
          const btnActualizarOEliminar = (estadoUsuario === 1) ?
            `<button onclick='onClickEliminarUsuario(${jsonInfo})' class="dropdown-item" type="button">Desactivar <i class="fa fa-lock fa-lg ml-2 text-dark"></i> </button>`
            :
            `<button onclick='onClickHabilitarUsuario(${jsonInfo})' class="dropdown-item" type="button">Activar <i class="fa fa-unlock fa-lg ml-2 text-dark"></i> </button>`
            ;


          htmlTable += `
            <tr>
              <td> ${key} </td>
              <td> ${wordToCamelCase(element.usu_nombre)} </td>
              <td> ${element.usu_cedula} </td>
              <td> ${element.usu_correo.toLowerCase()} </td>
              <td class="text-center"> <span class="badge pr-4 pl-4 pt-2 pb-2 badge-${(estadoUsuario == 1) ? 'success' : 'secondary'}">${(estadoUsuario == 1) ? 'Activo' : 'Inactivo'}</span> </td>
              <td> 
                <div class="dropdown">
                  <button class="btn btn-outline-primary dropdown-toggle w-100" id="dropdownMenu2" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Gestionar</button>
                  <div class="dropdown-menu w-100" aria-labelledby="dropdownMenu2" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 34px, 0px); top: 0px; left: 0px; will-change: transform;">
                    <button onclick='onClickActualizarUsuario(${jsonInfo})' class="dropdown-item" type="button">Actualizar <i class="icon-settings fa-lg ml-2 text-dark"></i> </button>
                    ${btnActualizarOEliminar}
                  </div>
                </div>
              </td>
            </tr>
          `;
        });
        htmlTable += `</tbody>`;

        if (tableGestorUsuarios) { tableGestorUsuarios.destroy() }

        document.getElementById('tableGestorUsuarios').innerHTML = htmlTable;
        tableGestorUsuarios = startTable("tableGestorUsuarios");


      } else {
        message("Ocurrió un error inesperado, por favor vuelva a intentar", "warning");
      }

    },
    error: () => {
      message("Ocurrió un error en el consumo, por favor revisar los datos enviados", "error");
    }
  });


}



const onClickAgregarUsuarios = () => {}
const onClickEliminarUsuario = () => {}
const onClickHabilitarUsuario = () => {}