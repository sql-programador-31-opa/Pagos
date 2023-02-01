<?php
class pagos
{
  private $tasa;
  private $plazo;
  private $monto;
  public function __construct($tasa, $plazo, $monto)
  {
    $this->tasa = $tasa;
    $this->plazo = $plazo;
    $this->monto = $monto;
  }
  public function getFirstName()
  {
    return $this->tasa;
  }
  public function getLastName()
  {
    return $this->plazo;
  }
  public function getAge()
  {
    return $this->plazo;
  }


 public function calCuota(){
 $cuota = (($this->monto*((pow((1+($this->tasa/100)),$this->plazo)*$this->tasa)/(pow((1+($this->tasa/100)),$this->plazo)-1)))/100);
 return round($cuota,0);
 }
 public function Gpagocredito(){
    $cuota = $this->calCuota();
    $abonointeres = round((($this->monto*$this->tasa)/100),0);
    $abonocapital = round(($cuota - $abonointeres)-1);
    $saldon = round($this->monto -$abonocapital,-1);
    $vali= 2;

echo" <!DOCTYPE html>
  <html lang=en>
  <head>
    <meta charset=UTF-8>
    <meta http-equiv=X-UA-Compatible content=IE=edge>
    <meta name=viewport content=width=device-width, initial-scale=1.0>
  
  </head>
  <body>
    
  <h1>Plan de pagos credito Mensual</h1>
  
  <table border=1>
  <tr>
  <td>0</td>
  <td>Cuota</td>
  <td>Abono interes</td>
  <td>Abono Capital</td>
  <td>".$this->monto."</td>
  </tr>

  <tr>
  <td>1</td>
  <td>".$cuota."</td>
  <td>".$abonointeres."</td>
  <td>".$abonocapital."</td>
  <td>".$saldon."</td>
  </tr>";
while ($vali <= $this->plazo) {
  
  $abonointeres = round(($this->tasa * $saldon)/100);
  $abonocapital = round($cuota - $abonointeres,-1);
  $saldon = round($saldon - $abonocapital,-1);
  
 echo"
  <tr>
  <td>$vali</td>
  <td>".$cuota."</td>
  <td>".$abonointeres."</td>
  <td>".$abonocapital."</td>
  <td>".$saldon."</td>
  </tr>";
   $vali = $vali + 1;
}
  echo"</table>

  </body>
  </html>
";


 }

public function Gpagoahorros()
 {
    $abonointeres = round((($this->monto*$this->tasa)/100),0);
    $saldon = $this->monto + $abonointeres;
    $vali= 2;

echo" <!DOCTYPE html>
  <html lang=en>
  <head>
    <meta charset=UTF-8>
    <meta http-equiv=X-UA-Compatible content=IE=edge>
    <meta name=viewport content=width=device-width, initial-scale=1.0>
  
  </head>
  <body>
    
  <h1>Plan de pagos Ahorros Mensual</h1>

  
  
  <table border=1>
  <tr>
  <td>0</td>
  <td>cuota</td>
  <td>Saldo</td>
  <td>Interes</td>
  <td>Saldo final</td>
  </tr>

  <tr>
  <td>1</td>
  <td>".$this->monto."</td>
  <td>".$this->monto."</td>
  <td>".$abonointeres."</td>
  <td>".$saldon."</td>
  </tr>";
while ($vali <= $this->plazo) {
  
  $abonointeres = round(($this->tasa * $saldon)/100);
  $saldo = $saldon + $this->monto;
  $saldon = $saldo  + $abonointeres;
  
 echo"
 <tr>
 <td>$vali</td>
 <td>".$this->monto."</td>
 <td>$saldo</td>
 <td>".$abonointeres."</td>
 <td>".$saldon."</td>
 </tr>";
   $vali = $vali + 1;
}
  echo"</table>

  </body>
  </html>
"; 
 }

}
?>