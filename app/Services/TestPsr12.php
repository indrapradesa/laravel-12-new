<?php

namespace App\Services;

class TestPsr12
{
    public function abc($foo, $bar)
    {
        if ($foo === $bar) {
            echo "Same";
        } else {
            echo"Different";
        }
    }
}
