 <section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i>ARTICLE EN ATTENTE</h3>
        <div class="row mb">
          <!-- page start-->
          <div class="content-panel">
            <div class="adv-table">
              <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="hidden-table-info">
                <thead>
                  <tr>
                    <th>id</th>
                    <th>Auteur</th>
                    <th>Mail auteur</th>
                    <th>Sujet</th>
                    <th>Description</th>
                    <!--<th>Image</th>-->
                    <th>Confirmer</th>
                    <!--<th>Date</th>-->
                    <th>Activité</th>
                    
                  </tr>
                </thead>
                <tbody>
                  <tr class="gradeX">
                    <?php
                          $client = curl_init('http://localhost/Caponweb1/api/apiHandler.php?action=outputWaitingNews');
                          curl_setopt($client, CURLOPT_RETURNTRANSFER, 1);
                          $response = curl_exec($client);
                          $result = json_decode($response);

                          $output = '';

                          if(count($result) > 0){
                              foreach($result as $row){
                                echo "<td>$row->idNews</td>";
                                  echo "<td>$row->name</td>";
                                  echo "<td>$row->mail</td>";
                                  echo "<td>$row->subject</td>";
                                  echo "<td>$row->descriptionArticles</td>";
                                  //echo "<td>$row->pictures</td>";
                                  echo "<td><a href='http://localhost/Caponweb1/api/apiHandler.php?action=updateVisibleArticle&idNews=$row->idNews'<button class='btn'><i class='fa fa-check'></i></button></a></td>";
                                  echo "<td><a href='http://localhost/Caponweb1/api/apiHandler.php?action=deleteArticle&idNews=$row->idNews'<button class='btn'><i class='fa fa-trash'></i></button></a></td>";
                                  
                                  
                                  
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