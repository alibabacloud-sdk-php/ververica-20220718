<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models;

use AlibabaCloud\Tea\Model;

class UpdateUdfArtifactRequest extends Model
{
    /**
     * @description The details of the JAR file of the UDF.
     *
     * This parameter is required.
     * @var UdfArtifact
     */
    public $body;
    protected $_name = [
        'body' => 'body',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->body) {
            $res['body'] = null !== $this->body ? $this->body->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateUdfArtifactRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['body'])) {
            $model->body = UdfArtifact::fromMap($map['body']);
        }

        return $model;
    }
}
