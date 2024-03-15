<?php

namespace App\Helpers\Interfaces;

/**
 * App\Helpers\Interfaces\TicketPriorities.
 *
 * */
interface TicketPriorities
{
    public const DEFAULT_PRIORITY = self::LOW_PRIORITY;  //Ticket Default Priority Low
    public const LOW_PRIORITY = 1;  //Low
    public const MEDIUM_PRIORITY = 2;  //Medium
    public const HIGH_PRIORITY = 3;  //High
    public const URGENT_PRIORITY = 4;  //Urgent
}
