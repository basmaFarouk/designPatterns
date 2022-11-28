<?php

class MenuItem{
    public function __construct(
        public string $name,
        public string $description,
        public bool $vegetarian,
        public float $price,
        )
    {
        
    }
}

interface Menu{
    public function createIterator();
}

class DinerMenu implements Menu{
    public $menuItems=[];
    public function __construct()
    {
        $this->addItem('soap','light',true,20);
        $this->addItem('macaroon','heavy',false,80);
    }
    public function addItem($name,$description,$vegetarian,$price){
        $menuItem=new MenuItem($name,$description,$vegetarian,$price);
        $this->menuItems[]=$menuItem;
    }

    public function createIterator(){
        return new DinnerMenuIterator($this->menuItems);
    }
}

interface MyIterator{
    public function hasNext();
    public function next_one();
}

class DinnerMenuIterator implements MyIterator{
    public $menuItems=[];
   public $position=0;

   public function __construct($items)
   {
    $this->menuItems=$items;
   }

   public function next_one()
   {
    $menuItem=$this->menuItems[$this->position];
    $this->position++;
    return $menuItem;
   }

   public function hasNext()
   {

    if($this->position >= count($this->menuItems)){
        return false;
    }else{
        return true;
    }

   }

}

class Waitress{
    public $dinerMenu;
    public function __construct(Menu $dinerMenu,Menu $cakeMenu=null)
    {
        $this->dinerMenu=$dinerMenu;
    }

    public function printMenu(){
        $dinerMenuIterator=$this->dinerMenu->createIterator();
        $this->printMenu2($dinerMenuIterator);
    }
    private function printMenu2(MyIterator $iterator){
        while($iterator->hasNext()){
            // echo "<pre>";
            // var_dump($iterator->next_one());
            // echo "</pre>";
            $menuItem=$iterator->next_one();
            echo($menuItem->name."<br>");
            echo($menuItem->description."<br>");
            echo($menuItem->price."<br>");
        }
    }
}

$dinnerMenu=new DinerMenu();
$waiter=new Waitress($dinnerMenu);
$waiter->printMenu();
