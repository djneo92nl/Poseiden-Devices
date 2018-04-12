<?php

namespace Poseiden\Devices\Devicetypes\Lights;

/**
 * DimmableLight template
 *
 * @package poseiden\devices\devicetypes\lights
 */
interface DimmableLight
{
    public function turnOn() : self;

    public function turnOff() : self;

    /**
     * @param int $Brightness [min = 0, max = 256]
     * @return DimmableLight
     */
    public function setBrightness(int $Brightness) : self;

    /**
     * @return int
     */
    public function getBrightness() : int;
}