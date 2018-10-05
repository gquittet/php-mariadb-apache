# PHP - MariaDB - Apache SEED

This seed is for creating a lightweight web server with apache, PHP and MySQL.

## Commands

### How to run?


Just run this command

```
docker-compose up
```

### Stop

Just press on *Ctrl+C*

## Problems?

Just remove the database and the php folders and recreate it.

The content of the index.php is:

```php
<?php

$conn = new PDO('mysql:host=db;dbname=tdi;charset=utf8', 'tdi', 'tdi');
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$conn = null;

phpinfo();

?>
```