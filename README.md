# PHP Konsolen Anwendung

Lädt Benutzer von einer Schnittstelle und speichert diese in einer Datenbank.

## Ausführungsschritte

1. Consolen Anwendung herunterladen

```
git clone https://github.com/philipp-ullmann/PHP-Playground.git php_playground
```

2. In das Verzeichnis wechseln

```
cd php_playground
```

3. Abhängigkeiten installieren

```
composer install
```

4. MySQL Datenbank starten

```
docker-compose up -d
```

5. Datenbank Schema erstellen

```
php bin/doctrine orm:schema-tool:update --force --dump-sql
```

6. Program ausführen

```
php program.php
```