<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class FigureCluster extends Model
{
    /**
     * @description AverageAge
     *
     * @var float
     */
    public $averageAge;

    /**
     * @description Cover
     *
     * @var File
     */
    public $cover;

    /**
     * @description CreateTime
     *
     * @var string
     */
    public $createTime;

    /**
     * @description CustomId
     *
     * @var string
     */
    public $customId;

    /**
     * @description CustomLabels
     *
     * @var mixed[]
     */
    public $customLabels;

    /**
     * @description DatasetName
     *
     * @var string
     */
    public $datasetName;

    /**
     * @description FaceCount
     *
     * @var int
     */
    public $faceCount;

    /**
     * @description Gender
     *
     * @var string
     */
    public $gender;

    /**
     * @description ImageCount
     *
     * @var int
     */
    public $imageCount;

    /**
     * @description MaxAge
     *
     * @var float
     */
    public $maxAge;

    /**
     * @description MinAge
     *
     * @var float
     */
    public $minAge;

    /**
     * @description Name
     *
     * @var string
     */
    public $name;

    /**
     * @description ObjectId
     *
     * @var string
     */
    public $objectId;

    /**
     * @description ObjectType
     *
     * @var string
     */
    public $objectType;

    /**
     * @description OwnerId
     *
     * @var string
     */
    public $ownerId;

    /**
     * @description ProjectName
     *
     * @var string
     */
    public $projectName;

    /**
     * @description UpdateTime
     *
     * @var string
     */
    public $updateTime;

    /**
     * @description Version
     *
     * @var string
     */
    public $version;
    protected $_name = [
        'averageAge'   => 'AverageAge',
        'cover'        => 'Cover',
        'createTime'   => 'CreateTime',
        'customId'     => 'CustomId',
        'customLabels' => 'CustomLabels',
        'datasetName'  => 'DatasetName',
        'faceCount'    => 'FaceCount',
        'gender'       => 'Gender',
        'imageCount'   => 'ImageCount',
        'maxAge'       => 'MaxAge',
        'minAge'       => 'MinAge',
        'name'         => 'Name',
        'objectId'     => 'ObjectId',
        'objectType'   => 'ObjectType',
        'ownerId'      => 'OwnerId',
        'projectName'  => 'ProjectName',
        'updateTime'   => 'UpdateTime',
        'version'      => 'Version',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->averageAge) {
            $res['AverageAge'] = $this->averageAge;
        }
        if (null !== $this->cover) {
            $res['Cover'] = null !== $this->cover ? $this->cover->toMap() : null;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->customId) {
            $res['CustomId'] = $this->customId;
        }
        if (null !== $this->customLabels) {
            $res['CustomLabels'] = $this->customLabels;
        }
        if (null !== $this->datasetName) {
            $res['DatasetName'] = $this->datasetName;
        }
        if (null !== $this->faceCount) {
            $res['FaceCount'] = $this->faceCount;
        }
        if (null !== $this->gender) {
            $res['Gender'] = $this->gender;
        }
        if (null !== $this->imageCount) {
            $res['ImageCount'] = $this->imageCount;
        }
        if (null !== $this->maxAge) {
            $res['MaxAge'] = $this->maxAge;
        }
        if (null !== $this->minAge) {
            $res['MinAge'] = $this->minAge;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->objectId) {
            $res['ObjectId'] = $this->objectId;
        }
        if (null !== $this->objectType) {
            $res['ObjectType'] = $this->objectType;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return FigureCluster
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AverageAge'])) {
            $model->averageAge = $map['AverageAge'];
        }
        if (isset($map['Cover'])) {
            $model->cover = File::fromMap($map['Cover']);
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['CustomId'])) {
            $model->customId = $map['CustomId'];
        }
        if (isset($map['CustomLabels'])) {
            $model->customLabels = $map['CustomLabels'];
        }
        if (isset($map['DatasetName'])) {
            $model->datasetName = $map['DatasetName'];
        }
        if (isset($map['FaceCount'])) {
            $model->faceCount = $map['FaceCount'];
        }
        if (isset($map['Gender'])) {
            $model->gender = $map['Gender'];
        }
        if (isset($map['ImageCount'])) {
            $model->imageCount = $map['ImageCount'];
        }
        if (isset($map['MaxAge'])) {
            $model->maxAge = $map['MaxAge'];
        }
        if (isset($map['MinAge'])) {
            $model->minAge = $map['MinAge'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ObjectId'])) {
            $model->objectId = $map['ObjectId'];
        }
        if (isset($map['ObjectType'])) {
            $model->objectType = $map['ObjectType'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
