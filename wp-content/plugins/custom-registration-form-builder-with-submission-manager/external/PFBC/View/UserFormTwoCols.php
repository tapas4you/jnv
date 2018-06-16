<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UserForm
 *
 * @author hawk
 */
class View_UserFormTwoCols extends View_UserForm{
    
    protected function renderLabel(Element $element)
    {
      
        $label = $element->getLabel();
        
        if (!empty($label))
        {
            //echo '<label class="control-label" for="', $element->getAttribute("id"), '">';
            $field_class = trim("rmfield ".$element->getAdvanceAttr('exclass_field'));
            echo '<div class="'.$field_class.'" for="', $element->getAttribute("id"), '" style="',$element->getAttribute("labelstyle"),'"><label>';
            
            
            echo $label;
            if ($element->isRequired()  && ($element->show_asterix()=='yes'))
            {
                echo '<sup class="required">&nbsp;*</sup>';
            }            
            echo '</label></div>';
        }
    }
    
}
