<?php

use Phpmig\Migration\Migration;

class CreatUserTable extends Migration
{
    /**
     * Do the migration
     */
    public function up()
    {

        $sql = 'CREATE TABLE users (
                  id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
                  username VARCHAR(255) UNIQUE NOT NULL, 
                  first_name VARCHAR(255), 
                  last_name VARCHAR(255), 
                  password binary(60), 
                  admin BIT NOT NULL DEFAULT 0
                );';

        // initialize the first user and set it to admin
        $sql .= "INSERT INTO users (username, password, admin) VALUES ('" . getenv('INIT_USERNAME') . "', '" . password_hash(getenv('INIT_USER_PASS'), PASSWORD_DEFAULT) . "', 1)";

        $container = $this->getContainer();
        $container['db']->query($sql);

    }

    /**
     * Undo the migration
     */
    public function down()
    {

        $sql = 'DROP TABLE users';
        $container = $this->getContainer();
        $container['db']->query($sql);

    }
}
