<?php
require_once('mobile_device_detect.php');
$mobile = mobile_device_detect(true,true,false,true,true,true,true,false,false);
$android = mobile_device_detect(false,false,true,false,false,false,false,false,false);
?>
<?php if($mobile==true): ?>
<?php

/*
$HeadURL: https://textpattern.googlecode.com/svn/releases/4.3.0/source/textpattern/theme/remora/remora.php $
$LastChangedRevision: 0.4.1 $
*/

if (!defined('txpinterface')) die('txpinterface is undefined.');

theme::based_on('classic');

class txpmobile_theme extends classic_theme
{
function html_head()
	{
		return '
		<script src="theme/txpmobile/js/expand-textarea.js" type="text/javascript" charset="utf-8"></script>
		<script src="theme/txpmobile/js/commands.js" type="text/javascript"></script>
		
		<meta name="viewport" content="width=320; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;"/>
		
		<link type="text/css" rel="stylesheet" href="theme/txpmobile/css/txpmobile.css">
		<link type="text/css" media="all and (min-device-width: 481px) and (max-device-width: 1024px)" rel="stylesheet" href="theme/txpmobile/css/ipad.css">
		<link rel="apple-touch-icon-precomposed" href="theme/txpmobile/images/apple-icon-precomposed.png"/>
		';
	}


	function header()
	{
		global $txp_user;
		$out[] = '<div id="masthead"><ul id="nav">';
		foreach ($this->menu as $tab)
		{
			$class = ($tab['active']) ? 'tabup active' : 'tabdown inactive';
			$out[] = "<li class='primary {$class}'><a class='content-toggle' href='#content'>{$tab['label']}</a>";
			if (!empty($tab['items']))
			{
				$out[] = '<div id="nav-content"><ul>';
				foreach ($tab['items'] as $item)
				{
					$class = ($item['active']) ? 'tabup active' : 'tabdown2 inactive';
					$out[] = "<li class='secondary {$class}'><a href='?event={$item['event']}'>{$item['label']}</a></li>";
				}
				$out[] = '</ul></div>';

			}
			$out[] = '</li>';
		}
		$out[] = '<li id="view-site" class="primary tabdown inactive"><a href="'.hu.'" target="_blank">'.gTxt('tab_view_site').'</a></li>';
		if ($txp_user) $out[] = '<li id="logout" class="primary tabdown inactive"><a href="index.php?logout=1" onclick="return verify(\''.gTxt('are_you_sure').'\')">'.gTxt('logout').'</a></li>';
		$out[] = '</ul></div>';
		$out[] = '<div id="messagepane">'.$this->announce($this->message).'</div>';
		return join(n, $out);
	}

	function footer()
	{
		return '<div id="end_page">'.n.
			'<a href="http://textpattern.com/" id="mothership"><img src="theme/classic/carver.gif" width="60" height="48" border="0" alt="" /></a><br/><a href="http://txpmobile.com/">Theme by TXP Mobile</a>'.n.
			graf('Textpattern &#183; '.txp_version).n.'</div>';
	}

	function manifest()
	{
		global $prefs;
		return array(
			'author' 		=> 'Oliver Ker',
			'author_uri' 	=> 'http://olik.co.uk/',
			'description' 	=> 'TXP Mobile',
			'help' 			=> 'http://txpmobile.com',
		);
	}
}
?>
<?php elseif($android==true): ?>

<?php

/*
$HeadURL: https://textpattern.googlecode.com/svn/releases/4.3.0/source/textpattern/theme/remora/remora.php $
$LastChangedRevision: 0.4.1 $
*/

if (!defined('txpinterface')) die('txpinterface is undefined.');

theme::based_on('classic');

class txpmobile_theme extends classic_theme
{
function html_head()
	{
		return '
		<script src="theme/txpmobile/js/expand-textarea.js" type="text/javascript" charset="utf-8"></script>
		<script src="theme/txpmobile/js/commands.js" type="text/javascript"></script>
		
		<meta name="viewport" content="width=320; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;"/>
		
		<link type="text/css" rel="stylesheet" href="theme/txpmobile/css/txpmobile.css">
		<link type="text/css" rel="stylesheet" href="theme/txpmobile/css/android.css">
		<link type="text/css" media="all and (min-device-width: 481px) and (max-device-width: 1024px)" rel="stylesheet" href="theme/txpmobile/css/ipad.css">
		<link rel="apple-touch-icon-precomposed" href="theme/txpmobile/images/apple-icon-precomposed.png"/>
		';
	}


