# generation-jdr
Site de génération JDR

## Installation

Créer une base de donnée, par exemple:

    echo "create database generation_jdr" | mysql --user root --host 127.0.0.1 -p

Installer la base de données:

    mysql --user root --host 127.0.0.1 -p generation_jdr < sql/db.sql && \
      mysql --user root --host 127.0.0.1 -p generation_jdr < sql/prenom.sql && \
      mysql --user root --host 127.0.0.1 -p generation_jdr < sql/nom.sql

Installer les identifiants de votre db dans le site:

    cp include/database_ids.php.sample include/database_ids.php
    edit include/database_ids.php
