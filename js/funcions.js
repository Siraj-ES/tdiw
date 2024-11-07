function confirmaRegistre(){
    alert("registrant estudiant");
    document.getElementById("formDiv").innerHTML = "<p class='important'>T'has registrat amb èxit!</p>";
    console.log("registrant estudiant");
    return false;
}
async function carregaMencions(){
    //completa
    var tagGraus = document.getElementById("grau"); 
    var grauId = tagGraus.value; // Obtener el id del grado seleccionado
    var resposta = await fetch("mencions.php?grau=" + grauId);
    var respostaTxt = await resposta.text();
    document.getElementById("mencio").innerHTML = respostaTxt;
}