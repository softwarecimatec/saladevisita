<?php

$THEME->doctype = 'html5';

$THEME->name = 'saladevisitas';

$THEME->parents = array('base');

/*$THEME->sheets = array(
    'saladevisitas_layout',  
    'saladevisitas_styles',  
    'saladevisitas_menu',
    'saladevisitas_blocks',
    'saladevisitas_mod',
    'saladevisitas_calendar',
    'saladevisitas_dock',
    'rtl'
);*/

$THEME->sheets = array(
    'font-awesome',
    'moodle'
);

$THEME->javascripts = array(
    'lib/modernizr-2.6.2.min'
);

$THEME->javascripts_footer = array(
    'lib/jquery-1.11.2.min',
    'lib/bootstrap.min',
    'main',
    'BaseController',
    'lib/jquery.stellar.min'
);

$THEME->parents_exclude_sheets = array(
    'base'=>array(
        'pagelayout',
        'dock'
    ),
);
$THEME->editor_sheets = array('editor');

$THEME->layouts = array(
    // Most backwards compatible layout without the blocks - this is the layout used by default
    'base' => array(
        'file' => 'default.php',
        'regions' => array(),
    ),
    // Standard layout with blocks, this is recommended for most pages with default information
    'standard' => array(
        'file' => 'default.php',
        'regions' => array('side-pre', 'side-post'),
        'defaultregion' => 'side-post',
    ),
    // Main course page
    'course' => array(
        'file' => 'default.php',
        'regions' => array('side-pre', 'side-post'),
        'defaultregion' => 'side-post',
        'options' => array('langmenu'=>true),
    ),
    'coursecategory' => array(
        'file' => 'cursos.php',
        'regions' => array('side-pre', 'side-post'),
        'defaultregion' => 'side-post',
    ),
    // part of course, typical for modules - default page layout if $cm specified in require_login()
    'incourse' => array(
        'file' => 'default.php',
        'regions' => array('side-pre', 'side-post'),
        'defaultregion' => 'side-post',
    ),
    // The site home page.
    'frontpage' => array(
        'file' => 'frontpage.php',
        'regions' => array('side-pre', 'side-post'),
        'defaultregion' => 'side-post',
    ),
    // Server administration scripts.
    'admin' => array(
        'file' => 'default.php',
        'regions' => array('side-pre'),
        'defaultregion' => 'side-pre',
    ),
    // My dashboard page
    'mydashboard' => array(
        'file' => 'default.php',
        'regions' => array('side-post'),
        'defaultregion' => 'side-post',
        'options' => array('langmenu'=>true),
    ),
    // My public page
    'mypublic' => array(
        'file' => 'default.php',
        'regions' => array('side-pre'),
        'defaultregion' => 'side-pre',
    ),
    'login' => array(
        'file' => 'default.php',
        'regions' => array(),
        'options' => array('langmenu'=>true),
    ),

    // Pages that appear in pop-up windows - no navigation, no blocks, no header.
    'popup' => array(
        'file' => 'default.php',
        'regions' => array(),
        'options' => array('nofooter'=>true, 'nonavbar'=>true, 'nocustommenu'=>true, 'nologininfo'=>true),
    ),
    // No blocks and minimal footer - used for legacy frame layouts only!
    'frametop' => array(
        'file' => 'default.php',
        'regions' => array(),
        'options' => array('nofooter'=>true),
    ),
    // Embedded pages, like iframe/object embeded in moodleform - it needs as much space as possible
    'embedded' => array(
        'file' => 'embedded.php',
        'regions' => array()
    ),
    // Used during upgrade and install, and for the 'This site is undergoing maintenance' message.
    // This must not have any blocks, and it is good idea if it does not have links to
    // other places - for example there should not be a home link in the footer...
    'maintenance' => array(
        'file' => 'default.php',
        'regions' => array(),
        'options' => array('noblocks'=>true, 'nofooter'=>true, 'nonavbar'=>true, 'nocustommenu'=>true),
    ),
    // Should display the content and basic headers only.
    'print' => array(
        'file' => 'default.php',
        'regions' => array(),
        'options' => array('noblocks'=>true, 'nofooter'=>true, 'nonavbar'=>false, 'nocustommenu'=>true),
    ),
    // The pagelayout used when a redirection is occuring.
    'redirect' => array(
        'file' => 'embedded.php',
        'regions' => array()
    ),
    // The pagelayout used for reports
    'report' => array(
        'file' => 'default.php',
        'regions' => array('side-pre'),
        'defaultregion' => 'side-pre',
    ),
);


$THEME->enable_dock = true;

$THEME->rendererfactory = 'theme_overridden_renderer_factory';

$THEME->csspostprocess = 'theme_essential_set_fontwww';