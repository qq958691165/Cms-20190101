<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\ModifyHostAvailabilityRequest;

use AlibabaCloud\Tea\Model;

class alertConfig extends Model
{
    /**
     * @var int
     */
    public $notifyType;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var int
     */
    public $silenceTime;

    /**
     * @var string
     */
    public $webHook;
    protected $_name = [
        'notifyType'  => 'NotifyType',
        'startTime'   => 'StartTime',
        'endTime'     => 'EndTime',
        'silenceTime' => 'SilenceTime',
        'webHook'     => 'WebHook',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->notifyType) {
            $res['NotifyType'] = $this->notifyType;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->silenceTime) {
            $res['SilenceTime'] = $this->silenceTime;
        }
        if (null !== $this->webHook) {
            $res['WebHook'] = $this->webHook;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return alertConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NotifyType'])) {
            $model->notifyType = $map['NotifyType'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['SilenceTime'])) {
            $model->silenceTime = $map['SilenceTime'];
        }
        if (isset($map['WebHook'])) {
            $model->webHook = $map['WebHook'];
        }

        return $model;
    }
}