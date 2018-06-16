<?php ?>
<script>
    function rm_handle_new_form_creation(event) {
        //alert(1);
        var f_name = jQuery('#form_name').val().toString().trim();
        if (f_name === "" || !f_name) {
           jQuery('.rm-create-new-from').animate({
        scrollTop: 0}, 400, 'swing', function(){
            jQuery('#form_name').fadeIn(100).fadeOut(1000, function () {
                jQuery('#form_name').css("border", "");
                jQuery('#form_name').fadeIn(100);
                jQuery('#form_name').val('');
            });
            jQuery('#form_name').css("border", "1px solid #FF6C6C");
        });            
            event.preventDefault();
        }
    }
    
    function rm_on_form_type_selected(ele) {
        var $form_type_sel = jQuery(ele);
        $form_type_sel.addClass("rm-form-type-selected");
        if($form_type_sel.attr('id') === 'rm_reg_form_selector') {
            jQuery("#form_type").val('rm_reg_form');            
            jQuery("#rm_contact_form_selector").removeClass("rm-form-type-selected");
        } else {
            jQuery("#form_type").val('rm_contact_form');
            jQuery("#rm_reg_form_selector").removeClass("rm-form-type-selected");
        }
    }
    
</script>

<form action="" id="rm_form_add_new_form" method="post" class="form-horizontal">

    <input type="hidden" name="rm_slug" value="rm_form_add_new_form" id="rm_form_add_new_form-element-1"/>
    <input type="hidden" name="form_type" value="rm_reg_form" id="form_type"/>

    <div class="rm-create-new-from">

        <div class="rmrow">

            <div class="rm-form-name rm-dbfl">

                <span class="rm-form-step rm-difl">1</span><div class="rm-form-head rm-difl">Name of your form<span class="rm-form-sub-head rm-dbfl">Two forms cannot have same name. Please make it unique.</span></div> 
                <div class="rm-form-name-input rm-dbfl"><input type="text" value="" name="form_name" id="form_name" /></div>


            </div>

        </div>  

        <div class="rmrow">

            <div class="rm-select-form-type">

                <span class="rm-form-step">2</span><div class="rm-form-head">Select a form type</div> 
                <div class="rm-form-type-sep">  <img alt="" src="<?php echo plugin_dir_url(dirname(dirname(__FILE__))) . 'images/rm-new-form-sep.png'; ?>"></div>


            </div>

        </div>  


        <div class="rmrow">

            <div class="rm-select-form-type">

                <div id="rm_reg_form_selector" class="rm-form-type rm-form-type-selected" onclick="rm_on_form_type_selected(this)">
                

                    <div class="rm-form-type-head"><span ></span><b>Creates</b> Wordpress user account
                        on submission.</div>
                    <div class="rm-form-type-info">Your form will have <b>Username</b>,
                        <b>Password</b> and <b>Email</b> fields
                        included automatically on publishing.
                        You can add and setup other fields
                        manually in next step.</div>


                </div>
                
                <div id="rm_contact_form_selector" class="rm-form-type" onclick="rm_on_form_type_selected(this)">

                    <div class="rm-form-type-head"><span ></span>
                        <b>Does not create</b> Wordpress user account on submission</div>
                    <div class="rm-form-type-info">Your form will have <b>Email</b> field added automatically. You can add and setup other fields manually in next step. Ideal for offline registrations and contact forms.  </div>
                </div>
                        
            </div>
        </div> 
        
    <div class="rm-create-new-from-btn-area">    
        <input type="submit" value="Proceed to fields manager" name="submit" id="rm_submit_btn" onclick="rm_handle_new_form_creation(event)" class="rm_btn btn btn-primary">
    </div>
        
    </div>


</form>
