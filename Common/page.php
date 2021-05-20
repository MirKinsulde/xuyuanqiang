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
        
        $showPage = 5;
        
        $totalPage = ceil($total / $size);
        
        $center = ceil($showPage / 2);
        
        $html = "<a>$total 条记录</a>";

        $html .= "<a href='?page=1'>首页</a>";

        $last = "<a href='?page=$totalPage'>尾页</a>";

        if ($total < $size){
            return $html."<a>1</a>";
        }


        if ($current > 1){
            $prevPage = $current - 1;
            $html .= "<a href='?page=$prevPage'>上一页</a>";
        }

        if ($totalPage <= $showPage){
            for ($i = 1; $i <= $totalPage; $i++ ){
                if ($i == $current){
                    $html .= "<span class='current'>$i</span>";
                }else{
                    $html .= "<a href='?page=$i'>$i</a>";
                }
            }
            
            if ($current < $totalPage){
                $nextPage = $current + 1;
                $html .= "<a href='?page=$nextPage'>下一页</a>";
            }

            $html .= $last;

            return $html;
        }
        
        if ($current <= $center){
            for ($i = 1; $i <= $showPage; $i++ ){
                if ($i == $current){
                    $html .= "<span class='current'>$i</span>";
                }else{
                    $html .= "<a href='?page=$i'>$i</a>";
                }
            }

            if ($current < $totalPage){
                $nextPage = $current + 1;
                $html .= "<a href='?page=$nextPage'>下一页</a>";
            }

            $html .= $last;

            return $html;
        }
        
        if ($current > $totalPage - $center){
            for ($i = $totalPage - $showPage + 1; $i <= $totalPage; $i++ ){
                if ($i == $current){
                    $html .= "<span class='current'>$i</span>";
                }else{
                    $html .= "<a href='?page=$i'>$i</a>";
                }
            }

            if ($current < $totalPage){
                $nextPage = $current + 1;
                $html .= "<a href='?page=$nextPage'>下一页</a>";
            }

            $html .= $last;

            return $html;
        }
        
        for($i = $current - $center + 1; $i <= $current + $center - 1; $i++){
            if ($i == $current){
                $html .= "<span class='current'>$i</span>";
            }else{
                $html .= "<a href='?page=$i'>$i</a>";
            }
        }

        $nextPage = $current + 1;
        $html .= "<a href='?page=$nextPage'>下一页</a>";

        $html .= $last;

        return $html;
        
    }