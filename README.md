# 🦁 Zooparc de Thoiry — Site web dynamique

Site web PHP/MySQL permettant de consulter et gérer les animaux
du Zooparc de Thoiry, avec un système d'authentification par rôles.

---

## ✨ Fonctionnalités

- 🔐 Authentification (login / logout) avec gestion de sessions PHP
- 👤 Deux rôles : **Visiteur** (consultation) et **Soigneur** (ajout d'animaux)
- 🐆 Catalogue des animaux avec fiches détaillées (nom, poids, naissance, photo)
- ➕ Ajout d'animaux réservé aux soigneurs connectés
- 🌙 Mode sombre / clair dynamique en JavaScript
- 🛡️ Requêtes SQL préparées (protection contre les injections SQL)

---

## 🛠️ Technologies utilisées

- **PHP** — logique serveur et sessions
- **MySQL / PDO** — base de données
- **HTML / CSS** — structure et style
- **JavaScript** — interactivité (mode sombre/clair)
- **WampServer / phpMyAdmin** — environnement local

---

## ⚙️ Installation

1. Installer [WampServer](https://www.wampserver.com/)
2. Placer les fichiers dans `C:/wamp64/www/Zooparc-Thoiry/`
3. Importer `zoo2024.sql` dans phpMyAdmin
4. Accéder à `http://localhost/Zooparc-Thoiry/`

---

## 👤 Comptes de test

| Login | Mot de passe | Rôle |
|-------|-------------|------|
| martin | mmmm1111 | Soigneur |
| pikachu | pppp1111 | Visiteur |



---

> ⚠️ Projet scolaire — le hashage des mots de passe n'est pas implémenté.
