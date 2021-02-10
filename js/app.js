
var imagenes = [];
var i = 1;

imagenes[0] = 'Icons/photo_local.png';
imagenes[1] = 'Icons/foto2.jpg';
imagenes[2] = 'Icons/foto3.jpg';

var indice = 0;


const flechaIzq = document.querySelector('#arrow_left');
const flechaDrch = document.querySelector('#arrow_rigth');

document.getElementById("imagen_actual").src = imagenes[0];
document.getElementById("imagen_actual").addEventListener("click", ()=>{
    if(indice==0){
        window.location="dondeEncontrarnos.html";
    }
});

function cambiarImagen(){
    document.getElementById("imagen_actual").src = imagenes[indice];
    document.getElementById("imagen_actual").addEventListener("click", ()=>{
        if(indice==0){
            window.location="dondeEncontrarnos.html";
        }
    });
    
}


flechaIzq.addEventListener('click', ()=> {
    
    indice++;
    if(indice>2) indice = 0;

    cambiarImagen();

});

flechaDrch.addEventListener('click', ()=> {
   
    indice--;
    if(indice<0) indice = 2;

    cambiarImagen();
});