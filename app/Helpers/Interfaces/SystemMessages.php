<?php

namespace App\Helpers\Interfaces;

/**
 * App\Helpers\Interfaces\CacheKeys.
 *
 * */
interface SystemMessages
{
    public const CHAT_FIRST_MESSAGE = 'Chat is Started';
    public const CHAT_ASSIGNED_MESSAGE = 'Chat Assigned to {{$agentNameTo}} By {{$agentNameBy}}';
    public const CHAT_ASSIGNED_GROUP_WITH_RULE = 'Conversation was assigned to group {{$groupName}} By Rule: {{$assignmentRuleName}}';
    public const CHAT_ASSIGNED_GROUP_BY_SYSTEM = 'This Conversation is assigend to {{$agentName}} by IntelliAssign';
    public const CHAT_ASSIGNED_GROUP_BY_AGENT = 'This Conversation is assigend to {{$agentName}} by {{$assigneeAgentName}}';
    public const CHAT_RESOLVED_BY_SYSTEM = 'Resolved By {{$agentName}}';
    public const AUTO_RESPONSE_CHAT_MESSAGE = "It looks like you are away at the moment, which is totally understandable. We shall temporarily resolve the chat for now. Please feel free to reach out to us when you're available.Thank you for using Remit Choice.";

    public const CHAT_GREETINGS_MESSAGE = '<P>Thank you for contacting Remit Choice Customer Support. We are connecting you to the next available representative.</p><br><p> Please, bear with us.</P>';
    public const CHAT_UNASSIGNED_BOT_MESSAGE_ONE_MINUTE = "<p>Thank you for your patience. All of our customer support representatives are busy in assisting other customers. We'll connect you to the next available representative.</p>";
    public const CHAT_UNASSIGNED_BOT_MESSAGE_TWO_MINUTE = "<p>Thank you for your patience. We are experiencing high volume of inquiries. We'll connect you to the next available representative.</p>";
}
