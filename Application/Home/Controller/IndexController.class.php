<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    //登陆页面
    public function index(){
       $this->display();
    }
    //管理页面
    public function home(){
       $this->display();
    }
    //显示数据库里的数据
    public function disp(){
        $info = M('information');
        $data = $info->select();
        $this->ajaxReturn($data);
    }
    //持续查询数据
    public function ddisp(){
        $info = M('information');
        $data = $info->where('')->select();
    }

    //查询历史记录
    public function history(){
        $this->display();
    }

    //测试页面
    public function  data(){
        $this->display();
    }
    public function map($mp){
         $str = $mp;//页面传递的经度
         //以“，”来分割字符串
         $s = explode(",",$str);
         //为经纬度赋值
         $this->assign("longitude",$s[0]);
         $this->assign("latitude",$s[1]);
        $this->display();
    }
}
