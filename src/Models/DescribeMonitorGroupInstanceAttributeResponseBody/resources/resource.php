<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMonitorGroupInstanceAttributeResponseBody\resources;

use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMonitorGroupInstanceAttributeResponseBody\resources\resource\region;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMonitorGroupInstanceAttributeResponseBody\resources\resource\tags;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMonitorGroupInstanceAttributeResponseBody\resources\resource\vpc;
use AlibabaCloud\Tea\Model;

class resource extends Model
{
    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var region
     */
    public $region;

    /**
     * @var vpc
     */
    public $vpc;

    /**
     * @var string
     */
    public $dimension;

    /**
     * @var tags
     */
    public $tags;

    /**
     * @var string
     */
    public $category;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $networkType;

    /**
     * @var string
     */
    public $desc;
    protected $_name = [
        'instanceName' => 'InstanceName',
        'region'       => 'Region',
        'vpc'          => 'Vpc',
        'dimension'    => 'Dimension',
        'tags'         => 'Tags',
        'category'     => 'Category',
        'instanceId'   => 'InstanceId',
        'networkType'  => 'NetworkType',
        'desc'         => 'Desc',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->region) {
            $res['Region'] = null !== $this->region ? $this->region->toMap() : null;
        }
        if (null !== $this->vpc) {
            $res['Vpc'] = null !== $this->vpc ? $this->vpc->toMap() : null;
        }
        if (null !== $this->dimension) {
            $res['Dimension'] = $this->dimension;
        }
        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toMap() : null;
        }
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->networkType) {
            $res['NetworkType'] = $this->networkType;
        }
        if (null !== $this->desc) {
            $res['Desc'] = $this->desc;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resource
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['Region'])) {
            $model->region = region::fromMap($map['Region']);
        }
        if (isset($map['Vpc'])) {
            $model->vpc = vpc::fromMap($map['Vpc']);
        }
        if (isset($map['Dimension'])) {
            $model->dimension = $map['Dimension'];
        }
        if (isset($map['Tags'])) {
            $model->tags = tags::fromMap($map['Tags']);
        }
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['NetworkType'])) {
            $model->networkType = $map['NetworkType'];
        }
        if (isset($map['Desc'])) {
            $model->desc = $map['Desc'];
        }

        return $model;
    }
}
