<?php
// +----------------------------------------------------------------------
// | 零云 [ 简单 高效 卓越 ]
// +----------------------------------------------------------------------
// | Copyright (c) 2016 http://www.lingyun.net All rights reserved.
// +----------------------------------------------------------------------
// | Author: jry <598821125@qq.com>
// +----------------------------------------------------------------------
return array(
    // 路由配置
    'URL_ROUTER_ON'   => true,
    'URL_MAP_RULES'   => array(
    ),
    'URL_ROUTE_RULES' => array(
        ':uid\d' => 'index/home',
    ),
);
