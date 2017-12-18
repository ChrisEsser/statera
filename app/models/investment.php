<?php

class Investment extends BaseModel
{

    protected static $_tableName = 'investments';
    protected static $_primaryKey = 'id';

    protected static $_tableFields = [
        'shortname',
        'longname',
        'usd_value',
        'last_sync',
        'sync_interval',
        'value_endpoint',
        'membership_level'
    ];

    protected static function defineRelations()
    {
        self::addRelationOneToMany('id', 'UserInvestment', 'investment_id');
    }

    public $id;
    public $shortname;
    public $longname;
    public $usd_value;
    public $last_sync;
    public $sync_interval;
    public $value_endpoint;
    public $membership_level;

}