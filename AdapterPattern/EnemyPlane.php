<?php

class EnemyPlane implements IEnemy{
    public function fireCanols()
    {
        echo ('Plane Fire Cannols');
    }

    public function refillBanzine()
    {
        echo ('Plane Refill Banzine');
    }
}