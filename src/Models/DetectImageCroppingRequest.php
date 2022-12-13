<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class DetectImageCroppingRequest extends Model
{
    /**
     * @var string
     */
    public $aspectRatios;

    /**
     * @var CredentialConfig
     */
    public $credentialConfig;

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
    protected $_name = [
        'aspectRatios'     => 'AspectRatios',
        'credentialConfig' => 'CredentialConfig',
        'projectName'      => 'ProjectName',
        'sourceURI'        => 'SourceURI',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aspectRatios) {
            $res['AspectRatios'] = $this->aspectRatios;
        }
        if (null !== $this->credentialConfig) {
            $res['CredentialConfig'] = null !== $this->credentialConfig ? $this->credentialConfig->toMap() : null;
        }
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }
        if (null !== $this->sourceURI) {
            $res['SourceURI'] = $this->sourceURI;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DetectImageCroppingRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AspectRatios'])) {
            $model->aspectRatios = $map['AspectRatios'];
        }
        if (isset($map['CredentialConfig'])) {
            $model->credentialConfig = CredentialConfig::fromMap($map['CredentialConfig']);
        }
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }
        if (isset($map['SourceURI'])) {
            $model->sourceURI = $map['SourceURI'];
        }

        return $model;
    }
}
