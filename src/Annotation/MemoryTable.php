<?php

declare(strict_types=1);

namespace Imi\Model\Annotation;

use Imi\Bean\Annotation\Base;

/**
 * 内存表注解.
 */
#[\Attribute(\Attribute::TARGET_CLASS)]
class MemoryTable extends Base
{
    public function __construct(
        /**
         * 表名.
         */
        public string $name = '',
        /**
         * 指定表格的最大行数，如果$size不是为2的N次方，如1024、8192,65536等，底层会自动调整为接近的一个数字，如果小于1024则默认成1024，即1024是最小值
         */
        public int $size = 1024,
        /**
         * 冲突比例；table占用的内存总数为 (结构体长度 + KEY长度64字节 + 行尺寸$size) * (1.2预留20%作为hash冲突) * (列尺寸)，如果机器内存不足table会创建失败.
         */
        public float $conflictProportion = 0.2
    ) {
    }
}
