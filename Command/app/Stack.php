<?php
namespace App;

use SplFixedArray;

class Stack{
    public $arr;
    public $front;
    public $end;

    public function __construct()
    {
        $this->arr=[];
        $this->top=-1;
    }

    public function push($val){
        $this->top++;
        $this->arr[$this->top]=$val;
    }

    public function isEmpty(){
        if($this->top==-1){
            return true;
        }
        return false;
    }

    public function top(){
        if($this->isEmpty()) return -1;
        else return $this->arr[$this->top];
    }

    public function pop(){
        if($this->isEmpty()) return;
        else{
            $this->top--;
        }
    }
}