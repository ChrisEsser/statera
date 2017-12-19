<?php

class UserInvestment extends BaseModel
{

    protected static $_tableName = 'user_investments';
    protected static $_primaryKey = 'id';

    protected static $_tableFields = [
        'user_id',
        'investment_id',
        'current_balance'
    ];

    protected static function defineRelations()
    {
        self::addRelationOneToOne('user_id', 'User', 'id');
        self::addRelationOneToOne('investment_id', 'Investment', 'id');
    }

    public $id;
    public $user_id;
    public $investment_id;
    public $current_balance;

}