# Marvenz Burns 🎷

### Membre du groupe :
- Marvin COUSIN
- Enzo JURET

## Déploiement du site

### Configuration nécéssaire préalable

#### Symfony :
Le site **Marvenz Burns** est un projet qui à été créé sous le framework symfony, afin de permettre le bon fonctionnement de celui ci, il est impératif d'avoir le framework symfony d'installé, et qu'il soit bien évidement opérationnel sur votre poste.

#### Base de données :
Il vous faudra également vous munir d'une base de données en local type **MySQL**. Pour cela vous devez :
- Créer un nouvelle utilisateur de la base de données (BDD) ou utiliser le compte admin pour que symfony puisse accéder aux tables de sa BDD.
- Importer le fichier bdd/**marvenz-burns-db.sql** dans votre BDD, ce fichier comporte
  - La structure des tables
  - Données par défauts

**Nota bene :** Toute la partie création des entités à été effectué grâce au système de *Reverse Engineering* depuis cette commande symfony ```php bin/console doctrine:mapping:import "App\Entity" annotation --path=src/Entity```, ce système permet de générer les *Entités* depuis une base de données.
Nous avions donc avant même la création de notre projet symfony un concepte de base de données (généré avec *JMerise*) :

![40% center](https://cdn.discordapp.com/attachments/672784092865101845/703351085863141396/unknown.png)
![40% center](https://cdn.discordapp.com/attachments/672784092865101845/703351174689980526/unknown.png)

### Étape de mise en place du site

- Effectuer une clone de ce projet sur votre poste (à un endroi accéssible à symfony).
- Modifier le fichier caché .env qui se trouve à la racine :
  - Modifier la dernière ligne de ce fichier en spécifiant votre accès à la base de données
  
  Format : ```DATABASE_URL=mysql://IDENTIFIANT:MOTDEPASSE@127.0.0.1:3306/marvenz-burns-db?serverVersion=5```
  
- Insérer le fichier de script sql dans votre BDD
- Démarrer le serveur symfony avec la commande : ```symfony serve``` ou ```symfony server:start```
- Accéder au site à l'adresse suivant : [http://127.0.0.1:8000/](http://127.0.0.1:8000/) ou [http://localhost:8000/](http://localhost:8000/)

## Les fonctionnalités
L'emsemble des fonctionnalités que nous allons lister sont des fonctionnalités qui peuvent être :
- Fonctionnalité terminé = ✅
- Fonctionnalité pas terminé = 🟡
- Fonctionnalité pas commencé = ❌

### CRUD de l'entité Slide
CRUD = **Create** / **Read** / **Update** / **Delete**, le CRUD désigne les quatres opérations de base pour la persistance des données, en particulier le stockage en base de données.
Dans le cadre de ce TP, nous avons généré nos *Controller* et nos *Vue* pour le CRUD avec l'aide de la commande symfony : ```php bin/console make:crud NomEntite```

#### Création d'un Slide ✅
Vous pouvez accéder à la page de création d'un Slide depuis la page [http://localhost:8000/admin](http://localhost:8000/admin)
##### Contrainte :
- Nous avons décidé que pour le début du développement de notre site, nous allions créer un seul slide à la fois.
  - En conséquence le bouton **Créer une Slide** est caché quand il existe déjà une Slide (si vous souhaitez voir le bouton il vous suffit de supprimer la slide précédente).

#### Voir un Slide ✅
Cette page est l'accueil. Vous pouvez accéder à la page de création d'un Slide depuis la page [http://localhost:8000/](http://localhost:8000/).

#### Mettre à jour un Slide ✅
Vous pouvez accéder à la page de création d'un Slide depuis la page [http://localhost:8000/admin](http://localhost:8000/admin).

#### Supprimer un Slide ✅
Vous pouvez accéder à la page de création d'un Slide depuis la page [http://localhost:8000/admin](http://localhost:8000/admin).


---


### CRUD de l'entité Image

#### Création d'une Image ✅
Vous pouvez accéder à la page de création d'une Image depuis la page [http://localhost:8000/image](http://localhost:8000/image).
Lors de la création d'une image, vous devez upload une image de votre poste.

#### Voir une Image ✅
Vous pouvez accéder à la page de création d'une Image depuis la page [http://localhost:8000/image/id](http://localhost:8000/image/id).

#### Mettre à jour une Image 🟡
Vous ne pouvez plus accéder à cette page, cependant pour prouvez vérifier son existance en allant voir le fichier **ImageController.php**
Mais nous n'avons pas eu le temps de l'exploiter, cela à mené à des fonctionnalité en moins comme :
- Modification de la place de l'image dans le slide
- Modification de l'Id de la Slide dans l'Image
- Ajout d'une Images dans un Slide
- Suppression d'une Image d'un Slide
- Modifier l'effet **Ken Burns**

#### Suppression d'une Image ✅
Vous pouvez accéder à la page de création d'une Image depuis la page [http://localhost:8000/image/id/show](http://localhost:8000/image/id/show).


---


### Affichage d'un canvas avec un effet ken burns par slide 🟡
Vous pouvez accéder à la page de création d'un Slide depuis la page [http://localhost:8000/](http://localhost:8000/).
Pour le bien du développement de notre site, nous avons tout d'abord chercher un moyen de réaliser un diaporama, avec pour chaque slide, un effet Ken Burns Fixe (qui ne peut pas être modifié).
Par manque de temps, le Slide qui est affiché actuellement sur la page d'accueil n'est pas connecté à des valeurs de la base de données.

## Conclusion
Nous avons pu remarqué pendant la réalisation de ce TP, que le manque de connaissance du groupe sur symfony, n'a pas pu être compensé par le temps imparti qui nous à été donné.
