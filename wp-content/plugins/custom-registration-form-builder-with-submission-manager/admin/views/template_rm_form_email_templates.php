<div class="rmagic">

    <!--Dialogue Box Starts-->
    <div class="rmcontent">


        <?php
        $form = new RM_PFBC_Form("form_sett_email_templates");
        $form->configure(array(
            "prevent" => array("bootstrap", "jQuery"),
            "action" => ""
        ));

        if (isset($data->model->form_id)) {
            $form->addElement(new Element_HTML('<div class="rmheader">' . $data->model->form_name . '</div>'));
            $form->addElement(new Element_HTML('<div class="rmsettingtitle">' . RM_UI_Strings::get('LABEL_F_EMAIL_TEMP_SETT') . '</div>'));
            $form->addElement(new Element_Hidden("form_id", $data->model->form_id));
        }

        $form->addElement(new Element_TinyMCEWP("<b>" . RM_UI_Strings::get('LABEL_NEW_USER_EMAIL') . ":</b>(Mail Merge and HTML Supported):", $data->model->get_notification_messages('form_nu_notification'), "form_nu_notification", array('editor_class' => 'rm_TinydMCE', 'editor_height' => '100px'), array("longDesc" => RM_UI_Strings::get('HELP_ADD_FORM_NU_EMAIL_MSG'))));
        $form->addElement(new Element_TinyMCEWP("<b>" . RM_UI_Strings::get('LABEL_USER_ACTIVATION_EMAIL') . ":</b>(Mail Merge and HTML Supported):", $data->model->get_notification_messages('form_user_activated_notification'), "form_user_activated_notification", array('editor_class' => 'rm_TinydMCE', 'editor_height' => '100px'), array("longDesc" => RM_UI_Strings::get('HELP_ADD_FORM_USER_ACTIVATED_MSG'))));
        //$form->addElement(new Element_TinyMCEWP("<b>" . RM_UI_Strings::get('LABEL_ACTIVATE_USER_EMAIL') . ":</b>(Mail Merge and HTML Supported):", $data->model->get_notification_messages('form_activate_user_notification'), "form_activate_user_notification", array('editor_class' => 'rm_TinydMCE', 'editor_height' => '100px'), array("longDesc" => RM_UI_Strings::get('HELP_ADD_FORM_ACTIVATE_USER_MSG'))));
        $form->addElement(new Element_TinyMCEWP("<b>" . RM_UI_Strings::get('LABEL_ADMIN_NEW_SUBMISSION_EMAIL') . ":</b>(Mail Merge and HTML Supported):", $data->model->get_notification_messages('form_admin_ns_notification'), "form_admin_ns_notification", array('editor_class' => 'rm_TinydMCE', 'editor_height' => '100px'), array("longDesc" => RM_UI_Strings::get('HELP_ADD_FORM_ADMIN_NS_MSG'))));
        $form->addElement(new Element_HTMLL('&#8592; &nbsp; Cancel', '?page=rm_form_sett_manage&rm_form_id=' . $data->model->form_id, array('class' => 'cancel')));
        $form->addElement(new Element_Button(RM_UI_Strings::get('LABEL_SAVE'), "submit", array("id" => "rm_submit_btn", "class" => "rm_btn", "name" => "submit", "onClick" => "jQuery.prevent_field_add(event,'This is a required field.')")));
        $form->render();
        ?>
    </div>
</div>

