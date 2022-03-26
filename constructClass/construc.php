<?php
class CabeceraPagina {
  private $titulo;
  private $ubicacion;
  public function __construct($titu,$ubic)
  {
    $this->titulo=$titu;
    $this->ubicacion=$ubic;
  }
  public function mostrar()
  {
    echo '<div style="font-size:40px;text-align:'.$this->ubicacion.'">';
    echo $this->titulo;
    echo '</div>';
  }
}

$cabecera=new CabeceraPagina('Intranet Corporativo','center');
$cabecera->mostrar();
?>
</body>
</html>