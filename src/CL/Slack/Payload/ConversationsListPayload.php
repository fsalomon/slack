<?php

namespace CL\Slack\Payload;

class ConversationsListPayload extends AbstractPayload
{
    /**
     * @var bool
     */
    private $excludeArchived;

    /**
     * @inheritdoc
     */
    public function getMethod()
    {
        return 'conversations.list';
    }

    /**
     * @param bool $excludeArchived
     */
    public function setExcludeArchived($excludeArchived)
    {
        $this->excludeArchived = $excludeArchived;
    }

    /**
     * @return bool
     */
    public function isExcludeArchived()
    {
        return $this->excludeArchived;
    }
}
