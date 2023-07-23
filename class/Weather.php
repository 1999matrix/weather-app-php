<?php
class ApiCall{
  
  protected function apiCall(string $url)
  {
    $curl = curl_init();
    curl_setopt($curl,CURLOPT_URL,$url);
    curl_setopt($curl,CURLOPT_RETURNTRANSFER,true);
    $data = curl_exec($curl);
    $apidata = json_decode($data);
    return $apidata;
  }
  
  }
//   b59d35bda22d0eaf6ad699b7e11c0114