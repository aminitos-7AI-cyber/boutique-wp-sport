# Boutique WP - Articles de Sport

## Description
Ce projet est une boutique en ligne d'articles de sport développée avec WordPress et WooCommerce. Il a été réalisé dans le cadre du module CMS du semestre 5.

## Prérequis
- Serveur local (XAMPP, MAMP, ou autre).
- Accès à phpMyAdmin pour importer la base de données.

## Installation

### 1. Clonez le projet :
```bash
git clone https://github.com/aminitos-7AI-cyber/boutique-wp-sport.git
```

### 2. Configurez le serveur local :
- Placez les fichiers dans le répertoire `htdocs` (ou équivalent).
- Configurez Apache et MySQL dans votre serveur local.

### 3. Importer la base de données :
- Ouvrez phpMyAdmin.
- Créez une base de données appelée `ecommerce_db`.
- Importez le fichier `ecommerce_db.sql` situé dans le dossier `database`.

### 4. Configurez WordPress :
- Modifiez le fichier `wp-config.php` :
  - Nom de la base de données : `ecommerce_db`
  - Utilisateur MySQL : `root`
  - Mot de passe : (vide par défaut pour XAMPP/MAMP).

### 5. Accédez au site :
- Rendez-vous sur `http://localhost/boutique_wp/`.

## Identifiants administrateur
- **Nom d'utilisateur** : boutique_admin
- **Mot de passe** : p#A#U(F4Cunfr5(oO9

## Fonctionnalités principales
- Catégories de produits : Chaussures, Vêtements, Accessoires.
- Systèmes de filtres : Tri par prix, popularité, et attributs.
- Paiements : PayPal, paiement à la livraison (COD).
- Livraison : Zones configurées pour le Maroc avec frais fixes.

## Auteur
Ce projet a été réalisé par Amine Aboukir & Ait smain Abderrahim, dans le cadre du module CMS.
