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
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,400;1,400;1,900&display=swap" rel="stylesheet">
        <!--bootstrap-cdn-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <!--main-css-->
        <link href="<?= URL ?>public/CSS/main.css" rel="stylesheet" />
        <!-- page CSS personnalisé -->
        <?php if(!empty($page_css)) : ?>
                <link href="<?= URL ?>public/CSS/<?= $page_css ?>" rel="stylesheet" />
        <?php endif; ?>
    </head>

    <body>
    
    <!-- Modal -->

    <?php if($view === "views/hotels.view.php" OR $view === "views/contacts.view.php") : ?>

        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">

                        <?php if($view === "views/hotels.view.php") : ?>
                            <h5 class="modal-title" id="staticBackdropLabel">Votre Reservation :</h5>
                        <?php endif; ?>
                        <?php if($view === "views/contacts.view.php") : ?>
                            <h5 class="modal-title" id="staticBackdropLabel">Votre demande de contact :</h5>
                        <?php endif; ?>
                        
                        
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                <div class="modal-body" id="result">
        
                </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <!--<button type="button" class="btn btn-primary">Understood</button>-->
                    </div>
                </div>
            </div>
        </div>
               
    <?php endif; ?>

    <!--header-->
        <?php require_once("views/common/header.view.php"); ?>
    <!--page-view-->

            <?= $page_content; ?>
        
    <!--footer-->
        <?php require_once("views/common/footer.view.php"); ?>

    
    <!-- javascript personalisé -->   
    <?php if(!empty($page_js)) : ?>
        <?php foreach($page_js as $file_js):?>
        <script src="<?= URL ?>public/JS/<?= $file_js ?>"></script>
        <?php endforeach ;?>
    <?php endif; ?>

    <!--Js cdn bootstrap -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        
    </body>
</html>