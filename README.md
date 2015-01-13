#Sport Stats
Stat calculations for various sports
####Example
Require in composer.json:

`"bkmorse/sportstats": "1.0.*@dev"`

`Run composer update`

```
require_once __DIR__ . '/vendor/autoload.php';
$baseball = \bkmorse\sportstats\Factory::create('\bkmorse\sportstats\Baseball');
print $baseball->battingAverage(50, 100);
```