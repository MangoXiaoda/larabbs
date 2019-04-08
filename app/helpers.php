<?php

/* 根据 webpack.mix.js 的逻辑来生成 CSS 文件链接 */
// 将当前请求的路由名称转换为 CSS 类名称
function route_class()
{
    return str_replace('.', '-', Route::currentRouteName());
}
