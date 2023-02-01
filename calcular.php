<?php
require_once "pagos.php";

$plan = new pagos($_POST['tasa'],$_POST['plazo'],$_POST['monto']);

if ($_POST['plan'] == 1) {
  $plan->Gpagoahorros();
}else{
    $plan->Gpagocredito();
}



?>