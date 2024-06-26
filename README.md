# paratest-counting
Testing a bug with Paratest + PHPUnit


## Reproduction

### Ninehundred Test
```
composer install

❯ ./vendor/bin/paratest tests/NineHundredTest.php
ParaTest v7.4.4 upon PHPUnit 11.1.3 by Sebastian Bergmann and contributors.

Processes:     8
Runtime:       PHP 8.3.4

...............................................................  63 / 999 (  6%)
............................................................... 126 / 999 ( 12%)
............................................................... 189 / 999 ( 18%)
............................................................... 252 / 999 ( 25%)
............................................................... 315 / 999 ( 31%)
............................................................... 378 / 999 ( 37%)
............................................................... 441 / 999 ( 44%)
............................................................... 504 / 999 ( 50%)
............................................................... 567 / 999 ( 56%)
............................................................... 630 / 999 ( 63%)
............................................................... 693 / 999 ( 69%)
............................................................... 756 / 999 ( 75%)
............................................................... 819 / 999 ( 81%)
............................................................... 882 / 999 ( 88%)
............................................................... 945 / 999 ( 94%)
......................................................          999 / 999 (100%)

Time: 00:00.295, Memory: 10.00 MB

OK (999 tests, 999 assertions)

```

### Thousand Test
```
❯ ./vendor/bin/paratest tests/ThousandTest.php
ParaTest v7.4.4 upon PHPUnit 11.1.3 by Sebastian Bergmann and contributors.

Processes:     8
Runtime:       PHP 8.3.4

  101 / 1000 ( 10%)  202 / 1000 ( 20%)  303 / 1000 ( 30%)  404 / 1000 ( 40%)  505 / 1000 ( 50%)  606 / 1000 ( 60%)  707 / 1000 ( 70%)  808 / 1000 ( 80%)  909 / 1000 ( 90%).............................................................   61 / 1000 (  6%)
.............................................................  122 / 1000 ( 12%)
.............................................................  183 / 1000 ( 18%)
.............................................................  244 / 1000 ( 24%)
.............................................................  305 / 1000 ( 30%)
.............................................................  366 / 1000 ( 36%)
.............................................................  427 / 1000 ( 42%)
.............................................................  488 / 1000 ( 48%)
.............................................................  549 / 1000 ( 54%)
.............................................................  610 / 1000 ( 61%)
.............................................................  671 / 1000 ( 67%)
.............................................................  732 / 1000 ( 73%)
.............................................................  793 / 1000 ( 79%)
.............................................................  854 / 1000 ( 85%)
.............................................................  915 / 1000 ( 91%)
.............................................................  976 / 1000 ( 97%)
........................                                      1000 / 1000 (100%)

Time: 00:00.285, Memory: 10.00 MB

OK (1000 tests, 1000 assertions)
```