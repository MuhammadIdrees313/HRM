<?php

namespace App\Helpers\Interfaces;

/**
 * App\Helpers\Interfaces\TicketPriorities.
 *
 * */
interface TicketActivities
{
    public const TICKET_ACTIVITY_CREATE_ACTION = 'ticket_created';  // create activity action
    public const TICKET_ACTIVITY_MERGED_ACTION = 'ticket_merged';  // ticket merged activity action
    public const TICKET_ACTIVITY_MERGED_TICKET_ACTION = 'merged_ticket';  // merged ticket activity action
    public const TICKET_ACTIVITY_PROPERTIES_ACTION = 'properties_changed';  // properties activity action
    public const TICKET_ACTIVITY_REPLY_DELETED_ACTION = 'reply_deleted';  // delete reply activity action
    public const TICKET_ACTIVITY_REPLY_ACTION = 'ticket_reply';  // reply activity action
    public const TICKET_ACTIVITY_TITLE_CHANGE_ACTION = 'ticket_title';  // title activity action
}
