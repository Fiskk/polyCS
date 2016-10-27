<?php
/*
 * LimeSurvey
 * Copyright (C) 2007-2011 The LimeSurvey Project Team / Carsten Schmitz
 * All rights reserved.
 * License: GNU/GPL License v2 or later, see LICENSE.php
 * LimeSurvey is free software. This version may have been modified pursuant
 * to the GNU General Public License, and as distributed it includes or
 * is derivative of works licensed under the GNU General Public License or
 * other free or open source software licenses.
 * See COPYRIGHT.php for copyright notices and details.
 *
 *	$Id$
 */

/*********** LDAP Parameters and Functions ***********************
 *
 *  - First define your ldap servers and remember the serverId
 *  - Then define your ldap_query and 'attach' it to the serverId
 ******************************************************************/

/*********************************************/
/* LDAP servers                              */
/*********************************************/

$serverId=0;
// Define the server DNS name or IP Address
// If encryption is enabled, make sure the name given here
// corresponds to the certificate's identity
$ldap_server[$serverId]['server'] = "directory.cs.sunyit.edu";

// Define the TCP port on which the LDAP server is listenning
// This should be 389 for standard LDAP servers
// or 636 for standard LDAPS connections
$ldap_server[$serverId]['port'] = "389";

// Define the ldap protocol to use
// 'ldapv2' and 'ldapv3' are supported
$ldap_server[$serverId]['protoversion'] = "ldapv3";

// Define the encryption method to use
// 'ldaps' is supported for 'ldapv2' servers
// 'start-tls' is supproted for 'ldapv3' servers
// 'none' is supproted for no encryption at all
// Don't forget to setup your CA's certificate in
// the openldap ldap.conf file
$ldap_server[$serverId]['encrypt'] = "start-tls";

// Define the referral option
// 'false' is recommended for ActiveDirectory servers
$ldap_server[$serverId]['referrals'] = false;

// Define the encoding used by the Ldap directory
// You may omit this parameter (let it commented out)
// as the default value, 'utf-8', should work for most installations.
// However, Active Directory in West Europe may use 'cp850'.
// $ldap_server[$serverId]['encoding'] = 'utf-8';

// Define the authentication used to bind to the directory
// We currently support simple authentication
// If anonymous bind must be performed, comment the following two lines
// Note that Active Directory (AD) usually requires authentication before
// you are authorized to read its content. Remeber as well that user's DN
// in AD are in the form of CN=username,CN=Users,DC=WindowsDomainName,DC=mycompany,DC=org
//
//$ldap_server[$serverId]['binddn']	=	"uid=mybinduser,dc=mycompany,dc=org";
//$ldap_server[$serverId]['bindpw']	=	"AsecretPassword";

/********* Copy for more definitions *****
 $serverId++;
 $ldap_server[$serverId]['server'] = "ldap.mycompany.org";
 $ldap_server[$serverId]['port'] = "389";
 $ldap_server[$serverId]['protoversion'] = "ldapv3";
 $ldap_server[$serverId]['encrypt'] = "start-tls";
 $ldap_server[$serverId]['referrals'] = false;
 $ldap_server[$serverId]['binddn']	=	"uid=mybinduser,dc=mycompany,dc=org";
 $ldap_server[$serverId]['bindpw']	=	"AsecretPassword";
 *****************************************/

/**********************************************************************/
/* Predefined Queries for Token Imports                               */
/*                                                                    */
/* This sample query definition is just an fake template: do not      */
/* expect it to do something intelligent on your directory            */
/* Instead have a look at the online documentation:                   */
/* - Section Installation, paragraph LDAP_Settings                     */
/* And for Active Directory tips:                                     */
/* - Section Installation FAQ, paragraph                               */
/*   How_do_I_configure_LDAP_settings_to_work_with_Active_Directory_  */
/**********************************************************************/

/*

$query_id=0;

// First define the serverId on which you want to run the query
$ldap_queries[$query_id]['ldapServerId'] = 0;

// Give a name that will appear on the user interface
$ldap_queries[$query_id]['name'] = 'Staff with an enabled account';

// Define the ldap base used for user searches
$ldap_queries[$query_id]['userbase'] = 'ou=People,dc=cs,dc=sunyit,dc=edu';

// Define the user filter to apply
// Must begin with '(' and end with ')'
// Note that for AD, checking the 'active' status of a user is done with the following filter:
// "(&(objectCategory=Person)(objectClass=user)(!(userAccountControl=514)))"
$ldap_queries[$query_id]['userfilter'] = '(&(objectClass=inetOrgPerson)(uid=nick))';

// Define how deep under the userbase you want to search
// 'sub' means: search on the entire subtree
// 'one' means: only search 1 level under the userbase
// 'base' means: only search the userbase DN entry
$ldap_queries[$query_id]['userscope'] = 'sub';

// Define the user's attribute that provides the firstname
// do not use capital letters in the attribute name
// for instance use 'givenname' and not 'givenName'
$ldap_queries[$query_id]['firstname_attr'] = 'givenname';

// Give the user's attribute that provides the lastname
// do not use capital letters in the attribute name
$ldap_queries[$query_id]['lastname_attr'] = 'sn';

// Give the user's attribute that provides the email address
// do not use capital letters in the attribute name
// If multivalued, only the first entry is read
$ldap_queries[$query_id]['email_attr'] = 'mail';


// Optionnally give the user's attributes that provides the
// token, language, attr1 and attr2 piece of information
// do not use capital letters in the attribute name
// if unused, leave empty or comment the lines
$ldap_queries[$query_id]['token_attr'] = ''; // Leave empty for Auto Token generation bu phpsv
$ldap_queries[$query_id]['language'] = '';
$ldap_queries[$query_id]['attr1'] = '';
$ldap_queries[$query_id]['attr2'] = '';


return array('ldap_server' => $ldap_server, 'ldap_queries' => $ldap_queries);
?>
