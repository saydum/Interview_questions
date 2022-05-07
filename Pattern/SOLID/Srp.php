<?php

class Orders
{
    public function calculateTotalSum(){/*...*/}
    public function getItems(){/*...*/}
    public function getItemCount(){/*...*/}
    public function addItem($item){/*...*/}
    public function deleteItem($item){/*...*/}

    public function printOrder(){/*...*/}
    public function showOrder(){/*...*/}

    public function load(){/*...*/}
    public function save(){/*...*/}
    public function update(){/*...*/}
    public function delete(){/*...*/}
}

// ----------------SRP----------------------------//

class Order
{
	public function calculateTotalSum(){/*...*/}
	public function getItems(){/*...*/}
	public function getItemCount(){/*...*/}
	public function addItem($item){/*...*/}
	public function deleteItem($item){/*...*/}
}

class OrderRepository
{
	public function load($orderID){/*...*/}
	public function save($order){/*...*/}
	public function update($order){/*...*/}
	public function delete($order){/*...*/}
}

class OrderViewer
{
	public function printOrder($order){/*...*/}
	public function showOrder($order){/*...*/}
}