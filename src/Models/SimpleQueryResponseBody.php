<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\SDK\Imm\V20200930\Models\SimpleQueryResponseBody\aggregations;
use AlibabaCloud\Tea\Model;

class SimpleQueryResponseBody extends Model
{
    /**
     * @description 聚合字段的字段名
     *
     * @var aggregations[]
     */
    public $aggregations;

    /**
     * @description 文件列表
     *
     * @var File[]
     */
    public $files;

    /**
     * @description 表示当前调用返回读取到的位置，空代表数据已经读取完毕
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description 本次请求的唯一 Id
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'aggregations' => 'Aggregations',
        'files'        => 'Files',
        'nextToken'    => 'NextToken',
        'requestId'    => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aggregations) {
            $res['Aggregations'] = [];
            if (null !== $this->aggregations && \is_array($this->aggregations)) {
                $n = 0;
                foreach ($this->aggregations as $item) {
                    $res['Aggregations'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->files) {
            $res['Files'] = [];
            if (null !== $this->files && \is_array($this->files)) {
                $n = 0;
                foreach ($this->files as $item) {
                    $res['Files'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SimpleQueryResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Aggregations'])) {
            if (!empty($map['Aggregations'])) {
                $model->aggregations = [];
                $n                   = 0;
                foreach ($map['Aggregations'] as $item) {
                    $model->aggregations[$n++] = null !== $item ? aggregations::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Files'])) {
            if (!empty($map['Files'])) {
                $model->files = [];
                $n            = 0;
                foreach ($map['Files'] as $item) {
                    $model->files[$n++] = null !== $item ? File::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
