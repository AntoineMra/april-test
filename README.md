# Symfony Docker App [Kévin Dunglas Template]

A [Docker](https://www.docker.com/)-based installer and runtime for the [Symfony](https://symfony.com) web framework,
with [FrankenPHP](https://frankenphp.dev) and [Caddy](https://caddyserver.com/)

## Install !

1. If not already done, [install Docker Compose](https://docs.docker.com/compose/install/) (v2.10+)
2. Run `docker compose build --no-cache` to build fresh images
3. Run `docker compose up --pull -d --wait` to start the project
4. Open `https://localhost` in your favorite web browser and [accept the auto-generated TLS certificate](https://stackoverflow.com/a/15076602/1352334)
5. Run `docker compose down --remove-orphans` to stop the Docker containers.

# Cahier des charges V1

## Contexte :

L’application Symfony que vous allez développer est destiné à un usage interne de collaborateurs qui souhaitent partager un annuaire de prospects/clients. L’objectif est de retrouver rapidement des coordonnées de contact, mais également les derniers échanges qui ont eu lieu avec chacun de ces contacts. A chaque modification d’une fiche contact, il est nécessaire d’historiser les changements. Il est également possible de télécharger une fiche au format PDF.

2 profils sont présents sur l’application :

- Collaborateur qui correspond au ROLE_USER (peut consulter/créer/modifier une fiche)

- Administrateur qui correspond au ROLE_ADMIN (hérite des droits du ROLE_USER et peut supprimer une fiche)

### Implémentation souhaitée :

- Utiliser la version LTS de Symfony/PHP

- Implémenter un élément d’écoute permettant l’historisation des modifications [❌]

- Implémenter le nécessaire pour la génération d’un document PDF [🔄]

- Réaliser l’intégration minimale mais responsive de l’interface [🔄]

### Les + :

- Utiliser docker

- Bonnes pratiques Git


