<?php namespace Modules\Product\Entities;

class Cart  {

    public $items = null;
    public $totalQty = 0;
    public $totalPrice = 0;

    public function __construct($oldCart)
    {
        if ($oldCart) {
            $this->items = $oldCart->items;
            $this->totalQty = $oldCart->totalQty;
            $this->totalPrice = $oldCart->totalPrice;
        }
    }

    public function add($item, $id) {
        $stoedItem = ['qty' => 0, 'price' => $item->price, '$item' => $item];
        if ($this->items) {
            if (array_keys_exists($id, $this->items)) {
                $stoedItem = $this->items[$id];
            }
        }
        $stoedItem['qty']++;
        $stoedItem['price'] = $item->price * $stoedItem['qty'];
        $this->items[$id] = $stoedItem;
        $this->totalQty++;
        $this->totalPrice += $item->price;
    }

}