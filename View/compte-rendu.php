<!DOCTYPE html>
<html>
<head>
    <title>Formulaire de Compte-Rendu</title>
    <!-- Inclure les fichiers CSS de Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Lier votre fichier CSS personnel -->
    <link rel="stylesheet" href="style-formulaire.css">
</head>
<body>
<div class="container">
    <h2>Compte-Rendu de Visite</h2>
    <form>
        <div class="form-group">
            <label for="dateVisite">Date de la Visite :</label>
            <input type="date" class="form-control" id="dateVisite" name="dateVisite">
        </div>
        <div class="form-group">
            <label for="dateContreVisite">Date de Contre-Visite :</label>
            <input type="date" class="form-control" id="dateContreVisite" name="dateContreVisite">
        </div>
        <div class="form-group">
            <label for="motifVisite">Motif de la Visite :</label>
            <input type="text" class="form-control" id="motifVisite" name="motifVisite">
        </div>
        <div class="form-group">
            <label for="remarques">Remarques :</label>
            <textarea class="form-control" id="remarques" name="remarques" rows="3"></textarea>
        </div>
        <div class="form-group">
            <label for="praticien">Nom du Praticien :</label>
            <input type="text" class="form-control" id="nomPraticien" name="nomPraticien">
        </div>
        <div class="form-group">
            <label>Produit :</label>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="refusProduit" name="refusProduit">
                <label class="form-check-label" for="refusProduit">Refus</label>
            </div>
            <select class="form-control" id="produit" name="produit">
                <option value="A">Produit A</option>
                <option value="B">Produit B</option>
                <!-- Ajoutez d'autres options ici -->
            </select>
        </div>
        <div class="form-group">
            <label for="quantiteDistribuee">Quantité distribuée :</label>
            <input type="number" class="form-control" id="quantiteDistribuee" name="quantiteDistribuee">
        </div>
        <button type="submit" class="btn btn-primary">Enregistrer</button>
    </form>
</div>

<!-- Inclure les fichiers JavaScript de Bootstrap -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>