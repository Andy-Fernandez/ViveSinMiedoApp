<?php
class Cargo{
    private $id;
    private $cargo;
    public function __construct($id,$cargo){
        $this->setId($id);
        $this->setCargo($cargo);
    }
    public function grabarCargo() {
        include("conexion.php");
        $db = new Conexion();
        $sql = $db->query("INSERT INTO cargo1 (cargo) VALUES ('$this->cargo')");
        return $sql;
    }

    public function lista() {
        include("conexion.php");
        $db = new Conexion();
        $sql = $db->query("SELECT * FROM cargo1");
        return $sql;
    }
    public function setId($id) {
        $this->id = $id;
    }

    public function getId() {
        return $this->id;
    }

    public function setCargo($cargo) {
        $this->cargo = $cargo;
    }

    public function getCargo() {
        return $this->cargo;
    }
}
?>
}