<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\SDK\Cms\V20190101\Models\PutEventRuleTargetsResponseBody\failedContactParameters;
use AlibabaCloud\SDK\Cms\V20190101\Models\PutEventRuleTargetsResponseBody\failedFcParameters;
use AlibabaCloud\SDK\Cms\V20190101\Models\PutEventRuleTargetsResponseBody\failedMnsParameters;
use AlibabaCloud\Tea\Model;

class PutEventRuleTargetsResponseBody extends Model
{
    /**
     * @description The name of the API operation.
     *
     * @example 200
     *
     * @var string
     */
    public $code;

    /**
     * @description The name of the queue. Valid values of N: 1 to 5.
     *
     * @var failedContactParameters
     */
    public $failedContactParameters;

    /**
     * @var failedFcParameters
     */
    public $failedFcParameters;

    /**
     * @var failedMnsParameters
     */
    public $failedMnsParameters;

    /**
     * @description The name of the Function Compute service. Valid values of N: 1 to 5.
     *
     * @example 2
     *
     * @var string
     */
    public $failedParameterCount;

    /**
     * @description The ID of the recipient that receives alert notifications. Valid values of N: 1 to 5.
     *
     * @example The Request is not authorization.
     *
     * @var string
     */
    public $message;

    /**
     * @description The alert notification methods. Valid values:
     *
     * 4: Alert notifications are sent by using DingTalk chatbots and emails.
     * @example 409C64DA-CF14-45DF-B463-471C790DD15A
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The name of the role.
     *
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'code'                    => 'Code',
        'failedContactParameters' => 'FailedContactParameters',
        'failedFcParameters'      => 'FailedFcParameters',
        'failedMnsParameters'     => 'FailedMnsParameters',
        'failedParameterCount'    => 'FailedParameterCount',
        'message'                 => 'Message',
        'requestId'               => 'RequestId',
        'success'                 => 'Success',
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
        if (null !== $this->failedContactParameters) {
            $res['FailedContactParameters'] = null !== $this->failedContactParameters ? $this->failedContactParameters->toMap() : null;
        }
        if (null !== $this->failedFcParameters) {
            $res['FailedFcParameters'] = null !== $this->failedFcParameters ? $this->failedFcParameters->toMap() : null;
        }
        if (null !== $this->failedMnsParameters) {
            $res['FailedMnsParameters'] = null !== $this->failedMnsParameters ? $this->failedMnsParameters->toMap() : null;
        }
        if (null !== $this->failedParameterCount) {
            $res['FailedParameterCount'] = $this->failedParameterCount;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PutEventRuleTargetsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['FailedContactParameters'])) {
            $model->failedContactParameters = failedContactParameters::fromMap($map['FailedContactParameters']);
        }
        if (isset($map['FailedFcParameters'])) {
            $model->failedFcParameters = failedFcParameters::fromMap($map['FailedFcParameters']);
        }
        if (isset($map['FailedMnsParameters'])) {
            $model->failedMnsParameters = failedMnsParameters::fromMap($map['FailedMnsParameters']);
        }
        if (isset($map['FailedParameterCount'])) {
            $model->failedParameterCount = $map['FailedParameterCount'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
