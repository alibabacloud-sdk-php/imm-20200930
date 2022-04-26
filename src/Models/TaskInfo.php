<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class TaskInfo extends Model
{
    /**
     * @description 错误码
     *
     * @var string
     */
    public $code;

    /**
     * @description 任务结束时间
     *
     * @var string
     */
    public $endTime;

    /**
     * @description 错误消息
     *
     * @var string
     */
    public $message;

    /**
     * @description 任务开始时间
     *
     * @var string
     */
    public $startTime;

    /**
     * @description 任务状态
     *
     * @var string
     */
    public $status;

    /**
     * @description 标签
     *
     * @var mixed[]
     */
    public $tags;

    /**
     * @description 任务唯一ID
     *
     * @var string
     */
    public $taskId;

    /**
     * @description 任务类型
     *
     * @var string
     */
    public $taskType;

    /**
     * @description 用户自定义信息
     *
     * @var string
     */
    public $userData;
    protected $_name = [
        'code'      => 'Code',
        'endTime'   => 'EndTime',
        'message'   => 'Message',
        'startTime' => 'StartTime',
        'status'    => 'Status',
        'tags'      => 'Tags',
        'taskId'    => 'TaskId',
        'taskType'  => 'TaskType',
        'userData'  => 'UserData',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->tags) {
            $res['Tags'] = $this->tags;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->taskType) {
            $res['TaskType'] = $this->taskType;
        }
        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return TaskInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Tags'])) {
            $model->tags = $map['Tags'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['TaskType'])) {
            $model->taskType = $map['TaskType'];
        }
        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }

        return $model;
    }
}
