<?php

?>

   <div class="field-selector-pills">
                <div class="rm-field-tabs-row rm-dbfl">
                    <div class="rm-field-tab-cat"><?php echo RM_UI_Strings::get("LABEL_COMMON_FIELDS"); ?></div>
                <div id="rm_common_fields_tab">
                    <div title="<?php echo RM_UI_Strings::get("FIELD_HELP_TEXT_Textbox"); ?>" class="rm_button_like_links" onclick="add_new_field_to_page('Textbox')"><a href="javascript:void(0)"><?php echo RM_UI_Strings::get("FIELD_TYPE_TEXT"); ?></a></div>  
                    <div title="<?php echo RM_UI_Strings::get("FIELD_HELP_TEXT_Select"); ?>" class="rm_button_like_links" onclick="add_new_field_to_page('Select')"><a href="javascript:void(0)"><?php echo RM_UI_Strings::get("FIELD_TYPE_DROPDOWN"); ?></a></div>
                    <div title="<?php echo RM_UI_Strings::get("FIELD_HELP_TEXT_Radio"); ?>" class="rm_button_like_links" onclick="add_new_field_to_page('Radio')"><a href="javascript:void(0)"><?php echo RM_UI_Strings::get("FIELD_TYPE_RADIO"); ?></a></div>  
                    <div title="<?php echo RM_UI_Strings::get("FIELD_HELP_TEXT_Textarea"); ?>" class="rm_button_like_links" onclick="add_new_field_to_page('Textarea')"><a href="javascript:void(0)"><?php echo RM_UI_Strings::get("FIELD_TYPE_TEXTAREA"); ?></a></div>  
                    <div title="<?php echo RM_UI_Strings::get("FIELD_HELP_TEXT_Checkbox"); ?>" class="rm_button_like_links" onclick="add_new_field_to_page('Checkbox')"><a href="javascript:void(0)"><?php echo RM_UI_Strings::get("FIELD_TYPE_CHECKBOX"); ?></a></div>
                    <div title="<?php echo RM_UI_Strings::get("FIELD_HELP_TEXT_HTMLH"); ?>" class="rm_button_like_links" onclick="add_new_field_to_page('HTMLH')"><a href="javascript:void(0)"><?php echo RM_UI_Strings::get("FIELD_TYPE_HEADING"); ?></a></div>
                    <div title="<?php echo RM_UI_Strings::get("FIELD_HELP_TEXT_HTMLP"); ?>" class="rm_button_like_links" onclick="add_new_field_to_page('HTMLP')"><a href="javascript:void(0)"><?php echo RM_UI_Strings::get("FIELD_TYPE_PARAGRAPH"); ?></a></div>
                </div>
                </div> 
                <div class="rm-field-tabs-row rm-dbfl">
                    <div class="rm-field-tab-cat"><?php echo RM_UI_Strings::get("LABEL_SPECIAL_FIELDS"); ?></div>
                <div id="rm_special_fields_tab">
                    <div title="<?php echo RM_UI_Strings::get("FIELD_HELP_TEXT_jQueryUIDate"); ?>" class="rm_button_like_links" onclick="add_new_field_to_page('jQueryUIDate')"><a href="javascript:void(0)"><?php echo RM_UI_Strings::get("FIELD_TYPE_DATE"); ?></a></div>
                    <div title="<?php echo RM_UI_Strings::get("FIELD_HELP_TEXT_Email"); ?>" class="rm_button_like_links" onclick="add_new_field_to_page('Email')">       <a href="javascript:void(0)"><?php echo RM_UI_Strings::get("FIELD_TYPE_EMAIL"); ?></a></div>                    
                     <div title="<?php echo RM_UI_Strings::get("FIELD_HELP_TEXT_Password"); ?>" class="rm_button_like_links" onclick="add_new_field_to_page('Password')">    <a href="javascript:void(0)"><?php echo RM_UI_Strings::get("FIELD_TYPE_PASSWORD"); ?></a></div>
                    <div title="<?php echo RM_UI_Strings::get("FIELD_HELP_TEXT_Number"); ?>" class="rm_button_like_links" onclick="add_new_field_to_page('Number')">      <a href="javascript:void(0)"><?php echo RM_UI_Strings::get("FIELD_TYPE_NUMBER"); ?></a></div>
                    <div title="<?php echo RM_UI_Strings::get("FIELD_HELP_TEXT_Country"); ?>" class="rm_button_like_links" onclick="add_new_field_to_page('Country')">     <a href="javascript:void(0)"><?php echo RM_UI_Strings::get("FIELD_TYPE_COUNTRY"); ?></a></div>
                    <div title="<?php echo RM_UI_Strings::get("FIELD_HELP_TEXT_Timezone"); ?>" class="rm_button_like_links" onclick="add_new_field_to_page('Timezone')">    <a href="javascript:void(0)"><?php echo RM_UI_Strings::get("FIELD_TYPE_TIMEZONE"); ?></a></div>
                    <div title="<?php echo RM_UI_Strings::get("FIELD_HELP_TEXT_Terms"); ?>" class="rm_button_like_links" onclick="add_new_field_to_page('Terms')">       <a href="javascript:void(0)"><?php echo RM_UI_Strings::get("FIELD_TYPE_T_AND_C"); ?></a></div>
                    <div title="<?php echo RM_UI_Strings::get("FIELD_HELP_TEXT_File"); ?>" class="rm_button_like_links"><a class="rm_deactivated" href="javascript:void(0)"><?php echo RM_UI_Strings::get("FIELD_TYPE_FILE"); ?></a></div>
                    <div title="<?php echo RM_UI_Strings::get("FIELD_HELP_TEXT_Price"); ?>" class="rm_button_like_links" onclick="add_new_field_to_page('Price')">       <a href="javascript:void(0)"><?php echo RM_UI_Strings::get("FIELD_TYPE_PRICE"); ?></a></div>
                    <div title="<?php echo RM_UI_Strings::get("FIELD_HELP_TEXT_Repeatable"); ?>" class="rm_button_like_links"><a class="rm_deactivated" href="javascript:void(0)"><?php echo RM_UI_Strings::get("FIELD_TYPE_RAPEAT"); ?></a></div>
                    <div title="<?php echo RM_UI_Strings::get("FIELD_HELP_TEXT_Map"); ?>" class="rm_button_like_links"><a class="rm_deactivated" href="javascript:void(0)"><?php echo RM_UI_Strings::get("FIELD_TYPE_MAP"); ?></a></div>
                    <div title="<?php echo RM_UI_Strings::get("FIELD_HELP_TEXT_Address"); ?>" class="rm_button_like_links"><a class="rm_deactivated" href="javascript:void(0)"><?php echo RM_UI_Strings::get("FIELD_TYPE_ADDRESS"); ?></a></div>
                   
                    <div title="<?php echo RM_UI_Strings::get("FIELD_HELP_TEXT_Phone"); ?>" class="rm_button_like_links"><a class="rm_deactivated" href="javascript:void(0)"><?php echo RM_UI_Strings::get("FIELD_TYPE_PHONE"); ?></a></div>
                     <div title="<?php echo RM_UI_Strings::get("FIELD_HELP_TEXT_Mobile"); ?>" class="rm_button_like_links"><a class="rm_deactivated" href="javascript:void(0)"><?php echo RM_UI_Strings::get("FIELD_TYPE_MOBILE"); ?></a></div>
                    <div title="<?php echo RM_UI_Strings::get("FIELD_HELP_TEXT_Language"); ?>" class="rm_button_like_links"><a class="rm_deactivated" href="javascript:void(0)"><?php echo RM_UI_Strings::get("FIELD_TYPE_LANGUAGE"); ?></a></div>
                    <div title="<?php echo RM_UI_Strings::get("FIELD_HELP_TEXT_Bdate"); ?>" class="rm_button_like_links"><a class="rm_deactivated" href="javascript:void(0)"><?php echo RM_UI_Strings::get("FIELD_TYPE_BDATE"); ?></a></div>
                    <div title="<?php echo RM_UI_Strings::get("FIELD_HELP_TEXT_Gender"); ?>" class="rm_button_like_links"><a class="rm_deactivated" href="javascript:void(0)"><?php echo RM_UI_Strings::get("FIELD_TYPE_GENDER"); ?></a></div>
                    <div title="<?php echo RM_UI_Strings::get("FIELD_HELP_TEXT_Time"); ?>" class="rm_button_like_links"><a class="rm_deactivated" href="javascript:void(0)"><?php echo RM_UI_Strings::get("FIELD_TYPE_TIME"); ?></a></div>
                    <div title="<?php echo RM_UI_Strings::get("FIELD_HELP_TEXT_Image"); ?>" class="rm_button_like_links"><a class="rm_deactivated" href="javascript:void(0)"><?php echo RM_UI_Strings::get("FIELD_TYPE_IMAGE"); ?></a></div>
                    <div title="<?php echo RM_UI_Strings::get("FIELD_HELP_TEXT_Shortcode"); ?>" class="rm_button_like_links"><a class="rm_deactivated" href="javascript:void(0)"><?php echo RM_UI_Strings::get("FIELD_TYPE_SHORTCODE"); ?></a></div>
                    <div title="<?php echo RM_UI_Strings::get("FIELD_HELP_TEXT_Divider"); ?>" class="rm_button_like_links"><a class="rm_deactivated" href="javascript:void(0)"><?php echo RM_UI_Strings::get("FIELD_TYPE_DIVIDER"); ?></a></div>
                    <div title="<?php echo RM_UI_Strings::get("FIELD_HELP_TEXT_Spacing"); ?>" class="rm_button_like_links"><a class="rm_deactivated" href="javascript:void(0)"><?php echo RM_UI_Strings::get("FIELD_TYPE_SPACING"); ?></a></div>
                    <div title="<?php echo RM_UI_Strings::get("FIELD_HELP_TEXT_Multi-Dropdown"); ?>" class="rm_button_like_links"><a class="rm_deactivated" href="javascript:void(0)"><?php echo RM_UI_Strings::get("FIELD_TYPE_MULTI_DROP_DOWN"); ?></a></div>
                    <div title="<?php echo RM_UI_Strings::get("FIELD_HELP_TEXT_Custom"); ?>" class="rm_button_like_links"><a class="rm_deactivated" href="javascript:void(0)"><?php echo RM_UI_Strings::get("FIELD_TYPE_CUSTOM"); ?></a></div>
                    <div title="<?php echo RM_UI_Strings::get("FIELD_HELP_TEXT_Hidden"); ?>"        class="rm_button_like_links" onclick="add_new_field_to_page('Hidden')"><a href="javascript:void(0)"><?php echo RM_UI_Strings::get("FIELD_TYPE_HIDDEN"); ?></a></div>
                </div>
                </div>
                
                  <div class="rm-field-tabs-row rm-dbfl">
                      <div class="rm-field-tab-cat"> <?php echo RM_UI_Strings::get("LABEL_PROFILE_FIELDS"); ?></div>
                <div id="rm_profile_fields_tab">
                    <div title="<?php echo RM_UI_Strings::get("FIELD_HELP_TEXT_Fname"); ?>" class="rm_button_like_links" onclick="add_new_field_to_page('Fname')"><a href="javascript:void(0)"><?php echo RM_UI_Strings::get("FIELD_TYPE_FNAME"); ?></a></div>
                    <div title="<?php echo RM_UI_Strings::get("FIELD_HELP_TEXT_Lname"); ?>" class="rm_button_like_links" onclick="add_new_field_to_page('Lname')"><a href="javascript:void(0)"><?php echo RM_UI_Strings::get("FIELD_TYPE_LNAME"); ?></a></div>
                    <div title="<?php echo RM_UI_Strings::get("FIELD_HELP_TEXT_BInfo"); ?>" class="rm_button_like_links" onclick="add_new_field_to_page('BInfo')"><a href="javascript:void(0)"><?php echo RM_UI_Strings::get("FIELD_TYPE_BINFO"); ?></a></div>
                    <div title="<?php echo RM_UI_Strings::get("FIELD_HELP_TEXT_Nickname"); ?>" class="rm_button_like_links" onclick="add_new_field_to_page('Nickname')"><a href="javascript:void(0)"><?php echo RM_UI_Strings::get("FIELD_TYPE_NICKNAME"); ?></a></div>
                    <div title="<?php echo RM_UI_Strings::get("FIELD_HELP_TEXT_Website"); ?>" class="rm_button_like_links" onclick="add_new_field_to_page('Website')"><a href="javascript:void(0)"><?php echo RM_UI_Strings::get("FIELD_TYPE_WEBSITE"); ?></a></div>
                    <div title="<?php echo RM_UI_Strings::get("FIELD_HELP_TEXT_SecEmail"); ?>" class="rm_button_like_links" ><a class="rm_deactivated" href="javascript:void(0)"><?php echo RM_UI_Strings::get("FIELD_TYPE_SEMAIL"); ?></a></div>

                </div>
                      
                  </div>
                
                  <div class="rm-field-tabs-row rm-dbfl">
                      <div class="rm-field-tab-cat"> <?php echo RM_UI_Strings::get("LABEL_SOCIAL_FIELDS"); ?></div>
                 <div id="rm_social_fields_tab">
                    <div title="<?php echo RM_UI_Strings::get("FIELD_HELP_TEXT_Facebook"); ?>" class="rm_button_like_links" ><a class="rm_deactivated" href="javascript:void(0)"><?php echo RM_UI_Strings::get("FIELD_TYPE_FACEBOOK"); ?></a></div>
                    <div title="<?php echo RM_UI_Strings::get("FIELD_HELP_TEXT_Twitter"); ?>" class="rm_button_like_links"><a class="rm_deactivated" href="javascript:void(0)"><?php echo RM_UI_Strings::get("FIELD_TYPE_TWITTER"); ?></a></div>
                    <div title="<?php echo RM_UI_Strings::get("FIELD_HELP_TEXT_Google"); ?>" class="rm_button_like_links"><a class="rm_deactivated" href="javascript:void(0)"><?php echo RM_UI_Strings::get("FIELD_TYPE_GOOGLE"); ?></a></div>
                    <div title="<?php echo RM_UI_Strings::get("FIELD_HELP_TEXT_Instagram"); ?>" class="rm_button_like_links" ><a class="rm_deactivated" href="javascript:void(0)"><?php echo RM_UI_Strings::get("FIELD_TYPE_INSTAGRAM"); ?></a></div>
                    <div title="<?php echo RM_UI_Strings::get("FIELD_HELP_TEXT_Linked"); ?>" class="rm_button_like_links"><a class="rm_deactivated" href="javascript:void(0)"><?php echo RM_UI_Strings::get("FIELD_TYPE_LINKED"); ?></a></div>
                    <div title="<?php echo RM_UI_Strings::get("FIELD_HELP_TEXT_Youtube"); ?>" class="rm_button_like_links"><a class="rm_deactivated" href="javascript:void(0)"><?php echo RM_UI_Strings::get("FIELD_TYPE_YOUTUBE"); ?></a></div>
                    <div title="<?php echo RM_UI_Strings::get("FIELD_HELP_TEXT_VKontacte"); ?>" class="rm_button_like_links"><a class="rm_deactivated" href="javascript:void(0)"><?php echo RM_UI_Strings::get("FIELD_TYPE_VKONTACTE"); ?></a></div>
                    <div title="<?php echo RM_UI_Strings::get("FIELD_HELP_TEXT_Skype"); ?>" class="rm_button_like_links"><a class="rm_deactivated" href="javascript:void(0)"><?php echo RM_UI_Strings::get("FIELD_TYPE_SKYPE"); ?></a></div>
                    <div title="<?php echo RM_UI_Strings::get("FIELD_HELP_TEXT_SoundCloud"); ?>" class="rm_button_like_links"><a class="rm_deactivated" href="javascript:void(0)"><?php echo RM_UI_Strings::get("FIELD_TYPE_SOUNDCLOUD"); ?></a></div>
                    
                </div>
                  </div>
       
            </div>
           <div class="rm-fields-disabled rm-fields-disabled-notice">*Premium fields</div>