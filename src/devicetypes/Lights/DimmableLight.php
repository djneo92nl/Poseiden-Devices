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

    public function setBrightness() : self;

    public function getBrightness() : self;
}