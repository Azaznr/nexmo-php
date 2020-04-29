<?php

namespace Nexmo\Account;

use Nexmo\Entity\Hydrator\ArrayHydrateInterface;

/**
 * This class will no longer be accessible via array keys past v2
 * @todo Have the JSON unserialize/serialize keys match with $this->data keys
 */
class Balance implements \JsonSerializable, ArrayHydrateInterface
{
    /**
     * @var array
     */
    public $data;

    /**
     * @todo Have these take null values, since we offer an unserialize option to populate
     */
    public function __construct($balance, $autoReload)
    {
        $this->data['balance'] = $balance;
        $this->data['auto_reload'] = $autoReload;
    }

    public function getBalance()
    {
        return $this->data['balance'];
    }

    public function getAutoReload()
    {
        return $this->data['auto_reload'];
    }

    public function jsonSerialize()
    {
        return $this->data;
    }

    public function fromArray(array $data)
    {
        $this->data = [
            'balance' => $data['value'],
            'auto_reload' => $data['autoReload']
        ];
    }

    public function toArray(): array
    {
        return $this->data;
    }
}
