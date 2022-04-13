<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class UpdateStoryShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $customId;

    /**
     * @var string
     */
    public $customLabelsShrink;

    /**
     * @var string
     */
    public $datasetName;

    /**
     * @var string
     */
    public $objectId;

    /**
     * @var string
     */
    public $projectName;

    /**
     * @var string
     */
    public $storyName;
    protected $_name = [
        'customId'           => 'CustomId',
        'customLabelsShrink' => 'CustomLabels',
        'datasetName'        => 'DatasetName',
        'objectId'           => 'ObjectId',
        'projectName'        => 'ProjectName',
        'storyName'          => 'StoryName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->customId) {
            $res['CustomId'] = $this->customId;
        }
        if (null !== $this->customLabelsShrink) {
            $res['CustomLabels'] = $this->customLabelsShrink;
        }
        if (null !== $this->datasetName) {
            $res['DatasetName'] = $this->datasetName;
        }
        if (null !== $this->objectId) {
            $res['ObjectId'] = $this->objectId;
        }
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }
        if (null !== $this->storyName) {
            $res['StoryName'] = $this->storyName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateStoryShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CustomId'])) {
            $model->customId = $map['CustomId'];
        }
        if (isset($map['CustomLabels'])) {
            $model->customLabelsShrink = $map['CustomLabels'];
        }
        if (isset($map['DatasetName'])) {
            $model->datasetName = $map['DatasetName'];
        }
        if (isset($map['ObjectId'])) {
            $model->objectId = $map['ObjectId'];
        }
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }
        if (isset($map['StoryName'])) {
            $model->storyName = $map['StoryName'];
        }

        return $model;
    }
}
