<?php 
session_start();
include ("layout/header/header.php"); 
?>

  <main>
    <section class="container my-5">
      <h2>Les Statistiques</h2>
      <!-- I created the structure of the table and the data is imported from the statistiquesMake.php file -->
      <table>
        <thead>
          <tr>
              <th>Indicateur</th>
              <th>Valeur</th>
              <th>Variation</th>
          </tr>
        <tbody>  
         <?php include ("components/stats/statistiquesMake.php") ?>
        </tbody> 
      </table>
    </section>
  </main>

  <?php include ("layout/footer/footer.php"); ?>