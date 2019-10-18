<?php
class ZohoConnector
{
    private $client_id;
    private $secret;
    private $refresh_token;
    private $access_token;
    
    private function sendPost($url, $data)
    {
        $options = array(
            'http' => array(
                'header'  => "Content-type: application/x-www-form-urlencoded",
                'method'  => 'POST',
                'content' => http_build_query($data)
            )
        );
        $context  = stream_context_create($options);
        $result = file_get_contents($url, false, $context);
        if ($result === false) {
            return false;
        }
        
        return(json_decode($result, true));
    }
    
    private function sendAuthorizedPost($url, $data)
    {
        $options = array(
            'http' => array(
                'header'  => array(
                    "Content-type: application/x-www-form-urlencoded",
                    "Authorization: Zoho-oauthtoken ".($this->access_token)),
                'method'  => 'POST',
                'content' => json_encode($data)
            )
        );
        $context  = stream_context_create($options);
        $result = file_get_contents($url, false, $context);
        if ($result === false) {
            return false;
        }
        return(json_decode($result));
    }
    
    private function sendAuthorizedGet($url, $data)
    {
        $authorizationHeader = "Authorization: Zoho-oauthtoken ".$this->access_token;
        
        $options = array(
            'http' => array(
            'header'  => $authorizationHeader,
            'method'  => 'GET',
            'content' => http_build_query($data)
            )
        );
        
        $context  = stream_context_create($options);
        $result = file_get_contents($url, false, $context);
        if ($result === false) {
            return false;
        }
        return(json_decode($result, true));
    }
    
    public function getLeadsList()
    {
        $leadsList = $this->sendAuthorizedGet("https://www.zohoapis.com/crm/v2/Leads", []);
        if (isset($leadsList)) {
            return($leadsList["data"]);
        } else {
            return false;
        }
    }
    
    public function addLead($name, $surname, $phone, $email, $company, $source)
    {
        $this->sendAuthorizedPost("https://www.zohoapis.com/crm/v2/Leads", ["data" => [["Company" => $company,
                                                                                                "Email" => $email,
                                                                                                "First_Name" => $name,
                                                                                                "Last_Name" => $surname,
                                                                                                "Phone" => $phone,
                                                                                                "Lead_Status" => "Попытка установить связь",
                                                                                                "Lead_Source" => $source]]]);
    }
    
    public function convertLead($lead_id, $lead_owner, $deal_name)
    {
        $this->sendAuthorizedPost("https://www.zohoapis.com/crm/v2/Leads/".$lead_id."/actions/convert", ["data" => [["overwrite" => true,
                                                                                                "notify_lead_owner" => true,
                                                                                                "notify_new_entity_owner" => true,
                                                                                                "assign_to" => $lead_owner,
                                                                                                "Deals" => ["Deal_Name" => $deal_name, "Closing date" => date('Y/m/d', time()), "Stage" => "Оценка пригодности"]]]]);
    }
    
    private function getAccessToken()
    {
        return $this->sendPost("https://accounts.zoho.com/oauth/v2/token", ["refresh_token" => $this->refresh_token,
        "client_id" => $this->client_id,
        "client_secret" => $this->secret,
        "grant_type" => "refresh_token"])["access_token"];
    }
    
    public function __construct($keys_file)
    {
        $keys = unserialize(file_get_contents($keys_file));
        
        $this->client_id = $keys["client_id"];
        $this->secret = $keys["secret"];
        $this->refresh_token = $keys["refresh_token"];
        
        $this->access_token = $this->getAccessToken();
    }
}
