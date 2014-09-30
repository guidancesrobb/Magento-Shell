# Magento Shell Scripts

## Features

* Format output of shell scripts
* Shell output is automatically logged to file
* Execution timer

## Installion

Copy the contents of `src/` to your Magento installation.

*Sorry, modman doesn't work*

## Usage

See `src/shell/guidance/sampleScript.php` for example usage.

## Example Output

    $ php shell/guidance/sampleScript.php 
    0 s         Script execution has started
    0.002 s     Found 20 product(s) to process
    0.002 s         Processing product id: 1 (1/20 5%)
    0.002 s         Processing product id: 2 (2/20 10%)
    0.002 s         Processing product id: 3 (3/20 15%)
    0.002 s         Processing product id: 4 (4/20 20%)
    0.002 s         Processing product id: 5 (5/20 25%)
    0.002 s         Processing product id: 6 (6/20 30%)
    0.002 s         Processing product id: 7 (7/20 35%)
    0.002 s         Processing product id: 8 (8/20 40%)
    0.002 s         Processing product id: 9 (9/20 45%)
    0.002 s         Processing product id: 10 (10/20 50%)
    0.002 s         Processing product id: 11 (11/20 55%)
    0.002 s         Processing product id: 12 (12/20 60%)
    0.002 s         Processing product id: 13 (13/20 65%)
    0.002 s         Processing product id: 14 (14/20 70%)
    0.002 s         Processing product id: 15 (15/20 75%)
    0.002 s         Processing product id: 16 (16/20 80%)
    0.002 s         Processing product id: 17 (17/20 85%)
    0.002 s         Processing product id: 18 (18/20 90%)
    0.003 s         Processing product id: 19 (19/20 95%)
    0.003 s         Processing product id: 20 (20/20 100%)
    0.003 s     Script execution is complete