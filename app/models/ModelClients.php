<?php
class ModelClients{
    private $db;

    public function __construct(){
        $this->db = new Sql;
    }

    public function get_clients(){
        $this->db->query(
            "SELECT * FROM tblcliente"
        );

        return $this->db->registers();
    }

    public function add_client($client){

        $this->db->query(
            'INSERT INTO tblcliente(
            nombre, apellido, genero, correo, telefono, direccion, dui, nit, licencia,fecha_registro,estado_cliente, idusuario, pass)
            VALUES(:nombre, :apellido, :genero,
            :correo, :telefono, :direccion, :dui, :nit, :licencia, :pass, NOW(), 1, 1
        )');


        $this->db->bind(':nombre', $client['nombre'] );
        $this->db->bind(':apellido', $client['apellido']);
        $this->db->bind(':genero', $client['genero'] );
        $this->db->bind(':correo', $client['correo'] );
        $this->db->bind(':telefono', $client['telefono'] );
        $this->db->bind(':direccion', $client['direccion']);
        $this->db->bind(':dui', $client['dui']);
        $this->db->bind(':nit', $client['nit']);
        $this->db->bind(':licencia', $client['licencia']);
        $this->db->bind(':pass', $client['pass']);

        if ($this->db->execute()) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function get_client($id){
        $this->db->query("SELECT idcliente ,nombre, apellido, genero, correo, telefono, direccion, dui, nit, licencia FROM tblcliente WHERE idcliente = :id");
        $this->db->bind(':id', $id);
        return $this->db->register();
    }
}



?>
