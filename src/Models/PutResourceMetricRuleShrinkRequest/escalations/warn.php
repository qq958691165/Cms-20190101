<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\PutResourceMetricRuleShrinkRequest\escalations;

use AlibabaCloud\Tea\Model;

class warn extends Model
{
    /**
     * @description The key of the annotation.
     *
     * @example GreaterThanOrEqualToThreshold
     *
     * @var string
     */
    public $comparisonOperator;

    /**
     * @description The name of the metric. For information about how to query the name of a metric, see [Appendix 1: Metrics](~~163515~~).
     *
     * >  If you create a Prometheus alert rule for Hybrid Cloud Monitoring, you must set this parameter to the name of the namespace. For information about how to obtain the name of a namespace, see [DescribeHybridMonitorNamespaceList](~~428880~~).
     * @example Average
     *
     * @var string
     */
    public $statistics;

    /**
     * @description The operator that is used to compare the metric value with the threshold. Valid values:
     *
     *   GreaterThanOrEqualToThreshold: greater than or equal to the threshold
     *   GreaterThanThreshold: greater than the threshold
     *   LessThanOrEqualToThreshold: less than or equal to the threshold
     *   LessThanThreshold: less than the threshold
     *   NotEqualToThreshold: not equal to the threshold
     *   GreaterThanYesterday: greater than the metric value at the same time yesterday
     *   LessThanYesterday: less than the metric value at the same time yesterday
     *   GreaterThanLastWeek: greater than the metric value at the same time last week
     *   LessThanLastWeek: less than the metric value at the same time last week
     *   GreaterThanLastPeriod: greater than the metric value in the last monitoring cycle
     *   LessThanLastPeriod: less than the metric value in the last monitoring cycle
     *
     * >  You must select at least one of the Critical, Warn, and Info alert levels and specify the Statistics, ComparisonOperator, Threshold, and Times parameters for the selected alert level.
     * @example 90
     *
     * @var string
     */
    public $threshold;

    /**
     * @description The processing method of alerts when no monitoring data is found. Valid values:
     *
     *   KEEP_LAST_STATE (default value): No operation is performed.
     *   INSUFFICIENT_DATA: An alert whose content is "Insufficient data" is triggered.
     *   OK: The status is considered normal.
     *
     * @example 3
     *
     * @var int
     */
    public $times;
    protected $_name = [
        'comparisonOperator' => 'ComparisonOperator',
        'statistics'         => 'Statistics',
        'threshold'          => 'Threshold',
        'times'              => 'Times',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->comparisonOperator) {
            $res['ComparisonOperator'] = $this->comparisonOperator;
        }
        if (null !== $this->statistics) {
            $res['Statistics'] = $this->statistics;
        }
        if (null !== $this->threshold) {
            $res['Threshold'] = $this->threshold;
        }
        if (null !== $this->times) {
            $res['Times'] = $this->times;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return warn
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ComparisonOperator'])) {
            $model->comparisonOperator = $map['ComparisonOperator'];
        }
        if (isset($map['Statistics'])) {
            $model->statistics = $map['Statistics'];
        }
        if (isset($map['Threshold'])) {
            $model->threshold = $map['Threshold'];
        }
        if (isset($map['Times'])) {
            $model->times = $map['Times'];
        }

        return $model;
    }
}
