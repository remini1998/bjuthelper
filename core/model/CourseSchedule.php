<?php
/**
 * Created by PhpStorm.
 * User: remini
 * Date: 2019/2/25
 * Time: 7:08 PM
 */

defined('LOCK') or exit('Access Invalid!');

class CourseSchedule
{
    public $name;       //课程名称
    public $time;       //课程时间
    public $teacher;    //课程教师
    public $classroom;  //课程教室
}