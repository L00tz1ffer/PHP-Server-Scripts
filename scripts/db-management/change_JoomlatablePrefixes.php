<?php
/* This Class is Made the base Prefix from your JOOMLA Database 
// actually it does not change the joomla Entry on this atm
*/

require_once("configuration.php");

$my_class = new JConfig();

$class_vars = get_class_vars(get_class($my_class));

$cvar = [];

foreach ($class_vars as $name => $value) {
    $cvar[] = $value;
}


/* PLEASE CHECK DATA */
define ("DB_TYPE","mysql"); // i assume u use a mysql Database
define ("DB_CHARSET","utf8"); // with utf8 encoding


$old_prefix = "x_gastrosu";	//check this value
$new_prefix = "j_gastrosu";	//and this value




define ("DB_HOST",$cvar[13]); 	// Value will be added from Joomla configuration.php
define ("DB_NAME",$cvar[16]); 	// Value will be added from Joomla configuration.php


define ("DB_USERNAME",$cvar[14]); 	// Value will be added from Joomla configuration.php
define ("DB_PASSWORD",$cvar[15]); 	// Value will be added from Joomla configuration.php



// This Datastructure is a default set of Tables from a Joomla Installation

// Strictly depending on Version

// Optimized for Version 4

// Do not touch if you do not know what your doing, this could damage your Joomla! Installation

