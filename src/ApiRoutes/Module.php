<?php

/**
 * @Author: Dan Marinescu
 * @Date:   2018-05-25 11:52:32
 * @Last Modified by:   Dan Marinescu
 * @Last Modified time: 2018-05-25 12:04:47
 */

namespace ApiRoutes;

class Module
{
    public function getConfig()
    {
        return include __DIR__ . '/../../config/module.config.php';
    }
}
