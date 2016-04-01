<?php

namespace App\Model;
use App\Model\CommonModel;
class AdminModel extends CommonModel
{
    public $itemid;
    protected $table;
    const PRIMARY = 'itemid';
    function __construct(){
        $this->table = 'admin';
        echo $this->getInfo();
    }

}
