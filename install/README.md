PHP simple installer
====================

Status
------

This software is still in development, even tho is working and useful already the code is 'dirty' and lacks proper testing.

Basic Usage
-----------
1. Download project files
2. Add the files to your project (eg. under the 'install' folder)
3. Edit the 'configuration.php' file under 'includes/' folder according to your spedific needs
4. Ad your SQL code to setup needed tables in 'includes/schema.php'
5. Enjoy

Add custom steps to the installation process
--------------------------------------------
1. Describe aditional steps in includes/configuration.php
2. Create step view and controller under 'views/' and 'includes/' respectively

Customize colour and style
--------------------------
1. Edit index.php according to your needs
2. Edit views/media/style.css

Contribute
----------
All contributions are welcomed.

What is missing
---------------
* Testing
* More detailed usage guide