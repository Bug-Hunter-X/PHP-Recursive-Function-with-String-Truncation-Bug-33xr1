# PHP Recursive Function Bug

This repository demonstrates a subtle bug in a PHP recursive function that processes data and truncates long strings. The function unexpectedly modifies the original data array due to pass-by-reference behavior and the use of substr().

The `bug.php` file contains the buggy code, and `bugSolution.php` provides the corrected version.  The issue highlights the importance of understanding PHP's array handling and the potential pitfalls of modifying arrays within recursive functions.

## Bug Description
The function `processData` recursively processes nested arrays.  If a string's length exceeds 10 characters, it's truncated. However, the original array is modified directly leading to unexpected results, especially when dealing with deeply nested structures. 

## Solution
The solution focuses on creating a copy of the array before modification to avoid unintended side effects.  It uses `array_map` to maintain better code readability and maintain the original array.