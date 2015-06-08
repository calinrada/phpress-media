<?php

namespace Phpress\Models\Mysql;

use Phalcon\Mvc\Model\Behavior\Timestampable;

class Media extends \Phalcon\Mvc\Model
{
    const MEDIA_TYPE_IMAGE = 0;

    const MEDIA_TYPE_VIDEO = 1;

    const MEDIA_TYPE_AUDIO = 2;

    /**
     * @var int
     */
    protected $id;

    /**
     * @var string
     */
    protected $media_name;

    /**
     * @var string
     */
    protected $media_location;

    /**
     * @var string
     */
    protected $media_title;

    /**
     * @var string
     */
    protected $media_description;

    /**
     * @var string
     */
    protected $media_embed;

    /**
     * @var int
     */
    protected $media_type;

    /**
     * @var string
     */
    protected $media_created_at;

    /**
     * @var string
     */
    protected $media_updated_at;

    /**
     * Method to set the value of field id.
     *
     * @param int $id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Method to set the value of field media_name.
     *
     * @param string $media_name
     *
     * @return $this
     */
    public function setMediaName($media_name)
    {
        $this->media_name = $media_name;

        return $this;
    }

    /**
     * Method to set the value of field media_location.
     *
     * @param string $media_location
     *
     * @return $this
     */
    public function setMediaLocation($media_location)
    {
        $this->media_location = $media_location;

        return $this;
    }

    /**
     * Method to set the value of field media_title.
     *
     * @param string $media_title
     *
     * @return $this
     */
    public function setMediaTitle($media_title)
    {
        $this->media_title = $media_title;

        return $this;
    }

    /**
     * Method to set the value of field media_description.
     *
     * @param string $media_description
     *
     * @return $this
     */
    public function setMediaDescription($media_description)
    {
        $this->media_description = $media_description;

        return $this;
    }

    /**
     * Method to set the value of field media_embed.
     *
     * @param string $media_embed
     *
     * @return $this
     */
    public function setMediaEmbed($media_embed)
    {
        $this->media_embed = $media_embed;

        return $this;
    }

    /**
     * Method to set the value of field media_type.
     *
     * @param int $media_type
     *
     * @return $this
     */
    public function setMediaType($media_type)
    {
        $this->media_type = $media_type;

        return $this;
    }

    /**
     * Method to set the value of field media_created_at.
     *
     * @param string $media_created_at
     *
     * @return $this
     */
    public function setMediaCreatedAt($media_created_at)
    {
        $this->media_created_at = $media_created_at;

        return $this;
    }

    /**
     * Method to set the value of field media_updated_at.
     *
     * @param string $media_updated_at
     *
     * @return $this
     */
    public function setMediaUpdatedAt($media_updated_at)
    {
        $this->media_updated_at = $media_updated_at;

        return $this;
    }

    /**
     * Returns the value of field id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Returns the value of field media_name.
     *
     * @return string
     */
    public function getMediaName()
    {
        return $this->media_name;
    }

    /**
     * Returns the value of field media_location.
     *
     * @return string
     */
    public function getMediaLocation()
    {
        return $this->media_location;
    }

    /**
     * Returns the value of field media_title.
     *
     * @return string
     */
    public function getMediaTitle()
    {
        return $this->media_title;
    }

    /**
     * Returns the value of field media_description.
     *
     * @return string
     */
    public function getMediaDescription()
    {
        return $this->media_description;
    }

    /**
     * Returns the value of field media_embed.
     *
     * @return string
     */
    public function getMediaEmbed()
    {
        return $this->media_embed;
    }

    /**
     * Returns the value of field media_type.
     *
     * @return int
     */
    public function getMediaType()
    {
        return $this->media_type;
    }

    /**
     * Returns the value of field media_created_at.
     *
     * @return string
     */
    public function getMediaCreatedAt()
    {
        return $this->media_created_at;
    }

    /**
     * Returns the value of field media_updated_at.
     *
     * @return string
     */
    public function getMediaUpdatedAt()
    {
        return $this->media_updated_at;
    }

    public function getSource()
    {
        return 'media';
    }

    public function initialize()
    {
        $this->addBehavior(new Timestampable(array(
            'beforeValidationOnCreate' => array(
                'field' => 'media_created_at',
                'format' => 'Y-m-d H:i:s',
            ),
            'beforeValidationOnUpdate' => array(
                'field' => 'media_updated_at',
                'format' => 'Y-m-d H:i:s',
            ),
        )));
    }

    /**
     * Independent Column Mapping.
     */
    public function columnMap()
    {
        return array(
            'id' => 'id',
            'media_name' => 'media_name',
            'media_location' => 'media_location',
            'media_title' => 'media_title',
            'media_description' => 'media_description',
            'media_embed' => 'media_embed',
            'media_type' => 'media_type',
            'media_created_at' => 'media_created_at',
            'media_updated_at' => 'media_updated_at',
        );
    }
}
