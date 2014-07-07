96MicroFramework
================

Version 2.0

PHP Micro Framework. MVC Pattern + CRUD solution. Perfect for Creative projects or taylor made small-middle solutions.


Readme Version 0.1
------------------

Previously known as "php ninja backoffice"

# Php Ninja BackOffice 

Beto Ayesa,  @php_ninja
contacto@phpninja.info  
www.phpninja.info  

NOTE: Don't use this repo, it's little inestable. Currently I'm refactoring it and it could be little inestable.

Introduction
------------
I am using this custom CRUD solution for more than 6 years in tens of projects.  
I believe in technology independence, I don't want my clients get caught, this is why I made this Git Repo under MIT License.

This is for you if:
* You are looking for a "Backoffice" Solution that you can install and customize
* You are modifying a website or project done with this. Here you will find the information.
  

Installation in 1 minute
------------------------
#### Requirements:
- PHP >=4
- PDO:: Support
- MySQL
- Before building your Bd, make sure that:
* every table has '<table_name>Id' PRIMARY auto increment FIELD
* Foreign Keys must follow the same pattern '<table_name>Id', Example: accounts -> accountsId
* If you want to use drag and drop rows sorting, you must have a INT field called 'orden' in the table

#### Steps:  
* Set your own database, general project settings and admin password at config.php
* db_prefix is your tables prefix (ex. wp_)
* chmod 777 /setup/ - necesary if you want to auto generate TABLE SETUP files
* Run /install/makeSetups FROM THE BROWSER (http://). All setup files will be created. 
* chmod 777 /data/ - folder where images and files will be stored
* Goto your http:// 
* Login with your user / pass
* You will be able to view your db data, add, edit or delete fields
* Go to /setup/ and revise $field_labels and $fields_types arrays
 



License
----------------
Php Ninja CRUD
Copyright (C) 2013  Beto Ayesa contacto@phpninja.info

    This program is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program.  If not, see <http://www.gnu.org/licenses/>.

http://opensource.org/licenses/GPL-3.0
