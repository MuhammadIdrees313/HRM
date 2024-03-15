<?php

namespace App\Helpers\Interfaces;

/**
 * App\Helpers\Interfaces\Statuses.
 *
 * */
interface Statuses
{
    public const RESOLVED_CHAT_STATUS = 1;  //Resolved
    public const DEFAULT_TICKET_STATUS = self::OPEN_TICKET_STATUS;  //Ticket Default Status Open
    public const OPEN_TICKET_STATUS = 2;  //Open
    public const PROGRESS_TICKET_STATUS = 3;  //In Progress
    public const PENDING_TICKET_STATUS = 4;  //Pending
    public const WAITING_ON_CUSTOMER_TICKET_STATUS = 5;  //Waiting on Customer
    public const RESOLVED_TICKET_STATUS = 6;  //Resolved
    public const WAITING_ON_COMPLIANCE_TEAM_TICKET_STATUS = 7;  //Waiting on Compliance Team
    public const WAITING_ON_PROCESSING_TEAM_TICKET_STATUS = 8;  //Waiting on Processing Team
    public const WAITING_ON_SUPPORT_TEAM_TICKET_STATUS = 9;  //Waiting on Support Team
    public const WAITING_ON_REFUND_TEAM_TICKET_STATUS = 10;  //Waiting on Refund Team
    public const WAITING_ON_PRE_SALES_TEAM_TICKET_STATUS = 11;  //Waiting on Pre Sales Team
    public const CLOSED_TICKET_STATUS = 12;  //Closed
    public const UNRESOLVED_TICKET_STATUS = 13;  //All Unresolved
    public const RESOLVED_CHATS_MODULE_ID = 4;  // id of resolved chats module
}
