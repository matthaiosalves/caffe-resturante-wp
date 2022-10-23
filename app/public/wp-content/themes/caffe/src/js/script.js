//LISTA TODAS AS CIDADES DO OBJETO NO OPTION
StartCities = () => {
  var optionCities = document.getElementById('inputState');
  cityJson.map((val) => {
      optionCities.innerHTML += `<option value="${val.value}">${val.nome}</option>`;
  })
}

//INICIALIZA A FUNÇÃO
StartCities();