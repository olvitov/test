<?php

/**
 * Created by PhpStorm.
 * User: olvit
 * Date: 05.05.2016
 * Time: 10:54
 */
class DB {
    public function __construct() {
        global $link;
    $link =   mysqli_connect('localhost', 'olvit', '34vit','test');
       // mysql_select_db('test');
    }
    public function query($sql, $class = 'stdClass') {
global $link;
    $res = mysqli_query($link, $sql);
        if (false === $res) {
            return false;
        }

        $ret = [];
        while ($row = mysqli_fetch_object($res, $class)) {
            $ret[] = $row;
        }
        return $ret;
    }
}