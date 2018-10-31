<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: site/api_group_update.proto

namespace Zaly\Proto\Site;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>site.ApiGroupUpdateValue</code>
 */
class ApiGroupUpdateValue extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.site.ApiGroupUpdateType type = 1;</code>
     */
    private $type = 0;
    /**
     * Generated from protobuf field <code>.core.DataWriteType writeType = 2;</code>
     */
    private $writeType = 0;
    /**
     * work with: writeType
     * oneof doesnot support repeated.
     *
     * Generated from protobuf field <code>repeated string adminUserIds = 7;</code>
     */
    private $adminUserIds;
    /**
     * Generated from protobuf field <code>repeated string speakerUserIds = 8;</code>
     */
    private $speakerUserIds;
    protected $fields;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $type
     *     @type int $writeType
     *     @type string $name
     *     @type int $permissionJoin
     *     @type bool $canGuestReadMessage
     *     @type \Zaly\Proto\Core\GroupDescription $description
     *     @type bool $isMute
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $adminUserIds
     *           work with: writeType
     *           oneof doesnot support repeated.
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $speakerUserIds
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Site\ApiGroupUpdate::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.site.ApiGroupUpdateType type = 1;</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Generated from protobuf field <code>.site.ApiGroupUpdateType type = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Zaly\Proto\Site\ApiGroupUpdateType::class);
        $this->type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.core.DataWriteType writeType = 2;</code>
     * @return int
     */
    public function getWriteType()
    {
        return $this->writeType;
    }

    /**
     * Generated from protobuf field <code>.core.DataWriteType writeType = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setWriteType($var)
    {
        GPBUtil::checkEnum($var, \Zaly\Proto\Core\DataWriteType::class);
        $this->writeType = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string name = 3;</code>
     * @return string
     */
    public function getName()
    {
        return $this->readOneof(3);
    }

    /**
     * Generated from protobuf field <code>string name = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.core.GroupJoinPermissionType permissionJoin = 4;</code>
     * @return int
     */
    public function getPermissionJoin()
    {
        return $this->readOneof(4);
    }

    /**
     * Generated from protobuf field <code>.core.GroupJoinPermissionType permissionJoin = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setPermissionJoin($var)
    {
        GPBUtil::checkEnum($var, \Zaly\Proto\Core\GroupJoinPermissionType::class);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool canGuestReadMessage = 5;</code>
     * @return bool
     */
    public function getCanGuestReadMessage()
    {
        return $this->readOneof(5);
    }

    /**
     * Generated from protobuf field <code>bool canGuestReadMessage = 5;</code>
     * @param bool $var
     * @return $this
     */
    public function setCanGuestReadMessage($var)
    {
        GPBUtil::checkBool($var);
        $this->writeOneof(5, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.core.GroupDescription description = 6;</code>
     * @return \Zaly\Proto\Core\GroupDescription
     */
    public function getDescription()
    {
        return $this->readOneof(6);
    }

    /**
     * Generated from protobuf field <code>.core.GroupDescription description = 6;</code>
     * @param \Zaly\Proto\Core\GroupDescription $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkMessage($var, \Zaly\Proto\Core\GroupDescription::class);
        $this->writeOneof(6, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool isMute = 9;</code>
     * @return bool
     */
    public function getIsMute()
    {
        return $this->readOneof(9);
    }

    /**
     * Generated from protobuf field <code>bool isMute = 9;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsMute($var)
    {
        GPBUtil::checkBool($var);
        $this->writeOneof(9, $var);

        return $this;
    }

    /**
     * work with: writeType
     * oneof doesnot support repeated.
     *
     * Generated from protobuf field <code>repeated string adminUserIds = 7;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAdminUserIds()
    {
        return $this->adminUserIds;
    }

    /**
     * work with: writeType
     * oneof doesnot support repeated.
     *
     * Generated from protobuf field <code>repeated string adminUserIds = 7;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAdminUserIds($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->adminUserIds = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated string speakerUserIds = 8;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSpeakerUserIds()
    {
        return $this->speakerUserIds;
    }

    /**
     * Generated from protobuf field <code>repeated string speakerUserIds = 8;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSpeakerUserIds($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->speakerUserIds = $arr;

        return $this;
    }

    /**
     * @return string
     */
    public function getFields()
    {
        return $this->whichOneof("fields");
    }

}

