const validarFormularioLogin = (dataForm) => {

  const {
    correo,
    password,
  } = dataForm;

  let responses = [];

  (!exprRegEmail.test(correo.trim())) && (responses.push(false));
  (password === null || password.trim() === "") && (responses.push(false));

  return (responses.includes(false)) ? false : true;

}

