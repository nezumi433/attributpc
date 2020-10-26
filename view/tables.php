 <?php 

    session_start();


    $heure = 1 ;
    $nbTableaux = 0;

    $idOrdi = Ordi_getInfos($cnx);
    $nbIdOrdi = Ordi_getId($cnx);

    $infoCli = CLIENT_getInfos_user($cnx);
    $longTab = count($infoCli);

    $longTabOrdi = count($idOrdi);



?>



 <tbody style="display: flex; justify-content:space-between;">
     <?php while ($nbTableaux < $longTabOrdi)
                    {?>

<div >
    
         <table  class="table" style="text-align:center; display: inline-block, align: top;">
             <thead style="">
                 <tr>
                     <th></th>
                     <th> <?php echo $idOrdinateur = $idOrdi[$nbTableaux]['nomOrdi']; ?>
                         
                          </th>
                     <th>
                         <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal4">
                             -
                         </button>
                         <?php include "v_view/modal_suppression_pc.php" ?>             </th>
                     
                 </tr>
             </thead>

             <?php for($heure = 8; $heure <= 19; $heure++)

{ 
      
      echo '<tr">';
      echo '<td>';
      echo  '<div  id="horaire">'.$heure.'h </div>' ;
      echo '</td>';
      echo '<td>';
      echo '' ;               
      echo '</td>'; 
                        
      echo '<td>';
 
  
      echo ' <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal2" value="'.$heure.'" > ' ;   
      echo '+';
      echo '</button>';
      echo '</td>';
      echo '</tr>';
                        


   }     
                         
     
     
     ?>
      <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel2" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel2">Attribution</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            
                                            
                                            <div class="modal-body">
                                
                    
                            
        <form class="login-form" action="../controller/attribute.php" method="post">
            

                                       

            <input type="date" id="day_date" name="day_date"        value="2020-10-26"
 min="2020-10-26">
             

   <script type="text/javascript">$("#day_date").daterangepicker({
     locale: {
        format: 'YYYY-MM-DD'
     } 
});</script>
                                   <br />
                                                
                                                <select name="attr_user" class=form-control>
                                                              <?php foreach($infoCli as $clients => $client)

{ 
                                                   ?>
                                                 <option value=un><?php echo next($client); ?></option>
                                                    <?php }
                                                   
                                                   ?>

                                                </select> 
             <br />
                                   
                                     <select name="attr_horaire" class=form-control>
                                                             <?php for($heure = 8; $heure <= 19; $heure++)

{ 
                                                   ?>
                                                 <option value=un><?php echo $heure; ?></option>
                                                    <?php }
                                                   
                                                   ?>

                                                </select> 
             <br />
                            
                                 <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#exampleModal3" name="add_user">Ajouter Utilisateur</button>
                                                
                                          
                                <input type="submit" class="btn btn-primary" name="attribute" value="Attribuer">
                                               
                             </form>
                                     
                                            </div>
                                            
                                            <div class="modal-footer">
                                           
                                                   
                                            </div>
                                             
                                        </div>
         
                                    </div>
                                       
    
                                </div>



            
         </table>
    
     </div>





     <?php include 'v_view/modal_insert_user.php' ?>







     <?php
                    
            $nbTableaux++; } ?>
     </tbody>

 <br />
