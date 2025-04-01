<?php include 'app/views/layouts/header.php'; ?>

<h2>Connexion</h2>

<?php if (!empty($error)): ?>
    <p style="color:red;"><?= htmlspecialchars($error) ?></p>
<?php endif; ?>

<form method="POST" action="login.php">
    <label>Email :</label>
    <input type="email" name="email" required>

    <label>Mot de passe :</label>
    <input type="password" name="password" required>

    <button type="submit">Se connecter</button>
</form>

<?php include 'app/views/layouts/footer.php'; ?>
