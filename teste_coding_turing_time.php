<?php

/*
 * Complete the 'timeInWords' function below.
 *
 * The function is expected to return a STRING.
 * The function accepts following parameters:
 *  1. INTEGER h
 *  2. INTEGER m
 * 
 * 
 * 
 * Given the time in numerals we may convert it into words, as shown below:

    At minutes=0 , use o' clock. For 1 <= minutes <= 30 , use past, and for  use to. Note the space between the apostrophe and clock in o' clock. Write a program which prints the time in words for the input given in the format described.

    Function Description

    Complete the timeInWords function in the editor below.

    timeInWords has the following parameter(s):

    int h: the hour of the day
    int m: the minutes after the hour
    Returns

    string: a time string as described
    Input Format

    The first line contains , the hours portion The second line contains , the minutes portion

    Constraints

    Sample Input 0

    5
    47
    Sample Output 0

    thirteen minutes to six
    Sample Input 1

    3
    00
    Sample Output 1

    three o' clock
    Sample Input 2

    7
    15
    Sample Output 2

    quarter past seven
 */

function timeInWords($h, $m) {
    // Write your code here
    
    $hora[12] = array("", "one", "two", "tree", "four", "five", "six", "seven", "eight","nine", "ten", "eleven", "twelve");
    
    
    $nums = array("zero", "one", "two", "three", "four",
                  "five", "six", "seven", "eight", "nine",
                  "ten", "eleven", "twelve", "thirteen",
                  "fourteen", "fifteen", "sixteen", "seventeen",
                  "eighteen", "nineteen", "twenty", "twenty one",
                  "twenty two", "twenty three", "twenty four",
                  "twenty five", "twenty six", "twenty seven",
                  "twenty eight", "twenty nine");
    

    
 if ($m == 00)
        return $nums[$h] .
             " o' clock\n" ;
 
    else if ($m == 01)
        return "one minute past ".
                $nums[$h]. "\n";
 
    else if ($m == 59)
        return "one minute to ".
             $nums[($h % 12) + 1]. "\n";
 
    else if ($m == 15)
        return "quarter past ".
             $nums[$h]. "\n";
 
    else if ($m == 30)
        return "half past ".
           $nums[$h]."\n";
 
    else if ($m == 45)
        return "quarter to ".
             ($nums[($h % 12) + 1]). "\n";
 
    else if ($m <= 30)
        return $nums[$m].
             " minutes past ".
               $nums[$h]."\n";
 
    else if ($m > 30)
        return $nums[60 - $m].
             " minutes to ".
             $nums[($h % 12) + 1]. "\n";

    

}


$h = 5;

$m = 4;

$result = timeInWords($h, $m);

echo $result;
