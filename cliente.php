
<?php 

require_once ("persona.php");
require_once ("pedido.php");

class Cliente extends Persona {
    private $pedidos;

    public function __construct ($nombre, $edad) {
        parent::__construct ($nombre, $edad);
        $pedidos = array();
    }

    /**
     * Get the value of pedidos
     */ 
    public function getPedidos()
    {
        return $this->pedidos;
    }

    /**
     * Set the value of pedidos
     *
     * @return  self
     */ 
    public function setPedidos($pedidos)
    {
        $this->pedidos = $pedidos;

        return $this;
    }

    public function altaEmpleado ($empleado) {
        $this->empleados[] = $empleado;
    }

    public function FechaPedido ($pedido){
        $this->pedidos[] = $pedido;
    }


    public function getImporteTotal () {
        $suma = 0;
        for ($i=0; $i < count ($this->pedidos); $i++) { 
            $suma = $suma + count ($this->pedidos[$i]->getImporte());
        }
        return ($suma/count(($this->pedidos[$i]->getImporte();
    }
}