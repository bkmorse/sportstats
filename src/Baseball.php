<?php

namespace bkmorse\sportstats;

class Baseball
{
    /**
     * Create a new Baseball Instance
     */
    public function __construct()
    {
        //
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

    public function onBasePercentage($ob, $pa)
    {
        return $this->formatStat($ob / $pa);
    }

    public function era($runs, $innings)
    {
        return number_format(($runs * 9)/($innings), 2);
    }

    public function sluggingPercentage($bases, $at_bats)
    {
        return ltrim(number_format(($bases/$at_bats), 3), '0');
    }

    public function formatStat($stat)
    {
        return ltrim(number_format($stat, 3), '0');
    }
   
}