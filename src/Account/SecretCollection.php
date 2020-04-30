<?php
declare(strict_types=1);

namespace Nexmo\Account;

class SecretCollection
{
    /**
     * @var array<string, array>
     */
    protected $data;

    /**
     * @param array<int, Secret> $secrets Secrets composing this collection
     * @param array<string, array> $links External HAL links
     */
    public function __construct(array $secrets, array $links)
    {
        $this->data = [
            'secrets' => $secrets,
            '_links' => $links
        ];
    }

    /**
     * @return array<int, Secret>
     */
    public function getSecrets() : array
    {
        return $this->data['secrets'];
    }

    /**
     * @return array<string, array>
     */
    public function getLinks() : array
    {
        return $this->data['_links'];
    }
}
