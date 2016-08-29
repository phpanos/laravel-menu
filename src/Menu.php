<?php
namespace Phpanos\LaravelMenu;

class Menu
{

    private static $instance;

    private static $menu;

    private static $name;

    private $items;

    private function __construct()
    {

    }

    /**
     * Singleton method that registers the menu
     * @param  [type] $name
     * @return [type]
     */
    public static function register($name)
    {
        static $instance = '';

        if ($instance == '') {
            $instance = new static();
        }

        self::$name = $name;

        return $instance;
    }

    /**
     * Adds a link to the menu
     * @param [type] $title
     * @param string $url
     */
    public function add($title, $url = '#')
    {
        self::$menu[self::$name][] = new Item($title, $url);
        return $this;
    }

    public function addChild($title, $url)
    {
        new Item($title, url);
    }

    /**
     * Retrieves the menu array
     * @return [type]
     */
    public static function get($name)
    {
        if (! isset(self::$menu[$name])) {
            throw new \Exception('Menu doesn\'t exist.');
        }

        return self::$menu[$name];
    }

    public static function all()
    {
        return self::$menu;
    }

    /**
     * Renders the menu with pre-defined views
     * @return [type]
     */
    public function render()
    {

    }

    private function build()
    {

    }
}