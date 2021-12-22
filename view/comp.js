
let zonePlusMoins = document.getElementsByClassName("boutonPlusMoins"); 

for(i = 0 ; i < zonePlusMoins.length ; i++){

    zonePlusMoins[i].children[0].value = 1 ; 
    let tmp = zonePlusMoins[i].children[1];
    zonePlusMoins[i].children[0].addEventListener("click" , function(){

        var nombre = parseInt(tmp.value , 10); 
        console.log(nombre); 
        if(isNaN(nombre)){
            tmp.value = 0; 
        }else{
            tmp.value++; 
        }
    });
    
    zonePlusMoins[i].children[2].addEventListener("click" , function(){
        var nombre = parseInt(tmp.value , 10); 
        if(isNaN(tmp.value)){
            tmp.value = 0
        }else if(tmp.value > 0){
            tmp.value -= 1;
        }
    });
}


