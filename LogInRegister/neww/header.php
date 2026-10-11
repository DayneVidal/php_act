<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title><?php echo htmlspecialchars($pageTitle ?? 'Dayne Website'); ?></title>

<?php if (!empty($useBootstrap)): ?>
<link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet"
>
<?php endif; ?>

<link rel="stylesheet" href="<?php echo htmlspecialchars($stylesheet ?? 'style.css'); ?>">
