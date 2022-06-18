<?php

    class Conecta{

        protected function ConectaDB(){

            return mysqli_connect("localhost","root","","Latienda63");

        }

    }

?>