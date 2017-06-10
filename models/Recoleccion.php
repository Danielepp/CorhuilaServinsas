<?php
{
    class Recoleccion
    {
        private $id_m,$fecha,$vehiculo,$placa,$direccion,$barrio;
        public function __construct($fecha,$vehiculo,$placa,$direccion,$barrio)
        {
            $this-> fecha = $fecha;
            $this-> vehiculo = $vehiculo;
            $this-> placa = $placa;
            $this-> direccion = $direccion;
             $this-> barrio = $barrio;
           

        }

        public function __construct2($id_m)
        {
            $this-> id_m = $id_m;
        }

         public function Registrar()
        {
             $this->Conexion = ConexionDB();
             $sql = "insert into recoleccion values (null,'$this->fecha','$this->vehiculo','$this->placa','$this->direccion','$this->barrio')";
             $resultado = $this->Conexion->query($sql);
             $this->Conexion->close();
             return $resultado;
         }

        public function Eliminar()
        {
             $this->Conexion = ConexionDB();
             $sql = "delete from recoleccion where id = $this->id_cp";
             $resultado = $this->Conexion->query($sql);
             $this->Conexion->close();
             return $resultado;
         }

         public function Consultar()
         {
             $this->Conexion = ConexionDB();
             $sql = "select * from recoleccion";
             $resultado = $this->Conexion->query($sql);
             $this->Conexion->close();
             return $resultado;
         }

         public function ConsultarId($id)
         {
             $this->Conexion = ConexionDB();
             $sql = "select * from recoleccion where id = $id";
             $resultado = $this->Conexion->query($sql);
             $this->Conexion->close();
             return $resultado;
         }

         public function Actualizar()
         {
             $this->Conexion = ConexionDB();
             $sql = "update recoleccion set fecha='$fecha',vehiculo='$vehiculo',placa='$placa',
             direccion='$direccion',barrio='$barrio' where id=$id_m";
             $resultado = $this->Conexion->query($sql);
             $this->Conexion->close();
             return $resultado;
         }
    }
}