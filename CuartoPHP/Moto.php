    <?php

    class Moto
    {

        public $cc;
        public $marca;
        public $tipo;

        /**
         * @param $cc
         * @param $marca
         * @param $tipo
         */
        public function __construct($cc , $marca , $tipo)
        {
            $this->cc = $cc;
            $this->marca = $marca;
            $this->tipo = $tipo;
        }

        /**
         * @return mixed
         */
        public function getCc()
        {
            return $this->cc;
        }

        /**
         * @param mixed $cc
         */
        public function setCc($cc) : void
        {
            $this->cc = $cc;
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
         * @return mixed
         */
        public function getTipo()
        {
            return $this->tipo;
        }

        /**
         * @param mixed $tipo
         */
        public function setTipo($tipo) : void
        {
            $this->tipo = $tipo;
        }

    }

    $Moto = new Moto("1000cc", "Yamaha", "carretera"  );
    mostrarDatosMoto($Moto);

    function mostrarDatosMoto($Moto){
        echo "<br> Mi moto tiene ". $Moto -> getcc(). " de marca " . $Moto-> getmarca(). ". Y es de tipo " .$Moto-> gettipo();
    }

    if($_GET["cc"]!="" && $_GET["marca"]!="" && $_GET["tipo"]!="") {
        $cc = $_GET["cc"];
        $marca = $_GET["marca"];
        $tipo = $_GET["tipo"];
        $motoFormulario = new Moto($cc , $marca , $tipo);
        mostrarDatosMoto($motoFormulario);


    }else{
        //header('Location: http://www.exameple.com/');
        header("Location:http://localhost:63342/Mis%20proyectos/CuartoPHP/indexM.php?mns=Los campos son obligatorios");

}

    // Code - Generate//
    // Code - Generate - Constructor//

