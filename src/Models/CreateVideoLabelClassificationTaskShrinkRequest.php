<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class CreateVideoLabelClassificationTaskShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $credentialConfigShrink;

    /**
     * @example MNS 通知的 Topic 名称
     *
     * @var string
     */
    public $notifyTopicName;

    /**
     * @var string
     */
    public $projectName;

    /**
     * @example 源文件路径
     *
     * @var string
     */
    public $sourceURI;

    /**
     * @var string
     */
    public $tagsShrink;

    /**
     * @example 用户自定义信息
     *
     * @var string
     */
    public $userData;
    protected $_name = [
        'credentialConfigShrink' => 'CredentialConfig',
        'notifyTopicName'        => 'NotifyTopicName',
        'projectName'            => 'ProjectName',
        'sourceURI'              => 'SourceURI',
        'tagsShrink'             => 'Tags',
        'userData'               => 'UserData',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->credentialConfigShrink) {
            $res['CredentialConfig'] = $this->credentialConfigShrink;
        }
        if (null !== $this->notifyTopicName) {
            $res['NotifyTopicName'] = $this->notifyTopicName;
        }
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }
        if (null !== $this->sourceURI) {
            $res['SourceURI'] = $this->sourceURI;
        }
        if (null !== $this->tagsShrink) {
            $res['Tags'] = $this->tagsShrink;
        }
        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateVideoLabelClassificationTaskShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CredentialConfig'])) {
            $model->credentialConfigShrink = $map['CredentialConfig'];
        }
        if (isset($map['NotifyTopicName'])) {
            $model->notifyTopicName = $map['NotifyTopicName'];
        }
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }
        if (isset($map['SourceURI'])) {
            $model->sourceURI = $map['SourceURI'];
        }
        if (isset($map['Tags'])) {
            $model->tagsShrink = $map['Tags'];
        }
        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }

        return $model;
    }
}
