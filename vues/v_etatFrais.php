<?php
    $mouths = array(
        '01' => 'janvier',
        '02' => 'fevrier',
        '03' => 'mars',
        '04' => 'avril',
        '05' => 'mai',
        '06' => 'juin',
        '07' => 'juillet',
        '08' => 'aout',
        '09' => 'septembre',
        '10' => 'octobre',
        '11' => 'novembre',
        '12' => 'decembre',
    );
?>
<br>
<h3>
    Fiche de frais du mois de
    <?php
        foreach ($lesMois as $unMois) {
            $mois = $unMois['mois'];
        }
        echo $mouths[$mois].' '.$numAnnee;
    ?>
</h3>
<p>
    Etat : <?php echo $libEtat?> depuis le <?php echo $dateModif?> <br> Montant validé : <?php echo $montantValide?> €
</p>

<table class="table">
    <thead class="thead-dark">
    <h4>Eléments forfaitisés</h4>
        <tr>
            <?php
            foreach ( $lesFraisForfait as $unFraisForfait )
            {
            $libelle = $unFraisForfait['libelle'];
            ?>
            <th> <?php echo $libelle?></th>
            <?php
            }
            ?>
        </tr>
        <tr>
            <?php
            foreach (  $lesFraisForfait as $unFraisForfait  )
            {
            $quantite = $unFraisForfait['quantite'];
            ?>
            <td class="qteForfait"><?php echo $quantite?> </td>
            <?php
            }
            ?>
        </tr>
    </thead>
</table>

<table class="table">
    <thead class="thead-dark">
    <h4>Descriptif des éléments hors forfait</h4>
    <p><?php echo $nbJustificatifs ?> justificatifs reçus du mois de <?php echo $mouths[$numMois]?></p>
        <tr>
            <th class="date">Date</th>
            <th class="libelle">Libellé</th>
            <th class='montant'>Montant</th>
            <th class='paiement'>paiement</th>
        </tr>
        <?php
        foreach ( $lesFraisHorsForfait as $unFraisHorsForfait ) {
            $date = $unFraisHorsForfait['date'];
            $libelle = $unFraisHorsForfait['libelle'];
            $montant = $unFraisHorsForfait['montant'];
            $idpaiement = $unFraisHorsForfait['idpaiement'];
            ?>
            <tr>
                <td><?php echo $date ?></td>
                <td><?php echo $libelle ?></td>
                <td><?php echo $montant ?></td>
                <td>
                    <?php
                    if ($idpaiement == 3){
                        echo "Carte Bancaire";
                    } elseif ($idpaiement == 2){
                        echo "Espèces";
                    } else {
                        echo "Chèque";
                    }
                    ?>
                </td>
            </tr>
            <?php
        }
        ?>
    </thead>
</table>













