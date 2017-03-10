<?php

class Cart
{
	public $items;

	public function addItem($id, $qty)
	{
		$this->items[$id] += $qty;
	}

	public function removeItem($id, $qty)
	{
		if ($this->items[$id] > $qty) {
			$this->items[$id] -= $qty;
			return true;
		} elseif ($this->items[$id] == $qty) {
			unset($this->items[$id]);
			return true;
		} else {
			return false;
		}
	}
}