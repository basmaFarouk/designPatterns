<?php

class EnemyTank implements IEnemy{
    public function fireCanols()
    {
        echo ('Tank Fire Cannols');
    }

    public function refillBanzine()
    {
        echo ('Tank Refill Banzine');
    }
}