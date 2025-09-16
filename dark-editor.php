<?php
/*
Plugin Name: Dark Classic Editor
Description: Dark Mode for Classic Editor / Post Edit Screens, including TinyMCE.
Author: Elite Star Services
Version: 1.2.1
*/

add_action('admin_enqueue_scripts', function($hook) {
    // Only for Post Edit Screens
    if ($hook === 'post.php' || $hook === 'post-new.php') {
        echo '<style>
            body.wp-admin {
                background: #181a1b !important;
                color: #e8e6e3 !important;
            }
            #adminmenu, #adminmenu .wp-submenu, #adminmenuback, #adminmenuwrap {
                background-color: #23272a !important;
            }
            .wrap, .postbox, .inside, .edit-post-header, .edit-post-layout {
                background: #23272a !important;
                color: #e8e6e3 !important;
            }
            #title, #post-title-0, .editor-post-title__input {
                background: #23272a !important;
                color: #e8e6e3 !important;
                border-color: #444 !important;
            }
            /* Editor toolbar and buttons */
            #ed_toolbar,
            .wp-editor-tools, .mce-toolbar, .mce-container, .mce-menubar, .mce-panel,
            .mce-btn, .mce-btn button, .mce-primary, .mce-ico, .mce-btn-group, .mce-btn-group > .mce-btn {
                background: #23272a !important;
                color: #e8e6e3 !important;
                border-color: #444 !important;
            }
            .mce-btn button, .mce-btn {
                background: #23272a !important;
                color: #e8e6e3 !important;
                border-color: #444 !important;
            }
            .mce-btn:hover, .mce-btn:focus, .mce-btn button:hover, .mce-btn button:focus {
                background: #181a1b !important;
                color: #fff !important;
            }
            /* Editor content area */
            .wp-editor-area, .mce-content-body {
                background: #181a1b !important;
                color: #e8e6e3 !important;
            }
            /* Metabox headers */
            .postbox h2, .postbox h3, .postbox .hndle {
                background: #23272a !important;
                color: #e8e6e3 !important;
            }
            .components-notice, .notice, .updated, .error, .is-dismissible {
                background: #23272a !important;
                color: #e8e6e3 !important;
            }
            /* Word count area */
            #wp-word-count, .wp-word-count {
                background: #23272a !important;
                color: #e8e6e3 !important;
                border-color: #444 !important;
                padding: 4px 8px;
                border-radius: 4px;
            }
            /* Autosave info */
            #autosave-info, .autosave-info {
                background: #23272a !important;
                color: #e8e6e3 !important;
                border-color: #444 !important;
                padding: 4px 8px;
                border-radius: 4px;
            }
            /* Major publishing actions */
            #major-publishing-actions, .major-publishing-actions {
                background: #23272a !important;
                color: #e8e6e3 !important;
                border-color: #444 !important;
                border-radius: 4px;
            }
            /* Custom scrollbar for admin */
            ::-webkit-scrollbar {
                width: 12px;
                background: #23272a;
            }
            ::-webkit-scrollbar-thumb {
                background: #444;
                border-radius: 6px;
            }
            ::-webkit-scrollbar-thumb:hover {
                background: #666;
            }
            /* Firefox scrollbar */
            body.wp-admin {
                scrollbar-color: #444 #23272a;
                scrollbar-width: thin;
            }
            /* Form elements and buttons */
            input, select, textarea, button {
                background: #23272a !important;
                color: #e8e6e3 !important;
                border-color: #444 !important;
            }
            input:focus, select:focus, textarea:focus, button:focus {
                background: #181a1b !important;
                color: #fff !important;
                border-color: #666 !important;
            }
            /* Specific for primary buttons */
            .button-primary, .components-button.is-primary {
                background: #444 !important;
                color: #fff !important;
                border-color: #666 !important;
            }
            .button-primary:hover, .components-button.is-primary:hover {
                background: #666 !important;
                color: #fff !important;
            }
            /* Checkbox and radio */
            input[type="checkbox"], input[type="radio"] {
                accent-color: #444;
            }
            /* Dropdown arrow color for select */
            select {
                color-scheme: dark;
            }
            /* Dark mode for Add New, Preview, and Previous Changes buttons */
            .page-title-action,
            .preview.button,
            .preview.button.button-large,
            .button.button-large,
            .button-secondary,
            .button-secondary:visited,
            .button-secondary:active,
            .button-secondary:focus,
            .button-secondary:hover,
            .button,
            .button:visited,
            .button:active,
            .button:focus,
            .button:hover,
            .button-link,
            .button-link:visited,
            .button-link:active,
            .button-link:focus,
            .button-link:hover,
            .submitdelete,
            .submitdelete:visited,
            .submitdelete:active,
            .submitdelete:focus,
            .submitdelete:hover,
            /* Dark mode for Previous/Next post navigation buttons */
            .adminpostnav-prev,
            .adminpostnav-next,
            /* Dark mode for "← Previous" and "Next →" navigation links */
            #adminpostnav-prev,
            #adminpostnav-next,
            .add-new-h2#adminpostnav-prev,
            .add-new-h2#adminpostnav-next {
                background: #23272a !important;
                color: #e8e6e3 !important;
                border-color: #444 !important;
            }
            .page-title-action:hover,
            .preview.button:hover,
            .button.button-large:hover,
            .button-secondary:hover,
            .button:hover,
            .button-link:hover,
            .submitdelete:hover,
            .adminpostnav-prev:hover,
            .adminpostnav-next:hover,
            #adminpostnav-prev:hover,
            #adminpostnav-next:hover,
            .add-new-h2#adminpostnav-prev:hover,
            .add-new-h2#adminpostnav-next:hover {
                background: #444 !important;
                color: #fff !important;
                border-color: #666 !important;
            }
            /* "Previous" and "Preview Changes" links in post updated message */
            .post-php .updated a,
            .post-php .updated a:visited,
            .post-php .updated a:active,
            .post-php .updated a:focus,
            .post-php .updated a:hover {
                background: #23272a !important;
                color: #8ab4f8 !important;
                border-color: #444 !important;
                padding: 2px 8px;
                border-radius: 3px;
                text-decoration: none !important;
            }
            .post-php .updated a:hover {
                background: #444 !important;
                color: #fff !important;
            }
        </style>';
    }
});

