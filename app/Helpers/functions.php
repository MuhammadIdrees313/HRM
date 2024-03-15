<?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use App\Helpers\AppConstants as AppConst;
use App\Libraries\ResponseBuilder;
use App\Libraries\ThreeCX;
use App\Models\UserNumber;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use App\Traits\Settings\GeneralSettingsTrait;

if (!function_exists('testFunction')) {
    /**
     *   This is Test function Just to Show you how functions should be defined
     *
     * @param string $name <p><i>Name</i> Should be string .</p>
     * @param int $age <p><i>Age</i> Should be Integer .</p>
     * @param mixed $gender <p><i>Gender</i> Can be mixed .</p>
     * @return array       <p>['name','age','gender','user']</p>
     */
    #[ArrayShape(["name" => "string", "age" => "int", "gender" => "mixed", 'user' => "mixed"])]
    function testFunction(string $name, int $age, mixed $gender): array
    {
        try {
            /* Write Code For Operation */
            $user = \App\Models\User::where('name', $name)->get();
        } catch (\Exception $e) {
            /* Handel The Exception */
            logException($e);
        }
        return ["name" => $name, "age" => $age, "gender" => $gender, 'user' => $user];
    }

    if (!function_exists('clearRolesCache')) {
        function clearRolesCache(int $roleId = 0): void
        {
            Cache::forget(AppConst::ROLE . '-' . $roleId);
            Cache::forget(AppConst::ALL_ROLES);
            clearRolesSideBarCache($roleId);
            clearRolesPermissionsCache($roleId);
        }
    }

    if (!function_exists('clearRolesSideBarCache')) {
        function clearRolesSideBarCache(int $roleId = 0): void
        {
            Cache::forget(AppConst::ROLE_SIDE_BAR . '-' . $roleId);
        }
    }

    if (!function_exists('clearRolesPermissionsCache')) {
        function clearRolesPermissionsCache(int $roleId = 0): void
        {
            Cache::forget(AppConst::ROLE_PERMISSIONS . '-' . $roleId);
        }
    }

    if (!function_exists('replceArrayKeys')) {
        function replceArrayKeys(array $data = [], array $replaceKeys = []): array
        {
            $collection = collect($data);
            $modifiedCollection = $collection->mapWithKeys(function ($value, $key) use ($replaceKeys) {
                return [$replaceKeys[$key] ?? $key => $value];
            });

            // Convert back to an array
            return $modifiedCollection->toArray();
        }
    }
    if (!function_exists('clearLabelsCache')) {
        function clearLabelsCache(): void
        {
            Cache::forget(AppConst::PARENT_LABELS);
            Cache::forget(AppConst::ALL_LABELS);
            Cache::forget(AppConst::ALL_CHAT_LABELS);
            Cache::forget(AppConst::ALL_TICKET_LABELS);
            Cache::forget(AppConst::ALL_CHAT_SUB_LABELS);
            Cache::forget(AppConst::ALL_TICKET_SUB_LABELS);
        }
    }
    if (!function_exists('clearScopesCache')) {
        function clearScopesCache(): void
        {
            Cache::forget(AppConst::ALL_SCOPES);
        }
    }
    if (!function_exists('clearGroupsCache')) {
        function clearGroupsCache(): void
        {
            Cache::forget(AppConst::ALL_GROUPS);
            Cache::forget(AppConst::ALL_GROUPS_OPTION);
            Cache::forget(AppConst::DEFAULT_TICKET_ASSIGNMENT_GROUP);
        }
    }
    if (!function_exists('clearGroupTypesCache')) {
        function clearGroupTypesCache(): void
        {
            Cache::forget(AppConst::ALL_GROUP_TYPES);
        }
    }
    if (!function_exists('clearAgentsCache')) {
        function clearAgentsCache(): void
        {
            Cache::forget(AppConst::ALL_AGENTS);
        }
    }
    if (!function_exists('clearAgentTypesCache')) {
        function clearAgentTypesCache(): void
        {
            Cache::forget(AppConst::ALL_AGENT_TYPES);
        }
    }
    if (!function_exists('clearChatSettingsCache')) {
        function clearChatSettingsCache(): void
        {
            Cache::forget(AppConst::CHAT_SETTINGS);
        }
    }
    if (!function_exists('clearGeneralSettingsCache')) {
        function clearGeneralSettingsCache(): void
        {
            Cache::forget(AppConst::GENERAL_SETTINGS);
        }
    }
    if (!function_exists('responseBuilder')) {

        function responseBuilder()
        {
            $responseBuilder = new ResponseBuilder();
            return $responseBuilder;
        }
    }

    if (!function_exists('fileUpload')) {

        function fileUpload($file, $path = 'message'): array
        {
            $name = $file->hashName(); // Generate a unique, random name...
            $extension = $file->extension();
            $path = $path . '/' . $name . '/' . $extension;
            Storage::put($path, $file, 'public');
            return ['name' => $name, 'path' => $path, 'extension' => $extension];
        }
    }

    if (!function_exists('replaceMessageVariables')) {

        function replaceMessageVariables(string $template, array $params): string
        {
            $placeholders = [];
            $values = [];

            foreach ($params as $placeholder => $value) {
                $placeholder = "{{{$placeholder}}}";
                $template = Str::replaceArray($placeholder, [$value], $template);
            }

            return $template;
        }
    }

    if (!function_exists('requestObject')) {

        function requestObject(array $data = []): Request
        {
            return new Request($data);
        }
    }

    if (!function_exists('clearCannedMessagesCache')) {
        function clearCannedMessagesCache(): void
        {
            Cache::forget(AppConst::ALL_CANNED_MESSAGES);
            Cache::forget(AppConst::ALL_CANNED_MESSAGES_ARRAY);
        }
    }

    if (!function_exists('clearTopicsCache')) {
        function clearTopicsCache(): void
        {
            Cache::forget(AppConst::ALL_TOPICS);
        }
    }

    if (!function_exists('setTimeZone')) {
        function setTimeZone(Carbon $timestamp): Carbon
        {
            $GeneralSettingsTrait = new class () {
                use GeneralSettingsTrait;
            };
            $timeZone = $GeneralSettingsTrait->getGeneralSettings()->time_zone;
            return Carbon::parse($timestamp)->timezone($timeZone);
        }
    }

    if (!function_exists('formatWithTimeZone')) {
        function formatWithTimeZone(Carbon|String $timestamp, string $dateFormat = '', string $timeFormat = ''): String
        {
            $GeneralSettingsTrait = new class () {
                use GeneralSettingsTrait;
            };
            $getGeneralSettings = $GeneralSettingsTrait->getGeneralSettings();
            $timeZone = $getGeneralSettings->time_zone;
            $dateFormat = !empty($dateFormat) ? $getGeneralSettings->date_format : '';
            $timeFormat = !empty($timeFormat) ? $getGeneralSettings->time_format : '';
            $setTimeZone = Carbon::parse($timestamp)->timezone($timeZone);
            if ($dateFormat || $timeFormat) { //With Formate
                $setTimeZone = $setTimeZone->format("$dateFormat $timeFormat");
            }
            return $setTimeZone;
        }
    }

    if (!function_exists('toggleArrayValue')) {

        function toggleArrayValue($array, $valueToToggle)
        {
            if (($key = array_search($valueToToggle, $array)) !== false) {
                unset($array[$key]);
            } else {
                $array[] = $valueToToggle;
            }
            return json_decode(json_encode($array), true);
        }
    }

    if (!function_exists('clearTicketTemplateCache')) {
        function clearTicketTemplateCache(): void
        {
            Cache::forget(AppConst::ALL_TICKET_TEMPLATES);
            Cache::forget(AppConst::AGENT_TICKET_TEMPLATES);
        }
    }

    if (!function_exists('snakeKeys')) {
        function snakeKeys(array $data = []): array
        {
            return collect($data)->mapWithKeys(function ($value, $key) {
                return [Str::snake($key, '_') => $value];
            })->toArray();
        }
    }

    if (!function_exists('saveBase64File')) {
        function saveBase64File(array $fileData = []): array
        {
            $contentBytes = base64_decode($fileData['contentBytes']);

            $fileName = (string) Str::uuid(); // Replace with your desired file name
            $currentDate = Carbon::now();

            $filepath = explode('/', $fileData['contentType']);  // For convert content type to array

            $originalFileName = explode('.', $fileData['name']);  // Original FileName

            if ($fileData['contentType'] !== 'application/octet-stream') {
                $extensions = ['comma-separated-values' => 'csv'];
                $folder = $extension =  $extensions[$filepath[1]] ?? $filepath[1] ?? 'pdf';
                ;
            } else {
                $folder = $extension =  end($originalFileName) ?? 'pdf';
            }

            $filePath = AppConst::TICKET_ATTACHMENTS . '/' . $currentDate->year . '/' . $currentDate->month . '/' .
                $folder . '/' . $fileName . '.' . $extension;

            Storage::put($filePath, $contentBytes, 'public');  // Store File into Storage

            $filePath = (isset($fileData['isInline']) && $fileData['isInline']) ? Storage::url($filePath) . '"' : $filePath;

            return ['path' => $filePath, 'extension' => $extension];
        }
    }
    if (!function_exists('clearSlaPoliciesCache')) {
        function clearSlaPoliciesCache(): void
        {
            Cache::forget(AppConst::ALL_SLA_POLICIES);
        }
    }
    if (!function_exists('castToInt')) {
        function castToInt($value)
        {
            return (int) $value;
        }
    }

    if (!function_exists('castToIntRecursive')) {
        function castToIntRecursive($array)
        {
            return array_map(function ($value) {
                return is_array($value) ? castToIntRecursive($value) : (is_null($value) ? null : (int) $value);
            }, $array);
        }
    }

    if (!function_exists('clearStatuses')) {
        function clearStatuses(): void
        {
            Cache::forget(AppConst::ALL_CHAT_STATUSES);
            Cache::forget(AppConst::ALL_TICKET_STATUSES);
        }
    }

    if (!function_exists('removeEmptyKeys')) {
        function removeEmptyKeys(array $data): array
        {
            return array_filter($data, function ($value) {
                return !((is_array($value) && empty($value)) || ($value === 0));
            });
        }
    }

    if (!function_exists('replaceBase64')) {
        function replaceBase64(string $message)
        {
            $doc = new DOMDocument();
            $contentType = '<meta http-equiv="Content-Type" content="text/html; charset=utf-8">';
            $doc->loadHTML($contentType . $message);

            $images = $doc->getElementsByTagName('img');

            foreach ($images as $img) {
                $src = $img->getAttribute('src');
                if (strpos($src, 'data:image/') === 0) {
                    // Extract image data
                    list($mime, $data) = explode(';', $src);
                    list(, $data) = explode(',', $data);
                    $decodedData = base64_decode($data);
                    $fileName = (string) Str::uuid(); // Replace with your desired file name
                    $currentDate = Carbon::now();

                    $extension = explode('/', $mime)[1];

                    $filePath = AppConst::TICKET_ATTACHMENTS . '/' . $currentDate->year . '/' . $currentDate->month . '/image/' . $fileName . '.' . $extension;

                    Storage::put($filePath, $decodedData, 'public');  // Store File into Storage
                    // Replace the data:image URL with the path to the saved image
                    $img->setAttribute('src', Storage::url($filePath));
                    $img->setAttribute('class', 'img-fluid');
                }
            }
            $updatedContent = $doc->saveHTML();
            preg_match('/<body>(.*?)<\/body>/is', $updatedContent, $matches);
            return $matches[1];
        }
        if (!function_exists('clearRequesterNotificationCache')) {
            function clearRequesterNotificationCache(): void
            {

                Cache::forget(AppConst::ALL_TICKET_REQUESTER_NOTIFICATIONS);
            }
        }
    }

    if (!function_exists('removeHtmlHead')) {
        function removeHtmlHead(string  $content): string
        {
            preg_match('/<body>(.*?)<\/body>/is', $content, $matches);
            return $matches[1];
        }
    }
    if (!function_exists('getTimeInSeconds')) {
        function getTimeInSeconds(string  $content): string
        {
            return \Carbon\CarbonInterval::seconds($content ?? 0)->cascade()->forHumans(['short' => true, 'options' => 0]);
        }
    }
    if (!function_exists('getEmailUniqueIdentifier')) {
        function getEmailUniqueIdentifier(string  $content): string | NULL
        {
            $htmlContent = $content;
            $targetClass = 'csm-unique-identifier';
            $pattern = '/title\s*=\s*[\'"]' . preg_quote($targetClass, '/') . '[\'"]\s*[^>]*>(.*?)<\/.*?>/';
            if (preg_match($pattern, $htmlContent, $matches)) {
                $value = $matches[1];
                return $value;
            }
            return null;
        }
    }
    if (!function_exists('setEmailUniqueIdentifier')) {
        function setEmailUniqueIdentifier(string  $newId): string
        {
            return  "<span title='csm-unique-identifier'  style='display:none;'>".$newId."</span>";
        }
    }
    if (!function_exists('getFileExtensions')) {
        function getFileExtensions(): array
        {
            return  ['txt','pdf','doc','docx','csv','xlsx','xls'];
        }
    }
    if (!function_exists('setTicketActivityContent')) {
        function setTicketActivityContent(array $data): array
        {
            $templateData = [];
            $content  = "<ul>";
            $content .= isset($data['new_ticket']) ? "<li>Created a new ticket</li>" : '';
            $content .= isset($data['new_title']) ? "<li>Title change from <b>".$data['old_title']."</b> to <b>".$data['new_title']."</b></li>" : '';
            $content .= !isset($data['new_title']) ? "<li>Set " : '';
            $content .= isset($data['user']) ? 'contact as <b>'.ucfirst($data['user']).'</b>,<br>' : '';
            $content .= isset($data['label']) ? 'label as <b>'.ucfirst($data['label']).'</b>,<br>' : '';
            $content .= isset($data['type']) ? 'type as <b>'.ucfirst($data['type']).'</b>,<br>' : '';
            $content .= isset($data['status']) ? 'status as <b>'.ucfirst($data['status']).'</b>,<br>' : '';
            $content .= isset($data['priority']) ? 'priority as <b>'.ucfirst($data['priority']).'</b>,<br>' : '';
            $content .= isset($data['group']) ? 'group as <b>'.ucfirst($data['group']).'</b>,<br>' : '';
            $content .= isset($data['agent']) ? 'agent as <b>'.ucfirst($data['agent']).'</b>,<br>' : '';
            $content .= "</li></ul>";
            // remove last comma from string
            $lastCommaPos = strrpos($content, ',');
            if ($lastCommaPos !== false) {
                $content = substr($content, 0, $lastCommaPos) . substr($content, $lastCommaPos + 1);
            }
            $templateData['content'] = $content;
            $templateData['ticket_status'] = $data['ticket_status'] ?? '';
            $templateData['date'] = $data['date'] ?? '';
            if($data['created_by'] == 'user') {
                $templateData['ticket_title'] = $data['user'];
            } else {
                $templateData['ticket_title'] = $data['auth_name'];
            }
            $templateData['created_at'] = now();
            return  $templateData;
        }
    }
    if (!function_exists('setTicketMergeActivityContent')) {
        function setTicketMergeActivityContent(array $data): array
        {
            $templateData = [];
            $ticketNames = '';
            if(!isset($data['merged_tickets'])) {
                foreach($data['tickets'] as $ticket) {
                    $routeName = route("agent.ticket", ["id" => $ticket->id]);
                    $ticketNames .= '<a href="'.$routeName.'" target="_blank">'.$ticket->title.'</a>, ';
                }
                // remove last comma from string
                $lastCommaPos = strrpos($ticketNames, ',');
                if ($lastCommaPos !== false) {
                    $content = substr($ticketNames, 0, $lastCommaPos) . substr($ticketNames, $lastCommaPos + 1);
                }
            } else {
                $routeName = route("agent.ticket", ["id" => $data['ticket']['id']]);
                $ticketName = '<a href="'.$routeName.'" target="_blank">'.$data['ticket']['title'].'</a>, ';
            }
            $content  = "<ul>";
            $content .= isset($data['new_ticket']) ? "<li>Created a new ticket</li>" : '';
            if(!isset($data['merged_tickets'])) {
                $content .= "<li>Merge Tickets (";
                $content .= $ticketNames;
                $content .= ")</li></ul>";
            } else {
                $content .= "<li>This ticket merged into ".$ticketName."</li></ul>";
            }
            // remove last comma from string
            $lastCommaPos = strrpos($content, ',');
            if ($lastCommaPos !== false) {
                $content = substr($content, 0, $lastCommaPos) . substr($content, $lastCommaPos + 1);
            }
            $templateData['content'] = $content;
            $templateData['ticket_status'] = $data['ticket_status'] ?? '';
            $templateData['date'] = $data['date'] ?? '';
            if($data['created_by'] == 'user') {
                $templateData['ticket_title'] = $data['user'];
            } else {
                $templateData['ticket_title'] = $data['auth_name'];
            }
            $templateData['created_at'] = now();
            return  $templateData;
        }
    }
    if (!function_exists('threeCX')) {

        function threeCX()
        {
            return new ThreeCX();

        }
    }
    if (!function_exists('getNumberAndAgentIdFromStrings')) {

        function getNumberAndAgentIdFromStrings(string $numberString = '',string $agentIdString = '') : array
        {
            // get number from string
            preg_match('/\((.*?)\)/', $numberString??'', $matches);
            $callNumber = isset($matches[1]) ? $matches[1] : '';
            // get agent extension from string
            $agentId = explode(' ',$agentIdString)['0']??'';
            $userNumber = UserNumber::where('number',$callNumber)??'';
            return ['number'=>$callNumber,'agentId'=>$agentId];
        }
    }

    if (!function_exists('pushFCMNotification')) {

        function pushFCMNotification(array $fields) : int
        {
            $headers = array(
                env('FCM_URL'),
                'Content-Type: application/json',
                'Authorization: key=' . env('FCM_SERVER_KEY')
            );
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, env('FCM_URL'));
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));
            $result = curl_exec($ch);
            curl_close($ch);
            if ($result === FALSE) {
                return 0;
            }
            $res = json_decode($result);
//            logger('=========FCM============', [$res]);
            if (isset($res->success)) {
                return $res->success;
            } else {
                return 0;
            }
        }
    }
}
