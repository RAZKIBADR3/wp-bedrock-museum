# Documentation du projet Musée (WordPress + Bedrock)

## 🚀 Instructions d’installation

### 1. Cloner le projet

```bash
git clone <your-repo-url>
cd project-name
```

### 2. Installer les dépendances PHP

```bash
composer install
```

### 3. Installer les dépendances JS (blocs Gutenberg)

```bash
cd web/app/themes/museum-theme
npm install
```

### 4. Lancer le build (mode développement)

```bash
npm start
```

### 5. Configurer l’environnement

Copier `.env.example` vers `.env`, puis mettre à jour :

```env
DB_NAME=database_name
DB_USER=root
DB_PASSWORD=
DB_HOST=localhost

WP_HOME=http://museum.local
WP_SITEURL=${WP_HOME}/wp
```

### 6. Créer la base de données

Créer une base de données vide avec le même nom que `DB_NAME`.

### 7. Lancer le projet

Utiliser **XAMPP**.

---

## ⚠️ Prérequis

Vous devrez peut-être activer l’extension **Intl** de PHP.
Dans votre fichier `php.ini`, assurez-vous que la ligne suivante n’est pas commentée :

```ini
extension=intl
```

---

## 🧱 Fonctionnalités

* Configuration WordPress basée sur **Bedrock**
* Type de contenu personnalisé (CPT) : **Agenda**
* Champs **ACF** définis en code (sans interface d’administration)
* Association des champs ACF au Custom Post Type
* Bloc **Gutenberg** personnalisé (Agenda)
* Rendu dynamique avec PHP (aucun contenu codé en dur)
* Fonctionnalité **« Voir plus »** (affichage des 4 premiers éléments)
* Design **responsive** (mobile / tablette / desktop)

---

## 🎯 Notes

* Les champs ACF sont enregistrés via du code avec **acf-builder**
* Le bloc Gutenberg utilise un fichier `block.json` natif
* JavaScript gère les interactions frontend (bouton « Voir plus »)

---

## 👨‍💻 Auteur

**Badr Razki**
