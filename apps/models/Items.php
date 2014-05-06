<?php

class Items extends Phalcon\Mvc\Model
{
    /**
     * @var integer
     */
    public $item_id;

    /**
     * @var integer
     */
    public $cat_id;

    /**
     * @var string
     */
    public $name;

    /**
     * @var decimal
     */
    public $price;
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
        $this->belongsTo('cat_id', 'ItemCategories', 'item_id', array(
		'reusable' => true
	));
    }

}
