<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: plugin/duckchat_user_relation.proto

namespace Zaly\Proto\Plugin;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>plugin.DuckChatUserRelationResponse</code>
 */
class DuckChatUserRelationResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.core.FriendRelationType relationType = 1;</code>
     */
    private $relationType = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $relationType
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Plugin\DuckchatUserRelation::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.core.FriendRelationType relationType = 1;</code>
     * @return int
     */
    public function getRelationType()
    {
        return $this->relationType;
    }

    /**
     * Generated from protobuf field <code>.core.FriendRelationType relationType = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setRelationType($var)
    {
        GPBUtil::checkEnum($var, \Zaly\Proto\Core\FriendRelationType::class);
        $this->relationType = $var;

        return $this;
    }

}

