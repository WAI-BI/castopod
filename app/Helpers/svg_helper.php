<?php

/**
 * @copyright  2020 Podlibre
 * @license    https://www.gnu.org/licenses/agpl-3.0.en.html AGPL3
 * @link       https://castopod.org/
 */

/**
 * Returns the inline svg icon
 *
 * @param  string $name name of the icon file without the .svg extension
 * @param  string $class to be added to the svg string
 * @return string svg contents
 */
function icon($name, $class = null)
{
    $svg_contents = file_get_contents('assets/icons/' . $name . '.svg');
    if ($class) {
        $svg_contents = str_replace(
            '<svg',
            '<svg class="' . $class . '"',
            $svg_contents
        );
    }
    return $svg_contents;
}

/**
 * Returns the inline svg image
 *
 * @param  string $name name of the image file without the .svg extension
 * @param  string $class to be added to the svg string
 * @return string svg contents
 */
function svg($name, $class = null)
{
    $svg_contents = file_get_contents('assets/images/' . $name . '.svg');
    if ($class) {
        $svg_contents = str_replace(
            '<svg',
            '<svg class="' . $class . '"',
            $svg_contents
        );
    }
    return $svg_contents;
}