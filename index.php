<? 
/*

	Standart is a simple and enjoyable php framework + Crud Application
    Copyright (C) 2015 Beto López Ayesa

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
            
    index.php - Main
                                                                                                                                                 
*/                                                                                                                                              

$GLOBAL['_logged_php_errors'] = array();

error_reporting(0);

set_error_handler('phpLogError');

function phpLogError() {
    global $_logged_php_errors;

    $error = error_get_last();

    if ($error['type'] == 1) {
        $_logged_php_errors[] = "<span>$error</span>";
    } 
}

function phpGetLoggedErrors() {
    global $_logged_php_errors;

    return "<ol><li>".implode('</li><li>',$_logged_php_errors)."</li></ol>";
}


session_start();

require 'lib/FrontController.php';

FrontController::main();

