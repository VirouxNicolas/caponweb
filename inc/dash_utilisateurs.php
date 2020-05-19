<section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i>ADMINISTRATION UTILISATEURS</h3>
        <div class="row mb">
          <!-- page start-->
          <div class="content-panel">
            <div class="adv-table">
              <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="hidden-table-info">
                <thead>
                  <tr>
                    <th>id</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Date</th>
                    <th>Type</th>
                    <th>Administrateur</th>
                    <th>Membre</th>
                    
                    
                  </tr>
                </thead>
                <tbody>
                  <tr class="gradeX">
                    <?php
                          $client = curl_init('http://51.75.126.61/api/apiHandler.php?action=outputUsers');
                          curl_setopt($client, CURLOPT_RETURNTRANSFER, 1);
                          $response = curl_exec($client);
                          $result = json_decode($response);

                          $output = '';

                          if(count($result) > 0){
                              foreach($result as $row){
                                echo "<td>$row->id</td>";
                                  echo "<td>$row->username</td>";
                                  echo "<td>$row->email</td>";
                                  echo "<td>$row->trn_date</td>";
                                  echo "<td>$row->user_type</td>";
                                
                                  echo "<td><a href='http://51.75.126.61/api/apiHandler.php?action=updateAdminUtilisateur&id=$row->id'<button class='btn'><i class='fa fa-eye-slash'></i></button></a></td>";
                                  
                                  echo "<td><a href='http://51.75.126.61/api/apiHandler.php?action=updateMembreUtilisateur&id=$row->id'<button class='btn'><i class='fa fa-eye'></i></button></a></td>";
                                  
                                  echo "</tr>"; 
                              }
                          }else{
                              $output .= '<tr><td colspan="3" align="center">Not found!</td></tr>';
                          }

                          echo $output;
                      ?>
                  
                </tbody>
              </table>
            </div>
          </div>
          <!-- page end-->
        </div>
        <!-- /row -->
      </section>
      <!-- /wrapper -->
    </section>

    <!-- <script>
        $(document).ready(function(){

            $('#contactForm').on('submit', function(event){
                event.preventDefault();
                if($('#name').val() == ''){
                    alert('Nom field is required!');
                }else{
                    var formData = $(this).serialize();
                    $.ajax({
                        url: "controller/update_confirmation_article.php",
                        method: "POST",
                        data: formData,
                        success:function(data){
                            //outputData();
                            $('#contactForm')[0].reset();
                        }
                    });
                }
            });

        });
    </script> -->
