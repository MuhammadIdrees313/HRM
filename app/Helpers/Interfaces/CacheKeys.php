<?php

namespace App\Helpers\Interfaces;

/**
 * App\Helpers\Interfaces\CacheKeys.
 *
 * */
interface CacheKeys
{
    public const ROLE = 'role';
    public const ROLE_PERMISSIONS = self::ROLE . '-permissions';
    public const PARENT_LABELS = 'parent-labels';
    public const ROLE_SIDE_BAR = self::ROLE . '-side-bar';
    public const ALL_ROLES = 'all-roles';
    public const ALL_SCOPES = 'all-scopes';
    public const ALL_AGENTS = 'all-agents';
    public const ALL_AGENT_TYPES = 'all-agent-types';
    public const ALL_GROUPS = 'all-groups';
    public const ALL_GROUP_TYPES = 'all-group-types';
    public const CHAT_SETTINGS = 'chat-settings';
    public const ALL_GROUPS_OPTION = 'all-groups-options';
    public const GENERAL_SETTINGS = 'general-settings';
    public const ALL_STATUSES = 'all-statuses';
    public const ALL_CHAT_STATUSES = 'all-chat-statuses';
    public const ALL_TICKET_STATUSES = 'all-ticket-statuses';
    public const ALL_LABELS = 'all-labels';
    public const ALL_TOPICS = 'all-topics-options';
    public const ALL_ASSIGNEMENT_GROUPS = 'all-assignement-groups';
    public const ALL_CANNED_MESSAGES = 'all-canned-messages';
    public const ALL_CANNED_MESSAGES_ARRAY = 'all-canned-messages-array';
    public const ALL_CHAT_LABELS = 'all-chat-labels';
    public const ALL_CHAT_SUB_LABELS = 'all-chat-sublabels';
    public const ALL_TICKET_LABELS = 'all-ticket-labels';
    public const ALL_TICKET_SUB_LABELS = 'all-ticket-sublabels';
    public const ALL_TICKET_TYPES = 'all-ticket-types';
    public const ALL_TICKETS = 'all-tickets';
    public const ALL_SOURCES = 'all-sources';
    public const ALL_TICKET_TEMPLATES = 'all-ticket-templates';
    public const AGENT_TICKET_TEMPLATES = 'all-ticket-templates';
    public const ALL_TICKET_PRIORITIES = 'all-ticket-priorities';
    public const DEFAULT_TICKET_ASSIGNMENT_GROUP = 'default-ticket-assignment-group';
    public const ALL_SLA_POLICIES = 'all-sla-policies';

    public const ALL_TICKET_REQUESTER_NOTIFICATIONS = 'all-ticket-requester-notifications';
}
