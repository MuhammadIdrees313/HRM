<?php

namespace App\Helpers\Interfaces;

/**
 * App\Helpers\Interfaces\SubModules.
 *
 * */

interface SubModules
{
    public const MANAGE_GROUP_TYPE = 'manage-group-types';
    public const MANAGE_GROUP = 'manage-groups';
    public const MANAGE_AGENT = 'manage-agents';
    public const MANAGE_AGENT_TYPE = 'manage-agent-types';
    public const MANAGE_ROLES = 'manage-roles';
    public const MANAGE_CALL_LIVE_DASHBOARD = 'live-dashboard';
    public const MANAGE_CALL_METRICS_DASHBOARD = 'metrics-dashboard';
    public const MANAGE_CALL_MY_PERFORMACE = 'my-performance';
    public const MANAGE_CANNED_MESSAGES = 'manage-canned-messages';
    public const MANAGE_LABELS = 'manage-labels';
    public const MANAGE_CHAT_SETTINGS = 'manage-chat-settings';
    public const MANAGE_TOPICS = 'manage-topics';
    public const MANAGE_GENERAL_SETTINGS = 'manage-general-settings';
    public const MANAGE_TICKET_TEMPLATES = 'manage-ticket-templates';
    public const MANAGE_SLA_POLICIES = 'manage-sla-policies';
    public const MANAGE_REQUESTER_NOTIFICATION_LIST = 'ticket-requester-notification-list';

    public const MANAGE_ALL_OPEN_AND_UNASSIGNED_CHATS = 'manage-chat-all-open-and-unassigned-conversations';
    public const MANAGE_ALL_MY_OPEN__CHATS = 'manage-chat-my-open-conversations';
    public const MANAGE_ALL_OPEN_AND_ASSIGNED_CHATS = 'manage-chat-all-open-and-assigned-conversations';
    public const MANAGE_ALL_RESOLVED_CHATS = 'manage-chat-all-resolved-conversations';
    public const MANAGE_ALL_CHATS_IN_MY_GROUP = 'manage-chat-all-open-in-my-group-conversations';

    public const DASHBOARD_TICKET_DASHBOARD = 'dashboard-ticket-dashboard';
    public const DASHBOARD_CHAT_OMNI_DASHBOARD = 'dashboard-chat-omni-dashboard';

    public const DASHBOARD_UNRESOLVED_DASHBOARD = 'dashboard-un-resolved-dashboard';
}
