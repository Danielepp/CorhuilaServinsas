<?php
{
    class Disposicion
    {
        private $id_m,$fecha,$titulo,$observaciones;
        public function __construct($fecha,$titulo,$observaciones)
        {
            $this-> fecha = $fecha;
            $this-> titulo = $titulo;
            $this-> observaciones = $observaciones;
         

        }

        public function __construct2($id_m)
        {
            $this-> id_m = $id_m;
        }

         public function Registrar()
        {
             $this->Conexion = ConexionDB();
             $sql = "insert into disposicion values (null,'$this->fecha','$this->titulo','$this->observaciones')";
             $resultado = $this->Conexion->query($sql);
             $this->Conexion->close();
             return $resultado;
         }

        public function Eliminar()
        {
             $this->Conexion = ConexionDB();
             $sql = "delete from disposicion where id = $this->id_cp";
             $resultado = $this->Conexion->query($sql);
             $this->Conexion->close();
             return $resultado;
         }

         public function Consultar()
         {
             $this->Conexion = ConexionDB();
             $sql = "select * from disposicion";
             $resultado = $this->Conexion->query($sql);
             $this->Conexion->close();
             return $resultado;
         }

         public function ConsultarId($id)
         {
             $this->Conexion = ConexionDB();
             $sql = "select * from disposicion where id = $id";
             $resultado = $this->Conexion->query($sql);
             $this->Conexion->close();
             return $resultado;
         }

         public function Actualizar()
         {
             $this->Conexion = ConexionDB();
             $sql = "update disposicion set fecha='$fecha',titulo='$titulo',observaciones='$observaciones' where id=$id_m";
             $resultado = $this->Conexion->query($sql);
             $this->Conexion->close();
             return $resultado;
         }
    }
}