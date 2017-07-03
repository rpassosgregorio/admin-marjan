/**
 * @license Copyright (c) 2003-2013, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.md or http://ckeditor.com/license
 */

CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here.
	// For the complete reference:
	// http://docs.ckeditor.com/#!/api/CKEDITOR.config

	// The toolbar groups arrangement, optimized for two toolbar rows.
	// Toolbar configuration generated automatically by the editor based on config.toolbarGroups.
	 config.toolbarGroups = [
	                         { name: 'document',       groups: [ 'mode', 'document', 'doctools' ] },
	                         { name: 'editing',     groups: [ 'find', 'selection', 'spellchecker' ] },
	                         { name: 'styles' },
	                         { name: 'forms' },
	                         { name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ] },
	                         { name: 'colors' },
	                         { name: 'paragraph',   groups: [ 'list', 'indent', 'blocks', 'align' ] },
	                         { name: 'links' },
	                         { name: 'insert' },
	                         { name: 'tools' },
	                         { name: 'others' }
	                     ];

	// Remove some buttons, provided by the standard plugins, which we don't
	// need to have in the Standard(s) toolbar.
	config.removeButtons = 'Underline,Subscript,Superscript,Styles';

	// Se the most common block elements.
	config.format_tags = 'p;h1;h2;h3;h4;h5';

	// Make dialogs simpler.
	config.removeDialogTabs = 'image:advanced;link:advanced';

	config.extraPlugins = 'colorbutton';
	//config.colorButton_colors = '000000,FF6699';
};
