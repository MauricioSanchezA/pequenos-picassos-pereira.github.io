//funcion progreso barra scroll
window.addEventListener ('load', () =>{
    const progress = document.getElementById('progress');
    requestAnimationFrame(Unpdate);
})

function Unpdate(){
    progress.style.width = `${((window.scrollY)/ (document.body.scrollHeight - window.innerHeight)*100)}%`;
    requestAnimationFrame(Unpdate);
}

//Funcion que oculta o muestra el Menu
function MostrarOcultarMenu(){
    if(MenuVisible){
        document.getElementById("nav").classList="";
        MenuVisible = false;
    }
    else{
        document.getElementById("nav").classList="responsive";
        MenuVisible = true;
    }
}

//Funcion para cuando se selecciona el menu, no se muestre
function seleccionar(){
    document.getElementById("nav").classList="";
    MenuVisible = false;
}

//Detecto el Scroll para aplicar la animacion en la barra//
window.onscroll = function(){
    efectoHabilidades();
}
