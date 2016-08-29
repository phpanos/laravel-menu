<?php
namespace Phpanos\LaravelMenu;

use Illuminate\Support\Facades\Request;

class Item
{
    public function __construct($title, $url)
    {
        $this->title = $title;
        $this->url = $url;
        $this->active = ($this->isActive($url) ?: false);
        return $this;
    }

    /**
     * Check whether the current menu item is active
     * @param  [type]  $url
     * @return boolean
     */
    private function isActive($url)
    {
        $currentPath = Request::path();

        if ($url != $currentPath) {
            return false;
        }

        return true;
    }
}