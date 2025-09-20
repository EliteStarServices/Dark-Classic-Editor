<?php
/*
Plugin Name: Dark Classic Editor
Description: Simple Dark Mode for Classic Editor / Post Edit Screens.
Author: Elite Star Services
Version: 1.4.0
*/

add_action('admin_enqueue_scripts', function($hook) {
    // Only apply to post and page edit screens
    if ($hook === 'post.php' || $hook === 'post-new.php') {
        echo '<style>
            /* Main admin background */
            body.wp-admin {
                background: #1a1a1a !important;
                color: #e0e0e0 !important;
            }
            
            /* Admin menu */
            #adminmenu, #adminmenu .wp-submenu, #adminmenuback, #adminmenuwrap {
                background-color: #23272a !important;
            }
            
            /* Main content areas */
            .wrap, .postbox, .inside {
                background: #1a1a1a !important;
                color: #e0e0e0 !important;
                border-color: #444 !important;
            }
            
            /* Page title and edit post/page headers */
            .wrap h1, .wrap h2 {
                color: #e0e0e0 !important;
            }
            
            /* Add New button and similar action buttons */
            .page-title-action, .add-new-h2 {
                background: #3c3c3c !important;
                color: #e0e0e0 !important;
                border-color: #555 !important;
            }
            
            .page-title-action:hover, .add-new-h2:hover {
                background: #4c4c4c !important;
                color: #fff !important;
            }
            
            /* Previous/Next post navigation buttons */
            #adminpostnav-prev, #adminpostnav-next, 
            .adminpostnav-prev, .adminpostnav-next {
                background: #3c3c3c !important;
                color: #e0e0e0 !important;
                border-color: #555 !important;
                text-decoration: none !important;
            }
            
            #adminpostnav-prev:hover, #adminpostnav-next:hover,
            .adminpostnav-prev:hover, .adminpostnav-next:hover {
                background: #4c4c4c !important;
                color: #fff !important;
            }
            
            /* Post title */
            #title, #post-title-0 {
                background: #2c2c2c !important;
                color: #e0e0e0 !important;
                border-color: #555 !important;
            }
            
            /* Text editor (HTML mode) */
            #content {
                background: #1a1a1a !important;
                color: #e0e0e0 !important;
                border-color: #555 !important;
            }
            
            /* TinyMCE Editor Area */
            #postdivrich, .postarea, .wp-editor-expand {
                background: #2c2c2c !important;
                color: #e0e0e0 !important;
            }
            
            /* Editor wrapper */
            #wp-content-wrap, .wp-core-ui, .wp-editor-wrap, .mce-toolbar, .mce-toolbar-grp {
                background: #1a1a1a !important;
                border-color: #555 !important;
            }
            
            /* TinyMCE iframe */
            #content_ifr {
                background: #1a1a1a !important;
                border-color: #555 !important;
            }
            
            /* TinyMCE UI elements (mceu) */
            .mce-tinymce, .mce-container, .mce-panel {
                background: #1a1a1a !important;
                border-color: #555 !important;
            }
            
            .mce-ico {
                background: #80878e !important;
                color: #222 !important;
                border-color: #555 !important;
            }
            
            .mce-btn, .mce-btn button {
                background: #3c3c3c !important;
                color: #e0e0e0 !important;
                border-color: #555 !important;
            }
            
            .mce-btn:hover, .mce-btn button:hover {
                background: #4c4c4c !important;
                color: #fff !important;
            }
            
            .mce-btn.mce-active, .mce-btn.mce-active button {
                background: #0073aa !important;
                color: #fff !important;
            }
            
            /* TinyMCE menu bar */
            .mce-menubar, .mce-menu {
                background: #2c2c2c !important;
                color: #e0e0e0 !important;
                border-color: #555 !important;
            }
            
            .mce-menu-item, .mce-menu-item-normal {
                background: #2c2c2c !important;
                color: #e0e0e0 !important;
            }
            
            .mce-menu-item:hover, .mce-menu-item-hover {
                background: #4c4c4c !important;
                color: #fff !important;
            }
            
            /* TinyMCE status bar */
            .mce-statusbar {
                background: #2c2c2c !important;
                border-color: #555 !important;
            }
            
            /* TinyMCE path */
            .mce-path {
                background: #2c2c2c !important;
                color: #e0e0e0 !important;
            }
            
            /* TinyMCE resize handle */
            .mce-resizehandle {
                background: #555 !important;
            }
            
            /* Media buttons */
            #wp-content-media-buttons, .wp-media-buttons {
                background: #1a1a1a !important;
                border-color: #555 !important;
            }
            
            .insert-media, .add_media {
                background: #3c3c3c !important;
                color: #e0e0e0 !important;
                border-color: #555 !important;
            }
            
            .insert-media:hover, .add_media:hover {
                background: #4c4c4c !important;
                color: #fff !important;
            }
            
            /* Editor container */
            #wp-content-editor-container, .wp-editor-container {
                background: #2c2c2c !important;
                border-color: #555 !important;
            }
            
            /* Quick tags toolbar */
            #ed_toolbar, .quicktags-toolbar {
                background: #2c2c2c !important;
                border-color: #555 !important;
            }
            
            /* Word count and post status info table */
            #post-status-info {
                background: #2c2c2c !important;
                color: #e0e0e0 !important;
                border-color: #555 !important;
            }
            
            #post-status-info td {
                background: #2c2c2c !important;
                color: #e0e0e0 !important;
                border-color: #555 !important;
            }
            
            /* Content resize handle */
            #content-resize-handle {
                background: #2c2c2c !important;
                border-color: #555 !important;
            }
            
            /* Visual/Text editor tabs */
            .wp-editor-tabs .wp-switch-editor {
                background: #2c2c2c !important;
                color: #e0e0e0 !important;
                border-color: #555 !important;
            }
            
            .wp-editor-tabs .wp-switch-editor:hover {
                background: #3c3c3c !important;
                color: #fff !important;
            }
            
            .wp-editor-tabs .wp-switch-editor.switch-tmce.active,
            .wp-editor-tabs .wp-switch-editor.switch-html.active {
                background: #1a1a1a !important;
                color: #fff !important;
                border-bottom-color: #1a1a1a !important;
            }
            
            /* Editor toolbar container */
            .wp-editor-tools {
                background: #1a1a1a !important;
                border-color: #555 !important;
            }
            
            /* Text editor toolbar (HTML mode buttons) */
            #ed_toolbar {
                background: #2c2c2c !important;
                border-color: #555 !important;
            }
            
            #ed_toolbar input[type="button"] {
                background: #3c3c3c !important;
                color: #e0e0e0 !important;
                border-color: #555 !important;
            }
            
            #ed_toolbar input[type="button"]:hover {
                background: #4c4c4c !important;
                color: #fff !important;
            }
            
            /* Word count and last edit info */
            #wp-word-count, .wp-word-count {
                background: #2c2c2c !important;
                color: #e0e0e0 !important;
                border-color: #555 !important;
            }
            
            #post-status-info, .post-status-info {
                background: #2c2c2c !important;
                color: #e0e0e0 !important;
                border-color: #555 !important;
            }
            
            /* Autosave and last edit info */
            #autosave, .autosave-info {
                background: #2c2c2c !important;
                color: #e0e0e0 !important;
            }
            
            /* Metabox headers */
            .postbox h2, .postbox h3, .hndle {
                background: #1a1a1a !important;
                color: #e0e0e0 !important;
                border-color: #555 !important;
            }
            
            /* Form elements */
            input[type="text"], input[type="email"], input[type="url"], 
            input[type="password"], input[type="search"], textarea, select {
                background: #2c2c2c !important;
                color: #e0e0e0 !important;
                border-color: #555 !important;
            }
            
            /* Buttons */
            .button, .button-secondary {
                background: #3c3c3c !important;
                color: #e0e0e0 !important;
                border-color: #555 !important;
            }
            
            .button:hover, .button-secondary:hover {
                background: #4c4c4c !important;
                color: #fff !important;
            }
            
            .button-primary {
                background: #0073aa !important;
                color: #fff !important;
                border-color: #005a87 !important;
            }
            
            .button-primary:hover {
                background: #005a87 !important;
            }
            
            /* Publishing actions */
            #major-publishing-actions {
                background: #1a1a1a !important;
                border-color: #555 !important;
            }
            
            /* Publish box and sidebar */
            #submitdiv, #submitpost, .submitbox {
                background: #1a1a1a !important;
                color: #e0e0e0 !important;
                border-color: #555 !important;
            }
            
            #minor-publishing, #minor-publishing-actions {
                background: #1a1a1a !important;
                border-color: #555 !important;
            }
            
            /* Post status and preview */
            #save-action, #preview-action, #misc-publishing-actions {
                background: #1a1a1a !important;
                color: #e0e0e0 !important;
            }
            
            .misc-pub-section {
                background: #1a1a1a !important;
                color: #e0e0e0 !important;
                border-color: #555 !important;
            }
            
            /* Preview button */
            .preview.button {
                background: #3c3c3c !important;
                color: #e0e0e0 !important;
                border-color: #555 !important;
            }
            
            .preview.button:hover {
                background: #4c4c4c !important;
                color: #fff !important;
            }
            
            /* Edit post status links */
            .edit-post-status, .save-post-status, .cancel-post-status {
                color: #7fb8e3 !important;
            }
            
            .edit-post-status:hover, .save-post-status:hover {
                color: #9ec9ec !important;
            }
            
            /* Post status select */
            #post-status-select {
                background: #2c2c2c !important;
                border-color: #555 !important;
            }
            
            /* Categories and tags */
            .categorydiv .tabs-panel, .tagsdiv .tabs-panel {
                background: #1a1a1a !important;
                border-color: #555 !important;
            }
            
            .categorydiv .tabs-panel ul li {
                color: #e0e0e0 !important;
            }
            
            /* Category tabs styling based on actual HTML structure */
            #category-tabs {
                background: #1a1a1a !important;
                border-color: #555 !important;
            }
            
            /* Default state for tab buttons */
            #category-tabs li.tabs,
            #category-tabs li.hide-if-no-js {
                background: #1a1a1a !important;
                border-color: #555 !important;
            }
            
            #category-tabs li.tabs a,
            #category-tabs li.hide-if-no-js a {
                background: #1a1a1a !important;
                color: #e0e0e0 !important;
                text-decoration: none !important;
            }
            
            /* Hover states */
            #category-tabs li.tabs:hover,
            #category-tabs li.hide-if-no-js:hover {
                background: #222 !important;
            }
            
            #category-tabs li.tabs:hover a,
            #category-tabs li.hide-if-no-js:hover a {
                background: #222 !important;
                color: #fff !important;
            }
            
            /* Active state - when #category-all is visible (no display:none), "All Categories" is active */
            #taxonomy-category:has(#category-all:not([style*="display: none"])) #category-tabs li.tabs,
            #taxonomy-category:has(#category-all:not([style*="display: none"])) #category-tabs li.tabs a {
                background: #0073aa !important;
                color: #fff !important;
                border-color: #005a87 !important;
            }
            
            /* Active state - when #category-pop is visible (no display:none), "Most Used" is active */
            #taxonomy-category:has(#category-pop:not([style*="display: none"])) #category-tabs li.hide-if-no-js,
            #taxonomy-category:has(#category-pop:not([style*="display: none"])) #category-tabs li.hide-if-no-js a {
                background: #0073aa !important;
                color: #fff !important;
                border-color: #005a87 !important;
            }
            
            /* Target the tab content itself when active */
            .categorydiv .tabs-panel.tabs-panel-active {
                background: #1a1a1a !important;
                color: #e0e0e0 !important;
                border-color: #555 !important;
            }
            
            /* Screen Options */
            #screen-options-wrap {
                background: #2c2c2c !important;
                color: #e0e0e0 !important;
                border-color: #555 !important;
            }
            
            /* Notices */
            .notice, .updated, .error {
                background: #2c2c2c !important;
                color: #e0e0e0 !important;
                border-left-color: #0073aa !important;
            }
            
            /* Checkboxes */
            input[type="checkbox"] {
                accent-color: #0073aa;
            }
            
            /* Links */
            a {
                color: #7fb8e3 !important;
            }
            
            a:hover {
                color: #9ec9ec !important;
            }
            
            /* Help tab and content */
            #contextual-help-wrap {
                background: #2c2c2c !important;
                color: #e0e0e0 !important;
                border-color: #555 !important;
            }
            
            #contextual-help-back {
                background: #2c2c2c !important;
                color: #e0e0e0 !important;
            }
            
            .contextual-help-tabs .active {
                background: #1a1a1a !important;
                border-color: #555 !important;
                color: #fff !important;
            }
            
            .contextual-help-tabs li {
                border-color: #555 !important;
            }
            
            .contextual-help-tabs a {
                color: #e0e0e0 !important;
                background: #3c3c3c !important;
            }
            
            .contextual-help-tabs a:hover {
                background: #4c4c4c !important;
                color: #fff !important;
            }
            
            .help-tab-content {
                background: #1a1a1a !important;
                color: #e0e0e0 !important;
            }
        </style>';
    }
});

// TinyMCE styling removed to prevent conflicts - toolbar will use default WordPress styling