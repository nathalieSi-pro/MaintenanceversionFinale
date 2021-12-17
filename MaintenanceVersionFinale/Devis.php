<?php
include_once("partials/header.phtml");
include_once("traitement.php");
?>
<div class="containers">
    <div class="invoice">
        <div class="row entete">
            <div class="col-5 entete-box num">
                <h2 class="document-type display-4">DEVIS</h2>
                <p class="text-right"><strong><input type="text" id="name" class='ID' name="idDevis" value="n°"></strong>
                </p>
            </div>
            <div class="col-7 entete-box">
                <img src="media/img/pcmd.png" class="logo">
            </div>
        </div>
        <div class="row">
            <div class="col-7">
                <p>
                    <strong>PDCM SAS</strong><br> 6B, Rue des lilas<br> 75000 Paris
                </p>
            </div>
            <br>
            <br>
            <div class="col-5">
                <tr>
                    <td>Réf.Client :<input type="text" id="name" class='ID' name="ref_client"></td>
                    </br>
                    <td>Adresse :<input type="text" id="name" class='ID' name="adresse_client"></td>
                    </br>
                    <td>Code Postal :<input type="text" id="name" class='ID' name="codePostal_client"></td>
                </tr>
            </div>
        </div>
        <br>
        <br>
        <div class="tableau">
            <table class="tarif">
                <thead>
                    <tr>
                        <th class="fist">Description</th>
                        <th class="fist">Quantité</th>
                        <th class="fist">Unité</th>
                        <th class="fist">PU HT</th>
                        <th class="fist">TVA</th>
                        <th class="fist">Total TTC</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><input type="text" id="name" class='fact' name="nom_product"></td>
                        <td><input type="text" id="name" class='fact' name="user_name"></td>
                        <td><input type="text" id="name" class='fact' name="user_name"> </td>
                        <td><input type="text" id="name" class='fact' name="user_name"></td>
                        <td><input type="text" id="name" class='fact' name="user_name" value="20%"></td>
                        <td><input type="text" id="name" class='fact' name="user_name"></td>
                    </tr>
                    <tr>
                        <td><input type="text" id="name" class='fact' name="nom_product"></td>
                        <td><input type="text" id="name" class='fact' name="user_name"></td>
                        <td><input type="text" id="name" class='fact' name="user_name"> </td>
                        <td><input type="text" id="name" class='fact' name="user_name"></td>
                        <td><input type="text" id="name" class='fact' name="user_name" value="20%"></td>
                        <td><input type="text" id="name" class='fact' name="user_name"></td>
                    </tr>
                    <tr>
                        <td><input type="text" id="name" class='fact' name="nom_product"></td>
                        <td><input type="text" id="name" class='fact' name="user_name"></td>
                        <td><input type="text" id="name" class='fact' name="user_name"> </td>
                        <td><input type="text" id="name" class='fact' name="user_name"></td>
                        <td><input type="text" id="name" class='fact' name="user_name" value="20%"></td>
                        <td><input type="text" id="name" class='fact' name="user_name"></td>
                    </tr>
                    <tr>
                        <td><input type="text" id="name" class='fact' name="nom_product"></td>
                        <td><input type="text" id="name" class='fact' name="user_name"></td>
                        <td><input type="text" id="name" class='fact' name="user_name"> </td>
                        <td><input type="text" id="name" class='fact' name="user_name"></td>
                        <td><input type="text" id="name" class='fact' name="user_name" value="20%"></td>
                        <td><input type="text" id="name" class='fact' name="user_name"></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="row total">
            <div class="col-4 enfant">
            </div>
            <div class="col-4 enfant">
                <table class="text-end">
                    <tr>
                        <td><strong>Total HT</strong></td>
                        <td><input type="text" id="name" class='montant' name="user_name" value>€</td>
                    </tr>
                    <tr>
                        <td>TVA 20%</td>
                        <td><input type="text" id="name" class='montant' name="user_name" value>€</td>
                    </tr>
                    <tr>
                        <td><strong>Total TTC</strong></td>
                        <td><input type="text" id="name" class='montant' name="user_name" value>€</td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="siret">
            <p class=" bottom-page text-right">
                PCDM SAS - N° SIRET 808967894376 <br> 6B, Rue des lilas - 75OO0 PARIS 03.42.45.12.11 - www.PCDM.fr
            </p>
        </div>
    </div>
</div>
<?php
include_once("partials/footer.phtml");

?>