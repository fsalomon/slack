<?php

/*
 * This file is part of the Slack API library.
 *
 * (c) Cas Leentfaar <info@casleentfaar.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CL\Slack\Payload;

/**
 * @author Cas Leentfaar <info@casleentfaar.com>
 *
 * @link Official documentation at https://api.slack.com/methods/files.info
 */
class FilesSharedPublicUrlPayload extends AbstractPayload
{
    /**
     * @var string
     */
    private $file;

    /**
     * @param string $file
     */
    public function setFileId($file)
    {
        $this->file = $file;
    }

    /**
     * @return string
     */
    public function getFileId()
    {
        return $this->file;
    }

    /**
     * @inheritdoc
     */
    public function getMethod()
    {
        return 'files.sharedPublicURL';
    }

    public function getResponseClass()
    {
        return FilesInfoPayloadResponse::class;
    }
}
