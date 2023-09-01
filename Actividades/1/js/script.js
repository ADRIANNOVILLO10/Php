//Mostrar los números de dos en dos del 0 al 1000
let valor1=0;
let valor2= 0;
for(i=0; i<=1000; i+=2){
    valor1=valor1+i+ "<br>";
    document.querySelector("#resultado").innerHTML= valor1;
}

//Mostrar los números del 1000 al 0
for(i=1000; i>=0; i-=2){
    valor2=valor2+i+ "<br>";
    document.querySelector("#resultado2").innerHTML= valor2;
}