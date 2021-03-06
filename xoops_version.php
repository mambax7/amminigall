<?php
// $Id: xoops_version.php,v 1.10 2008/07/22 17:41:17 andrew Exp $
//  ------------------------------------------------------------------------ //
//  Author: Andrew Mills                                                     //
//  Email:  ajmills@sirium.net                                               //
//	About:  This file is part of the AM MiniGall module for Xoops v2.        //
//                                                                           //
//  ------------------------------------------------------------------------ //
//                XOOPS - PHP Content Management System                      //
//                    Copyright (c) 2000 XOOPS.org                           //
//                       <http://www.xoops.org/>                             //
//  ------------------------------------------------------------------------ //
//  This program is free software; you can redistribute it and/or modify     //
//  it under the terms of the GNU General Public License as published by     //
//  the Free Software Foundation; either version 2 of the License, or        //
//  (at your option) any later version.                                      //
//                                                                           //
//  You may not change or alter any portion of this comment or credits       //
//  of supporting developers from this source code or any supporting         //
//  source code which is considered copyrighted (c) material of the          //
//  original comment or credit authors.                                      //
//                                                                           //
//  This program is distributed in the hope that it will be useful,          //
//  but WITHOUT ANY WARRANTY; without even the implied warranty of           //
//  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the            //
//  GNU General Public License for more details.                             //
//                                                                           //
//  You should have received a copy of the GNU General Public License        //
//  along with this program; if not, write to the Free Software              //
//  Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307 USA //
//  ------------------------------------------------------------------------ //

if (!defined("XOOPS_ROOT_PATH")) {
 	die("XOOPS root path not defined");
}

// Any copyright notice, instructions, etc...
$modversion['name'] = _MI_AMMGALL_NAME;
$modversion['version'] = 0.01;
$modversion['description'] = _MI_AMMGALL_DESC;
$modversion['credits'] = '';
$modversion['author'] = 'Andrew Mills';
$modversion['help'] = 'help.html';
$modversion['license'] = 'GPL see LICENSE';
$modversion['official'] = 0;
$modversion['image'] = 'images/modulelogo.png';
$modversion['dirname'] = 'amminigall';


// Admin things
$modversion['hasAdmin']		= 1;
$modversion['adminindex']	= "admin/index.php";
$modversion['adminmenu']	= "admin/menu.php";


// Menu
$modversion['hasMain'] = 0;


// Sql file (must contain sql generated by phpMyAdmin or phpPgAdmin)
// All tables should not have any prefix!
$modversion['sqlfile']['mysql']		= "sql/mysql.sql";

// Tables created by sql file (without prefix!)
$modversion['tables'][0]	= "amminigall_categories";
$modversion['tables'][1]	= "amminigall_images";
//$modversion['tables'][2]	= "amdirectory_images";






?>