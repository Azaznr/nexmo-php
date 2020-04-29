<?php

namespace Nexmo\Account;

class SecretCollection
{
    protected $data;

    public function __construct($secrets, $links)
    {
        $this->data = [
            'secrets' => $secrets,
            '_links' => $links
        ];
    }

    public function getSecrets()
    {
        return $this->data['secrets'];
    }

    public function getLinks()
    {
        return $this->data['_links'];
    }
}
