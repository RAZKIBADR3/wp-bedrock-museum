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

### 4. Créer la base de données

Créer une base de données vide.


### 5. Configurer l’environnement

Copier `.env.example` vers `.env`, puis mettre à jour :

```env
DB_NAME='database_name'
DB_USER='database_user'
DB_PASSWORD='database_password'

WP_HOME='http://example.com'
WP_SITEURL="${WP_HOME}/wp"
```

### 6. Lancer le projet

Utiliser **XAMPP**.


### 7. Lancer le build (mode développement)

```bash
cd web/app/themes/museum-theme
npm start
```

---

## ⚠️ Prérequis

Vous devrez peut-être activer l’extension **Intl** de PHP.
Dans votre fichier `php.ini`, assurez-vous que la ligne suivante n’est pas commentée :

```ini
extension=intl
```

## 8. Accès au site

Pour une installation par défaut, l’accès au site se fait via :

http://{yourhost}/web/wp

### 9. Activer le thème

Dans l’admin WordPress, allez dans **Apparence > Thèmes** et activez **museum-theme** pour accéder aux blocs Gutenberg.

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
## 🖼️ Images

<img width="1919" height="879" alt="Screenshot 2026-04-24 031351" src="https://github.com/user-attachments/assets/df0ea4a6-8b26-451e-8f24-4e2f2832db21" />
<img width="1919" height="877" alt="Screenshot 2026-04-24 031444" src="https://github.com/user-attachments/assets/72b4b3c0-742c-44f9-9e15-5dbc5c2874d2" />
<img width="1261" height="872" alt="Screenshot 2026-04-24 031512" src="https://github.com/user-attachments/assets/a3392790-5f82-43be-9554-596060a47ecc" />
<img width="455" height="866" alt="Screenshot 2026-04-24 031539" src="https://github.com/user-attachments/assets/6e037ecd-f6d9-46c1-b9ce-6f1000cc8863" />
<img width="458" height="913" alt="Screenshot 2026-04-24 031610" src="https://github.com/user-attachments/assets/2e774447-03ee-4494-b009-dd6a844f178d" />




## 👨‍💻 Auteur

**Badr Razki**
