[![Build Status](https://travis-ci.org/bkmorse/sportstats.svg?branch=master)](https://travis-ci.org/bkmorse/sportstats/)

#Sport Stats
Stat calculations for various sports
####Install
Require in composer.json:

`"bkmorse/sportstats": "1.1.*@dev"`

`Run composer update`

####Example
```
require_once __DIR__ . '/vendor/autoload.php';
$baseball = \bkmorse\sportstats\Factory::create('\bkmorse\sportstats\Baseball');
print $baseball->battingAverage(50, 100); // batting average
print $baseball->sluggingPercentage(20, 32); // slugging percentage
```