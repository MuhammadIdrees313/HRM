<?php

namespace App\Helpers;

use App\Helpers\Interfaces\CacheKeys;
use App\Helpers\Interfaces\Paths;
use App\Helpers\Interfaces\ReceiverTicketNotificationKeys;
use App\Helpers\Interfaces\ResponseType;
use App\Helpers\Interfaces\Roles;
use App\Helpers\Interfaces\Statuses;
use App\Helpers\Interfaces\SubModules;
use App\Helpers\Interfaces\SystemMessages;
use App\Helpers\Interfaces\TicketActivities;
use App\Helpers\Interfaces\TicketModules;
use App\Helpers\Interfaces\TicketPriorities;

class AppConstants implements Paths, CacheKeys, Roles, SubModules, SystemMessages, Statuses, TicketPriorities, TicketActivities, ResponseType, ReceiverTicketNotificationKeys,TicketModules
{
    public const PER_PAGE = 10;
    public const CHAT_PER_PAGE = 10;
    public const GLOBAL_SCOPE = 1;
    public const NEW_CHAT_IF_HOURS = 24; //24 Hours
    public const GRAPH_WEBHOOK_MINUTES = 10070; // 10070 MAX TIME IN MINUTES
    public const TICKET_SCHEDULER_TIME = 5; // 5 MAX TIME IN MINUTES
    public const NEW_TICKET_IF_HOURS = 24; //24 Hours
    public const REASSIGN_IF_REOPENED_WITHIN = 30; //30 MAX TIME IN MINUTES
    public const TICKET_PER_PAGE = 10;
    public const NOT_RESPONSDING_LABEL_ID = 120;
    public const DEFAULT_TICKET_GROUP  = 14;
    public const UNASSIGNED_TICKETS_AGENT = -1;
    public const THREECX_DOWNLOAD_LINK = 'https://remitchoice.3cx.co.uk/api/RecordingList/download?file=';

    public const RATINGS =  [
        ['star' => 1, 'label' => 'Terrible'],
        ['star' => 2, 'label' => 'Bad'],
        ['star' => 3, 'label' => 'Okay'],
        ['star' => 4, 'label' => 'Good'],
        ['star' => 5, 'label' => 'Great']
    ];
}
