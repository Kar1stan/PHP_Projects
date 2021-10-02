<?php
   function view($fileName,$data=[]){
     $output='';
     ob_start();
     extract($data);
     include __DIR__ ."/view/{$fileName}.php";
     $output=ob_get_contents();
     ob_clean();
     return $output;
   }
   function renderView($fileName,$data=[]){
   	 echo view($fileName,$data);
   }
   function old($name){
         return $_REQUEST[$name] ?? null;
   }
   function redirect($to){
    header("Location:{$to}");
   }
   function setSuccessMessage($message){
      $_SESSION['success_message']=$message;
   }
   function getSuccessMessage(){
     $output=$_SESSION['success_message'];
     unset($_SESSION['success_message']);
     return $output;
  }
  function hasSuccessMessage(){
   return ($_SESSION['success_message'] ?? null);
  }
  function multipleArray(){
    return[
      ['name'=>'Potato','Parent_Id'=>'Vegetables',"Id"=>"1"],
      ['name'=>'Milk','Parent_Id'=>'Dairy products',"Id"=>"1"],
      ['name'=>'Codfish','Parent_Id'=>'Fish',"Id"=>"1"],
      ['name'=>'Honey','Parent_Id'=>'Fats',"Id"=>"1"],
      ['name'=>'Pork steak','Parent_Id'=>'Meat',"Id"=>"1"],
  ];
}
  function saveCategory($category)
  {
    $categories=getCategory();
    if(is_array($categories)){
      array_push($categories,$category)
    }else{
       $categories[]=$category;
    }
    $fileName=__DIR__ . '/categories.txt';
    if(file_exists($fileName)){
      unlink($fileName);
    }
    file_put_contents($fileName,json_encode($categories));
  }
  function getCategory(){
     return json_decode(file_get_contents(__DIR__ . '/category.txt'),true);
  }
?>