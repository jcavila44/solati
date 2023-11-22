
const onClickIngresar = () => {

  const correo = document.getElementById("correo").value;
  const password = document.getElementById("password").value;
  const dataForm = { correo, password };

  if (validarFormularioLogin(dataForm)) {

    $.ajax({
      async: true,
      url: base_url + 'Login/loginUser',
      type: "POST",
      data: {
        correo,
        password
      },
      dataType: "json",
      beforeSend: () => { overlay(true) },
      success: (objData) => {
        if (objData.status === "success") {
          location.reload();
        } else {
          message(objData.msg, objData.status);
        }
      },
      error: (error) => {
        message("Ocurrió un error en el sistema, por favor revisar los datos enviados", "error");
      }
    });

  } else {
    alertaFormularioInvalido();
  }

}


const onClickViewPassword = (idElement, idIcon) => {
  const tipo = document.getElementById(idElement);
  const Icon = document.getElementById(idIcon);

  if (tipo.type == "password") {
    Icon.setAttribute('class', 'icon-magnifier-remove');
    tipo.type = "text";

  } else {
    Icon.setAttribute('class', 'icon-magnifier-add');
    tipo.type = "password";
  }

}


