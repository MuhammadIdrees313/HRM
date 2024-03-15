<?php

namespace App\Helpers\Interfaces;

/**
 * App\Helpers\Interfaces\Paths.
 *
 * */
interface Paths
{
    public const AGENT_DIR_PATH = "/admin";

    public const AGENT_CSS = self::AGENT_DIR_PATH . "/css";
    public const AGENT_JS = self::AGENT_DIR_PATH . "/js";
    public const AGENT_IMAGES = self::AGENT_DIR_PATH . "/images";
    public const AGENT_LOGO = self::AGENT_IMAGES . "/logo.png";
    public const AGENT_DARK_LOGO = self::AGENT_IMAGES . "/logo.png";
    public const AGENT_SM_LOGO = self::AGENT_IMAGES . "/logo-sm.png";
    public const AGENT_DARK_SM_LOGO = self::AGENT_IMAGES . "/logo-dark-sm.png";
    public const AGENT_SVG = self::AGENT_IMAGES . "/svg";
    public const AGENT_USER_IMAGES = self::AGENT_IMAGES . "/users";
    public const AGENT_VENDOR = self::AGENT_DIR_PATH . "/vendor";
    public const PLACEHOLDERS =  "/placeholders";

    public const STORAGE =  "/storage";
    public const SOUNDS =  "/sounds";
    public const AGENT_FAVICON = self::AGENT_IMAGES . "/favicon-1.png";
    public const TICKET_ATTACHMENTS = "/ticket-files";
}
