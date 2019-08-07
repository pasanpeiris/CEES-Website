<?php

class ViewServices extends Services {
    
 

  public function ShowAllServices()
   { 
       $datas=$this->getAllServices();
       foreach($datas as $data){
        echo '<a href="#">'. $data['service_name']."</a>";   
       }
      
   }
}
?>