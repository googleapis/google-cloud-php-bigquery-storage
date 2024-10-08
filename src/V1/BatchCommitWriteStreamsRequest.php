<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/bigquery/storage/v1/storage.proto

namespace Google\Cloud\BigQuery\Storage\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for `BatchCommitWriteStreams`.
 *
 * Generated from protobuf message <code>google.cloud.bigquery.storage.v1.BatchCommitWriteStreamsRequest</code>
 */
class BatchCommitWriteStreamsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Parent table that all the streams should belong to, in the form
     * of `projects/{project}/datasets/{dataset}/tables/{table}`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Required. The group of streams that will be committed atomically.
     *
     * Generated from protobuf field <code>repeated string write_streams = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $write_streams;

    /**
     * @param string $parent Required. Parent table that all the streams should belong to, in the form
     *                       of `projects/{project}/datasets/{dataset}/tables/{table}`. Please see
     *                       {@see BigQueryWriteClient::tableName()} for help formatting this field.
     *
     * @return \Google\Cloud\BigQuery\Storage\V1\BatchCommitWriteStreamsRequest
     *
     * @experimental
     */
    public static function build(string $parent): self
    {
        return (new self())
            ->setParent($parent);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. Parent table that all the streams should belong to, in the form
     *           of `projects/{project}/datasets/{dataset}/tables/{table}`.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $write_streams
     *           Required. The group of streams that will be committed atomically.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Bigquery\Storage\V1\Storage::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Parent table that all the streams should belong to, in the form
     * of `projects/{project}/datasets/{dataset}/tables/{table}`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. Parent table that all the streams should belong to, in the form
     * of `projects/{project}/datasets/{dataset}/tables/{table}`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * Required. The group of streams that will be committed atomically.
     *
     * Generated from protobuf field <code>repeated string write_streams = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getWriteStreams()
    {
        return $this->write_streams;
    }

    /**
     * Required. The group of streams that will be committed atomically.
     *
     * Generated from protobuf field <code>repeated string write_streams = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setWriteStreams($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->write_streams = $arr;

        return $this;
    }

}

