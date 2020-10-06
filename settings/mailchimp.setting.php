<?php

use CRM_Mailchimp_ExtensionUtil as E;

return [
  'mailchimp_security_key' => [
    'name'        => 'mailchimp_security_key',
    'title'       => E::ts('Mailchimp webhook security key'),
    'description' => E::ts('Security key used by Mailchimp Webhook requests to identify themselves.'),
    'group_name'  => 'domain',
    'type'        => 'String',
    'default'     => FALSE,
    'add'         => '5.10',
    'is_domain'   => 1,
    'is_contact'  => 0,
  ],

  'mailchimp_api_key' => [
    'name'        => 'mailchimp_api_key',
    'title'       => E::ts('Mailchimp API key'),
    'description' => E::ts('Private API key used to access the Mailchimp API.'),
    'group_name'  => 'domain',
    'type'        => 'String',
    'default'     => FALSE,
    'add'         => '5.10',
    'is_domain'   => 1,
    'is_contact'  => 0,
  ],

  'mailchimp_enable_debugging' => [
    'name'        => 'mailchimp_enable_debugging',
    'title'       => E::ts('Mailchimp debugging'),
    'description' => E::ts('If enabled lots of debugging information is created relating to the Mailchimp sync extension.'),
    'group_name'  => 'domain',
    'type'        => 'Boolean',
    'default'     => FALSE,
    'add'         => '5.10',
    'is_domain'   => 1,
    'is_contact'  => 0,
  ],

  'mailchimp_disable_removal' => [
    'name'        => 'mailchimp_disable_removal',
    'title'       => E::ts('Mailchimp Disable Removal'),
    'description' => E::ts('If enabled removes the part of the sync removing contacts from groups or lists in Mailchimp.'),
    'group_name'  => 'domain',
    'type'        => 'Boolean',
    'default'     => FALSE,
    'add'         => '5.28',
    'is_domain'   => 1,
    'is_contact'  => 0,
  ],

];
