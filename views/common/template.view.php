<!DOCTYPE html>
<html lang="fr">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="<?= $page_description; ?>">
        <title><?= $page_title; ?></title>
        <!--google-font-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet">
        <!--google-font-->  
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <link href="<?= URL ?>public/CSS/main.css" rel="stylesheet" />
        <!-- page CSS personnalisé -->
        <?php if(!empty($page_css)) : ?>
                <link href="<?= URL ?>public/CSS/<?= $page_css ?>" rel="stylesheet" />
        <?php endif; ?>
    </head>

    <body>

    <!--header-->
        <?php require_once("views/common/header.view.php"); ?>
    <!--page-view-->

            <?= $page_content; ?>
        
    <!--footer-->
        <?php require_once("views/common/footer.view.php"); ?>

    <!-- cdn bootstrap -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- javascript personalisé -->   
        <?php if(!empty($page_javascript)) : ?>
            <?php foreach($page_javascript as $fichier_javascript) : ?>
                <script src="<?= URL?>public/JavaScript/<?= $fichier_javascript ?>"></script>
            <?php endforeach; ?>
        <?php endif; ?>
        
    </body>
</html>