<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class IndexFileMetaRequest extends Model
{
    /**
     * @var string
     */
    public $projectName;

    /**
     * @var string
     */
    public $datasetName;

    /**
     * @var string
     */
    public $URI;

    /**
     * @var mixed[]
     */
    public $customLabels;
    protected $_name = [
        'projectName'  => 'ProjectName',
        'datasetName'  => 'DatasetName',
        'URI'          => 'URI',
        'customLabels' => 'CustomLabels',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }
        if (null !== $this->datasetName) {
            $res['DatasetName'] = $this->datasetName;
        }
        if (null !== $this->URI) {
            $res['URI'] = $this->URI;
        }
        if (null !== $this->customLabels) {
            $res['CustomLabels'] = $this->customLabels;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return IndexFileMetaRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }
        if (isset($map['DatasetName'])) {
            $model->datasetName = $map['DatasetName'];
        }
        if (isset($map['URI'])) {
            $model->URI = $map['URI'];
        }
        if (isset($map['CustomLabels'])) {
            $model->customLabels = $map['CustomLabels'];
        }

        return $model;
    }
}
