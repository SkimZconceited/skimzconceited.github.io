--TEST--
IntlCalendar::roll(): bad arguments
--INI--
date.timezone=Atlantic/Azores
--EXTENSIONS--
intl
--FILE--
<?php

$c = new IntlGregorianCalendar(NULL, 'pt_PT');

try {
    var_dump($c->roll(-1, 2));
} catch (\ValueError $e) {
    echo $e->getMessage() . \PHP_EOL;
}

try {
    var_dump(intlcal_roll(1, 2, 3));
} catch (\TypeError $e) {
    echo $e->getMessage() . \PHP_EOL;
}
?>
--EXPECT--
IntlCalendar::roll(): Argument #1 ($field) must be a valid field
intlcal_roll(): Argument #1 ($calendar) must be of type IntlCalendar, int given
