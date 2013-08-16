<?php
namespace Dyon\Flatstrapper;

/**
 * Typeahead for creating Twitter Bootstrap style Typeahead.
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
class Typeahead
{
    /**
     * Creates a new Typeahead instance.
     *
     * @param array $source     Array of items for list
     * @param int   $items      Number of items to display
     * @param array $attributes An array of attributes to use
     *
     * @return Typeahead
     */
    public static function create($source, $items = 8, $attributes = array())
    {
        $attributes['type']         = 'text';
        $attributes['data-items']   = $items;
        $attributes['data-provide'] = 'typeahead';
        $attributes['data-source']  = json_encode($source);

        return '<input'.Helpers::getContainer('html')->attributes($attributes).'>';
    }
}
