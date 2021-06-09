<?php
    include "layout/header/header.php"; 
?>

<main>
    <section class="container my-5">
        <h2>Type de compte : </h2>
        <div class="row">
            <table class="col-10 col-md-9 col-lg-7 my-4">
                <thead>
                    <tr>
                        <th><?php echo $accounts->getAccount_type(); ?></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>N° de compte : <?php echo $accounts->getAccount_number(); ?></td>
                    </tr> 
                    <tr>
                        <td>Solde : <?php echo $accounts->getAccount_amount() .' €' ?></td>
                    </tr> 
                    <tr>
                        <td>Date création : <?php echo $accounts->getCreation_date()?></td>
                    </tr>
                    <tr>
                        <td>Frais de compte : <?php echo $accounts->getAccount_fees() . ' €/an'?></td>
                    </tr>
                    <tr>
                        <td>
                        <p>Dernière(s) opération(s) : </p>
                        <?php foreach ($operations as $operation)  : ?>
                            <p><?php echo $operation->getAmount() . ' €'; ?> : <?php echo $operation->getLabel(); ?></p>
                        <?php endforeach; ?>  
                        </td>
                    </tr> 
                </tbody>
            </table>
        </div>
    </section>
</main>

<?php include "layout/footer/footer.php"; ?>