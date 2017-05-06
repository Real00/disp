<<<<<<< HEAD
<?php
namespace Home\Controller;
use Think\Controller;
class TestController extends Controller{
    public function index(){
        $this->display();
    }
    public function map($mp){
        $s = explode(",",$mp);
        $this->assign("longitude",$s[0]);
        $this->assign("latitude",$s[1]);
        $this->display();
    }
}
=======
<?php
namespace Home\Controller;
use Think\Controller;
class TestController extends Controller{
    public function index(){
        $this->display();
    }
    public function map($mp){
        $s = explode(",",$mp);
        $this->assign("longitude",$s[0]);
        $this->assign("latitude",$s[1]);
        $this->display();
    }
}
>>>>>>> Real00/master
