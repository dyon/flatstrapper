<?php
namespace Dyon\Flatstrapper\Traits;

use HtmlObject\Element;

/**
 * Label for creating Twitter Bootstrap style Labels.
 *
 * @category   HTML/UI
 * @package    Flatstrapper
 * @subpackage Twitter
 * @author     Daniel Hurtado - <hello@dyon.me>
 * @license    MIT License <http://www.opensource.org/licenses/mit>
 * @link       http://laravelbootstrapper.phpfogapp.com/
 *
 * @see        http://twitter.github.com/bootstrap/
 */
abstract class ClassableElement extends Element
{
    /**
     * The base class
     *
     * @var string
     */
    protected static $baseClass = null;

    /**
     * The default element
     *
     * @var string
     */
    protected static $defaultElement = 'span';

    /**
     * Dynamically create labels
     */
    public static function __callStatic($method, $parameters)
    {
        // Get Label type
        if ($method == 'normal') $type = null;
        else $type = static::$baseClass.'-'.(string) $method;

        // Get content and attributes
        $content    = isset($parameters[0]) ? $parameters[0] : null;
        $attributes = isset($parameters[1]) ? $parameters[1] : array();

        $element = new static(static::$defaultElement, $content, $attributes);
        $element->addClass(static::$baseClass. ' ' .$type);

        return $element;
    }
}
