<?php

namespace Opmvpc\Stats;

use Opmvpc\Stats\Functions\Average;

class Stats
{
    public function average($list): float
    {
        return Average::calculate($list);
    }
}
