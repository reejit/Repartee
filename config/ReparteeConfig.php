<?php
namespace Repartee\config;
class ReparteeConfig
{
    # Test Mode
    protected static $test_mode = '1';

    # Credentials
    protected static $username = 'guardiansofspartax@gmail.com';
    protected static $password = 'password_in_here';   # Now deprecated
    protected static $hash = 'be6a035d9f3780296e66cbdbe55922f92d8ead1a9706d2f29895d4d431879c4d';           # Now deprecated in favour of API Keys
    protected static $apikey = 'ZDk1YjZlODVhODU3YTE1NjI1YmZkNTZmZjliOTI0ZmY=';       # API Keys are now the Auth standard

    # Sender Name / Number
    protected static $sender = 'Lol SmsBot';

    # API Base URL
    protected static $base_url = 'https://api.txtlocal.com/';

    # Response Data Format
    protected static $response_format = 'xml';  # xml or json

    # API End-Points
    protected static $send_sms = 'send/';
    protected static $inboxes = 'get_inboxes/';
    protected static $messages = 'get_messages/';
    protected static $scheduled = 'get_scheduled/';
    protected static $cancel_scheduled = 'cancel_scheduled/';
    protected static $contacts = 'get_contacts/';
    protected static $create_contact = 'create_contacts/';
    protected static $delete_contact = 'delete_contact/';
    protected static $groups = 'get_groups/';
    protected static $create_group = 'create_group/';
    protected static $delete_group = 'delete_group/';
    protected static $get_single_history = 'get_history_single/';
    protected static $get_group_history = 'get_history_group/';
    protected static $get_api_history = 'get_history_api/';
    protected static $message_status = 'status_message/';
    protected static $batch_status = 'status_batch/';

    # Get Specific Configuration
    final public static function getSetting ($k) {
        return self::$$k;
    }
}
