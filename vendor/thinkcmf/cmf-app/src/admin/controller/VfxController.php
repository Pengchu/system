<?php
// +----------------------------------------------------------------------
// | ThinkCMF [ WE CAN DO IT MORE SIMPLE ]
// +----------------------------------------------------------------------
// | Copyright (c) 2013-2019 http://www.thinkcmf.com All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: MHY
// +----------------------------------------------------------------------
namespace app\admin\controller;

use cmf\controller\AdminBaseController;

class VfxController extends AdminBaseController
{

    public function initialize()
    {
    }

    /**
     * 获得特效页面
     */
    public function init()
    {
        return $this->fetch("canvas");
    }

    /**
     * 获得特效页面
     */
    public function particle()
    {
        return $this->fetch();
    }
}
