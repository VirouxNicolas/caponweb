 <section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> INSCRIPTION INTERNATIONAL CONTEST</h3>
        <div class="row mb">
          <!-- page start-->
          <div class="content-panel">
            <div class="adv-table">
              <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="hidden-table-info">
                <thead>
                  <tr>
                    <th>Nom Prenom</th>
                    <th>Pays</th>
                    <th>Senior/junior</th>
                    <th>License</th>
                    <th>category</th>
                    <th>Mail</th>
                    <th>Banquet</th>
                    <th>Remarque</th>
                    
                  </tr>
                </thead>
                <tbody>
                  <tr class="gradeX">
                    <?php
                          $client = curl_init('http://51.75.126.61/api/apiHandler.php?action=outputInternationalContest');
                          curl_setopt($client, CURLOPT_RETURNTRANSFER, 1);
                          $response = curl_exec($client);
                          $result = json_decode($response);

                          $output = '';

                          if(count($result) > 0){
                              foreach($result as $row){
                                  echo "<td>$row->name</td>";
                                  echo "<td>$row->country</td>";
                                  echo "<td>$row->choixSJ</td>";
                                  echo "<td>$row->licence</td>";
                                  echo "<td>$row->category</td>";
                                  echo "<td>$row->email</td>";
                                  echo "<td>$row->reservation</td>";
                                  echo "<td>$row->message</td>";
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