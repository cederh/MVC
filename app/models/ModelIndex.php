<?php
    class ModelIndex{
        private $db;

        public function __construct(){
            $this->db = new Sql;
        }

        public function get_inventaries(){
            $this->db->query(
                "SELECT * FROM vehiculos"
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
        public function add_consult($consult){

            $this->db->query(
                'INSERT INTO tblcontacto(
                nombre, apellido, correo, telefono, mensaje)
                VALUES(:nombre, :apellido, :correo, :telefono, :mensaje
            )');


            $this->db->bind(':nombre', $consult['nombre'] );
            $this->db->bind(':apellido', $consult['apellido']);
            $this->db->bind(':correo', $consult['correo'] );
            $this->db->bind(':telefono', $consult['telefono'] );
            $this->db->bind(':mensaje', $consult['mensaje']);

            if ($this->db->execute()) {
                return TRUE;
            } else {
                return FALSE;
            }
        }
    }
?>
