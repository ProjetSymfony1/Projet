##Bienvenue dans notre Projet Symfony : CHEZ GUSTO !


## <a href="https://github.com/ProjetSymfony1/chez-gusto/projects/1"> Gestion </a>

Afin de gérer nos tâches, nous avons utilisé l'outil GitHub Project et la création de labeled issues.

##Concept
Auguste Gusto, propriétaire de son restaurant italient de renommé, effectue un appel d'offre ouvert pour la conception de son site.
La MIAGE Sorbonne répond à l'appel.

##Fonctionnalités
- Se connecter et créer un compte
- Envoyer un mail lors de l'inscription
- Modifier ses informations personnelles
- Envoyer, receptionner, afficher et traiter des messages à travers un accès à des "fiches clients"
- Créer, modifier et archiver un plat
- Créer, confirmer, archiver et afficher des réservations
- Ajouter des plats au panier et aux favoris
- Supprimer des plats du panier et des favoris
- Valider, afficher, annuler et consulter le détail des commandes
- API Map



##Fixtures 
_STEP 1 - INSTALL_ 

    composer require --dev orm-fixtures
    créer une base de données 'chez-gusto'

_STEP 2 - LOAD_ 

    php bin/console doctrine:schema:update --force
    php bin/console doctrine:fixtures:load
_STEP 3 - GO_ 

Vous pouvez désormais vous connecter et accéder au menu

    Auguste (ADMIN) - id : gusto, pwd : azerty
    Teya (USER) - id : teya, pwd : teya123
    Katia (USER) - id : katia, pwd : kat123
    Ha Phuong (USER) - id : haphuong, pwd : tran123
    Manel (USER) - id : manel, pwd : man123

##Membres de l'équipe

- HAMMACHE Katia **(PO)**
- DIDI Teya 
- ISSELNANE Manel 
- TRAN Ha Phuong 

