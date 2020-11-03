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


<div class="col-lg-10 grid-margin stretch-card">
                    <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Cumpleaños</h4>
                        <br>
                        
                        <table class="table table-dark">
                        <thead>
                            <tr>
                                <th></th>
                                <th></th>
                                
                                <th>Nombre</th>
                                <th>Apellido</th>
                                <th>Fecha de Nacimiento</th>
                                <th>Telefono</th>
                                <th></th>
                            </tr>
                            
                        </thead>
                        <tbody>
                            <?php
                            
                            
                            $con=conexion::instancia();
                            $sql ="select * from paciente";
                          $result=  mysqli_query($con,$sql);
                           
                        
                            
                            $count = 0;

                                foreach($result as $data)
                                {
                                    
                                    $count++;
                                
                                    echo "
                                    
                                    <tr>
                                     
                                        <td>{$count}</td>";?>

                                        <td><img <?php if($data['sexo']=='m'){echo "src='images/faces-clipart/pic-1.png'";}else if($data['sexo']=='f'){echo"src='images/faces-clipart/pic-2.png'";}?>/></td>
                                        <?php
                                        echo"
                                       
                                        <td>{$data['nombre']}</td>
                                        <td>{$data['apellido']}</td>
                                        <td>{$data['Fecha_na']}</td>
                                        <td>{$data['telefono']}</td>
                                        <td><a class='btn btn-primary btn-fw' href='impresion4.php?impre={$data['id']}'><i class='icon-docs'></i> Imprimir</a>
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
