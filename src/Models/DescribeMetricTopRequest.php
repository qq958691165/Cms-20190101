<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\Tea\Model;

class DescribeMetricTopRequest extends Model
{
    /**
     * @description The dimensions that specify the resources whose monitoring data you want to query.
     *
     * Set the value to a collection of key-value pairs. A typical key-value pair is `instanceId:i-2ze2d6j5uhg20x47****`.
     *
     * >  You can query a maximum of 50 instances in a single request.
     * @example [{"instanceId": "i-abcdefgh12****"}]
     *
     * @var string
     */
    public $dimensions;

    /**
     * @description The error message.
     *
     * @example 2021-05-08 10:00:00
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The statistical period of the monitoring data. Unit: seconds. Valid values: 15, 60, 900, and 3600.
     *
     * @example {"groupby":["userId","instanceId"]}
     *
     * @var string
     */
    public $express;

    /**
     * @description The start of the time range to query monitoring data.
     *
     *   If the `StartTime` and `EndTime` parameters are not specified, the monitoring data of the last statistical period is queried.``
     *
     *   If the `StartTime` and `EndTime` parameters are specified, the monitoring data of the last statistical period in the specified time range is queried.```` The following examples demonstrate how to determine the period in which monitoring data is queried:
     *
     *   If you set the `Period` parameter to 15, the specified time range must be less than or equal to 20 minutes. For example, if you set the StartTime parameter to 2021-05-08 08:10:00 and the EndTime parameter to 2021-05-08 08:30:00, the monitoring data of the last 15 seconds in the time range is queried.
     *   If you set the `Period` parameter to 60 or 900, the specified time range must be less than or equal to 2 hours. For example, if you set the Period parameter to 60, the StartTime parameter to 2021-05-08 08:00:00, and the EndTime parameter to 2021-05-08 10:00:00, the monitoring data of the last 60 seconds in the time range is queried.
     *   If you set the `Period` parameter to 3600, the specified time range must be less than or equal to two days. For example, if you set the StartTime parameter to 2021-05-08 08:00:00 and the EndTime parameter to 2021-05-10 08:00:00, the monitoring data of the last 3,600 seconds in the time range is queried.
     *
     * The following formats are supported:
     *
     *   UNIX timestamp: the number of milliseconds that have elapsed since 00:00:00 Thursday, January 1, 1970
     *   UTC time: the UTC time that follows the YYYY-MM-DDThh:mm:ssZ format
     *
     * >
     *
     *   You must set the `StartTime` parameter to a point in time that is later than 00:00:00 Thursday, January 1, 1970. Otherwise, this parameter is invalid.
     *   We recommend that you use UNIX timestamps to prevent time zone-related issues.
     *
     * @example 10
     *
     * @var string
     */
    public $length;

    /**
     * @description The operation that you want to perform. Set the value to **DescribeMetricTop**.
     *
     * @example cpu_idle
     *
     * @var string
     */
    public $metricName;

    /**
     * @description The HTTP status code.
     *
     * >  The status code 200 indicates that the call was successful.
     * @example acs_ecs_dashboard
     *
     * @var string
     */
    public $namespace;

    /**
     * @description The statistical period of the monitoring data.
     *
     * >
     *
     *   If this parameter is not specified, monitoring data is queried based on the period in which metric values are reported.
     *   Statistical periods vary based on metrics that are specified by `MetricName`. For more information, see [Appendix 1: Metrics](~~163515~~).
     *
     * @example False
     *
     * @var string
     */
    public $orderDesc;

    /**
     * @description The number of entries to return on each page.
     *
     * >  The maximum value of the Length parameter in a request is 1440.
     * @example Average
     *
     * @var string
     */
    public $orderby;

    /**
     * @description The field based on which data is sorted. Valid values:
     *
     *   Average: the average value
     *   Minimum: the minimum value
     *   Maximum: the maximum value
     *
     * @example 60
     *
     * @var string
     */
    public $period;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @description The end of the time range to query monitoring data.
     *
     *   If the `StartTime` and `EndTime` parameters are not specified, the monitoring data of the last statistical period is queried.``
     *
     *   If the `StartTime` and `EndTime` parameters are specified, the monitoring data of the last statistical period in the specified time range is queried.```` The following examples demonstrate how to determine the period in which monitoring data is queried:
     *
     *   If you set the `Period` parameter to 15, the specified time range must be less than or equal to 20 minutes. For example, if you set the StartTime parameter to 2021-05-08 08:10:00 and the EndTime parameter to 2021-05-08 08:30:00, the monitoring data of the last 15 seconds in the time range is queried.
     *   If you set the `Period` parameter to 60 or 900, the specified time range must be less than or equal to 2 hours. For example, if you set the Period parameter to 60, the StartTime parameter to 2021-05-08 08:00:00, and the EndTime parameter to 2021-05-08 10:00:00, the monitoring data of the last 60 seconds in the time range is queried.
     *   If you set the `Period` parameter to 3600, the specified time range must be less than or equal to two days. For example, if you set the StartTime parameter to 2021-05-08 08:00:00 and the EndTime parameter to 2021-05-10 08:00:00, the monitoring data of the last 3,600 seconds in the time range is queried.
     *
     * The following formats are supported:
     *
     *   UNIX timestamp: the number of milliseconds that have elapsed since 00:00:00 Thursday, January 1, 1970
     *   UTC time: the UTC time that follows the YYYY-MM-DDThh:mm:ssZ format
     *
     * >  We recommend that you use UNIX timestamps to prevent time zone-related issues.
     * @example 2021-05-08 08:00:00
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'dimensions' => 'Dimensions',
        'endTime'    => 'EndTime',
        'express'    => 'Express',
        'length'     => 'Length',
        'metricName' => 'MetricName',
        'namespace'  => 'Namespace',
        'orderDesc'  => 'OrderDesc',
        'orderby'    => 'Orderby',
        'period'     => 'Period',
        'regionId'   => 'RegionId',
        'startTime'  => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dimensions) {
            $res['Dimensions'] = $this->dimensions;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->express) {
            $res['Express'] = $this->express;
        }
        if (null !== $this->length) {
            $res['Length'] = $this->length;
        }
        if (null !== $this->metricName) {
            $res['MetricName'] = $this->metricName;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->orderDesc) {
            $res['OrderDesc'] = $this->orderDesc;
        }
        if (null !== $this->orderby) {
            $res['Orderby'] = $this->orderby;
        }
        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeMetricTopRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Dimensions'])) {
            $model->dimensions = $map['Dimensions'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Express'])) {
            $model->express = $map['Express'];
        }
        if (isset($map['Length'])) {
            $model->length = $map['Length'];
        }
        if (isset($map['MetricName'])) {
            $model->metricName = $map['MetricName'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['OrderDesc'])) {
            $model->orderDesc = $map['OrderDesc'];
        }
        if (isset($map['Orderby'])) {
            $model->orderby = $map['Orderby'];
        }
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