	function header()
	{
		global $txp_user;
		$out[] = '<div id="masthead"><ul id="nav">';
		foreach ($this->menu as $tab)
		{
			$class = ($tab['active']) ? 'tabup active' : 'tabdown inactive';
			$out[] = "<li class='primary {$class}'><a class='content-toggle' href='#content'>{$tab['label']}</a>";
			if (!empty($tab['items']))
			{
				$out[] = '<div id="nav-content"><ul>';
				foreach ($tab['items'] as $item)
				{
					$class = ($item['active']) ? 'tabup active' : 'tabdown2 inactive';
					$out[] = "<li class='secondary {$class}'><a href='?event={$item['event']}'>{$item['label']}</a></li>";
				}
				$out[] = '</ul></div>';

			}
			$out[] = '</li>';
		}
		$out[] = '<li id="view-site" class="primary tabdown inactive"><a href="'.hu.'" target="_blank">'.gTxt('tab_view_site').'</a></li>';
		if ($txp_user) $out[] = '<li id="logout" class="primary tabdown inactive"><a href="index.php?logout=1" onclick="return verify(\''.gTxt('are_you_sure').'\')">'.gTxt('logout').'</a></li>';
		$out[] = '</ul></div>';
		$out[] = '<div id="messagepane">'.$this->announce($this->message).'</div>';
		return join(n, $out);
	}

	function footer()
	{
		return '<div id="end_page">'.n.
			'<a href="http://textpattern.com/" id="mothership"><img src="theme/classic/carver.gif" width="60" height="48" border="0" alt="" /></a><br/><a href="http://txpmobile.com/">Theme by TXP Mobile</a>'.n.
			graf('Textpattern &#183; '.txp_version).n.'</div>';
	}

	function manifest()
	{
		global $prefs;
		return array(
			'author' 		=> 'Oliver Ker',
			'author_uri' 	=> 'http://olik.co.uk/',
			'description' 	=> 'TXP Mobile',
			'help' 			=> 'http://txpmobile.com',
		);
	}
}
?>

<?php else: ?>

<?php

/*
$HeadURL: https://textpattern.googlecode.com/svn/releases/4.3.0/source/textpattern/theme/remora/remora.php $
$LastChangedRevision: 0.4.1 $
*/

if (!defined('txpinterface')) die('txpinterface is undefined.');

theme::based_on('classic');

class txpmobile_theme extends classic_theme
{
	function html_head()
	{
		$js = <<<SF
			$(document).ready( function() {
				$("#nav li").hover( function() { $(this).addClass("sfhover"); }, function() { $(this).removeClass("sfhover"); } );
			});
SF;
		return parent::html_head().n.script_js($js).n;
	}

	function header()
	{
		global $txp_user;
		$out[] = '<div id="masthead"><ul id="nav">';
		foreach ($this->menu as $tab)
		{
			$class = ($tab['active']) ? 'tabup active' : 'tabdown inactive';
			$out[] = "<li class='primary {$class}'><a href='?event={$tab['event']}'>{$tab['label']}</a>";
			if (!empty($tab['items']))
			{
				$out[] = '<ul>';
				foreach ($tab['items'] as $item)
				{
					$class = ($item['active']) ? 'tabup active' : 'tabdown2 inactive';
					$out[] = "<li class='secondary {$class}'><a href='?event={$item['event']}'>{$item['label']}</a></li>";
				}
				$out[] = '</ul>';

			}
			$out[] = '</li>';
		}
		$out[] = '<li id="view-site" class="primary tabdown inactive"><a href="'.hu.'" target="_blank">'.gTxt('tab_view_site').'</a></li>';
		if ($txp_user) $out[] = '<li id="logout" class="primary tabdown inactive"><a href="index.php?logout=1" onclick="return verify(\''.gTxt('are_you_sure').'\')">'.gTxt('logout').'</a></li>';
		$out[] = '</ul></div>';
		$out[] = '<div id="messagepane">'.$this->announce($this->message).'</div>';
		return join(n, $out);
	}

	function footer()
	{
		return '<div id="end_page">'.n.
			'<a href="http://textpattern.com/" id="mothership"><img src="theme/classic/carver.gif" width="60" height="48" border="0" alt="" /></a>'.n.
			graf('Textpattern &#183; '.txp_version).n.'</div>';
	}

	function manifest()
	{
		global $prefs;
		return array(
			'author' 		=> 'Team Textpattern',
			'author_uri' 	=> 'http://textpattern.com/',
			'version' 		=> $prefs['version'],
			'description' 	=> 'Textpattern Remora Theme',
			'help' 			=> 'http://textpattern.com/admin-theme-help',
		);
	}
}
?>
<?php endif; ?>