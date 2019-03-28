Dans ce checkpoint, tu vas devoir créer un début de répertoire de contacts.

**Etapes :**

1. Pour cela, nous te fournissons un modèle de base de données (tu découvrira bientôt qu'il s'agit d'un MCD) *model.png*, à toi de créer physiquement la base de données correspondante (aucune restriction sur les outils).
Fais attention aux contraintes comme le nom de la base de données qui doit se nommer *checkpoint1*, ainsi qu'au nom des champs.

2. Une fois cette base de données créée, tu devras importer dedans le contenu du fichier SQL *data/contact.sql* joint.
Il contient un minimum de données pour remplir ta base. *Si tu n'as pas été rigoureux précedemment, tu risques de rencontrer des problèmes lors de l'import !.*

3. Maintenant que ta base est créée et remplie, tu dois créer une page *public/index.php* qui va :

    - Se connecter à la base de données via PDO,
    - Lire le contenu de la base de données,
    - Afficher toutes les données (contact + civilité) ordonnées par nom croissant dans un tableau HTML.

le tableau HTML devra avoir les entêtes suivants :

    - Civilité
    - NOM Prénom

4. La colonne NOM Prénom sera le résultat de l'appel d'une fonction PHP nommée `fullname` et qui devra être créée dans le fichier *src/functions.php*.
Cette dernière prendra 2 paramètres en entrée (le prénom et le nom) et retournera les deux concaténés avec un espace
pour les séparer (pense au typage). Le nom devra être entièrement en majuscule et le prénom aura uniquement la 1ere lettre en majuscule (utilise des fonctions natives de PHP).

5. Pour la colonne civilité, l'information est contenue dans une autre table. Pour pouvoir associer les deux informations : le contact et sa civilité, il faudrait passer par ce que l'on appel une _"jointure"_, mais ça, normalement, tu ne sais pas encore le faire ! En revanche, tu peux passer par un peu d'algo côté PHP afin de n'afficher la civilité que si son champs `id` correspond à la valeur du champs `civility_id` du contact.

6. Ensuite, il te faudra créer un formulaire élégant permettant de créer un nouveau contact. Le nom des champs de formulaire
devra correspondre aux noms des champs de base de données.
(on ne s'occupe pas de la modification ni de la suppression) mais tous les champs sont **obligatoires** (tests serveur).

7. Ta page devra être stylisée un minimum grâce à `Bootstrap` (utilise le CDN pour gagner du temps).

8. Ton code devra respecter les bonnes pratiques et en l'occurence les PSR-1 et PSR-2 pour la partie PHP.

9. Ton code devra être pushé sur le repository du projet. Sur une branche portant ta ville ainsi que ton prénom et NOM, séparés par un *underscore* (ex. : ORLEANS_Elisa_DUPONT).. Pense aux commits **atomiques**.

Bon courage !
