<?php

//////////////////////////////////////////////////////////////
//===========================================================
// universal.php
//===========================================================
// SOFTACULOUS 
// Version : 1.1
// Inspired by the DESIRE to be the BEST OF ALL
// ----------------------------------------------------------
// Started by: Alons
// Date:       10th Jan 2009
// Time:       21:00 hrs
// Site:       http://www.softaculous.com/ (SOFTACULOUS)
// ----------------------------------------------------------
// Please Read the Terms of use at http://www.softaculous.com
// ----------------------------------------------------------
//===========================================================
// (c)Softaculous Inc.
//===========================================================
//////////////////////////////////////////////////////////////

if(!defined('SOFTACULOUS')){

	die('Hacking Attempt');

}

$globals['path'] = '/usr/local/cpanel/whostmgr/docroot/cgi/softaculous';
$globals['softscripts'] = '/var/softaculous';
$globals['sn'] = 'Softaculous';
$globals['cookie_name'] = 'SOFTCookies9510';
$globals['gzip'] = 1;
$globals['language'] = 'english';
$globals['soft_email'] = 'root';
$globals['from_email'] = 'root';
$globals['theme_folder'] = 'default';
$globals['timezone'] = '0';
$globals['mail'] = 1;
$globals['off'] = 0;
$globals['off_subject'] = '';
$globals['off_message'] = '';
$globals['update'] = 1;
$globals['update_softs'] = 1;
$globals['add_softs'] = 1;
$globals['email_update'] = 1;
$globals['email_update_softs'] = 1;
$globals['cron_time'] = '29 19 * * *';
$globals['chmod_files'] = '0644';
$globals['chmod_dir'] = '0755';
$globals['is_vps'] = 0;
$globals['eu_news_off'] = 0;
$globals['eu_email_off'] = 0;
$globals['random_username'] = 0;
$globals['random_pass'] = 1;
$globals['random_dbprefix'] = 1;
$globals['off_demo_link'] = 0;
$globals['off_screenshot_link'] = 0;
$globals['off_rating_link'] = 0;
$globals['off_review_link'] = 0;
$globals['off_email_link'] = 0;
$globals['email_password'] = 0;
$globals['logo_url'] = '';
$globals['php_bin'] = '/usr/local/cpanel/3rdparty/bin/php';
$globals['chmod_conf_file'] = '';
$globals['off_sync_link'] = 0;
$globals['off_panel_link'] = 0;
$globals['off_enduser_suggestions'] = 0;
$globals['no_prefill'] = 1;
$globals['footer_link'] = '';
$globals['remote_mysql'] = '';
$globals['perl_scripts'] = 0;
$globals['show_top_scripts'] = 'Softaculous Apps Installer';
$globals['append_apps'] = NULL;
$globals['user_mod_dir'] = 0;
$globals['nat_config'] = 0;
$globals['show_in_notice'] = NULL;
$globals['disable_classes'] = 1;
$globals['panel_hf'] = 0;
$globals['disable_backup_restore'] = 0;
$globals['disable_template'] = NULL;
$globals['nolabels'] = 0;
$globals['group_order'] = NULL;
$globals['disable_reseller_panel'] = 0;
$globals['default_protocol'] = 3;
$globals['off_proto_1'] = 1;
$globals['off_proto_2'] = 1;
$globals['off_proto_3'] = 0;
$globals['off_proto_4'] = 0;
$globals['network_interface'] = NULL;
$globals['proxy_ip'] = NULL;
$globals['proxy_port'] = NULL;
$globals['proxy_user'] = NULL;
$globals['proxy_pass'] = NULL;
$globals['proxy_check'] = NULL;
$globals['bandwidth_limit'] = NULL;
$globals['adomain_path'] = '';
$globals['empty_pass'] = 0;
$globals['empty_username'] = 0;
$globals['empty_email'] = 0;
$globals['show_cscript_in_top'] = 0;
$globals['pass_strength'] = 12;
$globals['admin_prefix'] = '';
$globals['off_remove_mail'] = 0;
$globals['off_backup_mail'] = 0;
$globals['off_install_mail'] = 0;
$globals['off_edit_mail'] = 0;
$globals['disable_auto_backup'] = 0;
$globals['bandwidth_up_limit'] = NULL;
$globals['webuzo_disable_username'] = NULL;
$globals['off_clone_mail'] = 0;
$globals['disable_clone'] = 0;
$globals['disable_remote_import'] = 0;
$globals['disable_manage_sets'] = 0;
$globals['disable_import'] = 0;
$globals['disable_backup_upgrade'] = 0;
$globals['ephp_bin'] = NULL;
$globals['no_ampps'] = '';
$globals['no_strong_mysql_pass'] = 0;
$globals['install_tweet_off'] = 0;
$globals['install_tweet'] = '';
$globals['upgrade_tweet_off'] = 0;
$globals['upgrade_tweet'] = '';
$globals['clone_tweet_off'] = 0;
$globals['clone_tweet'] = '';
$globals['staging_tweet_off'] = 0;
$globals['staging_tweet'] = '';
$globals['pushtolive_tweet_off'] = 0;
$globals['pushtolive_tweet'] = '';
$globals['restore_template_tweet_off'] = 0;
$globals['restore_template_tweet'] = '';
$globals['no_ftp_encrypted'] = 0;
$globals['salt'] = 'WFdO6iDgCv73s530';
$globals['pre_download_all'] = 0;
$globals['session_timeout'] = 0;
$globals['eu_enable_themes'] = 1;
$globals['auto_backup_limit'] = 0;
$globals['disable_cats'] = NULL;
$globals['remove_dir'] = 0;
$globals['remove_db'] = 0;
$globals['remove_datadir'] = 0;
$globals['remove_wwwdir'] = 0;
$globals['custom_handler'] = NULL;
$globals['custom_protocol'] = NULL;
$globals['blank_domain'] = NULL;
$globals['ent_dbhost'] = NULL;
$globals['ent_db'] = NULL;
$globals['ent_dbuser'] = NULL;
$globals['ent_dbuserpass'] = NULL;
$globals['off_upgrade_plugins'] = 0;
$globals['off_upgrade_themes'] = 0;
$globals['preselect_autoupgrade_plugins'] = 0;
$globals['preselect_autoupgrade_themes'] = 0;
$globals['force_upgrade_plugins'] = 0;
$globals['force_upgrade_themes'] = 0;
$globals['amp_path'] = NULL;
$globals['amp_php'] = NULL;
$globals['amp_private'] = NULL;
$globals['amp_htdocs'] = NULL;
$globals['disable_auto_backup_daily'] = 0;
$globals['disable_auto_backup_weekly'] = 0;
$globals['disable_auto_backup_monthly'] = 0;
$globals['disable_auto_backup_custom'] = 0;
$globals['backups_expire'] = 0;
$globals['max_backups'] = 0;
$globals['max_backups_local'] = 7;
$globals['max_insid_backups'] = 0;
$globals['max_insid_backups_local'] = 7;
$globals['default_hf_bg'] = '';
$globals['default_cat_hover'] = '';
$globals['default_hf_text'] = '';
$globals['default_scriptname_text'] = '';
$globals['enable_myins'] = NULL;
$globals['default_landing'] = '';
$globals['curl_timeout'] = NULL;
$globals['no_add_domain'] = 0;
$globals['enable_auto_upgrade'] = 2;
$globals['force_auto_upgrade'] = 2;
$globals['set_backup_dir'] = '';
$globals['off_restore_mail'] = 0;
$globals['off_customize_theme'] = 0;
$globals['enc_db_pass'] = 0;
$globals['hide_api_pass'] = NULL;
$globals['time_format'] = '';
$globals['off_backup_au'] = 0;
$globals['pref_cron_minute'] = NULL;
$globals['pref_cron_hour'] = NULL;
$globals['pref_cron_day'] = NULL;
$globals['pref_cron_weekday'] = NULL;
$globals['no_prefill_db'] = 0;
$globals['override_fast_mirror'] = NULL;
$globals['cp_port'] = NULL;
$globals['disable_branches'] = 0;
$globals['enable_dbprefix'] = NULL;
$globals['curl_call_timeout'] = NULL;
$globals['disable_cronupdate_email'] = NULL;
$globals['soa_expire_val'] = NULL;
$globals['logs_level'] = 0;
$globals['override_mirror_images'] = '';
$globals['no_prefill_pass'] = 0;
$globals['enc_user_pass'] = 0;
$globals['sync_domains'] = 0;
$globals['disable_sign_on'] = 0;
$globals['demo_logo'] = '';
$globals['email_update_apps'] = NULL;
$globals['demo_logo_url'] = '';
$globals['favicon_logo'] = '';
$globals['use_eu_username'] = 0;
$globals['use_eu_email'] = 1;
$globals['dbpass_len'] = 12;
$globals['off_available_space'] = 0;
$globals['update_system'] = NULL;
$globals['off_rbackup'] = 0;
$globals['sync_ins_list'] = 0;
$globals['sync_ins_real_ver'] = 0;
$globals['off_sitepad'] = 0;
$globals['auto_backup'] = '0';
$globals['auto_backup_rotation'] = 0;
$globals['force_softaculous_on_ssl'] = 0;
$globals['off_import_mail'] = 0;
$globals['hide_sitepad'] = 0;
$globals['off_checkhttps'] = 0;
$globals['dbhost'] = NULL;
$globals['quick_install_default'] = 0;
$globals['cp_host'] = NULL;
$globals['encryption_key'] = NULL;
$globals['off_staging_mail'] = 0;
$globals['max_bg_process'] = 0;
$globals['au_extra_retry'] = 0;
$globals['upgrade_backup_on'] = 0;
$globals['off_staging'] = 0;
$globals['no_indir'] = 1;
$globals['max_staging'] = 0;
$globals['disable_current_ins'] = NULL;
$globals['disable_related_scripts'] = NULL;
$globals['disable_csrf'] = 0;
$globals['skip_pass_req'] = NULL;
$globals['off_push_to_live_backup'] = 0;
$globals['preserve_rsid'] = NULL;
$globals['allow_iframe'] = NULL;
$globals['disable_backup_ftp'] = 0;
$globals['disable_backup_softftpes'] = 0;
$globals['disable_backup_softsftp'] = 0;
$globals['disable_backup_dropbox'] = 0;
$globals['disable_backup_gdrive'] = 0;
$globals['disable_backup_webdav'] = 0;
$globals['disable_backup_aws'] = 0;
$globals['disable_backup_onedrive'] = 0;
$globals['sitepad_editor_path'] = '/var/softaculous/sitepad/editor';
$globals['user_homedir'] = '';
$globals['eu_off_default_install_notify'] = 0;
$globals['eu_off_default_remove_notify'] = 0;
$globals['eu_off_default_edit_notify'] = 0;
$globals['eu_off_default_backup_notify'] = 0;
$globals['eu_off_default_restore_notify'] = 0;
$globals['eu_off_default_template_notify'] = 0;
$globals['eu_off_default_restore_template_notify'] = 0;
$globals['eu_off_default_clone_notify'] = 0;
$globals['eu_off_default_staging_notify'] = 0;
$globals['eu_off_default_import_notify'] = 0;
$globals['eu_off_default_update_notify'] = 0;
$globals['eu_default_plainpass_notify'] = 0;
$globals['wp_manager_cname'] = NULL;
$globals['disable_wordpress_manager'] = 0;
$globals['disable_wp_icon_jupiter'] = 0;
$globals['disable_security_measures'] = 0;
$globals['webdav_timeout'] = NULL;
$globals['screenshot_frequency'] = 0;
$globals['off_wordpress_manager_icon'] = NULL;
$globals['wordpress_manager_title'] = '';
$globals['disable_local_backup'] = 0;
$globals['db_export_chunk_size'] = NULL;
$globals['auto_import_manual_ins'] = 0;
$globals['off_auto_import_wptoolkit'] = 0;
$globals['off_ins_stats'] = 0;
$globals['off_os_stats'] = 0;
$globals['mirrors_by_speed'] = array (
  0 => 'https://s3.softaculous.com/a/softaculous',
  1 => 'https://s7.softaculous.com/a/softaculous',
  2 => 'https://s2.softaculous.com/a/softaculous',
  3 => 'https://s4.softaculous.com/a/softaculous',
  4 => 'https://s1.softaculous.com/a/softaculous',
  5 => 'https://s5.softaculous.com/a/softaculous',
);
$globals['off_template_mail'] = 0;
$globals['off_restore_template_mail'] = 0;
$globals['cp_logo_url'] = NULL;

$globals['ampps_path'] = dirname(dirname(dirname(dirname(__FILE__)))); 
$globals['apps_path'] = $globals['ampps_path'].'/ampps/apps';
$globals['enduser'] = $globals['path'].(substr_count($globals['path'], 'directadmin') > 0 ? '/images' : '/enduser');
$globals['mainfiles'] = $globals['enduser'].'/main';
$globals['adminfiles'] = $globals['mainfiles'].'/admin';
$globals['euthemes'] = $globals['enduser'].'/themes';

if(file_exists(dirname(__FILE__).'/universal.custom.php')){
	include_once(dirname(__FILE__).'/universal.custom.php');
}
