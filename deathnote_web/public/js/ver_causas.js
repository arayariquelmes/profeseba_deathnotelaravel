//Todo el codigo javascript de la vista ver_causas.blade.php

console.log("Hola mundo desde ver causas");
//Cuando se cargue la pagina completa
document.addEventListener("DOMContentLoaded", async()=>{
    let causas = await obtenerCausas();
    console.log(causas);
})