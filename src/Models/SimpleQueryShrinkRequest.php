<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class SimpleQueryShrinkRequest extends Model
{
    /**
     * @description 标记当前开始读取的位置，置空表示从头开始
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description 本次读取的最大数据记录数量
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description 项目名称
     *
     * @var string
     */
    public $projectName;

    /**
     * @description Dataset 名称
     *
     * @var string
     */
    public $datasetName;

    /**
     * @var string
     */
    public $queryShrink;

    /**
     * @description 排序方式，默认 DESC
     *
     * @var string
     */
    public $sort;

    /**
     * @description 排序字段
     *
     * @var string
     */
    public $order;

    /**
     * @description 聚合字段
     *
     * @var string
     */
    public $aggregationsShrink;
    protected $_name = [
        'nextToken'          => 'NextToken',
        'maxResults'         => 'MaxResults',
        'projectName'        => 'ProjectName',
        'datasetName'        => 'DatasetName',
        'queryShrink'        => 'Query',
        'sort'               => 'Sort',
        'order'              => 'Order',
        'aggregationsShrink' => 'Aggregations',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }
        if (null !== $this->datasetName) {
            $res['DatasetName'] = $this->datasetName;
        }
        if (null !== $this->queryShrink) {
            $res['Query'] = $this->queryShrink;
        }
        if (null !== $this->sort) {
            $res['Sort'] = $this->sort;
        }
        if (null !== $this->order) {
            $res['Order'] = $this->order;
        }
        if (null !== $this->aggregationsShrink) {
            $res['Aggregations'] = $this->aggregationsShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SimpleQueryShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }
        if (isset($map['DatasetName'])) {
            $model->datasetName = $map['DatasetName'];
        }
        if (isset($map['Query'])) {
            $model->queryShrink = $map['Query'];
        }
        if (isset($map['Sort'])) {
            $model->sort = $map['Sort'];
        }
        if (isset($map['Order'])) {
            $model->order = $map['Order'];
        }
        if (isset($map['Aggregations'])) {
            $model->aggregationsShrink = $map['Aggregations'];
        }

        return $model;
    }
}
