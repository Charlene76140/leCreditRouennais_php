<?php 
session_start();
include ("layout/header/header.php"); 
require ("model/statistiques.php");
$stats = get_statistiques();
?>

<main>
  <section class="container my-5">
    <h2>Les Statistiques : </h2>
    <div class="row">
      <table class="col-10 col-md-9 col-lg-7 my-4">
        <thead>
          <tr>
            <th>Indicateur</th>
            <th>Valeur</th>
            <th>Variation</th>
          </tr>
        </thead> 
        <tbody>  
          <?php foreach($stats as $stat) :?>
          <tr>
            <td class='indicateurs'><?php echo $stat["Indicateur"] ?></td>
            <td class='value'><?php echo $stat["Valeur"] ?></td>
            <td class='variation'><?php echo $stat["Variation"] ?></td>
          </tr>
          <?php endforeach ?>
        </tbody> 
      </table>
    </div>
  </section>
</main>

<?php include ("layout/footer/footer.php"); ?>