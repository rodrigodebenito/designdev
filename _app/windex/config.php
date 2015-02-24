<?php

    //=======================================================================
    // A few configuration values.  Change these as you see fit.
    //=======================================================================
    
    // App Name — What you call the place where you drop files
    $app_name = 'DesignDev';

    // App Version
    $app_version = 'v2.0';

    $app_author = 'Jeremy Zilar';

    // Organization Name
    $org_name = 'The New York Times';


    // Windex path
    $windex_path = '/_app/windex';
    define('WINDEX_PATH', $windex_path);
    
	$tdir = $_SERVER["DOCUMENT_ROOT"].$windex_path.'/includes/';
	define('TDIR', $tdir);

    // titleFormat
    //   How to format the <title> and <h1> text.  %DIR is replaced with the directory path.
    // for instance:
    //   $titleFormat = "Now Viewing: %DIR";
    $titleFormat = "%DIR";

    // showReadme
    //   If true, the contents of a README file will appear after
    //   the directory listing.  
    $showReadme = true;

    // Editable
    //   If true, the each directory will be editable.
    //   If MySQL is not hooked up, it will write a root.js file to the DIR.
    $editable = false;
    // $editable = false;
    define('EDITABLE', $editable);

    // D A T A B A S E 
    //   If TRUE, the you will be able to edit, sort, name and describe project folders.
    //   Logging also becomes active.
    //   EDITABLE should also be made TRUE
    // $database = false;
    $database = false;
    define('DATABASE', $database);

    //include 'functions/dbconnect.php';

    // Enable Logging
    $logging = false;
    define('LOGGING', $logging);


    // Auth
    $username = '';
    if (isset($_COOKIE['designdev'])) {
      $username = $_COOKIE['designdev'];
    }

    $logged_in = false;
    if (!empty($username)) {
      $logged_in = true;
    }
    define('LOGGEDIN', $logged_in);
    
    
    // The list of people who are authorized to edit
    include 'functions/auth.php';
		
    //=======================================================================
    // End of config
    //=======================================================================    
    

    // Error Reporting
    // Comment out as needed
    ini_set('display_errors', 'On');
    error_reporting(E_ALL);


    // Time/Date
    date_default_timezone_set('America/New_York');
    $date = date("M j, Y, g:i A", time());
    $shortdate = date("M j, g:i A", time());


    // URI of current directory-
    $uri = urldecode($_SERVER['REQUEST_URI']);
    $uri = preg_replace("/\?.*$/", "", $uri);
    $uri = preg_replace("/\/ *$/", "", $uri);
    

    // ALERT — This needs to be looked at. What a mess, right?
    // URL Variables
    $q = $_SERVER['QUERY_STRING']; // the full query string
    $r2 = rtrim($_SERVER['REQUEST_URI'], $q);
    $r = rtrim($r2, '?');
    $dr = rtrim($_SERVER['DOCUMENT_ROOT'], '/');
    $d = rtrim($_SERVER['DOCUMENT_ROOT'], '/').$r;
    $u = rtrim($r, $q);
    $u = rtrim($u, '?');
    $u = rtrim($_SERVER['DOCUMENT_ROOT'], '/').$u;
    $f = $d.'root.json';
    if (!empty($q)) {
      // $search = (isset($_GET['s']) ? $_GET['s'] : ''; // the search string
    }


    // Additional functions
    include_once 'functions/db.php';
    include_once 'functions/get_files.php';
    include_once 'functions/get_logroll.php';
    include_once 'functions/show_files.php';
    include_once 'functions/get_images.php';
    include_once 'functions/breadcrumb.php';
    include_once 'log_roll.php';
    include_once 'update_log.php';


    // Fire up the Log
    if (LOGGING === true) {
      $log_roll = get_log_roll();
      // print_r($log_roll);
    }



    // ALERT — This needs to be looked at. Not sure what it is.
    
    // // Check to see if the current folder exists in the database OR in the root.json file
    // $project_data = is_edited(); 
    // list($files,$images) = get_files($project_data);
    // print_r(list($images));

    
    
    // $image_names = get_image_names($images);
    // print_r($image_names);
    // include 'log_roll.php';
    // include 'update_log.php';


    // LDAP AUTH
    // /etc/sssd.com
    // ldap_schema = rfc2307
    // ldap_uri = ldaps://ldap.prd.ewr1.nytimes.com
    // ldap_search_base = dc=prvt,dc=nytimes,dc=com
    // ldap_passwd_search_base = ou=People,dc=prvt,dc=nytimes,dc=com 
    // ldap_shadow_search_base = ou=People,dc=prvt,dc=nytimes,dc=com
    // ldap_group_search_base =ou=group,dc=prvt,dc=nytimes,dc=com 
    // ldap_netgroup_search_base = ou=netgroup,dc=prvt,dc=nytimes,dc=com
    // ldap_user_object_class = posixAccount
    // ldap_tls_reqcert = demand
    // ldap_tls_cacert = /etc/pki/tls/certs/nyt-ca-bundle.crt




?>