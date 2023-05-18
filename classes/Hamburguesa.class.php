<?php

class Ticket implements JsonSerializable{
    private $panes;
    private $carnitas;
    private $especial;
    private $bebida;
    private $tamano;

    function __construct($tipo, $clase, $salsa, $sabor, $vaso){
        $this -> panes = $tipo;
        $this -> carnitas = $clase;
        $this -> especial = $salsa;
        $this -> bebida = $sabor;
        $this -> tamano = $vaso;
    }

    function getHamb(){
        echo "<tr>";
        echo "<td>$this->panes </td>";
        echo "<td>$this->carnitas </td>";
        echo "<td>$this->especial </td>";
        echo "<td>$this->bebida </td>";
        echo "<td>$this->tamano </td>";
        echo "</tr>";
        
    }

    function jsonSerialize(){
        return get_object_vars($this);
    }

}

?>