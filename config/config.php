<?php 

/**
 * Contao Open Source CMS, Copyright (C) 2005-2014 Leo Feyer
 *
 * Utility LastLogin - Config
 * 
 * @copyright  Glen Langer 2013..2014 <https://contao.ninja>
 * @author     Glen Langer (BugBuster)
 * @package    LastLogin
 * @license    LGPL
 * @version    3.2.0
 * @filesource
 * @see	       https://github.com/BugBuster1701/lastlogin
 */

/**
 * Register hook functions
 */
$GLOBALS['TL_HOOKS']['replaceInsertTags'][] = array('LastLogin\LastLogin', 'ReplaceInsertTagsLastLogin');


/**
 * Abschaltung der Login Bedingung mit "false", Default ist "true"
 * Updatesicher sollte dies in der localconfig.php eingetragen werden.
 * Vorher Frontend Nutzer Einverständnis einholen.
 * 
 * $GLOBALS['TL_CONFIG']['mod_lastlogin_login_check'] = false;
 * 
 */

