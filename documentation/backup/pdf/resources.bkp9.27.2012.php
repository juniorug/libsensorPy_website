<div id="resource">
    <div class="side_box_left">
		<?
            $consult_departments = $mysql->consulta("SELECT * FROM tbresources_department ORDER BY position ASC");
            while($department = $mysql->lista($consult_departments)){
        ?>
            <!--side-box-->
            <div class="side_box_top_<?=$department['color'];?>"></div>
            <div class="side_box_body_<?=$department['color'];?>">
                <h3><?=$department['department'];?></h3>           
                <ul>   		            
                    <?
                        $consulta1 = $mysql->consulta("SELECT * FROM tbresources_content WHERE id_department=".$department['id_department']." AND Display=1 ORDER BY Position ASC");
                        while($category = $mysql->lista($consulta1)){
                    ?>              
                    <li><a href="/resources/<?=$category['urlSite'];?>"><?=$category['MenuTitle'];?></a></li>
                    <? } ?>
                </ul>    
            </div>
            <div class="side_box_bottom_<?=$department['color'];?>"></div>                                	             
            <!--side-box-end--> 
        <? } ?>                             	
	</div>  
    
    
    
    
    
      
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
         }
        ?>
        <? if(!empty($dados['urlGoogle'])){?>
                    <div style="width:640px; float:right; margin-bottom:30px;">
                     <iframe src="<?=$dados['urlGoogle'] ?>" width="640" height="850"></iframe>
                    </div>
        <? }else{                    
      include("pages/404.php");
     }?>                              
</div>    



           