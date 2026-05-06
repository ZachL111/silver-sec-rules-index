<?php
declare(strict_types=1);
require __DIR__ . "/../src/DomainReview.php";

use Portfolio\DomainReview;
use Portfolio\DomainReviewLens;

$item = new DomainReview(42, 36, 22, 65);
assert(DomainReviewLens::score($item) === 119);
assert(DomainReviewLens::lane($item) === "watch");
