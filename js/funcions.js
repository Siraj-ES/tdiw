function confirmaRegistre(){
    //completa
   
    const formulari = document.getElementById("formulari")

    formulari.addEventListener('submit', function(event){
        event.preventDefault();
        alert("registrant estudiant");
        console.log("registrant estudiant")
        const formDiv = document.getElementById("formDiv")   
        formDiv.innerHTML = "<p class='important'>T'has registrat amb èxit!</p>"
     });
     
    

}

document.addEventListener('DOMContentLoaded', confirmaRegistre);