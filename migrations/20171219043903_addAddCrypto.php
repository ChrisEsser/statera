<?php

use Phpmig\Migration\Migration;

class AddAddCrypto extends Migration
{
    /**
     * Do the migration
     */
    public function up()
    {

        $coinData = file_get_contents('https://api.coinmarketcap.com/v1/ticker');
        $coinData = json_decode($coinData);

        $sql = 'INSERT INTO investments (invetment_type_id, long_name, short_name, last_value, last_update) VALUES ';

        $first = true;

        foreach ($coinData as $coin) {

            if (!$first) $sql .= ', ';
            $first = false;
            $sql .= ' (1, \'' . $coin->name . '\', \'' . $coin->symbol . '\', \'' . $coin->price_usd . '\', \'' .  date("Y-m-d H:i:s", $coin->last_updated) . '\') ';

        }

        $container = $this->getContainer();
        $container['db']->query($sql);

    }

    /**
     * Undo the migration
     */
    public function down()
    {

        $sql = 'TRUNCATE TABLE investments';
        $container = $this->getContainer();
        $container['db']->query($sql);

    }
}
