<?php

class Investment extends BaseModel
{

    protected static $_tableName = 'investments';
    protected static $_primaryKey = 'id';

    protected static $_tableFields = [
        'investment_type_id',
        'short_name',
        'long_name',
        'day_value',
        'month_value',
        'year_value',
        'year3_value',
        'year5_value',
        'last_value',
        'last_update'
    ];

    protected static function defineRelations()
    {
        self::addRelationOneToOne('investment_type_id', 'InvestmentType', 'id');
    }

    public $id;
    public $invetment_type_id;
    public $short_name;
    public $long_name;
    public $day_value;
    public $month_value;
    public $year_value;
    public $year3_value;
    public $year5_value;
    public $last_value;
    public $last_update;

}