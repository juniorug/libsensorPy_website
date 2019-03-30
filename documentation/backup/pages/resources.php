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
			$('#menudpto<?=$ativo;?> .cont_pack_content').show;
		 });
</script> 
<div id="resource">
    <div class="side_box_left" style="padding-top:14px;">
   
    
		<?
            $consult_departments = $mysql->consulta("SELECT * FROM tbresources_department ORDER BY position ASC");
            while($department = $mysql->lista($consult_departments)){{ 
        ?>
            <!--side-box-->
            <div class="side_box_top_<?=$department['color'];?>"></div>
            <div class="side_box_body_<?=$department['color'];?> cont_pack">
                <h3 style="cursor:pointer;"><?=$department['department'];?></h3>           
                <ul class="cont_pack_content">   		            
                   <?
                        $consulta1 = $mysql->consulta("SELECT * FROM tbresources_content WHERE id_department=".$department['id_department']." AND id_parent=0 AND Display=1 ORDER BY Position ASC");
                        while($category = $mysql->lista($consulta1)){$i++;
               				 if ($i==1) $ativo = $departament['id_departament'];
                    ?>  
                    <div id="menudpto<?=$departament['id_departament'];?>">            
                        <li><a href="/resources/<?=$category['urlSite'];?>"><?=$category['MenuTitle'];?></a>
                            
                            <ul>
                                <?
                                $consulta2 = $mysql->consulta("SELECT * FROM tbresources_content WHERE id_department=".$department['id_department']." AND id_parent=".$category['id_tbresources_content']." AND Display=1 ORDER BY Position ASC");
                                 while($subcategory = $mysql->lista($consulta2)){
                                ?>
                                <li style="padding-left:6px;"><a href="/resources/<?=$subcategory['urlSite'];?>"><?=$subcategory['MenuTitle'];?></a></li>
                                <? } ?>
                            </ul>                                            
                        </li>
                    </div>
                    <? } }?>
                </ul>    
            </div>
            <div class="side_box_bottom_<?=$department['color'];?>"></div>                                	             
            <!--side-box-end--> 
        <? } ?>                 
                    	
        </div>  
        <? include ('./pages/resources_content.php'); ?>                          
</div>    



           