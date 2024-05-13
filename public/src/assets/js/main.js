
const navLinks=document.querySelector('.nav-links');
const menuButton=document.querySelector('#menu-button');
const metodoContacto=document.querySelectorAll('input[name="contacto[contacto]"]');
metodoContacto.forEach(input=>input.addEventListener('click',mostrarMetodosContacto));

function mostrarMetodosContacto(e){
    const contactoDiv=document.querySelector('#contacto');
    if(e.target.value === 'telefono'){
        contactoDiv.innerHTML=`
        <p>Por favor introduzca la fecha y hora que desee ser contactado</p>
        <label for="fecha" class="block mt-2">Fecha:</label>
        <input type="date" id="fecha" class="w-full border border-gray-300 rounded-md p-2 mt-1" name="contacto[fecha]" required>
        <label for="hora" class="block mt-2">Hora:</label>
        <input type="time"id="hora" class="w-full border border-gray-300 rounded-md p-2 mt-1" name="contacto[hora]" required >
        `;
    }else{
        contactoDiv.innerHTML=`
        <label for="email" class="block mt-2">Por favor escriba su email:</label>
        <input type="email" id="email" class="w-full border border-gray-300 rounded-md p-2 mt-1" name="contacto[email]">
        `;
       
    }
    
}
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
