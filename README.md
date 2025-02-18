# PHP Konsolen Anwendung

Lädt Benutzer von einer Schnittstelle und speichert diese in einer Datenbank.

## Ausführungsschritte

1. PHP

* Install threadsafe PHP version [8.3](https://windows.php.net/downloads/releases/php-8.3.16-Win32-vs16-x64.zip)
* Install [xdebug](https://xdebug.org/files/php_xdebug-3.4.1-8.3-ts-vs16-x86_64.dll) into extension folder
* Install [sqlsrv](https://go.microsoft.com/fwlink/?linkid=2258816) into extension folder

2. Consolen Anwendung herunterladen

```
git clone https://github.com/philipp-ullmann/PHP-Playground.git php_playground
```

3. In das Verzeichnis wechseln

```
cd php_playground
```

4. Environment Datei erstellen und editieren

```
cp .env.example .env
```

5. Abhängigkeiten installieren

```
composer install
```

6. Datenbank Schema erstellen

```
php bin/doctrine orm:schema-tool:update --force --dump-sql
```

7. Program ausführen

```
php program.php
```