$sql = [
	"ALTER TABLE 		".$old_prefix."_action_logs			 RENAME TO 				".$new_prefix."_action_logs					",
	"ALTER TABLE 		".$old_prefix."_action_logs_extensions	 	 RENAME TO 				".$new_prefix."_action_logs_extensions		",
	"ALTER TABLE 		".$old_prefix."_action_logs_users	 	 RENAME TO 				".$new_prefix."_action_logs_users		",
	"ALTER TABLE 		".$old_prefix."_action_log_config	 	 RENAME TO 				".$new_prefix."_action_log_config		",
	"ALTER TABLE 		".$old_prefix."_assets	 			 RENAME TO 				".$new_prefix."_assets				",
	"ALTER TABLE 		".$old_prefix."_associations			 RENAME TO 				".$new_prefix."_associations			",
	"ALTER TABLE 		".$old_prefix."_banners				 RENAME TO 				".$new_prefix."_banners				",
	"ALTER TABLE 		".$old_prefix."_banner_clients			 RENAME TO 				".$new_prefix."_banner_clients			",
	"ALTER TABLE 		".$old_prefix."_banner_tracks			 RENAME TO 				".$new_prefix."_banner_tracks			",
	"ALTER TABLE 		".$old_prefix."_categories			 RENAME TO 				".$new_prefix."_categories			",
	"ALTER TABLE 		".$old_prefix."_contact_details			 RENAME TO 				".$new_prefix."_contact_details			",
	"ALTER TABLE 		".$old_prefix."_content				 RENAME TO 				".$new_prefix."_content				",
	"ALTER TABLE 		".$old_prefix."_contentitem_tag_map		 RENAME TO 				".$new_prefix."_contentitem_tag_map		",
	"ALTER TABLE 		".$old_prefix."_content_frontpage		 RENAME TO 				".$new_prefix."_content_frontpage		",
	"ALTER TABLE 		".$old_prefix."_content_rating			 RENAME TO 				".$new_prefix."_content_rating			",
	"ALTER TABLE 		".$old_prefix."_content_types			 RENAME TO 				".$new_prefix."_content_types			",
	"ALTER TABLE 		".$old_prefix."_extensions			 RENAME TO 				".$new_prefix."_extensions			",
	"ALTER TABLE 		".$old_prefix."_fields				 RENAME TO 				".$new_prefix."_fields				",
	"ALTER TABLE 		".$old_prefix."_fields_categories		 RENAME TO 				".$new_prefix."_fields_categories		",
	"ALTER TABLE 		".$old_prefix."_fields_groups			 RENAME TO 				".$new_prefix."_fields_groups			",
	"ALTER TABLE 		".$old_prefix."_fields_values			 RENAME TO 				".$new_prefix."_fields_values			",
	"ALTER TABLE 		".$old_prefix."_finder_filters			 RENAME TO 				".$new_prefix."_finder_filters			",
	"ALTER TABLE 		".$old_prefix."_finder_links			 RENAME TO 				".$new_prefix."_finder_links			",
	"ALTER TABLE 		".$old_prefix."_finder_links_terms		 RENAME TO 				".$new_prefix."_finder_links_terms		",
	"ALTER TABLE 		".$old_prefix."_finder_logging			 RENAME TO 				".$new_prefix."_finder_logging			",
	"ALTER TABLE 		".$old_prefix."_finder_taxonomy		 	 RENAME TO 				".$new_prefix."_finder_taxonomy			",
	"ALTER TABLE 		".$old_prefix."_finder_taxonomy_map	 	 RENAME TO 				".$new_prefix."_finder_taxonomy_map		",
	"ALTER TABLE 		".$old_prefix."_finder_terms			 RENAME TO 				".$new_prefix."_finder_terms			",
	"ALTER TABLE 		".$old_prefix."_finder_terms_common		 RENAME TO 				".$new_prefix."_finder_terms_common		",
	"ALTER TABLE 		".$old_prefix."_finder_tokens			 RENAME TO 				".$new_prefix."_finder_tokens			",
	"ALTER TABLE 		".$old_prefix."_finder_tokens_aggregate 	 RENAME TO 				".$new_prefix."_finder_tokens_aggregate		",
	"ALTER TABLE 		".$old_prefix."_finder_types			 RENAME TO 				".$new_prefix."_finder_types			",
	"ALTER TABLE 		".$old_prefix."_history				 RENAME TO 				".$new_prefix."_history				",
	"ALTER TABLE 		".$old_prefix."_languages			 RENAME TO 				".$new_prefix."_languages			",
	"ALTER TABLE 		".$old_prefix."_mail_templates			 RENAME TO 				".$new_prefix."_mail_templates			",
	"ALTER TABLE 		".$old_prefix."_menu				 RENAME TO 				".$new_prefix."_menu				",
	"ALTER TABLE 		".$old_prefix."_menu_types			 RENAME TO 				".$new_prefix."_menu_types			",
	"ALTER TABLE 		".$old_prefix."_messages			 RENAME TO 				".$new_prefix."_messages			",
	"ALTER TABLE 		".$old_prefix."_messages_cfg			 RENAME TO 				".$new_prefix."_messages_cfg			",
	"ALTER TABLE 		".$old_prefix."_modules				 RENAME TO 				".$new_prefix."_modules				",
	"ALTER TABLE 		".$old_prefix."_modules_menu			 RENAME TO 				".$new_prefix."_modules_menu			",
	"ALTER TABLE 		".$old_prefix."_newsfeeds			 RENAME TO 				".$new_prefix."_newsfeeds			",
	"ALTER TABLE 		".$old_prefix."_overrider			 RENAME TO 				".$new_prefix."_overrider			",
	"ALTER TABLE 		".$old_prefix."_postinstall_messages	 	 RENAME TO 				".$new_prefix."_postinstall_messages		",
	"ALTER TABLE 		".$old_prefix."_privacy_consents		 RENAME TO 				".$new_prefix."_privacy_consents		",
	"ALTER TABLE 		".$old_prefix."_privacy_requests		 RENAME TO 				".$new_prefix."_privacy_requests		",
	"ALTER TABLE 		".$old_prefix."_redirect_links			 RENAME TO 				".$new_prefix."_redirect_links			",
	"ALTER TABLE 		".$old_prefix."_schemas				 RENAME TO 				".$new_prefix."_schemas				",
	"ALTER TABLE 		".$old_prefix."_session				 RENAME TO 				".$new_prefix."_session				",
	"ALTER TABLE 		".$old_prefix."_tags				 RENAME TO 				".$new_prefix."_tags				",
	"ALTER TABLE 		".$old_prefix."_template_overrides		 RENAME TO 				".$new_prefix."_template_overrides		",
	"ALTER TABLE 		".$old_prefix."_template_styles			 RENAME TO 				".$new_prefix."_template_styles			",
	"ALTER TABLE 		".$old_prefix."_ucm_base			 RENAME TO 				".$new_prefix."_ucm_base			",
	"ALTER TABLE 		".$old_prefix."_ucm_content			 RENAME TO 				".$new_prefix."_ucm_content			",
	"ALTER TABLE 		".$old_prefix."_updates				 RENAME TO 				".$new_prefix."_updates				",
	"ALTER TABLE 		".$old_prefix."_update_sites			 RENAME TO 				".$new_prefix."_update_sites			",
	"ALTER TABLE 		".$old_prefix."_update_sites_extensions 	 RENAME TO 				".$new_prefix."_update_sites_extensions		",
	"ALTER TABLE 		".$old_prefix."_usergroups			 RENAME TO 				".$new_prefix."_usergroups			",
	"ALTER TABLE 		".$old_prefix."_users				 RENAME TO 				".$new_prefix."_users				",
	"ALTER TABLE 		".$old_prefix."_user_keys			 RENAME TO 				".$new_prefix."_user_keys			",
	"ALTER TABLE 		".$old_prefix."_user_notes			 RENAME TO 				".$new_prefix."_user_notes			",
	"ALTER TABLE 		".$old_prefix."_user_profiles			 RENAME TO 				".$new_prefix."_user_profiles			",
	"ALTER TABLE 		".$old_prefix."_user_usergroup_map		 RENAME TO 				".$new_prefix."_user_usergroup_map		",
	"ALTER TABLE 		".$old_prefix."_viewlevels			 RENAME TO 				".$new_prefix."_viewlevels			",
	"ALTER TABLE 		".$old_prefix."_webauthn_credentials		 RENAME TO 				".$new_prefix."_webauthn_credentials		",
	"ALTER TABLE 		".$old_prefix."_workflows			 RENAME TO 				".$new_prefix."_workflows			",
	"ALTER TABLE 		".$old_prefix."_workflow_associations		 RENAME TO 				".$new_prefix."_workflow_associations		",
	"ALTER TABLE 		".$old_prefix."_workflow_stages		 	 RENAME TO 				".$new_prefix."_workflow_stages			",
	"ALTER TABLE 		".$old_prefix."_workflow_transitions		 RENAME TO 				".$new_prefix."_workflow_transitions		"
];

foreach ($sql as $s){
	echo "".$s."; <br>";
}

function sendSQL($sql){
	getDB()->query($sql);
	printDBErrorMessage($sql);

}


function getDB(){
    /** setzen der Statischen Variable $db **/
    static $db;
    
    /** Verhindern, dass $db jedes mal neu geschrieben wird **/
    if ($db instanceof PDO){
        return $db;
    }
    
    
    /** Zusammensetzen des dsn **/
    $dsn = sprintf("%s:host=%s;dbname=%s;charset=%s",DB_TYPE,DB_HOST,DB_NAME,DB_CHARSET);
    
    /** Instanzieren von PDO in $db **/
    $db = new PDO($dsn,DB_USERNAME,DB_PASSWORD);
    return $db;
}

function printDBErrorMessage($sql){
    $info = getDB()->errorInfo();
    if (isset($info[2])){
        echo "Errorcode:    ".$info[2]."<br>";
    }
	else{
		echo "SQL QUERY Successfully Executed:         ".$sql."<br>";
	}

}

?>
