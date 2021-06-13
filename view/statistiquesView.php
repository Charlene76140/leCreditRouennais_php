<?php
include "layout/header/header.php"; 
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
        <tr>
            <td class="indicateurs"></td>
            <td class="value"></td>
            <td class="variation"></td>
        </tr>
        <tr>
            <td class="indicateurs"></td>
            <td class="value"></td>
            <td class="variation"></td>
        </tr>
        <tr>
            <td class="indicateurs"></td>
            <td class="value"></td>
            <td class="variation"></td>
        </tr>
        <tr>
          <td class="indicateurs"></td>
          <td class="value"></td>
          <td class="variation"></td>
        </tr>
        </tbody> 
      </table>
    </div>
  </section>
</main>

<script src="js/statsAjax.js"></script>
<?php include "layout/footer/footer.php"; ?>