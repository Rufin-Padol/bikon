<?php ?>
<!DOCTYPE html>
<html>
<head>
    <title>Facturation</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-10">
    <div class="max-w-lg mx-auto bg-white p-8 rounded-lg shadow-md">
        <h2 class="text-2xl font-bold mb-4 text-center">Facturer un service bureautique</h2>
        <form method="POST" action="index.php?page=ajouter_facture" class="space-y-4">
            <div>
                <label class="block font-medium">Nombre de copies pour la saisie :</label>
                <input type="number" name="copies_saisie" value="0" class="w-full border rounded-lg p-2">
            </div>
            <div>
                <label class="block font-medium">Nombre de copies pour la photocopie :</label>
                <input type="number" name="copies_photocopie" value="0" class="w-full border rounded-lg p-2">
            </div>
            <div>
                <label class="block font-medium">Nombre de copies pour l'impression :</label>
                <input type="number" name="copies_impression" value="0" class="w-full border rounded-lg p-2">
            </div>
            <div>
                <label class="block font-medium">Format :</label>
                <select name="format" class="w-full border rounded-lg p-2">
                    <option value="A4">A4</option>
                    <option value="A3">A3</option>
                </select>
            </div>
            <div>
                <label class="block font-medium">Accessoires :</label>
                <input type="text" name="accessoires" class="w-full border rounded-lg p-2">
            </div>
            <div>
                <label class="block font-medium">Total (FCFA) :</label>
                <input type="number" name="total" required class="w-full border rounded-lg p-2">
            </div>
            <button type="submit" class="w-full bg-blue-500 text-white py-2 rounded-lg hover:bg-blue-600">Ajouter Facture</button>
        </form>
    </div>
</body>
</html>


