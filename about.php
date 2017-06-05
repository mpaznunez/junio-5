<!DOCTYPE html>
<?php include('header.php');?>



<!--PARTE PHP BIBLIOGRAFIA -->
<?php
$json = file_get_contents('data/biblio.json');
$datos = json_decode($json,true);
$todos = count($datos);
?>

    <!-- Main Content
<div class="container">
<div class="row">
  <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
<pre><?php print_r($datos);?></pre>
</div>-->

<!--FINFINFIN-->

    <div class="container">


        <div class="bg-faded p-4 my-4">
            <hr class="divider">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">

            <h3 class="my-2 text-center">Tengo <?php echo($todos);?> referencias bibliográficas, que son:</h3>

                        </div>

            <hr class="divider">
            <div class="row">
                <div class="col-lg-12 p-4">
                    <p>
                      <?php for($n = 0; $n < $todos; $n++){?>
                        <div >
                          <p><?php echo($datos[$n]["autor"]);?> (<?php echo($datos[$n]["ao"]);?>). <?php echo($datos[$n]["titulo"]);?>. <?php echo($datos[$n]["ciudad"]);?>:<?php echo($datos[$n]["editorial"]);?></p>
                        </div>
                      <?php }; ?>
                    </p>
                    </div>
            </div>

    <!--siguiente-->

            <div class="row">
                <div class="col-md-4 mb-4 mb-md-0">
                    <div class="card h-100">
                        <img class="card-img-top img-fluid" src="img/tira2.jpg" alt="">
                    </div>
                </div>

                <div class="col-md-4 mb-4 mb-md-0">
                    <div class="card h-100">
                        <img class="card-img-top img-fluid" src="img/tira1.jpg" alt="">
                        <div class="card-block text-center">

                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100">
                        <img class="card-img-top img-fluid" src="img/tira3.jpg" alt="">
                        <div class="card-block text-center">

                        </div>
                    </div>
                </div>
            </div>

        </div>



    </div>
    <!-- /.container -->

<?php include('footer.php');?>
