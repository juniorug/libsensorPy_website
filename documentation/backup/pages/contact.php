			<?
                $_SERVER ['REQUEST_URI'] = str_replace("&ok=0","",$_SERVER ['REQUEST_URI']);
                $_SERVER ['REQUEST_URI'] = str_replace("&ok=1","",$_SERVER ['REQUEST_URI']);
                
                
            ?> 
            <script language="javascript">
                function validaFormulario(f) {
                    var erro='';
                    if (f.nome.value.length < 4) erro += '- Name\n';
                    if (!(ValidaEmail(f.email.value))) erro += '- Email\n';
                    if (f.mensagem.value.length < 4) erro += '- Mensage\n';
            
                    if (erro.length > 0) {
                        alert('Please, check the following fields\n\n'+erro);
                        return false;
                    } else return true;
                }
            </script>
                          
                
 				
                <div class="side_box_right_big" style="margin-top:10px;">
                    <!--side-box-->  
                    <div class="side_box_top_blue"></div>
                    <div class="side_box_body_blue">
                        <form id="formContato" name="formContato" method="post" action="/app/contact.php" onsubmit="return validaFormulario(this);">
                            <div class="column_left">
                                <p><strong>E-mail Updates:</strong><br/>
                                <span style="font-size:11px;">(Please sign up for all that you want)</span>
                                <br/>
                                <input type="checkbox" name="list1" value="1"/><label class="label_check">Support Group (Oakland)</label><br/>
                                <input type="checkbox" name="list2" value="1"/><label class="label_check">General Inquiries</label><br/>
                                <input type="checkbox" name="list3" value="1"/><label class="label_check">New Articles</label><br/>
                                <input type="checkbox" name="list4" value="1"/><label class="label_check">Events Calendar</label>
                            </div>
                            <div class="column_right">
                            	<p style="font-weight:700">Contact Us</p>
  
                                <label>Name</label><br/><input type="text"  name="name"/><br/>
                                <label>E-mail</label><br/><input type="text" name="e-mail"/><br/>
                                <label>Subject</label><br/><input type="text" name="subject"/><br/>
     
                            </div>
                            <div class="clear"></div>
                            <label>Message</label><br/>
                            <textarea class="contact_ta" style="height:185px;" name="message"></textarea><br/><br/> 
                            <!--<input style="float:right;margin:-10px 13px 0 0;" type="submit" value="Send Message" />-->
                            <input type="image" src="../img/bt-send.gif" name="enviar" style="width:80px; height:30px; border:0px;" />
                        </form>                        
                    </div>
                    <div class="side_box_bottom_blue"></div>            	
                </div>                  
                
                <p style="height:190px;"><span style="font-weight:700;"><br/>Children's Hospital & Research Center Oakland<br/>
                Sickle Cell Center</span><br/><br/>
                747 52nd St. Oakland, CA 94609<br/>
                Office: (510) 428-3885<br/>
                Fax: (510) 597-7166<br/>
                <a href="mailto:info@mail.cho.org">info@mail.cho.org</a><br/>
                </p>

                <img style="float:right; margin:0px 0 0 0;" src="/img/contact_img.png"/>
                <div class="clear"></div>
                                                            
                <div class="vertical_rule_425"></div>
                
                <iframe style="margin-left:-19px;" width="880" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?hl=en&amp;q=747+52nd+Street+Oakland,+CA+94609&amp;ie=UTF8&amp;hq=&amp;hnear=747+52nd+St,+Oakland,+California+94609&amp;gl=us&amp;t=h&amp;ll=37.837701,-122.267001&amp;spn=0.002097,0.004662&amp;z=18&amp;output=embed"></iframe>
                
              