# First Docker Project

Questo progetto utilizza Docker per creare un ambiente con PHP e MySQL con una connessione PDO.

## Requisiti

- Docker Desktop

## Setup

Clona il repository, avvia i container con `docker-compose up --build` e accedi a `http://localhost:8080/index.php` per verificare la connessione.

## Struttura

Il progetto include:
- docker-compose.yml per configurare i container
- src/index.php per testare la connessione PHP-MySQL
