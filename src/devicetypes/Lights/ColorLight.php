<?php

namespace Poseiden\Devices\Devicetypes\Lights;

use djneo\Colorz;

/**
 * Colorlight template
 *
 * @package poseiden\devices\devicetypes\lights
 */
interface ColorLight extends DimmableLight
{
    public function setColor(djneo\Colorz $color) : self;

    /**
     *
     * @return djneo\Colorz
     */
    public function getColor();
}