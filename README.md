# PHP - MariaDB - Apache SEED

This seed is for creating a lightweight web server with Apache, PHP and MySQL.

## Informations

| Name     | URL       | Port |
| -------- | --------- | ---- |
| Database | localhost | 7001 |
| PHP      | localhost | 7000 |


## Commands

### Start


Just run this command

```
docker-compose up
```

### Stop

Just press on *Ctrl+C*

### Clean (only to delete project)

```
rm -rf database
docker-compose rm
docker rmi tdi_php_apache
```