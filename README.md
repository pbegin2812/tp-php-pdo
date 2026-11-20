# TP PHP & PDO – Ludothèque

Dans cette série de 9 TP, vous allez écrire des pages PHP qui lisent et modifient une base de données MySQL avec **PDO**.

## 1. Installer la base `ludotheque` dans MySQL

1. Lancez **MAMP** (ou WAMP / XAMPP), puis cliquez sur **Start** pour démarrer Apache et MySQL.
2. Ouvrez **phpMyAdmin** :
   - MAMP : http://localhost:8888/phpMyAdmin
   - WAMP / XAMPP : http://localhost/phpmyadmin
3. Cliquez sur l'onglet **Importer**.
4. Choisissez le fichier `base_ludotheque.sql` de ce dépôt, puis cliquez sur **Importer** (ou **Exécuter**) en bas de la page.
5. La base **ludotheque** apparaît à gauche. Elle contient une table **jeu** avec 10 jeux.

Autre méthode : ouvrez l'onglet **SQL**, collez-y le contenu de `base_ludotheque.sql` et cliquez sur **Exécuter**.

> Pour remettre la base à zéro (après les TP 5, 7, 8 et 9), il suffit de réimporter `base_ludotheque.sql`.

### Structure de la table `jeu`

| Colonne | Type        | Description                     |
|---------|-------------|---------------------------------|
| id      | INT         | Identifiant (auto-incrémenté)   |
| titre   | VARCHAR(50) | Titre du jeu                    |
| genre   | VARCHAR(20) | Action, Aventure, Course...     |
| annee   | INT         | Année de sortie                 |
| note    | INT         | Note sur 20                     |

## 2. Récupérer le TP avec Git

Il faut que Git soit installé (`git --version` dans un terminal pour le vérifier ; sinon : https://git-scm.com).

### Cloner le dépôt dans le dossier web du serveur

Ouvrez un terminal, placez-vous dans le dossier web de votre serveur, puis clonez le dépôt :

```bash
# MAMP (Mac)
cd /Applications/MAMP/htdocs

# WAMP (Windows) :  cd C:\wamp64\www
# XAMPP (Windows) : cd C:\xampp\htdocs

git clone https://github.com/Ngenaudet/tp-php-pdo.git
cd tp-php-pdo
```

### Créer votre propre branche

Ne travaillez pas sur la branche `main` : c'est celle du professeur. Créez votre branche, avec votre nom :

```bash
git checkout -b prenom-nom
```

Vérifiez que vous êtes bien dessus (la branche active a une `*`) :

```bash
git branch
```

### Enregistrer votre travail (commit)

Après chaque TP terminé :

```bash
git add .
git commit -m "TP 1 terminé"
```

Pour voir l'historique de vos commits :

```bash
git log --oneline
```

### Récupérer les nouveautés du professeur

Si le professeur ajoute ou corrige des fichiers sur `main` :

```bash
git commit -am "Sauvegarde avant mise à jour"   # si vous avez du travail non enregistré
git pull origin main
```

Git fusionne les nouveautés dans votre branche sans effacer votre travail.

### Envoyer votre branche sur GitHub (si le professeur vous a donné l'accès)

```bash
git push -u origin prenom-nom
```

Les fois suivantes, un simple `git push` suffit.

## 3. Ouvrir les pages du TP

Ouvrez une page dans le navigateur, par exemple :
- MAMP : http://localhost:8888/tp-php-pdo/tp1_connexion.php
- WAMP / XAMPP : http://localhost/tp-php-pdo/tp1_connexion.php

Identifiants MySQL :

| Serveur       | Utilisateur | Mot de passe |
|---------------|-------------|--------------|
| MAMP          | `root`      | `root`       |
| WAMP / XAMPP  | `root`      | *(vide)*     |x²

## 4. Consignes

- Faites les TP **dans l'ordre** : chacun réutilise ce que vous avez appris avant.
- Chaque fichier contient son **énoncé** en haut. Écrivez votre code dans les blocs `<?php ?>` vides.
- Ne modifiez pas le HTML fourni (formulaires, attributs `name`), sauf si l'énoncé le demande.
- Après le TP 1, recopiez votre code de connexion dans `connexion.php` (sans le message « Connexion réussie ! »). Les TP 2 à 9 l'utilisent avec `require 'connexion.php';`.
- Testez vos requêtes SQL dans l'onglet **SQL** de phpMyAdmin avant de les écrire en PHP.
- Dès qu'une valeur vient de l'utilisateur (formulaire, URL), utilisez une **requête préparée** (`prepare()` + `execute()`).

| TP | Fichier                      | Thème                                   |
|----|------------------------------|-----------------------------------------|
| 1  | `tp1_connexion.php`          | Se connecter à la base                  |
| 2  | `tp2_compter.php`            | Compter les jeux                        |
| 3  | `tp3_liste.php`              | Lister les jeux dans un tableau         |
| 4  | `tp4_tri_filtre.php`         | Trier et filtrer                        |
| 5  | `tp5_ajout_exec.php`         | Ajouter, modifier, supprimer avec exec()|
| 6  | `tp6_recherche.php`          | Recherche avec une requête préparée     |
| 7  | `tp7_ajout_formulaire.php`   | Formulaire d'ajout                      |
| 8  | `tp8_modifier_supprimer.php` | Modifier et supprimer                   |
| 9  | `tp9_bonus_ludotheque.php`   | Bonus : mini-application                |
