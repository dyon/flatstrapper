<?php
namespace Dyon\Flatstrapper;

/**
 * ButtonToolbar for creating Twitter Bootstrap style Buttons toolbars.
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
class ButtonToolbar
{
    /**
     * Opens a new ButtonToolbar section.
     *
     * @param array $attributes Attributes for the button toolbar
     *
     * @return string A button toolbar
     */
    public static function open($attributes = array())
    {
        $attributes = Helpers::add_class($attributes, 'btn-toolbar');

        return '<div'.Helpers::getContainer('html')->attributes($attributes).'>';
    }

    /**
     * Closes the ButtonToolbar section.
     *
     * @return string
     */
    public static function close()
    {
        return '</div>';
    }
}
