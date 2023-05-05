<!DOCTYPE html>
<html lang="en">

<head>
    <title>Zay Shop - Contact</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="assets/img/apple-icon.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/templatemo.css">
    <link rel="stylesheet" href="assets/css/custom.css">

    <!-- Load fonts style after rendering the layout styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">

    <!-- Load map styles -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin="" />
<!--
    
TemplateMo 559 Zay Shop

https://templatemo.com/tm-559-zay-shop

-->
</head>

<body>
    @extends('accueil')

    @section('contenu')
    <!-- Start Contact -->
    <div class="container py-5">
        <div class="col-md-6 m-auto text-center">
            <h1 class="h1">Formulaire d'ajout article</h1>
        </div>
        <div class="row py-5">
            <form action="<?php echo url('ajoutArticle'); ?>" method="get" class="col-md-9 m-auto" role="form">
                <div class="mb-3">
                    <label for="inputsubject">Titre</label>
                    <input type="text" class="form-control mt-1" id="subject" name="titre" placeholder="Titre">
                </div>
                <div class="mb-3">
                    <label for="inputsubject">Résumé</label>
                    <input type="text" class="form-control mt-1" id="subject" name="resume" placeholder="Resume">
                </div>
                <div class="mb-3">
                    <label for="inputsubject">Categorie</label>
                    <select name="categorie" class="form-control mt-1">
                        <?php foreach ($cate as $cat) { ?>
                            <option value="<?php echo $cat->idcategorie?>"><?php echo $cat->nomcategorie?></option>
                        <?php } ?>
                        </select>
                </div>
                <div class="mb-3">
                    <label for="inputsubject">Contenu</label>
                    <textarea class="ckeditor form-control" name="contenu"></textarea>
                </div>
                <div class="mb-3">
                    <input type="submit" class="btn btn-success btn-lg px-3" value="Ajouter">
                </div>
            </form>
        </div>
    </div>
    <!-- End Contact -->
    @endsection
    <!-- Start Script -->
    <script src="assets/js/jquery-1.11.0.min.js"></script>
    <script src="assets/js/jquery-migrate-1.2.1.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/templatemo.js"></script>
    <script src="assets/js/custom.js"></script>

    <!-- End Script -->
</body>
<script src="{{ asset('ckeditor/ckeditor.js')}}"></script>
<script src="{{ asset('ckeditor/adapters/jquery.js')}}"></script>
</html>
