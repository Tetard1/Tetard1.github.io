<?php
$page = isset($_GET['page']) ? $_GET['page'] : 'moi';
$valid_pages = ['moi', 'ecole', 'entreprise'];
if (!in_array($page, $valid_pages)) {
    $page = 'moi';
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon Portfolio - Épreuve de fin d'année</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <div class="container">
            <h1>Mon Portfolio</h1>
            <nav>
                <ul>
                    <li><a href="?page=moi" class="<?php echo $page === 'moi' ? 'active' : ''; ?>">Moi</a></li>
                    <li><a href="?page=ecole" class="<?php echo $page === 'ecole' ? 'active' : ''; ?>">Mon École</a></li>
                    <li><a href="?page=entreprise" class="<?php echo $page === 'entreprise' ? 'active' : ''; ?>">Mon Entreprise</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        <div class="container">
            <?php
            switch($page) {
                case 'moi':
                    include 'pages/moi.php';
                    break;
                case 'ecole':
                    include 'pages/ecole.php';
                    break;
                case 'entreprise':
                    include 'pages/entreprise.php';
                    break;
            }
            ?>
        </div>
    </main>

    <footer>
        <div class="container">
            <p>&copy; <?php echo date('Y'); ?> - Portfolio professionnel</p>
        </div>
    </footer>
</body>
</html>
