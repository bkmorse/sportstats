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

    /**
     * Calcaulates player's batting average
     *
     * @param int $hits
     * @param int $at_bats
     * @return string
     */
    public function battingAverage($hits, $at_bats)
    {
        return ltrim(number_format(($hits/$at_bats), 3), '0');
    }
   
}
