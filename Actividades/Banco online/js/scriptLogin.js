window.addEventListener("load",()=>{
        validarVacio();

});
/*Valida que no se envie vacio los cargos*/
function validarVacio(){
    let form=document.querySelectorAll(".login");
    Array.from(form).forEach(form=>{
        form.addEventListener('submit',event=>{
            if (!form.checkValidity()) {
                event.preventDefault();
                event.stopPropagation();
            }
        })
    });
}






