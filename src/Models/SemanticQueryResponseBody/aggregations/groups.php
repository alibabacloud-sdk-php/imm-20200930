<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models\SemanticQueryResponseBody\aggregations;

use AlibabaCloud\Tea\Model;

class groups extends Model
{
    /**
     * @description 分组聚合的计数
     *
     * @var int
     */
    public $count;

    /**
     * @description 分组聚合的值
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'count' => 'Count',
        'value' => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return groups
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
