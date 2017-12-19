<?php

class InvestmentTypes extends BaseModel
{

    protected static $_tableName = 'investment_types';
    protected static $_primaryKey = 'id';

    protected static $_tableFields = [
        'name',
    ];

    protected static function defineRelations()
    {
        self::addRelationOneToMany('id', 'Investment', 'investment_type_id');
    }

    public $id;
    public $name;

}