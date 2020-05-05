<div class="block__73694 site-section border-top" id="why-us-section">
     <div class="container">
     <div>
        <a href="index.php?name=news" class="nav-link"><button  class="btn btn-primary text-white">Creer une News</button></a>
    </div>
        <div class="row d-flex no-gutters align-items-stretch">

        
    </div>
    <div class="col-lg-5 mr-auto p-lg-5 mt-4 mt-lg-0 order-lg-1" data-aos="fade-right" data-aos-delay="">
<<<<<<< Updated upstream

        <?php
            $client = curl_init('http://localhost/maxIbra/api/apiHandler.php?action=outputData');
            curl_setopt($client, CURLOPT_RETURNTRANSFER, 1);
            $response = curl_exec($client);
            $result = json_decode($response);

            $output = '';

            if(count($result) > 0){
                foreach($result as $row){
                    echo "<h2 class='mb-4 text-black'>$row->subject</h2>";
                    echo "<h4 class='text-primary'>$row->subject</h4>";
                    echo "<p>$row->description</p>";
                    echo "<ul class=' list-unstyled mt-5'>";
                    echo "<li>$row->name</li>";
                    echo "<li>$row->email</li>";
                    echo "</ul>";
                    
                }
            }else{
                $output .= '<tr><td colspan="3" align="center">Not found!</td></tr>';
            }

            echo $output;
        ?>
=======
    <?php include 'curlnews.php';?>
>>>>>>> Stashed changes
     </div>
 </div>
</section>






    