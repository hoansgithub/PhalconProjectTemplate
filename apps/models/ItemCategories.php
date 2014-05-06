<?php

class ItemCategories extends Phalcon\Mvc\Model
{
    /**
     * @var integer
     */
    public $cat_id;

    /**
     * @var string
     */
    public $name;
	/**
     * @var int
     */
    public $sort_index;
    /**
     * @var bool
     */
    public $active;
    public function initialize()
    {
        $this->hasMany('item_id', 'Items', 'cat_id', array(
        	'foreignKey' => array(
        		'message' => 'Product Type cannot be deleted because it\'s used on Products'
        	)
        ));
    }
}
