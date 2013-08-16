<?php
namespace Dyon\Flatstrapper;

use Dyon\Flatstrapper\Traits\ClassableElement;

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
class Label extends ClassableElement
{
    /**
     * The base class
     *
     * @var string
     */
    protected static $baseClass = 'label';

    /**
     * Create a custom label (this is here for backward compatibility)
     *
     * @param string $type       The label type
     * @param string $message    The content
     * @param array  $attributes The attributes
     *
     * @return Label
     */
    public static function custom($type, $message, $attributes)
    {
        return static::$type($message, $attributes);
    }
}
