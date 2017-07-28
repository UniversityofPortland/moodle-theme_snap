<?php
defined('MOODLE_INTERNAL') || die;// Main settings.
use theme_snap\admin_setting_configradiobuttons;

$snapsettings = new admin_settingpage('themesnapcoursedisplay', get_string('coursedisplay', 'theme_snap'));

// Left toc option.
$name = 'theme_snap/leftnav';
$title = new lang_string('leftnav', 'theme_snap');
$description = new lang_string('leftnavdesc', 'theme_snap');
$default = $unchecked;
$setting = new admin_setting_configcheckbox($name, $title, $description, $default, $checked, $unchecked);
$snapsettings->add($setting);

// Course toc display options.
$name = 'theme_snap/leftnav';
$title = new lang_string('leftnav', 'theme_snap');
$list = get_string('list', 'theme_snap');
$top = get_string('top', 'theme_snap');
$radios = array('list' => $list, 'top' => $top);
$default = 'top';
$description = new lang_string('leftnavdesc', 'theme_snap');
$setting = new admin_setting_configradiobuttons($name, $title, $description, $default, $radios);
$snapsettings->add($setting);

// Resource display options.
$name = 'theme_snap/resourcedisplay';
$title = new lang_string('resourcedisplay', 'theme_snap');
$card = new lang_string('card', 'theme_snap');
$list = new lang_string('list', 'theme_snap');
$radios = array('list' => $list, 'card' => $card);
$default = 'card';
$description = get_string('resourcedisplayhelp', 'theme_snap');
$setting = new admin_setting_configradiobuttons($name, $title, $description, $default, $radios);
$snapsettings->add($setting);

// Course footer on/off.
$name = 'theme_snap/coursefootertoggle';
$title = new lang_string('coursefootertoggle', 'theme_snap');
$description = new lang_string('coursefootertoggledesc', 'theme_snap');
$default = $checked;
$setting = new admin_setting_configcheckbox($name, $title, $description, $default, $checked, $unchecked);
$snapsettings->add($setting);

// Hide navigation block.
$name = 'theme_snap/hidenavblock';
$title = new lang_string('hidenavblock', 'theme_snap');
$description = new lang_string('hidenavblockdesc', 'theme_snap');
$default = $checked;
$setting = new admin_setting_configcheckbox($name, $title, $description, $default, $checked, $unchecked);
$snapsettings->add($setting);

$settings->add($snapsettings);
