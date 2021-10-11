<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Viapi\V20210930\Models;

use AlibabaCloud\Tea\Model;

class CheckServiceLinkedRoleForDeletingRequest extends Model
{
    /**
     * @var string
     */
    public $roleArn;

    /**
     * @var string
     */
    public $serviceName;

    /**
     * @var string
     */
    public $SPIRegionId;

    /**
     * @var string
     */
    public $deletionTaskId;

    /**
     * @var string
     */
    public $accountId;
    protected $_name = [
        'roleArn'        => 'RoleArn',
        'serviceName'    => 'ServiceName',
        'SPIRegionId'    => 'SPIRegionId',
        'deletionTaskId' => 'DeletionTaskId',
        'accountId'      => 'AccountId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->roleArn) {
            $res['RoleArn'] = $this->roleArn;
        }
        if (null !== $this->serviceName) {
            $res['ServiceName'] = $this->serviceName;
        }
        if (null !== $this->SPIRegionId) {
            $res['SPIRegionId'] = $this->SPIRegionId;
        }
        if (null !== $this->deletionTaskId) {
            $res['DeletionTaskId'] = $this->deletionTaskId;
        }
        if (null !== $this->accountId) {
            $res['AccountId'] = $this->accountId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CheckServiceLinkedRoleForDeletingRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RoleArn'])) {
            $model->roleArn = $map['RoleArn'];
        }
        if (isset($map['ServiceName'])) {
            $model->serviceName = $map['ServiceName'];
        }
        if (isset($map['SPIRegionId'])) {
            $model->SPIRegionId = $map['SPIRegionId'];
        }
        if (isset($map['DeletionTaskId'])) {
            $model->deletionTaskId = $map['DeletionTaskId'];
        }
        if (isset($map['AccountId'])) {
            $model->accountId = $map['AccountId'];
        }

        return $model;
    }
}
