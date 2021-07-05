# Loto

Loto is an application of management of lottery
game by webmaster, organizers and players.

## Development

### Prerequisites

 * PHP 8.0
 * Composer
 * Symfony CLI
 * Docker
 * Docer-compose
 * NodeJS
 * npm

You can check prerequisites (except for Docker, Docker-compose, NodeJS and npm)  with :
```bash
symfony check:requirements
```

### Run the application

```bash
composer install
npm install
npm run build
docker compose up -d
symfony serve -d
```

### Run tests

```bash
php bin/phpunit --testdox
```
