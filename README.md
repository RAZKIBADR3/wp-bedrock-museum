Documentation Du Projet WordPress Musée


🚀 Instructions d’installation

1. Cloner le projet
git clone <your-repo-url>
cd project-name

2. Installer les dépendances PHP
composer install

3. Installer les dépendances JS (pour les blocs Gutenberg)
cd web/app/themes/museum-theme
npm install

4. Lancer le build (mode développement)
npm start

5. Configurer l’environnement
Copier .env.example vers .env puis mettre à jour :

DB_NAME=database_name
DB_USER=root
DB_PASSWORD=
DB_HOST=localhost

WP_HOME=http://museum.local
WP_SITEURL=${WP_HOME}/wp

6. Créer la base de données
Créer une base de données vide avec le même nom que DB_NAME.

7. Lancer le projet
Utiliser : XAMPP

⚠️ Prérequis

Vous devrez peut-être activer l’extension Intl de PHP.
Dans votre fichier php.ini, assurez-vous que la ligne suivante n’est pas commentée :
extension=intl


🧱 Fonctionnalités
- Configuration WordPress basée sur Bedrock
- Type de contenu personnalisé CPT(Custom Post Type): Agenda
- Champs ACF définis en code (sans utilisation de l’admin)
- Association les champs ACF au Custom Post Type
- Bloc Gutenberg personnalisé (Agenda)
- Rendu dynamique avec PHP (aucun contenu codé en dur)
- Fonctionnalité « tous les événement » (les 4 premiers éléments affichés)
- Design Responsive (mobile / tablette / desktop)

🎯 Notes
- Les champs ACF sont enregistrés via du code avec acf-builder
- Le bloc Gutenberg est implémenté avec block.json natif
- JavaScript est utilisé pour les interactions frontend (bouton « tous les événement »)

👨‍💻 Auteur

Badr Razki
