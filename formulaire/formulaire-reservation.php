<!DOCTYPE html>
<html lang="fr">
<head>
    <link href="css/reservation.css" rel="stylesheet">
    <meta charset="UTF-8">
    <title>Formulaire</title>

</head>
<body>
<   <form action="reservation.php" method="post">>
    <fieldset>
        <legend>Coordonnées</legend>
        <label for="nom">Nom : </label><input type="text" name="nom" id="nom" />
        <input type="text" name="prenom" placeholder="Entrez votre prénom" />
        <input type="text" name="adresse" placeholder="Rue et numéro" />
        <input type="text" name="ville" placeholder="Ville" />
        <input type="text" name="code" placeholder="Code postal" />
    </fieldset>
    <fieldset>
        <legend>Lieu de séjour : </legend>
        <select name="pays" size="1">
            <optgroup label="Europe">
                <option value="Italie" >Italie</option>
                <option value="Espagne">Espagne</option>
            </optgroup>
            <optgroup label="Afrique">
                <option value="Ethiopie">Ethiopie</option>
                <option value="Egypte">Egypte</option>
                <option value="Sénégal">Sénégal</option>
            </optgroup>
        </select>
    </fieldset>
    <fieldset>
        <legend>Moyens de transport</legend>
        <label for="voiture">voiture</label>
        <input type="checkbox" id="voiture" name="transport[]" value="voiture"/>
        <label for="car">Car</label>
        <input type="checkbox" id="car" name="transport[]" value="car"/>
        <label for="train" >Train</label>
        <input type="checkbox" id="train" name="transport[]" value="train"/>
        <label for="avion" >Avion</label>
        <input type="checkbox" id="avion" name="transport[]" value="avion"/>
    </fieldset>
    <fieldset>
        <legend>Type de logement</legend>
        <label for="Hotel">Hotel</label>
        <input type="radio" id="Hotel" name="logement"/>
        <label for="appartement">appartement</label>
        <input type="radio" id="appartement"name="logement"/>
        <label for="camping">camping</label>
        <input type="radio" id="camping"name="logement"/>
    </fieldset>
    <fieldset>
        <legend>Loisirs</legend>
        <label for="plage">Plage</label>
        <input type="checkbox" id="plage"  />
        <label for="piscine">Piscine</label>
        <input type="checkbox" id="piscine"  />
        <label for="tennis">Tennis</label>
        <input type="checkbox" id="tennis"  />
        <label for="cinema">Cinema</label>
        <input type="checkbox" id="cinema"  />
        <label for="spectacle">Spectacle culturel</label>
        <input type="checkbox" id="spectacle"  />
        <label for="excursion">Excursion</label>
        <input type="checkbox" id="excursion"  />
    </fieldset>
    <br /><br />
    <label for=""commentaires">Votre message : </label><textarea id="commentaires" >Vos commentaires</textarea>
    <input type="submit" value="Envoyez">
</form>
</body>
</html>