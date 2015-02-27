<?php

namespace yii2mod\settings\models\enumerables;

use yii2mod\enum\helpers\BaseEnum;

/**
 * Class SettingStatus
 * @package yii2mod\settings\models\enumerables
 */
class SettingStatus extends BaseEnum
{
    const ACTIVE = 1;
    const INACTIVE = 0;

    public static $list = [
        self::ACTIVE => 'Active',
        self::INACTIVE => 'Inactive'
    ];
}