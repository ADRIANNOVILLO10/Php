<?php
    /*
     * La clase es el molde que va a definir nuestros objetos.
     * En términos de programación, define los datos y la lógica de los objetos.
     * Dentro de la Clase tenemos los atributos y los métodos
     *
     *
     * */


    class Coche
    {
        public $color;
        public $potencia;
        public $marca;

        //METODO CONSTRUCTOR: Una función que es utilizada en el momento que se crea una instancia de un objeto.
        //INSTANCIA DE UN OBJETO: Son las diferentes llamas o creaciones de objetos de una clase.//
        /**
         * @param $color
         * @param $potencia
         * @param $marca
         */
        public function __construct($color , $potencia , $marca)
            //("rojo","1.6cv","Ford")
        {
            $this->color = $color;
            $this->potencia = $potencia;
            $this->marca = $marca;
        }

        /**
         * @return mixed
         */
        public function getColor()
        {
            return $this->color;
        }

        /**
         * @return mixed
         */
        public function getPotencia()
        {
            return $this->potencia;
        }

        /**
         * @param mixed $potencia
         */
        public function setPotencia($potencia) : void
        {
            $this->potencia = $potencia;
        }

        /**
         * @return mixed
         */
        public function getMarca()
        {
            return $this->marca;
        }

        /**
         * @param mixed $marca
         */
        public function setMarca($marca) : void
        {
            $this->marca = $marca;
        }

        /**
         * @param mixed $color
         */
        public function setColor($color)
        {
            $this->color = $color;
        }
        //get: coget - leer -
        //set: poner - asignar
        //Metodos genéricos getter y setter
    }

    $miCoche=new Coche("Rojo", "1.6cv","Ford");
    $cocheAdrian=new Coche("Negro", "1.2cv","Hyundai");
    //Aqui el coche que definimos en el constructor, cambia de valor en la siguiente línea//
    $cocheAdrian->color="Azul";
    var_dump($miCoche);
    echo "<br>";
    var_dump($cocheAdrian);
    //utlizando los getter y setter llamamos los metodos para asignar o recuperar valores
    $cocheAdrian->setColor("Naranja"); //set - asignar //

    echo "<br> El coche de Adrian es ahora color " .$cocheAdrian->getColor();
    echo "<br> Mi coche es de color " .$miCoche->getColor(). " y tiene una potencia de " . $miCoche->getPotencia()." y es de marca " .$miCoche->getMarca();

    //Actividad: Crea una instancia de la clase coche, que llamaremos $CocheAlumno1 que tenga como valores verde, 2.0cv y Audi, luego muestra todos los datos en pantalla.

    $cocheAlumno1 = new coche("Verde", "2.0cv","Audi");
    mostrarDatosCoche($cocheAlumno1);

    //Crear funciones o metodos para asuntos repetitivos

    function mostrarDatosCoche($unCoche){
        echo "<br> Mi coche es de ". $unCoche -> getColor(). " y tiene una potencia de " . $unCoche-> getPotencia(). ". La marca es: " .$unCoche-> getMarca();
    }

    $segundoCoche = new coche("Blanco","3.0cv","BMW");
    mostrarDatosCoche($segundoCoche);

    /* Leemos los datos que se introducen en el formulario*/
    if($_GET["color"]!="" && $_GET["potencia"]!="" && $_GET["marca"]!=""){
     $color=$_GET["color"];
     $potencia=$_GET["potencia"];
     $marca=$_GET["marca"];
     $nuevoCoche=new Coche($color,$potencia,$marca);
     mostrarDatosCoche($nuevoCoche);
}else {
        //header('Location: http://www.exameple.com/');
        header("Location:http://localhost:63342/Mis%20proyectos/CuartoPHP/index.php?mns=Los campos son obligatorios");

    }










    ?>