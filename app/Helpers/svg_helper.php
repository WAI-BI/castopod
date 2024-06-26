<?php

declare(strict_types=1);

/**
 * @copyright  2020 Ad Aures
 * @license    https://www.gnu.org/licenses/agpl-3.0.en.html AGPL3
 * @link       https://castopod.org/
 */

if (! function_exists('svg')) {
    /**
     * Returns the inline svg image
     *
     * @param  string $name name of the image file without the .svg extension
     * @param string|null $class to be added to the svg string
     * @return string svg contents
     */
    function svg(string $name, ?string $class = null): string
    {
        $svgContents = file_get_contents('assets/images/' . $name . '.svg');
        if ($class) {
            return str_replace('<svg', '<svg class="' . $class . '"', $svgContents);
        }

        return $svgContents;
    }
}
