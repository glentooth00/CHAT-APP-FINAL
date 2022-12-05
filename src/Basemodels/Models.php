<?php 
namespace Myapp\Source\Basemodels;

use Myapp\Source\DB\Database;   

class Models extends Database{

    function test(){
        echo 'TEST FROM MODELS';
    }

}