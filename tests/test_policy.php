<?php
declare(strict_types=1);
require __DIR__ . "/../src/Policy.php";

use Portfolio\Policy;
use Portfolio\Signal;

$signal_case_1 = new Signal(63, 77, 13, 6, 12);
assert(Policy::score($signal_case_1) === 201);
assert(Policy::classify($signal_case_1) === "accept");
$signal_case_2 = new Signal(80, 76, 25, 20, 5);
assert(Policy::score($signal_case_2) === 91);
assert(Policy::classify($signal_case_2) === "review");
$signal_case_3 = new Signal(104, 105, 9, 25, 12);
assert(Policy::score($signal_case_3) === 205);
assert(Policy::classify($signal_case_3) === "accept");
