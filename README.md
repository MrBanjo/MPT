Mon Panier Toqué
========================

Bienvenue sur mon projet de fin d'année réalisé à l'Ecole Multimedia à Paris en 2015.

C'est un site e-commerce dont le but est de proposer des kits à cuisiner dans lesquels se trouvent tous les ingrédients nécessaires à la réalisation d'une entrée, d'un plat ou d'un dessert pour 2 ou 4 personnes. C'est une idée originale proposée par de vrais restaurateurs, vous pouvez en apprendre plus ici: http://www.xn--paniertoqu-k7a.fr/

Le site a été réalisé from scratch en symphony 2.6 sur une période de 3 semaines par un chef de projet, 2 graphistes et un developpeur (moi-même).

Installation:

- Télécharger et installer Wamp/Mamp (mac): http://www.wampserver.com/ ou https://www.mamp.info/en/
- Mettre le dossier MPT dans le dossier www de wamp
- Importer la base de données mpt.sql
- Activer wamp/mamp avec l'extension intl
- Aller à l'adresse suivante: http://localhost/MPT/web/app.php/accueil

Contenu:

-	Réalisation de 6 pages représentant l’expérience utilisateur (choix des produits/caddie/enregistrement utilisateurs / commande).
-	Création de la charte graphique (HTML/CCS 3).
-	Responsive design sur toutes les pages, tablettes et mobiles.
-	Header en position fixe avec login utilisateur en AJAX et comptage du nombre d’article du caddie.
-	Inscription newsletter en AJAX.
-	Mini-blog sur la page d’accueil donnant un aperçu des 3 derniers articles du blog.
-	Mise en place de sliders pour le visionnage des menus et repas (plugin Bxslider/ jQuery).
-	Mise en place d’un caddie permettant la gestion de sa commande (réglage quantité et suppression).
-	Ajout d’un produit au caddie en AJAX avec confirmation (continuer les achats/ terminer ma commande).
-	Formulaire d’enregistrement utilisateur avec vérification d’erreurs et de disponibilité de l’adresse email en AJAX, imbrication de formulaire d’adresse de livraison.
-	Formulaire de login classique.
-	Configuration de la sécurité utilisateur de Symfony (visiteur/membre/admin).
-	Base de données MySQL comprenant : Informations utilisateurs, menus et plats, catégorie de menu, newsletter, les upsells, les articles du blog. Diagramme workbench de la base de données.
-	Utilisation de Twig pour la création de toutes les pages et des formulaires.
-	Mise en place d’une partie administrateur avec Bootstrap pour gérer le contenu du site : menus et plats, blog.

