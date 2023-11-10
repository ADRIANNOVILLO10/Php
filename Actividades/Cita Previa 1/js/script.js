window.addEventListener("load",()=>{
    //validar datos del formulario
    document.querySelectorAll('.formulario').addEventListener('submit',validarFormulario);
})
function validarFormulario(e) {
    //como evitar q se vaya a lecura.php
    e.preventDefault();                      //Se va a parar y luego ir a lectura
    //alert("Validando...");
    let nombre=document.querySelector('#nombre');
    let email=document.querySelector('#email');
    let telefono=document.querySelector('#telefono');

    if (!nombre.value && !email.value && !telefono.value){
        nombre.style.backgroundColor="pink";

        email.style.backgroundColor="pink";

        telefono.style.backgroundColor="pink";


    return;
    }

    //Otra forma:

    //let input=document.querySelectorAll(".entradas");
    //input.forEach(item=>{
    // if (item.value){
    //   item.style.backgroundColor="pink";
    //  let valida=false;
    //}
    //})
    //if (!valida){
    //  return;
    //}
    this.submit();
}