add_filter('tiny_mce_before_init', function($init) {
    // Add dark mode CSS to TinyMCE editor, including scrollbar and buttons
    $custom_css = '
        body { background: #181a1b !important; color: #e8e6e3 !important; }
        ::-webkit-scrollbar { width: 12px; background: #23272a; }
        ::-webkit-scrollbar-thumb { background: #444; border-radius: 6px; }
        ::-webkit-scrollbar-thumb:hover { background: #666; }
        body { scrollbar-color: #444 #23272a; scrollbar-width: thin; }
        .mce-content-body a { color: #8ab4f8 !important; }
        .mce-toolbar, .mce-btn, .mce-btn button, .mce-menubar, .mce-panel {
            background: #23272a !important;
            color: #e8e6e3 !important;
            border-color: #444 !important;
        }
        .mce-btn:hover, .mce-btn:focus, .mce-btn button:hover, .mce-btn button:focus {
            background: #181a1b !important;
            color: #fff !important;
        }
        input, select, textarea, button {
            background: #23272a !important;
            color: #e8e6e3 !important;
            border-color: #444 !important;
        }
        input:focus, select:focus, textarea:focus, button:focus {
            background: #181a1b !important;
            color: #fff !important;
            border-color: #666 !important;
        }
        /* Checkbox and radio */
        input[type="checkbox"], input[type="radio"] {
            accent-color: #444;
        }
        select {
            color-scheme: dark;
        }
    ';
    if (isset($init['content_style'])) {
        $init['content_style'] .= ' ' . $custom_css;
    } else {
        $init['content_style'] = $custom_css;
    }
    return $init;
});