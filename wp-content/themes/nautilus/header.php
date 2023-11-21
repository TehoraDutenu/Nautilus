<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Le Nautilus</title>

    <!-- Librairie Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- Styles -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/style.css';  ?>"></head>
<body>
    <header class="bg-secondary text-white p-3">
        <a href="<?php echo get_bloginfo('wpurl') ?>">
            <h2> <?php echo get_bloginfo('name') ?> </h2>
        </a>
        <em class="blog-description"> <?php echo get_bloginfo('description') ?> </em>
    </header>
