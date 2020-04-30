<?php

namespace Nexmo\Account;

use Nexmo\Entity\Hydrator\ArrayHydrateInterface;

class Config implements \JsonSerializable, ArrayHydrateInterface
{
    public function __construct($sms_callback_url = null, $dr_callback_url = null, $max_outbound_request = null, $max_inbound_request = null, $max_calls_per_second = null)
    {
        if (!is_null($sms_callback_url)) {
            $this->data['sms_callback_url'] = $sms_callback_url;
        }
        if (!is_null($dr_callback_url)) {
            $this->data['dr_callback_url'] = $dr_callback_url;
        }
        if (!is_null($max_outbound_request)) {
            $this->data['max_outbound_request'] = $max_outbound_request;
        }
        if (!is_null($max_inbound_request)) {
            $this->data['max_inbound_request'] = $max_inbound_request;
        }
        if (!is_null($max_calls_per_second)) {
            $this->data['max_calls_per_second'] = $max_calls_per_second;
        }
    }

    public function getSmsCallbackUrl()
    {
        return $this->data['sms_callback_url'];
    }

    public function getDrCallbackUrl()
    {
        return $this->data['dr_callback_url'];
    }

    public function getMaxOutboundRequest()
    {
        return $this->data['max_outbound_request'];
    }

    public function getMaxInboundRequest()
    {
        return $this->data['max_inbound_request'];
    }

    public function getMaxCallsPerSecond()
    {
        return $this->data['max_calls_per_second'];
    }

    public function jsonUnserialize(array $json)
    {
        $this->fromArray($json);
    }

    public function fromArray(array $data)
    {
        $this->data = [
            'sms_callback_url' => $data['sms_callback_url'],
            'dr_callback_url' => $data['dr_callback_url'],
            'max_outbound_request' => $data['max_outbound_request'],
            'max_inbound_request' => $data['max_inbound_request'],
            'max_calls_per_second' => $data['max_calls_per_second'],
        ];
    }

    public function jsonSerialize()
    {
        return $this->toArray();
    }

    public function toArray(): array
    {
        return $this->data;
    }
}
