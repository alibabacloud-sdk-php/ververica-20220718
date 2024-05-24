<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models;

use AlibabaCloud\Tea\Model;

class Variable extends Model
{
    /**
     * @example This is a variable description
     *
     * @var string
     */
    public $description;

    /**
     * @description This parameter is required.
     *
     * @example Plain
     *
     * @var string
     */
    public $kind;

    /**
     * @description This parameter is required.
     *
     * @example variableName
     *
     * @var string
     */
    public $name;

    /**
     * @description This parameter is required.
     *
     * @example variableValue
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'description' => 'description',
        'kind'        => 'kind',
        'name'        => 'name',
        'value'       => 'value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->kind) {
            $res['kind'] = $this->kind;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->value) {
            $res['value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return Variable
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['kind'])) {
            $model->kind = $map['kind'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['value'])) {
            $model->value = $map['value'];
        }

        return $model;
    }
}
