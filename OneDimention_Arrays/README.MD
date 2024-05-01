# PHP Array Operations Web Application

This PHP script creates a web application that performs various operations on an array of numbers.

## Features

1. The application calculates and displays the maximum and minimum values in the array.
2. The application calculates and displays the average value of the numbers in the array.
3. The application sorts the array in ascending order and displays the sorted array.
4. The application counts the occurrences of each number in the array and displays the numbers that occur more than once along with their frequencies.

## How to Run

You can run this script on a server that supports PHP. Make sure you have PHP installed on your server. If not, you can install it using a package manager like apt or yum:

\`\`\`bash
sudo apt install php  # Ubuntu/Debian
sudo yum install php  # CentOS/RHEL
\`\`\`

Then, you can run the script by placing it in your server's web directory (usually `/var/www/html` on Linux servers) and accessing it from a web browser.

## Input

The script uses a hard-coded array of numbers for the operations. You can modify the array in the script to use different numbers.

## Output

The script performs the operations and displays the results on the webpage. The results include the maximum and minimum values, the average value, the sorted array, and the numbers that occur more than once along with their frequencies.

## Note

The script uses built-in PHP functions to perform the operations on the array. It also uses the built-in PHP `array_count_values` function to count the occurrences of each number in the array.
