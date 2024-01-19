<?php

declare(strict_types=1);

namespace Imi\Model\Test\Model\Base;

use Imi\Model\Model;

/**
 * tb_article2 基类.
 *
 * 此文件是自动生成，请勿手动修改此文件！
 *
 * @property int|null    $id
 * @property int|null    $memberId
 * @property string|null $title
 * @property string|null $content
 * @property string|null $time
 */
#[
    \Imi\Model\Annotation\Entity(bean: false, incrUpdate: true),
    \Imi\Model\Annotation\Table(name: 'tb_article2', id: [
        'id',
    ]),
    \Imi\Model\Annotation\DDL(sql: 'CREATE TABLE `tb_article2` (   `id` int(10) unsigned NOT NULL AUTO_INCREMENT,   `member_id` int(10) unsigned NOT NULL DEFAULT \'0\',   `title` varchar(255) NOT NULL,   `content` mediumtext NOT NULL,   `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,   PRIMARY KEY (`id`) USING BTREE,   KEY `member_id` (`member_id`) ) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT')
]
abstract class Article2Base extends Model
{
    /**
     * {@inheritdoc}
     */
    public const PRIMARY_KEY = 'id';

    /**
     * {@inheritdoc}
     */
    public const PRIMARY_KEYS = ['id'];

    /**
     * id.
     */
    #[
        \Imi\Model\Annotation\Column(name: 'id', type: \Imi\Cli\ArgType::INT, length: 10, nullable: false, isPrimaryKey: true, primaryKeyIndex: 0, isAutoIncrement: true, unsigned: true)
    ]
    protected ?int $id = null;

    /**
     * 获取 id.
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * 赋值 id.
     *
     * @param int|null $id id
     *
     * @return static
     */
    public function setId(mixed $id): self
    {
        $this->id = null === $id ? null : (int) $id;

        return $this;
    }

    /**
     * member_id.
     */
    #[
        \Imi\Model\Annotation\Column(name: 'member_id', type: \Imi\Cli\ArgType::INT, length: 10, nullable: false, default: '0', unsigned: true)
    ]
    protected ?int $memberId = 0;

    /**
     * 获取 memberId.
     */
    public function getMemberId(): ?int
    {
        return $this->memberId;
    }

    /**
     * 赋值 memberId.
     *
     * @param int|null $memberId member_id
     *
     * @return static
     */
    public function setMemberId(mixed $memberId): self
    {
        $this->memberId = null === $memberId ? null : (int) $memberId;

        return $this;
    }

    /**
     * title.
     */
    #[
        \Imi\Model\Annotation\Column(name: 'title', type: 'varchar', length: 255, nullable: false)
    ]
    protected ?string $title = null;

    /**
     * 获取 title.
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * 赋值 title.
     *
     * @param string|null $title title
     *
     * @return static
     */
    public function setTitle(mixed $title): self
    {
        if (\is_string($title) && mb_strlen($title) > 255)
        {
            throw new \InvalidArgumentException('The maximum length of $title is 255');
        }
        $this->title = null === $title ? null : (string) $title;

        return $this;
    }

    /**
     * content.
     */
    #[
        \Imi\Model\Annotation\Column(name: 'content', type: 'mediumtext', length: 0, nullable: false)
    ]
    protected ?string $content = null;

    /**
     * 获取 content.
     */
    public function getContent(): ?string
    {
        return $this->content;
    }

    /**
     * 赋值 content.
     *
     * @param string|null $content content
     *
     * @return static
     */
    public function setContent(mixed $content): self
    {
        if (\is_string($content) && mb_strlen($content) > 16777215)
        {
            throw new \InvalidArgumentException('The maximum length of $content is 16777215');
        }
        $this->content = null === $content ? null : (string) $content;

        return $this;
    }

    /**
     * time.
     */
    #[
        \Imi\Model\Annotation\Column(name: 'time', type: 'timestamp', length: 0, nullable: false, default: 'CURRENT_TIMESTAMP')
    ]
    protected ?string $time = null;

    /**
     * 获取 time.
     */
    public function getTime(): ?string
    {
        return $this->time;
    }

    /**
     * 赋值 time.
     *
     * @param string|null $time time
     *
     * @return static
     */
    public function setTime(mixed $time): self
    {
        $this->time = null === $time ? null : (string) $time;

        return $this;
    }
}
