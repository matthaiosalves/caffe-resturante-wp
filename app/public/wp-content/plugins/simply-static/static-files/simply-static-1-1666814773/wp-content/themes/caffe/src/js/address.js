//Seleciona o ID do input
const cep = document.querySelector("#cep")

//Verifica se há algum dado no input, e acrescenta automaticamente as demais informações que faltam.
const showData = (result)=>{
    for(const campo in result){
        if(document.querySelector("#"+campo)){
            document.querySelector("#"+campo).value = result[campo]
        }
    }
}

//Faz com que o código seja ativado depois de tirar o foco do input
cep.addEventListener("blur",(e)=>{
    let search = cep.value.replace("-","")
    const options = {
        method: 'GET',
        mode: 'cors',
        cache: 'default'
    }

    //Faz a requisição com o Fetch api e traz as informações
    fetch(`https://viacep.com.br/ws/${search}/json/`, options)
    .then(response =>{ response.json()
        .then( data => showData(data))
    })
    .catch(e => console.log('Deu Erro: '+ e,message))
})