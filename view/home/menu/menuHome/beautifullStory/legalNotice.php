<?php $title = 'Mention légale'; ?>

<?php ob_start(); ?>

<?php require("view/home/menu/menuHome/menu.php"); ?>

<div>
    <div id="titleConcept" style="background-color:#cccac0"><br>
        <h2>Mention légale</h2>
        <h4>En vigueur au 18/09/2019</h4><br>
    </div>
</div>
<section>
    <div class="container">
        <div class="text-justify">
            <p>Conformément aux dispositions des Articles 6-III et 19 de la Loi n°2004-575 du 21 juin 2004 pour la Confiance dans l’économie
                numérique, dite L.C.E.N., il est porté à la connaissance des Utilisateurs du site monjolicocon@hotmail.fr les présentes mentions
                légales.
                La connexion et la navigation sur le site (indiquer le nom du site) par l’Utilisateur implique acceptation intégrale et sans réserve
                des présentes mentions légales.
                Ces dernières sont accessibles sur le site à la rubrique « Mentions légales ».
            </p>
            <h4>ARTICLE 1 : L'éditeur</h4>
            <p> L’édition et la direction de la publication du site monjolicocon@hotmail.fr est assurée par cyc-developpement.fr, domiciliée 215
                périssat des essarts 87200 Saint-Junien, dont le numéro de téléphone est 0781374449, et l'adresse e-mail
                chenalcyril87@gmail.com.
            </p>
            <h4>ARTICLE 2 : L'hébergeur</h4>
            <p>L'hébergeur du site monjolicocon@hotmail.fr est la Société 1&1 IONOS/UNETUN/UN-ET-UN/1ET1/ONEANDONE/ONE-AND-ONE,
                dont le siège social est situé au 7 PL DE LA GARE - 57200 SARREGUEMINES , avec le numéro de téléphone : 0 805 75 16 43.
            </p>
            <h4>ARTICLE 3 : Accés au site</h4>
            <p>Le site est accessible par tout endroit, 7j/7, 24h/24 sauf cas de force majeure, interruption programmée ou non et pouvant
                découlant d’une nécessité de maintenance.
                En cas de modification, interruption ou suspension des services le site monjolicocon@hotmail.fr ne saurait être tenu responsable.</p>
            <h4>ARTICLE 4 : Collecte des données</h4>
            <p>Le site est exempté de déclaration à la Commission Nationale Informatique et Libertés (CNIL) dans la mesure où il ne collecte
                aucune donnée concernant les utilisateurs.</p>
            <h4>ARTICLE 5 : Cookies</h4>
            <p>L’Utilisateur est informé que lors de ses visites sur le site, un cookie peut s’installer automatiquement sur son logiciel de
                navigation.
                En naviguant sur le site, il les accepte.
                Un cookie est un élément qui ne permet pas d’identifier l’Utilisateur mais sert à enregistrer des informations relatives à la
                navigation de celui-ci sur le site Internet. L’Utilisateur pourra désactiver ce cookie par l’intermédiaire des paramètres figurant au
                sein de son logiciel de navigation.
            </p>
        </div>
    </div>
</section>

<?php $content = ob_get_clean(); ?>

<?php require('view/template/template.php') ?>
<?php require("view/footer/footer.php"); ?>