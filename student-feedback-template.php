<?php
/*
Template Name: Student Feedback Template
*/

include('student-header.php');
?>





                        <?php 
							//Displays Page Content 
							if (have_posts()) : while (have_posts()) : the_post(); 
                        		the_content('<p>Read the rest of this page &raquo;</p>');							
							endwhile; endif;
							
							$page_type_field= get_post_meta($post->ID, 'page_type', true); 

							
								// Grab the module topics from their custom field, "new-modules".
								if ( function_exists('get_custom_field_value') ){
	        							$module_topic = get_custom_field_value('new-modules');
										} 
								// Sort the module topics and place them into an array for future use.
								$new_modules = explode(",", $module_topic);
								
								// Grab the module topics from their custom field, "module-topics".
								if ( function_exists('get_custom_field_value') ){
	        							$all_modules = get_custom_field_value('module-topics');
										} 
								// Sort the module topics and place them into an array for future use.
								$all_module_topics = explode(",", $all_modules);

						?>

    
    <form method="post" id="student-feedback-form" action="http://formmanager.ucf.edu/formsubmit.cfm">
    
        <fieldset>
            <h3>Please select your top three module choices using the pull-down menus below. (You may also propose a module not on this list for one of your top three choices.)</h3>
            
            <ol>
            	<li>
                	<label for="First_Choice_Topic">From the pull-down menu, select the topic you would rank as your FIRST CHOICE as a topic for a new information literacy module:</label>
                	<select name="First_Choice_Topic" id="First_Choice_Topic">
                    	<option value="">Choose a Topic</option>
                        <?php
						// Use the array to populate the dropdown.
					
							foreach ($new_modules as &$module_topic)
							{
								echo '<option value="'.$module_topic.'">'.$module_topic.'</option>';
							}
			
						?>
                        <option value="other">Other (Please specify below)</option>
                    </select>
                    
                    <ul class="nobullet m2x" id="other_1">
                    <li><label for="first_choice_other">Please Specifiy:</label> <input type="text" name="first_choice_other" id="first_choice_other" class="other" /></li></ul>
                </li>
                
                <li>
                	<label for="Second_Choice_Topic">From the pull-down menu, select the topic you would rank as your SECOND CHOICE as a topic for a new information literacy module:</label>
                	<select name="Second_Choice_Topic" id="Second_Choice_Topic">
                    	<option value="">Choose a Topic</option>
                        <?php
						// Use the array to populate the dropdown.
					
							foreach ($new_modules as &$module_topic)
							{
								echo '<option value="'.$module_topic.'">'.$module_topic.'</option>';
							}
			
						?>
                        <option value="other">Other (Please specify below)</option>
                    </select>
                                        <ul class="nobullet m2x" id="other_2">
                    <li><label for="second_choice_other">Please Specifiy:</label> <input type="text" name="second_choice_other" id="second_choice_other" class="other" /></li></ul>
                </li>
                
                 <li>
                 	<label for="Third_Choice_Topic">From the pull-down menu, select the topic you would rank as your THIRD CHOICE as a topic for a new information literacy module:</label>
                	<select name="Third_Choice_Topic" id="Third_Choice_Topic">
                    	<option value="">Choose a Topic</option>
                        <?php
						// Use the array to populate the dropdown.
					
							foreach ($new_modules as &$module_topic)
							{
								echo '<option value="'.$module_topic.'">'.$module_topic.'</option>';
							}
			
						?>
                        <option value="other">Other (Please specify below)</option>
                    </select>
                                        <ul class="nobullet m2x" id="other_3">
                    <li><label for="third_choice_other">Please Specifiy:</label> <input type="text" name="third_choice_other" id="third_choice_other" class="other" /></li></ul>
                </li>
                
                <li>
                	<label for="Suggest_Module_Topics">Please describe any module topics other than those above that you would suggest for new information literacy modules:</label><br />
                	<textarea name="Suggest_Module_Topics" id="Suggest_Module_Topics" cols="0" rows="0"></textarea>
                </li>
                
                <li>
                	<label for="Modules_Used_Past">Please select the title of each information literacy module you have used in the past. (Hold down the control key to select more than one module title):</label>
                	<select multiple="" size="4" name="Modules_Used_Past" id="Modules_Used_Past">

                         <?php
						// Use the array to populate the dropdown.
					
							foreach ($all_module_topics as &$all_modules)
							{
								echo '<option value="'.$all_modules.'">'.$all_modules.'</option>';
							}
			
						?>
                    </select>
                </li>
                
                <li>
                	<label for="Module_Feedback">Please provide any feedback on the modules you've used that would make these modules better learning resources for UCF students.</label><br />
                	<textarea name="Module_Feedback" id="Module_Feedback" cols="0" rows="0"></textarea>
                </li>
            </ol>
            	<input type="hidden" name="id" value="27840" class="hide" />
                    	<input class="center" type="submit" value="Submit"/>
        </fieldset>

	</form>
    
<?php  

include("student-footer.php");

?>
