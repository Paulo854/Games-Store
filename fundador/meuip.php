<?php

public function nt_RedirectLocation($location, $status, $external_url){
      $this->setLocation($location);
      $this->setStatus($status);
      $this->setExternalUrl($external_url);

      if(null !== $this->getLocation() &&  $this->getStatus() == false){
        //header('location:'.$this->getLocation(), true);
        echo $this->getLocation();
      }elseif(null !== $this->getLocation() && $this->getStatus() == true){
       
        foreach($this->getStatus() as $date => $value){
          
          if($date == 2 && $this->getStatus()['2'] == true && $_SERVER['REMOTE_ADDR'] == $this->getStatus()['1']){
            header('location: '.$this->getLocation().'/?'.$this->getStatus()['0'], true);
           }elseif($date == 1){
            echo 'Usuario com ip: ' .$value. ' tem permissão<br>';
            echo 'meu ip é: ' .$_SERVER['REMOTE_ADDR'];
           }
          
        }
      }
      elseif($this->getLocation() == false && null !==($this->getExternalUrl())){
        header('location:'.$this->getExternalUrl(), true);
      }
    }

?>