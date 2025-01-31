<?php include 'lang.php'; ?>
<!DOCTYPE html>
<html lang="<?= $language ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Virtual Classroom</title>
    <link rel="stylesheet" href="style.css">
    <script defer src="script.js"></script>
</head>
<body>
    <header>
        <form method="POST" action="set_language.php">
            <select name="lang" onchange="this.form.submit()">
                <option value="en" <?= ($language == 'en') ? 'selected' : '' ?>>English</option>
                <option value="te" <?= ($language == 'te') ? 'selected' : '' ?>>తెలుగు (Telugu)</option>
                <option value="hi" <?= ($language == 'hi') ? 'selected' : '' ?>>हिन्दी (Hindi)</option>
                <option value="es" <?= ($language == 'es') ? 'selected' : '' ?>>Español (Spanish)</option>
            </select>
        </form>
    </header>

    <main>
        <h1><?php echo $translations["welcome"]; ?></h1>
        <button><?php echo $translations["start_class"]; ?></button>
        <button><?php echo $translations["attendance"]; ?></button>
    </main>
</body>
</html>
