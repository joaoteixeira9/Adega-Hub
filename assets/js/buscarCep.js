document.querySelector(".endereco").style.display = "none";
function BuscarCep(cep){
    let url = `https://cep.awesomeapi.com.br/json/${cep}`;
    fetch(url)
    .then (resultado => {
        return resultado.json();
    })
    .then (dados => {
        return MostrarDados(dados.address, dados.district, dados.city, dados.state);
    })
}

function MostrarDados(rua, bairro, cidade, estado){
    document.getElementById("rua").value = rua;
    document.getElementById("bairro").value = bairro;
    document.getElementById("cidade").value = cidade;
    document.getElementById("estado").value = estado;
}

const botaoCep = document.getElementById("botaoCep");
botaoCep.addEventListener("click", function(event){
    event.preventDefault();
    let cep = document.getElementById("cep").value;
    BuscarCep(cep);
    document.querySelector(".endereco").style.display = "block";
    document.querySelector(".info-cep").style.display = "none";
})

const mostrarBotaoCep = document.getElementById("mostrarBotaoCep");
mostrarBotaoCep.addEventListener("click", function(event){
    event.preventDefault();
    document.querySelector(".endereco").style.display = "none";
    document.querySelector(".info-cep").style.display = "block";
})