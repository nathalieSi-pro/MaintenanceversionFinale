<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Utilisateur</title>
</head>

<body>
    <header>
        <nav class="box">
            <ul>
                <li>
                    <a><img class="Lg" src="media/img/logo.png" alt="logo"></a>
                </li>
                <li><a href="Accueil.php">Acceuil</a></li>
                <li><a href="Ticket.php">Technicien</a></li>
                <li><a href="Contact.php">Contact</a></li>
            </ul>
        </nav>

    </header>
    <div class="containers">
        <table class="table">
            <thead>
                <tr>
                    <th><label>Nom:</label> <input type="text" class="Name" id="nom" value="">
                        <label>Prenon:</label><input type="text" class="Name" id="prenom">
                    </th>
                    <th><label>Tel:</label><input type="tel" class='phone' id="nom" value=""></th>
                </tr>
                <tr>
                    <th>Urgence:</th>
                    <th><select name="choose" id="select">
                            <option value="Fort">Fort</option>
                            <option value="Moyen">Moyen</option>
                            <option value="Faible">Faible</option>
                        </select></th>
                </tr>
                <tr>
                    <th>Informez-moi du suivi: <input type="email" class="Mail" id="email" pattern=".+@globex.com" size="30" required>
                    </th>
                    <th><select>
                            <option value="oui">oui</option>
                            <option value="non">non</option>
                        </select> </th>
                </tr>
                <tr>
                    <th>le ticket pour sur : </th>
                    <th><select>
                            <option value="matériel">matériel</option>
                            <option value="logiciel">logiciel</option>
                        </select>
                    </th>
                </tr>
                <tr>
                    <th>type</th>
                    <th><select>
                            <option value="question">Question</option>
                            <option value="Probleme">Probleme</option>
                            <option value="Incident">Incident</option>
                        </select>
                    </th>
                </tr>
                <tr>
                    <th>Categorie</th>
                    <th><select>
                            <option value="desktop">ordi bureau</option>
                            <option value="Pc">ordi portable</option>
                        </select>
                    </th>
                </tr>
                <tr>
                    <td colspan='2'>Titre:
                        <input type="text" class="description">
                    </td>
                </tr>
                <tr>
                    <td colspan='2'>
                        <textarea class="message"></textarea>
                        <input type="submit" id="btnsubmit" name="nom" value="Valider">
                    </td>
                </tr>
        </table>
    </div>
    <?php
    include_once("partials/footer.phtml");

    ?>