<?php
session_start();
include('libreria/includes.php');
include('libreria/componentes/header.php');
if(isset($_SESSION['user'])){

 
  
}
else {
    header("Location:index.php");
}


?>


<div class="col-lg-8 grid-margin stretch-card">
                    <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Historial de Facturas</h4>
                        <div>
                        <a  href="pagoconsulta.php" class="btn btn-primary btn-fw">Nueva consulta</a>
                        </div><br>
                        
                        <table class="table table-dark">
                        <thead>
                            <tr>
                                <th> # </th>
                                <th> Cedula</th>
                                <th>Nombre</th>
                                <th> Apellido</th>
                               
                                <th> Costo</th>
                                <th>Estado</th>
                                <th></th>
                           
                            </tr>
                            
                        </thead>
                        <tbody>
                            <?php
                            
                            $con=conexion::instancia();
                            $sql ="select * from factura";
                          $result=  mysqli_query($con,$sql);
                  
                        
                            
                            $count = 0;

                                foreach($result as $data)
                                {
                                    $count++;
                                    
                                    echo "
                                    
                                    <tr>
                                        
                                        <td>{$count}</td>
                                        <td>{$data['cedula']}</td>
                                        <td>{$data['nombre']}</td>
                                        <td>{$data['apellido']}</td>
                                    
                                        <td>{$data['costo']}</td>
                                        <td>{$data['estado']}</td>
                                        <td><a class='btn btn-primary btn-fw' href='impresion3.php?impre={$data['id']}'><i class='icon-docs'></i> Imprimir Factura</a>
                                        </td>
                                        
                                        
                                    </tr>
                                    
                                    
                                    ";
                                }
                            
                            ?>
                        </tbody>
                        </table>
                    </div>
                    </div>
    </div>
          </div>
 </div>
<?php

include('libreria/componentes/footer.php');
?>   