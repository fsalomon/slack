<?php

namespace CL\Slack\Payload;

use CL\Slack\Model\Channel;

class ConversationsListPayloadResponse extends AbstractPayloadResponse
{
    /**
     * @var Channel[]
     */
    private $channels;

    /**
     * @return Channel[]
     */
    public function getChannels()
    {
        return $this->channels;
    }
}
