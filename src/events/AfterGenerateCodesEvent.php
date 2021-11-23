<?php
namespace verbb\giftvoucher\events;

use yii\base\Event;

class AfterGenerateCodesEvent extends Event
{
    // Properties
    // =========================================================================

    public $lineItems;

}
