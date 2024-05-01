
const navLinks=document.querySelector('.nav-links');
const menuButton=document.querySelector('#menu-button');
//menu
function OnToggleMenu(e){
    if (e.target.name === 'menu-outline'){
       e.target.name='close';
       navLinks.classList.toggle('hidden');
    }else{
        e.target.name='menu-outline';
        navLinks.classList.add('hidden');
    }
}
menuButton.addEventListener('click',OnToggleMenu);
// Inicializar ScrollReveal
ScrollReveal().reveal('#slogan', {
    duration: 1000, // Duración de la animación en milisegundos
    origin: 'left', // Origen de la animación (arriba, abajo, izquierda, derecha)
    distance: '20px', // Distancia desde el origen hasta el elemento
    delay: 0, // Retraso en la animación en milisegundos
    easing: 'cubic-bezier(0.5, 0, 0, 1)', // Función de interpolación para la animación
    // Más opciones de configuración aquí...
});
ScrollReveal().reveal('#cursos', {
    duration: 1000,
    origin: 'bottom',
    distance: '20px', 
    delay: 0,
    easing: 'cubic-bezier(0.5, 0, 0, 1)', 
   
});
ScrollReveal().reveal('#profesores', {
    duration: 1000, 
    origin: 'left',
    distance: '20px',
    delay: 0,
    easing: 'cubic-bezier(0.5, 0, 0, 1)', 
  
});