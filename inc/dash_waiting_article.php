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
                    <th>Auteur</th>
                    <th>Mail auteur</th>
                    <th>Sujet</th>
                    <th>Description</th>
                    <!--<th>Image</th>-->
                    <th>Confirmation</th>
                    <!--<th>Date</th>-->
                    
                  </tr>
                </thead>
                <tbody>
                  <tr class="gradeX">
                    <?php
                          $client = curl_init('http://51.75.126.61/api/apiHandler.php?action=outputWaitingNews');
                          curl_setopt($client, CURLOPT_RETURNTRANSFER, 1);
                          $response = curl_exec($client);
                          $result = json_decode($response);

                          $output = '';

                          if(count($result) > 0){
                              foreach($result as $row){
                                  echo "<td>$row->name</td>";
                                  echo "<td>$row->mail</td>";
                                  echo "<td>$row->subject</td>";
                                  echo "<td>$row->descriptionArticles</td>";
                                  //echo "<td>$row->pictures</td>";
                                  echo "<td>$row->confirmation</td>";
                                  //echo "<td>$row->date_creation</td>";
                                  
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