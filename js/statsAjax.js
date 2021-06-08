function get_statistiques(data){
    
    let slotIndicateurs = document.getElementsByClassName("indicateurs");
    let slotValue = document.getElementsByClassName("value");
    let slotVaration = document.getElementsByClassName("variation");

    for(let i = 0; i < data.length; i++){
        slotIndicateurs[i].innerText = data[i].Indicateur;
        slotValue[i].innerText = data[i].Valeur;
        slotVaration[i].innerText = data[i].Variation;
    }
};


let httpRequest = new XMLHttpRequest();
httpRequest.onreadystatechange = function() {
    if (httpRequest.readyState === XMLHttpRequest.DONE){
        if(httpRequest.status === 200) {
            let data = JSON.parse(httpRequest.responseText); 
            get_statistiques(data);
        } 
        else{
            slotIndicateurs.innerText = "Nous n'avons pas réussi à récupérer les chiffres";
        }
    }
    else {
        slotIndicateurs.innerText = "Requête en cours";
    }
};
    
httpRequest.open('GET', 'statistiques.json', true);
httpRequest.send();