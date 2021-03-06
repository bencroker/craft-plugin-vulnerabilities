<?php
namespace Craft;

/**
 * Dummy Plugin
 */
class DummyPlugin extends BasePlugin
{
    public function getName()
    {
        return 'Dummy';
    }

    public function getVersion()
    {
        return '0.0.1';
    }

    public function getDeveloper()
    {
    return 'PutYourLightsOn';
    }

    public function getDeveloperUrl()
    {
        return 'https://www.putyourlightson.net/';
    }

    public function getDescription()
    {
        return Craft::t('A plugin that does nothing, purely for testing purposes.');
    }

    public function getDocumentationUrl()
    {
        return 'https://github.com/putyourlightson/craft-plugin-vulnerabilities';
    }

    public function getReleaseFeedUrl()
    {
    	return 'https://raw.githubusercontent.com/putyourlightson/craft-plugin-vulnerabilities/master/plugins/dummy/releases.json';
    }
}
