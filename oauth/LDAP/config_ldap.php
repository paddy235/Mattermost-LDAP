<?php
$hostname = "ldap://company.com:389/";


// Attribute use to identify user on LDAP - ex : uid, mail, sAMAccountName	
$search_attribute = "uid";

// variable use in resource.php 
$base = "ou=People,o=Company";
$filter = "objectClass=*";

// ldap service user to allow search in ldap
$bind_dn = "";
$bind_pass = "";
