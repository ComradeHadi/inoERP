 <div id="path_divId"><?php  $f = new inoform();  ?>
 <?php echo (!empty($show_message)) ? $show_message : ""; ?> 
 <!--    End of place for showing error messages-->
 <div id ="form_header">
  <form action="path.php" method="post" size="30" id="path" name="path"  >
   <span class="heading"><?php echo gettext('System Path') ?></span>
   <div class="tabContainer"> 
    <ul class="column header_field two_column_form"> 
     <li><?php $f->l_text_field_dr_withSearch('path_id') ?>
      <a name="show" href="form.php?class_name=path&<?php echo "mode=$mode"; ?>" class="show document_id path_id">
       <i class="fa fa-refresh"></i></a> 
     </li>
     <li><?php $f->l_select_field_from_object('parent_id', path::find_all('name'), 'path_id', array('name', 'module_code'), $$class->parent_id, 'parent_id') ?>     </li>
     <li><?php $f->l_text_field_dm('path_link'); ?></li>
     <li><?php $f->l_text_field_dm('name'); ?></li>
     <li><?php $f->l_text_field_d('description'); ?></li>
     <li><?php $f->l_text_field_d('obj_class_name'); ?></li>
     <li><?php $f->l_text_field_d('mode'); ?></li>
     <li><?php $f->l_select_field_from_object('module_code', option_header::modules(), 'option_line_code', 'option_line_value', $$class->module_code, 'module_code', '', 1) ?>
     </li>
     <li><label><?php echo gettext('ID Column name') ?></label><Select name="id_column_name[]" id="id_column_name"> 
       <option value="" ></option>   
       <?php
       $coumn_name = view::find_all_idColumns_gen();
       foreach ($coumn_name as $key => $value) {
        echo '<option value="' . $value . '" ';
        echo $value == $path->id_column_name ? 'selected' : 'none ';
        echo '>' . $value . '</option>';
       }
       ?> 

      </select>
     </li>
     <li><?php $f->l_select_field_from_object('path_type', path::path_types(), 'option_line_code', 'option_line_value', $$class->path_type, 'path_type') ?></li>
     <li><?php $f->l_checkBox_field_d('search_path_cb'); ?> </li>
     <li><?php $f->l_number_field_d('display_weight'); ?> </li>
    </ul>
   </div>
  </form> 
 </div>
</div>

