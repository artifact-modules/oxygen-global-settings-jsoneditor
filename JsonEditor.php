<?php

namespace AncientWorks\Artifact\Modules\OxygenGlobalSettingsJsonEditor;

use AncientWorks\Artifact\Module;

/**
 * @package AncientWorks\Artifact
 * @since 0.0.1
 * @author ancientworks <mail@ancient.works>
 * @link https://github.com/artifact-modules/oxygen-global-settings-jsoneditor
 */
class JsonEditor extends Module
{
    public static $module_id = 'oxygen_global_settings_json_editor';
    public static $module_version = '0.0.1';
    public static $module_name = 'Oxygen Global Settings JSON editor';

    public function boot()
    {
        add_action('load-oxygen_page_ct_export_import', function () {
            wp_enqueue_style('josdejong-jsoneditor', 'https://cdn.jsdelivr.net/npm/jsoneditor@9.5.1/dist/jsoneditor.min.css');
            wp_enqueue_script('josdejong-jsoneditor', 'https://cdn.jsdelivr.net/npm/jsoneditor@9.5.1/dist/jsoneditor.min.js', [], false, true);
            wp_enqueue_script('page_ct_export_import', plugins_url("/Modules/OxygenGlobalSettingsJsonEditor/dist/js/page_ct_export_import.js", ARTIFACT_FILE), [], false, true);
        });
    }
}
