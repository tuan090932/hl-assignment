<?php

// Function to find the minimum and maximum sum of 4 out of 5 elements (way 1)
function miniMaxSum_way_1($array)
{
    $max = $array[0];
    $min = $array[0];
    $sum = 0;

    // Find the maximum and minimum elements, and calculate the total sum
    for ($i = 0; $i < 5; $i++) {
        if ($array[$i] > $max) {
            $max = $array[$i];
        }
        if ($array[$i] < $min) {
            $min = $array[$i];
        }
        $sum += $array[$i];
    }

    // Calculate the minimum and maximum sum by subtracting the max and min from the total sum
    $min_sum = $sum - $max;
    $max_sum = $sum - $min;

    // Print the minimum and maximum sum
    echo $min_sum . " " . $max_sum . "\n";
}

// Function to find the minimum and maximum sum of 4 out of 5 elements (way 2)
function miniMaxSum_way_2($array)
{
    $min_sum = 0;
    $max_sum = 0;
    $sum = 0;

    // Sort the array in ascending order
    sort($array);

    // Calculate the minimum and maximum sum using the sorted array
    for ($i = 0; $i < 4; $i++) {
        $min_sum = $min_sum + $array[$i];
        $max_sum = $max_sum + $array[$i + 1];
    }

    // Print the minimum and maximum sum
    echo "minimax with way 2 " . $min_sum . " " . $max_sum . "\n";
}

// Function to count the total number of elements in the array
function count_total($array)
{
    return count($array);
}

// Function to find the minimum element in the array
function find_min($array)
{
    $min = $array[0];
    for ($i = 0; $i < 5; $i++) {
        if ($array[$i] < $min) {
            $min = $array[$i];
        }
    }
    echo "min is " . $min . "\n";
}

// Function to find the maximum element in the array
function find_max($array)
{
    $max = $array[0];
    for ($i = 0; $i < 5; $i++) {
        if ($array[$i] > $max) {
            $max = $array[$i];
        }
    }
    echo "max is " . $max . "\n";
}

// Function to find the even elements in the array
function find_even_elements($array)
{
    $even_array = [];
    for ($i = 0; $i < 5; $i++) {
        if ($array[$i] % 2 == 0) {
            $even_array[] = $array[$i];
        }
    }
    print_r($even_array);
}

// Function to find the odd elements in the array
function find_odd_elements($array)
{
    $odd_arr = [];
    for ($i = 0; $i < 5; $i++) {
        if ($array[$i] % 2 != 0) {
            $odd_arr[] = $array[$i];
        }
    }
    print_r($odd_arr);
}

// Function to test the miniMaxSum function with different test cases


// Read input from a single line containing 5 integers separated by spaces
$input = readline();
$array = explode(' ', $input);

// Convert the array elements to integers
$array = array_map('intval', $array);

// Call the miniMaxSum_way_1 function with the input array
miniMaxSum_way_1($array);

// Call the miniMaxSum_way_2 function with the input array
miniMaxSum_way_2($array);

// Call the count_total function and print the result
echo "Total elements: " . count_total($array) . "\n";

// Call the find_min function
find_min($array);

// Call the find_max function
find_max($array);

// Call the find_even_elements function
echo "Even elements: ";
find_even_elements($array);

// Call the find_odd_elements function
echo "Odd elements: ";
find_odd_elements($array);
