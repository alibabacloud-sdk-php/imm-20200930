<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class BatchGetFileMetaRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $datasetName;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $projectName;

    /**
     * @description This parameter is required.
     *
     * @var string[]
     */
    public $URIs;

    /**
     * @var string[]
     */
    public $withFields;
    protected $_name = [
        'datasetName' => 'DatasetName',
        'projectName' => 'ProjectName',
        'URIs'        => 'URIs',
        'withFields'  => 'WithFields',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->datasetName) {
            $res['DatasetName'] = $this->datasetName;
        }
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }
        if (null !== $this->URIs) {
            $res['URIs'] = $this->URIs;
        }
        if (null !== $this->withFields) {
            $res['WithFields'] = $this->withFields;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BatchGetFileMetaRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DatasetName'])) {
            $model->datasetName = $map['DatasetName'];
        }
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }
        if (isset($map['URIs'])) {
            if (!empty($map['URIs'])) {
                $model->URIs = $map['URIs'];
            }
        }
        if (isset($map['WithFields'])) {
            if (!empty($map['WithFields'])) {
                $model->withFields = $map['WithFields'];
            }
        }

        return $model;
    }
}
