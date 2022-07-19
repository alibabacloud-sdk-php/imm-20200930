<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\SDK\Imm\V20200930\Models\CreateImageSplicingTaskRequest\sources;
use AlibabaCloud\Tea\Model;

class CreateImageSplicingTaskRequest extends Model
{
    /**
     * @var int
     */
    public $align;

    /**
     * @var string
     */
    public $backgroundColor;

    /**
     * @var CredentialConfig
     */
    public $credentialConfig;

    /**
     * @var string
     */
    public $direction;

    /**
     * @var string
     */
    public $imageFormat;

    /**
     * @var string
     */
    public $notifyEndpoint;

    /**
     * @var string
     */
    public $notifyTopicName;

    /**
     * @var int
     */
    public $padding;

    /**
     * @description A short description of struct
     *
     * @var string
     */
    public $projectName;

    /**
     * @var int
     */
    public $quality;

    /**
     * @var string
     */
    public $scaleType;

    /**
     * @var sources[]
     */
    public $sources;

    /**
     * @var mixed[]
     */
    public $tags;

    /**
     * @var string
     */
    public $targetURI;

    /**
     * @var string
     */
    public $userData;
    protected $_name = [
        'align'            => 'Align',
        'backgroundColor'  => 'BackgroundColor',
        'credentialConfig' => 'CredentialConfig',
        'direction'        => 'Direction',
        'imageFormat'      => 'ImageFormat',
        'notifyEndpoint'   => 'NotifyEndpoint',
        'notifyTopicName'  => 'NotifyTopicName',
        'padding'          => 'Padding',
        'projectName'      => 'ProjectName',
        'quality'          => 'Quality',
        'scaleType'        => 'ScaleType',
        'sources'          => 'Sources',
        'tags'             => 'Tags',
        'targetURI'        => 'TargetURI',
        'userData'         => 'UserData',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->align) {
            $res['Align'] = $this->align;
        }
        if (null !== $this->backgroundColor) {
            $res['BackgroundColor'] = $this->backgroundColor;
        }
        if (null !== $this->credentialConfig) {
            $res['CredentialConfig'] = null !== $this->credentialConfig ? $this->credentialConfig->toMap() : null;
        }
        if (null !== $this->direction) {
            $res['Direction'] = $this->direction;
        }
        if (null !== $this->imageFormat) {
            $res['ImageFormat'] = $this->imageFormat;
        }
        if (null !== $this->notifyEndpoint) {
            $res['NotifyEndpoint'] = $this->notifyEndpoint;
        }
        if (null !== $this->notifyTopicName) {
            $res['NotifyTopicName'] = $this->notifyTopicName;
        }
        if (null !== $this->padding) {
            $res['Padding'] = $this->padding;
        }
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }
        if (null !== $this->quality) {
            $res['Quality'] = $this->quality;
        }
        if (null !== $this->scaleType) {
            $res['ScaleType'] = $this->scaleType;
        }
        if (null !== $this->sources) {
            $res['Sources'] = [];
            if (null !== $this->sources && \is_array($this->sources)) {
                $n = 0;
                foreach ($this->sources as $item) {
                    $res['Sources'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->tags) {
            $res['Tags'] = $this->tags;
        }
        if (null !== $this->targetURI) {
            $res['TargetURI'] = $this->targetURI;
        }
        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateImageSplicingTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Align'])) {
            $model->align = $map['Align'];
        }
        if (isset($map['BackgroundColor'])) {
            $model->backgroundColor = $map['BackgroundColor'];
        }
        if (isset($map['CredentialConfig'])) {
            $model->credentialConfig = CredentialConfig::fromMap($map['CredentialConfig']);
        }
        if (isset($map['Direction'])) {
            $model->direction = $map['Direction'];
        }
        if (isset($map['ImageFormat'])) {
            $model->imageFormat = $map['ImageFormat'];
        }
        if (isset($map['NotifyEndpoint'])) {
            $model->notifyEndpoint = $map['NotifyEndpoint'];
        }
        if (isset($map['NotifyTopicName'])) {
            $model->notifyTopicName = $map['NotifyTopicName'];
        }
        if (isset($map['Padding'])) {
            $model->padding = $map['Padding'];
        }
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }
        if (isset($map['Quality'])) {
            $model->quality = $map['Quality'];
        }
        if (isset($map['ScaleType'])) {
            $model->scaleType = $map['ScaleType'];
        }
        if (isset($map['Sources'])) {
            if (!empty($map['Sources'])) {
                $model->sources = [];
                $n              = 0;
                foreach ($map['Sources'] as $item) {
                    $model->sources[$n++] = null !== $item ? sources::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Tags'])) {
            $model->tags = $map['Tags'];
        }
        if (isset($map['TargetURI'])) {
            $model->targetURI = $map['TargetURI'];
        }
        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }

        return $model;
    }
}
