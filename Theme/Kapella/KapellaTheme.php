<?php
namespace Themes\Kapella;

use ClientX\Theme\ThemeInterface;

class KapellaTheme implements ThemeInterface
{

    const DEFINITIONS = __DIR__ . '/config.php';

    public function getName(): string
    {
        return "Kapella";
    }
    
    public function getVersion(): ?string
    {
        return "1.0";
    }

    public function getAuthor(): ?string
    {
        return "MartinDev";
    }

    public function getScreenshots()
    {
        return [];
    }

    public function getViewsPath(): string
    {
        return __DIR__ . DIRECTORY_SEPARATOR . '/Views';
    }

    public function getAssetsPath(): string
    {
        return '/Kapella/assets';
    }
    public function getPluginsPath(): ?string
    {
        return '/Kapella/vendors';
    }

    public function getTemplatesPath(): string
    {
        return __DIR__;
    }

    public function getComponentPath():?string
    {
        return null;
    }

    public function getContacts():?array
    {
        return [
            'discord' => 'MartinDev. #3375',
            'email'   => 'Contact@clientxcms.com'
        ];
    }
}
