96MicroFramework
================

PHP Micro Framework. MVC Pattern + CRUD solution. Perfect for Creative projects or taylor made small-middle solutions.


This repo is under construction. DON'T USE THIS REPO IN PRODUCTION SERVER.

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
* You are modifying a website or project done by Php Ninja. Here you will find the information.

#### Features
* Built with Twitter Bootstrap
* jQuery UI
* MVC Php
* Automatic image processing (3 sizes by default thumbs,midds,bigs)
* Suitable for: small-mid web projects  
* Alternative to: Wordpress, related CMS  
* Perfect for: Graphic Designers projects, or high customization required  
* Biggest Advantage: Field by field customization
  

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
 
Customization
-------------

#### Localization
Php Ninja Backoffice is born in a European zone.
Dates and numbers are by default in European format, if you want to edit em 
modify: 
/lib/fields/fecha.php - exec_add, exec_edit, view
/lib/fields/number.php - exec_add, exec_edit, view
/lib/functions.php - mysql_to_fecha() and fecha_to_mysql()

#### Automatic image processing
FIELD TYPE: file_img

All images uploaded will be resized by default (see config.php thumbs_w thumbs_h .....)
modify your defaults widths and heights at config.php

You can use Resize, Crop or Both. See /lib/fields/file_img


#### Customizing tables/fields (SETUPS files)

* Check available field types at /lib/fields , or create new ones.
* Go to /setups/
* Open the php file of the table you want to modify
* Modify the Array table definitions  
 
Arrays:  
* fields: Array containing all db field names 
* fields_to_show: array containing fields that will show up when listing all registrys. Default empty = All
* fields_labels: Labels to show on headers and input labels
* fields_types: Array containing each field type.  
 
So we have that first field is email, it will show up because it's inside fields_to_show array, the label will
be same but with capital letter and -, and the type of this field is "email". So, before updating this field it will be
validated as an email.  

  
Example of Table File:
<pre>
$table_label = "Usuarios";
$default_order = "id ASC";
$fields= array("email","username","password","nombre","apellidos","fecha_nacimiento","empresa","telf","direccion","municipio","provincia","codigopostal");
$fields_to_show = array("email","nombre","apellidos","empresa","telf","direccion","municipio","provincia","codigopostal");
$fields_labels= array("E-mail","username","password","nombre","apellidos","fecha nacimiento","empresa","telf","direccion","municipio","provincia","código postal");
$fields_types=array("email","literal","password","literal","literal","fecha","literal","literal","text","literal","literal","codigopostal");  
</pre>

#### Adding or Modifying Field Types
* go to /lib/fields
* Duplicate an existing file, and set the field type's name as a filename. Example: Truefalse, Tags
* WARNING: dont use php core functions as field type name's.
* edit field.php, add a line: include "YOURFILE.php"; so your class will be available.
* Open your new duplicate field type.
* Modify as you want.

You have this 4 methods for each FIELD:
* view() -> show the value
* bake_field() -> make the field's HTML 
* exec_add() -> post processing of the value before updating db
* exec_edit() -> post processing of the value before updateing db
 
Two variables:
* $this->fieldname  -> FIELD NAME, also FORM INPUT NAME
* $this->value -> value for that field  



Example of Field Type PASSWORD. /lib/fields/password.php:
<pre>
final class password extends field{
        function view(){
           return "Password encriptado md5";
        }
        function bake_field (){
           return "<input type=\"text\" cols=\"120\" id=\"".$this->fieldname."\" name=\"".$this->value."\" value=\"\">
        }
        function exec_add () {
           if ($this->value != "")
	         	return sha1(strtolower($this->value));
		         else return '';
	       }
	       function exec_edit () {
		         if ($this->value != "")
			             return sha1(strtolower($this->value)); 
	              	return '';
	       }
}
</pre>




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
