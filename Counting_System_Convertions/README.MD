# PHP Number System Conversion Web Application

This PHP script creates a web application that allows users to convert numbers between different number systems (decimal, binary, octal, and hexadecimal).

## Features

1. The application provides a form for users to input a number and select the conversion operation.
2. The application supports the following conversion operations:
   - Decimal to Binary
   - Decimal to Octal
   - Decimal to Hexadecimal
   - Binary to Decimal
   - Octal to Decimal
   - Hexadecimal to Decimal
3. The application performs the conversion operation and displays the result on the webpage.

## How to Run

You can run this script on a server that supports PHP. Make sure you have PHP installed on your server. If not, you can install it using a package manager like apt or yum:

\`\`\`bash
sudo apt install php  # Ubuntu/Debian
sudo yum install php  # CentOS/RHEL
\`\`\`

Then, you can run the script by placing it in your server's web directory (usually `/var/www/html` on Linux servers) and accessing it from a web browser.

## Input

The script expects input from a form on the webpage. The user should enter a number in the 'Skaitlis' field and select a conversion operation from the 'Skaitīšanas sistēma' dropdown menu.

## Output

The script performs the conversion operation and displays the result on the webpage. If the user does not enter a number or does not select a conversion operation, the script displays an error message.

## Note

The script uses the built-in PHP `$_POST` superglobal to retrieve form data. It also uses the built-in PHP `$_SERVER` superglobal to check the HTTP request method. The script performs the conversion operations using basic arithmetic operations.
