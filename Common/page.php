<?php
/**
 * Created by PhpStorm.
 * User: zhanglei
 * Date: 2016/12/7
 * Time: 0:25
 */

/**
 * 分页
 * @param $total
 * @param $current
 */
    function page($total, $current, $size = 16){
        $html = "<a>$total 条记录</a>";
        if ($total < $size){
            return $html."<a>1</a>";
        }

        if ($total / $size < 5){
            for ($i = 1; $i < ceil($total / $size); $i++ ){
                return $html.="<a>$i</a>";
            }
        }
    }