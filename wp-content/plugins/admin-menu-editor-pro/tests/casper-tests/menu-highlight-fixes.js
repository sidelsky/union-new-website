/*
 * Test for regressions in the "highlight current menu" algorithm.
 */

casper.start();
casper.test.comment('Test the menu highlight fix');

ameTest.deactivateAllHelpers();
ameTest.resetPluginConfiguration();

ameTest.thenLoginAsAdmin();
ameTest.thenOpenMenuEditor();

casper.then(function() {
	casper.test.comment('Move "Settings -> General" to "Appearance"');

	ameTest.loadDefaultMenu();
	ameTest.selectItemByTitle('Settings', 'General');
	casper.click('#ws_cut_item');
	ameTest.selectItemByTitle('Appearance');
	casper.click('#ws_paste_item');

	casper.click('#ws_save_menu');
});

function getHighlightedMenuCount() {
	return jQuery('li.wp-has-current-submenu, li.menu-top.current', '#adminmenu').length;
}
function getHighlightedItemCount() {
	return jQuery('ul.wp-submenu li.current', '#adminmenu').length;
}


casper.waitForSelector('#message.updated', function() {
	casper.test.assertDoesntExist(
		'#menu-settings .wp-submenu li a[href="options-general.php"]',
		'The "General" item is no longer in the "Settings" menu'
	);
	casper.test.assertExists(
		'#menu-appearance .wp-submenu li a[href="options-general.php"]',
		'The "General" item now shows up under "Appearance"'
	);
	casper.test.assertExists(
		'#menu-settings.wp-has-current-submenu.wp-menu-open',
		'"Settings" is still highlighted as the current menu'
	);
	casper.test.assertExists(
		'#menu-settings .wp-submenu li a[href="options-general.php?page=menu_editor"].current',
		'"Settings -> Menu Editor Pro" is still highlighted as the current menu item'
	);
	casper.test.assertEvalEquals(
		getHighlightedMenuCount, 1,
		'There is only one highlighted top level menu'
	);
	casper.test.assertEvalEquals(
		getHighlightedItemCount, 1,
		'There is only one highlighted submenu item'
	);

	casper.test.comment('Go to "Appearance -> General"');
});

casper.thenOpen(ameTestConfig.adminUrl + '/options-general.php', function() {
	casper.test.assertExists(
		'#menu-appearance.wp-has-current-submenu.wp-menu-open',
		'"Appearance" is highlighted as the current menu'
	);
	casper.test.assertExists(
		'#menu-appearance .wp-submenu li a[href="options-general.php"].current',
		'"Appearance -> General" is highlighted as the current menu item'
	);
	casper.test.assertEvalEquals(
		getHighlightedMenuCount, 1,
		'There is only one highlighted top level menu'
	);
	casper.test.assertEvalEquals(
		getHighlightedItemCount, 1,
		'There is only one highlighted submenu item'
	);
});

casper.run(function() {
	this.test.done();
});