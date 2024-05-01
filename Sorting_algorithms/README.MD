# PHP Sorting Algorithms Web Application

This PHP script creates a web application that allows users to sort an array of numbers or words using different sorting algorithms.

## Features

1. The application provides a form for users to select an array and a sorting algorithm.
2. The application supports the following sorting algorithms:
   - Bubble Sort
   - Insertion Sort
   - Shell Sort
   - Bisection Sort
3. The application performs the sorting operation and displays the sorted array on the webpage.
4. The application also calculates and displays the execution time of the sorting algorithm and compares it with the execution time of the built-in `sort()` function.

## How to Run

You can run this script on a server that supports PHP. Make sure you have PHP installed on your server. If not, you can install it using a package manager like apt or yum:

\`\`\`bash
sudo apt install php  # Ubuntu/Debian
sudo yum install php  # CentOS/RHEL
\`\`\`

Then, you can run the script by placing it in your server's web directory (usually `/var/www/html` on Linux servers) and accessing it from a web browser.

## Input

The script expects input from a form on the webpage. The user should select an array from the 'Masīvs' dropdown menu and a sorting algorithm from the 'Sakārtošanas sistēma' dropdown menu.

## Output

The script performs the sorting operation and displays the sorted array on the webpage. It also displays the execution time of the sorting algorithm and compares it with the execution time of the built-in `sort()` function.

## Note

The script uses built-in PHP functions to perform the operations on the array. It also uses the built-in PHP `$_POST` superglobal to retrieve form data. The script performs the sorting operations using the sorting algorithms defined in the included PHP files.
