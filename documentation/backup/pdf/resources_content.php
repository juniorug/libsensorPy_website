        
    <?             			
    if($urlSite[1]==''){
       $urlSite[1]='home';
      } 
    ?>
    <? $dados = $mysql->dados('SELECT * FROM tbresources_content WHERE urlSite="'.(string)$urlSite[1].'" LIMIT 1'); ?>
         <?  //print_r($dados); ?>   
         <?  //print_r($urlSite[1]); ?>                             
       <? if(!empty($dados['Content'])){ 
         echo $dados['Content'] ;
         }else{
        ?>
        <? if(!empty($dados['urlGoogle'])){?>
                    <div style="width:640px; overflow:hidden; float:right; margin-bottom:30px;">
                     <iframe src="<?=$dados['urlGoogle'] ?>" style="overflow:hidden;" width="657px" height="815px"></iframe>
                    </div>
        <? }else{                    
      include("pages/404.php");
     }}?>  