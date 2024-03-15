<?php

namespace App\Helpers\Interfaces;

/**
 * App\Helpers\Interfaces\TicketModules.
 *
 * */

interface TicketModules
{
    /**
     *
     * @var int
     */
    public const OPEN_AND_PENDING_TICKETS_SUBMODULE = 1; // open and pending tickets submodule id
    public const OVERDUE_TICKETS_SUBMODULE = 2; // overdue tickets submodule id
    public const OPEN_TICKETS_IN_MY_GROUP_SUBMODULE = 3; // open tickets in my group tickets submodule id
    public const URGENT_AND_HIGH_PRIORITY_SUBMODULE = 4; // urgent and high priority tickets submodule id
    public const RESOLVE_TICKETS_SUBMODULE = 5; // resolve tickets submodule id
    public const ALL_TICKETS_SUBMODULE = 6; // all tickets submodule id
    public const SPAM_TICKETS_SUBMODULE = 8; // spam tickets submodule id
}
