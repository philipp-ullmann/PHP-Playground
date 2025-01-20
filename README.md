# PHP Konsolen Anwendung

Lädt Benutzer von einer Schnittstelle und speichert diese in einer Datenbank.

## Ausführen

1. Consolen Anwendung runterladen

```
git clone https://github.com/philipp-ullmann/PHP-Playground.git php_playground
```

2. Wechsle in das Verzeichnis

```
cd php_playground
```

3. Installiere Abhängigkeiten

```
composer install
```

4. Starte die MySQL Datenbank

```
docker-compose up -d
```

5. Erstelle das Datenbank Schema

```
php bin/doctrine orm:schema-tool:update --force --dump-sql
```

6. Führe das Program aus

```
php program.php
```