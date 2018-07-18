<?php
namespace Grav\Theme;

use Grav\Common\Theme;
use RocketTheme\Toolbox\Event\Event;

class Bs4OpenCourseMatter extends Bootstrap4
{
    // Boostrap plugin will look for this class var to know it should load
    public $load_bootstrapper_plugin = true;

    public static function getSubscribedEvents()
    {
        return [
            'onThemeInitialized'  => ['onThemeInitialized', 0],
            'onShortcodeHandlers' => ['onShortcodeHandlers', 0],
            'onTwigSiteVariables' => ['onTwigSiteVariables', 0]
        ];
    }

    public function onThemeInitialized()
    {
        $this->config->set('plugins.bootstrapper.version', 'v4');
    }

    public function onShortcodeHandlers()
    {
        $this->grav['shortcode']->registerAllShortcodes('theme://shortcodes');
    }

    public function onTwigSiteVariables()
    {
        if ($this->isAdmin() && ($this->grav['config']->get('plugins.shortcode-core.enabled'))) {
            $this->grav['assets']->add('theme://editor-buttons/admin/js/shortcode-h5p.js');
      }
    }

}
