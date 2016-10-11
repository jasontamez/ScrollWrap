<?php

if ( function_exists( 'wfLoadExtension' ) ) {
	wfLoadExtension( 'ScrollWrap' );
	// Keep i18n globals so mergeMessageFileList.php doesn't break
	$wgMessagesDirs['ScrollWrap'] = __DIR__ . '/i18n';

	$wgExtensionMessagesFiles['ScrollWrapMagic'] = __DIR__ . '/ScrollWrap.i18n.magic.php';
	wfWarn(
		'Deprecated PHP entry point used for ScrollWrap extension. Please use wfLoadExtension ' .
		'instead, see https://www.mediawiki.org/wiki/Extension_registration for more details.'
	);
	return true;
} else {
	die( 'This version of the ScrollWrap extension requires MediaWiki 1.25+' );
}
