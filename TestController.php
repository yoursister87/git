<?php
class TestController extends Controller{
    public function actions()
    {
        return array(

            'captcha'=>array(
                'class'=>'CCaptchaAction',
                'backColor'=>0xFFFFFF,
                'minLength'=>4, 
                'maxLength'=>4, 
                'transparent'=>true, 

            ),

            'page'=>array(
                'class'=>'CViewAction',
            ),
        );
    }



    public function actionIndex(){
       // $this->onSubmit=array($this,"test1");  
       // $this->onSubmit=array($this,"test2");  
         $this->onSubmit(new CEvent($this,array("name"=>"params1","sex"=>"parmas2")));  
        
//        $this->render('pagination');
    }
    public function onSubmit($event){
        $this->raiseEvent("onSubmit", $event); 
    }
    public function test1(){
        echo '1111';
    }

    public function test2($param){
        var_dump($param->params);
        echo '222';
    }
    public function test3(){
        echo '3333';
    }
    public function actiontest4(){
        $pages=new CPagination('22');
        $pages->pageSize='10';
        $this->render('pagination',array('pages'=>$pages));
    }

}
