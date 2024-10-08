<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/bigquery/storage/v1/stream.proto

namespace Google\Cloud\BigQuery\Storage\V1\ReadSession;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Additional attributes when reading a table.
 *
 * Generated from protobuf message <code>google.cloud.bigquery.storage.v1.ReadSession.TableModifiers</code>
 */
class TableModifiers extends \Google\Protobuf\Internal\Message
{
    /**
     * The snapshot time of the table. If not set, interpreted as now.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp snapshot_time = 1;</code>
     */
    protected $snapshot_time = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\Timestamp $snapshot_time
     *           The snapshot time of the table. If not set, interpreted as now.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Bigquery\Storage\V1\Stream::initOnce();
        parent::__construct($data);
    }

    /**
     * The snapshot time of the table. If not set, interpreted as now.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp snapshot_time = 1;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getSnapshotTime()
    {
        return $this->snapshot_time;
    }

    public function hasSnapshotTime()
    {
        return isset($this->snapshot_time);
    }

    public function clearSnapshotTime()
    {
        unset($this->snapshot_time);
    }

    /**
     * The snapshot time of the table. If not set, interpreted as now.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp snapshot_time = 1;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setSnapshotTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->snapshot_time = $var;

        return $this;
    }

}


