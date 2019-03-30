<script type="text/javascript">
	  $(function() {
			$('.cont_pack h3').bind('click', function() {
				if ($(this).parent().hasClass('aberto')) {
					$(this).parent().find('.cont_pack_content').slideUp();
					$(this).parent().removeClass('aberto');
					return 0;
				}
				$(this).parent().find('.cont_pack_content').slideDown();
				$(this).parent().addClass('aberto');
			})
		 });
</script> 

<div id="resource">
    <div class="side_box_left" style="padding-top:14px;">
		<?
            $consult_departments = $mysql->consulta("SELECT * FROM tbresources_department ORDER BY position ASC");
            while($department = $mysql->lista($consult_departments)){
        ?>
            <!--side-box-->
            <div class="side_box_top_<?=$department['color'];?>"></div>
            <div class="side_box_body_<?=$department['color'];?> cont_pack">
                <h3 style="cursor:pointer;"><?=$department['department'];?></h3>           
                <ul class="cont_pack_content" style="display:<?=$department['display'];?>">   		            
                    <?
                        $consulta1 = $mysql->consulta("SELECT * FROM tbresources_content WHERE id_department=".$department['id_department']." AND id_parent=0 AND Display=1 ORDER BY Position ASC");
                        while($category = $mysql->lista($consulta1)){
                    ?>              
                    <li><a href="/resources/<?=$category['urlSite'];?>"><?=$category['MenuTitle'];?></a>
                    	<ul>
                        	<?
                        	$consulta2 = $mysql->consulta("SELECT * FROM tbresources_content WHERE id_department=".$department['id_department']." AND id_parent=".$category['id_tbresources_content']." AND Display=1 ORDER BY Position ASC");
							 while($subcategory = $mysql->lista($consulta2)){
							?>
                        	<li><a href="/resources/<?=$subcategory['urlSite'];?>"><?=$subcategory['SubMenuTitle'];?></a></li>
                            <? } ?>
                        </ul>                                            
                    </li>
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
         }else{
        ?>
        <? if(!empty($dados['urlGoogle'])){?>
                    <div style="width:640px; float:right; margin-bottom:30px;">
                     <iframe src="<?=$dados['urlGoogle'] ?>" width="640" height="850"></iframe>
                    </div>
        <? }else{                    
      include("pages/404.php");
     }}?>                              
</div>    



           