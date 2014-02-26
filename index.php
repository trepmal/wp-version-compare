<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<title>WP Compare</title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!--
	<link rel="shortcut icon" href="/favicon.ico">
	<link rel="apple-touch-icon" href="/apple-touch-icon.png">
 -->

	<link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/themes/smoothness/jquery-ui.css">
	<link rel="stylesheet" href="//trepmal.com/wp-content/themes/defenestrate/genericons/genericons.css">
	<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="style.css">
	<!-- <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/2.3.1/css/bootstrap.css"> -->

</head>

<body>

	<div class="container">
		<h1>WP Compare</h1>
		<div class="page">

			<div id="slider-range"></div>
			<p><span class="from"></span> &mdash; <span class="to"></span></p>

			<ul class="group" data-vers="3.0">
				<li class="heading">3.0</li>
				<li class="release">Thelonious</li>
				<li class="feature">Twenty Ten</li>
				<li class="feature">Lighter interface</li>
				<li class="feature">Contextual help</li>
				<li class="feature">Bulk update plugins</li>
				<li class="bugfix">1217 bug fixes and enhancements</li>
				<li class="dev">MU merge</li>
				<li class="dev">New APIs for custom backgrounds, headers, shortlinks, menus, post types, taxonomies</li>
			</ul>
			<ul class="group" data-vers="3.0.1">
				<li class="heading">3.0.1</li>
				<li class="release">Maintenance Release</li>
				<li class="bugfix">50 minor issues</li>
			</ul>
			<ul class="group" data-vers="3.0.2">
				<li class="heading">3.0.2</li>
				<li class="release">Security Release</li>
				<li class="security">Preven malicious authors from gaining more access</li>
				<li class="bugfix">misc</li>
				<li class="dev">misc</li>
			</ul>
			<ul class="group" data-vers="3.0.3">
				<li class="heading">3.0.3</li>
				<li class="release">Security Release</li>
				<li class="security">XML-RPC fix</li>
			</ul>
			<ul class="group" data-vers="3.0.4">
				<li class="heading">3.0.4</li>
				<li class="release">Security Release</li>
				<li class="security">Critical bug in KSES</li>
			</ul>
			<ul class="group" data-vers="3.1">
				<li class="heading">3.1</li>
				<li class="release">Reinhardt</li>
				<li class="feature">Redesigned linking workflow</li>
				<li class="feature">Network Admin</li>
				<li class="dev">Post Formats</li>
				<li class="dev">Advanced Meta and Taxonomy Queries</li>
			</ul>
			<ul class="group" data-vers="3.1.1">
				<li class="heading">3.1.1</li>
				<li class="security">Hardening for media uploads</li>
				<li class="security">Performance improvements</li>
				<li class="security">Fixes for IIS6 support</li>
				<li class="security">Fixes for PATHINFO permalinks</li>
				<li class="security">Various query and taxonomy edge cases</li>
			</ul>
			<ul class="group" data-vers="3.1.2">
				<li class="heading">3.1.2</li>
				<li class="release">Security Release</li>
				<li class="security">Fix for contributors who could improperly publish</li>
			</ul>
			<ul class="group" data-vers="3.1.3">
				<li class="heading">3.1.3</li>
				<li class="release">Maintenance and Security Release</li>
				<li class="security">Various security hardening</li>
				<li class="security">Taxonomy query hardening</li>
				<li class="security">Prevent username sniffing</li>
				<li class="security">Media security</li>
				<li class="security">Improve upload security</li>
				<li class="security">Remove failed import files</li>
				<li class="security">Add clickjacking protection</li>
			</ul>
			<ul class="group" data-vers="3.2">
				<li class="heading">3.2</li>
				<li class="release">Gershwin</li>
				<li class="feature">Refreshed dashboard</li>
				<li class="feature">Twenty Eleven</li>
				<li class="feature">Distraction-free writing</li>
				<li class="dev">Retiring support for PHP4, old MySQL, old IE</li>
				<li class="feature">Admin Bar additions</li>
				<li class="dev">Core updates only update changed files</li>
			</ul>
			<ul class="group" data-vers="3.2.1">
				<li class="heading">3.2.1</li>
				<li class="release">Maintenance Release</li>
				<li class="dev">Server incompatibility related to JSON</li>
			</ul>
			<ul class="group" data-vers="3.3">
				<li class="heading">3.3</li>
				<li class="release">Sonny</li>
				<li class="feature">Drag-and-drop uploader</li>
				<li class="feature">New toolbar</li>
				<li class="feature">Improved co-editing</li>
				<li class="dev">Editor API</li>
				<li class="dev">Updated jQuery</li>
				<li class="dev">Help screen hooks</li>
				<li class="dev">Permalink performance improvements</li>
			</ul>
			<ul class="group" data-vers="3.3.1">
				<li class="heading">3.3.1</li>
				<li class="release">Maintenance and Security Release</li>
				<li class="bugfix">15 issues</li>
				<li class="security">XSS vulnerability</li>
			</ul>
			<ul class="group" data-vers="3.3.2">
				<li class="heading">3.3.2</li>
				<li class="release">Maintenance and Security Release</li>
				<li class="dev">External library updates: Plupload, SWFUpload, SWFObject</li>
			</ul>
			<ul class="group" data-vers="3.4">
				<li class="heading">3.4</li>
				<li class="release">Green</li>
				<li class="feature">Theme Customizer</li>
				<li class="feature">Twitter embeds</li>
				<li class="feature">Captions</li>
				<li class="dev">XML-RPC improvements</li>
				<li class="dev">Custom Header API improvements</li>
				<li class="dev">WP_Query improvements</li>
				<li class="dev">Translation system improvements</li>
			</ul>
			<ul class="group" data-vers="3.4.1">
				<li class="heading">3.4.1</li>
				<li class="release">Maintenance and Security Release</li>
				<li class="bugfix">Fixes page template detection issue</li>
				<li class="bugfix">Fixes category permalink issue</li>
				<li class="bugfix">Better handling for incorrect Javascript loading</li>
				<li class="bugfix">Early support for iOS6 uploads</li>
				<li class="bugfix">Better compatability for servers with uncommon setups</li>
			</ul>
			<ul class="group" data-vers="3.4.2">
				<li class="heading">3.4.2</li>
				<li class="release">Maintenance and Security Release</li>
				<li class="bugfix">Fixes issue with older browsers in the admin</li>
				<li class="bugfix">Fixes theme preview issue</li>
				<li class="bugfix">Improve compatibility with the visual editor</li>
				<li class="bugfix">Address pagination issues with some category permalink structures</li>
				<li class="bugfix">Fixes oEmbed trackback issue</li>
				<li class="bugfix">Prevent improperly sized header images from being uploaded</li>
			</ul>
			<ul class="group" data-vers="3.5">
				<li class="heading">3.5</li>
				<li class="release">Elvin</li>
				<li class="feature">Brand new media workflow</li>
				<li class="dev">Plugin favorites</li>
				<li class="dev">Tumblr importer</li>
				<li class="dev">switch_to_blog() improvements</li>
				<li class="dev">MS can be installed in a subdirectory</li>
			</ul>
			<ul class="group" data-vers="3.5.1">
				<li class="heading">3.5.1</li>
				<li class="release">Maintenance and Security Release</li>
				<li class="bugfix">Prevent some HTML elements from being removed</li>
				<li class="bugfix">Fix minor issues media workflow</li>
				<li class="bugfix">Suggest proper rewrite rules for new networks</li>
				<li class="bugfix">Prevent schedule posts from losing certain elements</li>
				<li class="bugfix">Fix for some installs where javascript wouldn't load</li>
				<li class="bugfix">Suppress errors when database or user APIs were misused</li>
			</ul>
			<ul class="group" data-vers="3.5.2">
				<li class="heading">3.5.2</li>
				<li class="release">Maintenance and Security Release</li>
				<li class="security">Block server-side request forgery attacks</li>
				<li class="security">Disallow contributors from improperly publishing posts</li>
				<li class="security">SWFUpload</li>
				<li class="security">Prevent DOS attacks for sits using password-protected posts</li>
				<li class="security">TinyMCE XSS fix</li>
				<li class="security">Misc XSS fixes</li>
				<li class="security">Avoid disclosing full path on failed updates</li>
			</ul>
			<ul class="group" data-vers="3.6">
				<li class="heading">3.6</li>
				<li class="release">Oscar</li>
				<li class="feature">Twenty Thirteen</li>
				<li class="feature">Revamped Revisions</li>
				<li class="feature">Post Locking</li>
				<li class="feature">Augmented Autosave</li>
				<li class="feature">Built-in HTML5 media player</li>
				<li class="feature">Menu Editor</li>
				<li class="dev">Audio/Video API</li>
				<li class="dev">Choose HTML5 for certain features</li>
				<li class="dev">Filters for revisions</li>
			</ul>
			<ul class="group" data-vers="3.6.1">
				<li class="heading">3.6.1</li>
				<li class="release">Maintenance and Security Release</li>
				<li class="security">Block unsafe PHP unserialization</li>
				<li class="security">Prevent Author from creating posts "written by" another</li>
				<li class="security">Fix insufficient input validation</li>
			</ul>
			<ul class="group" data-vers="3.7">
				<li class="heading">3.7</li>
				<li class="release">Basie</li>
				<li class="feature">Automatic updates</li>
				<li class="feature">Stronger password recommendations</li>
				<li class="feature">Better global support</li>
			</ul>
			<ul class="group" data-vers="3.7.1">
				<li class="heading">3.7.1</li>
				<li class="release">Maintenance Release</li>
				<li class="bugfix">Fix broken image captions in editor</li>
				<li class="bugfix">Check for updates even on poorly configured servers</li>
				<li class="bugfix">Avoid fatal errors on plugins</li>
				<li class="bugfix">Fix hierarchical sorting</li>
				<li class="bugfix">Fix warnings and notices</li>
			</ul>
			<ul class="group" data-vers="3.8">
				<li class="heading">3.8</li>
				<li class="release">Parker</li>
				<li class="feature">Shiny new admin interface</li>
				<li class="feature">Responsive admin</li>
				<li class="feature">Improved Theme Management</li>
				<li class="feature">Improved Widgets</li>
				<li class="feature">Twenty Fourteen</li>
			</ul>
			<ul class="group" data-vers="3.8.1">
				<li class="heading">3.8.1</li>
				<li class="release">Maintenance Release</li>
				<li class="bugfix">Fix embedded tweets</li>
				<li class="bugfix">Fixes for new admin</li>
				<li class="bugfix">Fix for taxonomy queries</li>
				<li class="bugfix">Fix button "dead zone"</li>
			</ul>


		</div>
	</div>

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
<script>
	jQuery(document).ready( function($) {

	function _hide( el, lt, gt ) {
		//var el, gt, lt;
		el.show();

		el.filter(function() {
			if ( typeof lt == 'undefined' ) {
				//true so far
				lt = -999999;
			}
			if ( typeof gt == 'undefined' ) {
				gt = 999999;
			}
			vers = parseFloat( $(this).attr("data-vers") );

			if ( vers < lt || vers > gt ) return true;

			return false;

		}).hide();

	}


	init_gt = 3.1;
	init_lt = 3.5;
	_hide( $('.group'), init_gt, init_lt );
	$('span.from').html( init_gt );
	$('span.to').html( init_lt );

	$( "#slider-range" ).slider({
	  range: true,
	  min: 2,
	  max: 3.8,
	  step: .1,
	  values: [ init_gt, init_lt ],
	  slide: function( event, ui ) {

		_hide( $('.group'), ui.values[0], ui.values[1] );
		$('span.from').html( ui.values[0] );
		$('span.to').html( ui.values[1] );

	  }
	});

	});
</script>
</body>
</html>