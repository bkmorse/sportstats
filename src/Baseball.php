<?php

namespace bkmorse\sportstats;

class Baseball
{

    /**
     * Create a new Baseball Instance
     */
    public function __construct()
    {

    }

    public function battingAverage($at_bats, $hits)
    {
        return number_format(($hits/$at_bats), 3);
    }

   
}
