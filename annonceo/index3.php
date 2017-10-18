<?php require('inc/init.inc.php'); ?>
<?php require('inc/header.inc.php');?>


<h1>Acceuil</h1>



<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-body">
                    <form type="#" method="post">
                        <div class="form-group">
                            <label for="categorie">Catégorie</label>
                            <select class="form-control" id="categorie" name="categorie">
                                <option>Votre catégorie</option>
                                <option>#</option>
                            </select>
                            <label for="regions">Régions</label>
                            <select class="form-control" id="categorie" name="categorie">
                                <option>Toute les regions</option>
                                <option>#</option>
                            </select>
                            <label for="membre">Membres</label>
                            <select class="form-control" id="categorie" name="categorie">
                                <option>Tous les membres</option>
                                <option>#</option>
                            </select>
                            <div class="range">
                                <span ="gras">Prix</span>
                                <input type="range" name="range" min="1" max="100" value="50" onchange="range.value=value">
                                <p>maximum 100000€</p>

                            </div>
                        </div>

                    </form>

                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="row">
                <div class="col-md-4">
                    <form type="#" method="post">
                        <div class="form-group">
                            <select class="form-control" id="membre" name="membre">
                                <option>Trier par prix(du moins cher au plus cher)</option>
                                <option>#</option>
                            </select>

                        </div>
                    </form>
                </div>
            </div>

            <div class="row">
                <table class="table">
                    <tr>
                        <td><img src="img/iphone.jpg" alt=""></td>
                        <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</td>
                    </tr>
                    <tr>
                        <td><img src="#" alt=""></td>
                        <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</td>
                    </tr>
                    <tr>
                        <td><img src="#" alt=""></td>
                        <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</td>
                    </tr>
                    <tr>
                        <td><img src="#" alt=""></td>
                        <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</td>
                    </tr>
                    <tr>
                        <td><a href="#"></a>voir plus</td>
                        <td></td>

                    </tr>
                </table>
            </div>

        </div>


    </div>
</div>
</div>








<?php require('inc/footer.inc.php');?>
