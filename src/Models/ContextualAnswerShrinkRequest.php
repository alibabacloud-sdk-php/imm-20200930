<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class ContextualAnswerShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $filesShrink;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $messagesShrink;

    /**
     * @description This parameter is required.
     *
     * @example test-project
     *
     * @var string
     */
    public $projectName;
    protected $_name = [
        'filesShrink'    => 'Files',
        'messagesShrink' => 'Messages',
        'projectName'    => 'ProjectName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->filesShrink) {
            $res['Files'] = $this->filesShrink;
        }
        if (null !== $this->messagesShrink) {
            $res['Messages'] = $this->messagesShrink;
        }
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ContextualAnswerShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Files'])) {
            $model->filesShrink = $map['Files'];
        }
        if (isset($map['Messages'])) {
            $model->messagesShrink = $map['Messages'];
        }
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }

        return $model;
    }
}
