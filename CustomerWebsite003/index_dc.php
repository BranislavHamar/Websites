<?php
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//  S*E*T*U*P
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    // **************************************************
		//  MySQL Database usage
		// **************************************************

    //   --------------------
         $DB_hostname = "xxxx";
         $DB_username = "eeee";
         $DB_password = "rrrr";
         $DB_name		  = "5555";


////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

		// **************************************************
		//  Login if database exists
		// **************************************************


      	@mysql_connect($DB_hostname, $DB_username, $DB_password) or die("Could Not Connect To Database");
      	@mysql_select_db($DB_name) or die("Could Not Choose Database");

      
              		// **************************************************
              		// 1. Include Dynamic Php Functions
              		// **************************************************
              		// Category functions are accessed 
              		// within Showpage() function

              		// GENERAL
              			  include("includes/php/fn_general.php");

             
              		// **************************************************
              		// 2. Choose appropriate templates
              		// **************************************************
              			
       			          $TplFile = "tpl_main.html"; // Main template

              		// **************************************************
              		// 3. Generate Final Page
              		// **************************************************
              		
              			  echo ShowPage($TplFile);



		// **************************************************
		//  Logout if database exists
		// **************************************************
    
        @mysql_close();
           
//echo $setup_database;
?>
