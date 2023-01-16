<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\SDK\Imm\V20200930\Models\CreateFileUncompressionTaskRequest\target;
use AlibabaCloud\Tea\Model;

class CreateFileUncompressionTaskRequest extends Model
{
    /**
     * @var CredentialConfig
     */
    public $credentialConfig;

    /**
     * @example topic1
     *
     * @var string
     */
    public $notifyTopicName;

    /**
     * @example 123456
     *
     * @var string
     */
    public $password;

    /**
     * @example immtest
     *
     * @var string
     */
    public $projectName;

    /**
     * @var string[]
     */
    public $selectedFiles;

    /**
     * @example oss://imm-apitest-fxf2/name.zip
     *
     * @var string
     */
    public $sourceURI;

    /**
     * @var target
     */
    public $target;

    /**
     * @example {"ID": "user1","Name": "test-user1","Avatar": "http://example.com?id=user1"}
     *
     * @var string
     */
    public $userData;
    protected $_name = [
        'credentialConfig' => 'CredentialConfig',
        'notifyTopicName'  => 'NotifyTopicName',
        'password'         => 'Password',
        'projectName'      => 'ProjectName',
        'selectedFiles'    => 'SelectedFiles',
        'sourceURI'        => 'SourceURI',
        'target'           => 'Target',
        'userData'         => 'UserData',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->credentialConfig) {
            $res['CredentialConfig'] = null !== $this->credentialConfig ? $this->credentialConfig->toMap() : null;
        }
        if (null !== $this->notifyTopicName) {
            $res['NotifyTopicName'] = $this->notifyTopicName;
        }
        if (null !== $this->password) {
            $res['Password'] = $this->password;
        }
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }
        if (null !== $this->selectedFiles) {
            $res['SelectedFiles'] = $this->selectedFiles;
        }
        if (null !== $this->sourceURI) {
            $res['SourceURI'] = $this->sourceURI;
        }
        if (null !== $this->target) {
            $res['Target'] = null !== $this->target ? $this->target->toMap() : null;
        }
        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateFileUncompressionTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CredentialConfig'])) {
            $model->credentialConfig = CredentialConfig::fromMap($map['CredentialConfig']);
        }
        if (isset($map['NotifyTopicName'])) {
            $model->notifyTopicName = $map['NotifyTopicName'];
        }
        if (isset($map['Password'])) {
            $model->password = $map['Password'];
        }
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }
        if (isset($map['SelectedFiles'])) {
            if (!empty($map['SelectedFiles'])) {
                $model->selectedFiles = $map['SelectedFiles'];
            }
        }
        if (isset($map['SourceURI'])) {
            $model->sourceURI = $map['SourceURI'];
        }
        if (isset($map['Target'])) {
            $model->target = target::fromMap($map['Target']);
        }
        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }

        return $model;
    }
}
