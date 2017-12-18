<?php

class UserInvestment extends BaseModel
{

    protected static $_tableName = 'user_investments';
    protected static $_primaryKey = 'id';

    protected static $_tableFields = [
        'user_id',
        'investment_id',
        'balance',
        'updated',
    ];

    protected static function defineRelations()
    {
        self::addRelationOneToOne('user_id', 'User', 'id');
    }

    public $id;
    public $user_id;
    public $investment_id;
    public $balance;
    public $updated;

}