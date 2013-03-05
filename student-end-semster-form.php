<?php
/*
Template Name: Student Semester End Form
*/

include('student-header.php');

	//Displays Page Content 
	if (have_posts()) : while (have_posts()) : the_post();
		echo '<h2>';
			the_title();
		echo '</h2>';
		
		the_content('<p>Read the rest of this page &raquo;</p>');							
	endwhile; endif;
?>

<form action="http://formmanager.ucf.edu/formsubmit.cfm" method="post">
<fieldset>
<input type="hidden" value="27288" name="id" />
<ol>
	<li>
    	Which of the following information literacy modules did you <strong>begin or complete</strong> during this current semester? (Please check all that apply.)
        <ul>
        	<li><input type="checkbox" name="avoid_pagiarism" value="1" id="question_1_a"/><label for="question_1_a">Avoiding Plagiarism</label></li>
            <li><input type="checkbox" name="cite_apa" value="1" id="question_1_b"/><label for="question_1_b">Citing Sources Using APA Style</label></li>
            <li><input type="checkbox" name="cite_mla" value="1" id="question_1_c"/><label for="question_1_c">Citing Sources Using MLA Style</label></li>
            <li><input type="checkbox" name="literature_review" value="1" id="question_1_d"/><label for="question_1_d">Conducting a Literature Review</label></li>
            <li><input type="checkbox" name="search_strategy" value="1" id="question_1_e"/><label for="question_1_e">Creating a Search Strategy</label></li>
            <li><input type="checkbox" name="eval_web" value="1" id="question_1_f"/><label for="question_1_f">Evaluating Web Sites</label></li>
            <li><input type="checkbox" name="focus_search" value="1" id="question_1_g"/><label for="question_1_g">Focusing an Information Search</label></li>
            <li><input type="checkbox" name="references_using_refworks" value="1" id="question_1_h"/><label for="question_1_h">Managing References Using RefWorks</label></li>
            <li><input type="checkbox" name="max_google" value="1" id="question_1_i"/><label for="question_1_i">Maximizing Google Scholar Searches</label></li>
            <li><input type="checkbox" name="recognize_study" value="1" id="question_1_j"/><label for="question_1_j">Recognizing a Research Study</label></li>
            <li><input type="checkbox" name="selecting_articles" value="1" id="question_1_k"/><label for="question_1_k">Selecting Articles for Academic Assignments</label></li>
            <li><input type="checkbox" name="information_cycle" value="1" id="question_1_l"/><label for="question_1_l">Understanding the Information Cycle</label></li>
        </ul>
    </li>
    
    <li>
    	Is this the <strong>first time</strong> you have been assigned an information module? (Please include multiple instances of the same module.)
        	<ul>
            	<li><input type="radio" value="0" id="question_2_No" name="first_term" /><label for="question_2_No">No</label></li>
                <li><input type="radio" value="1" id="question_2_yes" name="first_term" /><label for="question_2_yes">Yes</label></li>
            </ul>
            <!-- Hidden Question -->
            <ol class="hidden_questions nobullet">
            	<li>
                	If no, had you already completed this <strong>exact module</strong> in a previous semester?
                    <ul>
                    	<li><input type="radio" value="0" id="question_2a_No" name="assigned_module" /><label for="question_2a_No">No</label></li>
                		<li><input type="radio" value="1" id="question_2a_yes" name="assigned_module" /><label for="question_2a_yes">Yes</label></li>
                    </ul>
                </li>
            </ol>
            <!-- End hidden question -->
    </li>
    
    <li>
    	Did you encounter any problems with any of the information literacy modules that <strong>hindered</strong> your successful completion?
        <ul>
        	<li><input type="radio" value="0" id="question_3_No" name="any_problems" /><label for="question_3_No">No</label></li>
            <li><input type="radio" value="1" id="question_3_yes" name="any_problems" /><label for="question_3_yes">Yes</label></li>
        </ul>
        <!-- Hidden Questions -->
        <ol class="hidden_questions nobullet">
        	<li>
            	(If you encountered problems), please select the <strong>one area</strong> that was <strong>most</strong> problematic:
                <ul>
                	<li><input type="radio" value="1" id="question_3_a_1" name="most_problematic"/><label for="question_3_a_1">Login difficulty</label></li>
                	<li><input type="radio" value="2" id="question_3_a_2" name="most_problematic"/><label for="question_3_a_2">Navigation difficulty</label></li>
                	<li><input type="radio" value="9" id="question_3_a_9" name="most_problematic"/><label for="question_3_a_9">Other</label>
                        <ul class="hidden_other">
                            <li>
                                <label for="Question_3_a_other">Please Specify: </label>
                                <input type="text" name="most_problematic_specify" id="Question_3_a_other" class="other" />
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            
            <li>
            	(If you encountered problems), what was your <strong>final step</strong> in attempting to resolve the problem(s)? (Please choose <strong>one</strong> best answer)
                <ul>
                    <li><input type="radio" value="1" id="question_3_b_1" name="final_step" /><label for="question_3_b_1">Tried to figure it out myself</label></li>
                    <li><input type="radio" value="2" id="question_3_b_2" name="final_step" /><label for="question_3_b_2">Contacted instructor</label></li>
                    <li><input type="radio" value="3" id="question_3_b_3" name="final_step" /><label for="question_3_b_3">Consulted online Help/Frequently Asked Questions</label></li>
                    <li><input type="radio" value="4" id="question_3_b_4" name="final_step" /><label for="question_3_b_4">Contacted technical support/Ask A Librarian</label></li>
                    <li><input type="radio" value="9" id="question_3_b_9" name="final_step" /><label for="question_3_b_9">Other</label>
                         <ul class="hidden_other">
                            <li>
                                <label for="Question_3_b_other">Please Specify: </label>
                                <input type="text" name="final_step_specify" id="Question_3_b_other" class="other" />
                            </li>
                         </ul>
                    </li>
                </ul>
            </li>
            
            <li>
            	(If you encountered problems), were you able to <strong>resolve</strong> the problem(s)?
                <ul>
                	<li><input type="radio" value="0" id="question_3_c_No" name="problem_resolved" /><label for="question_3_c_No">No</label></li>
            		<li><input type="radio" value="1" id="question_3_c_yes" name="problem_resolved" /><label for="question_3_c_yes">Yes</label></li>
                </ul>
            </li>
        </ol>
        <!-- End Hidden Questions -->
    </li>
    
    <li>
    	How familiar or unfamiliar were you with the <strong>content</strong> in the information literacy module(s) you completed?
        <ul>
            <li><input type="radio" value="1" name="infolit_experience" id="question_4_1" /><label for="question_4_1">Very unfamiliar</label></li>
            <li><input type="radio" value="2" name="infolit_experience" id="question_4_2" /><label for="question_4_2">Somewhat unfamiliar</label></li>
            <li><input type="radio" value="3" name="infolit_experience" id="question_4_3" /><label for="question_4_3">Neither unfamiliar nor familiar</label></li>
            <li><input type="radio" value="4" name="infolit_experience" id="question_4_4" /><label for="question_4_4">Somewhat familiar</label></li>
            <li><input type="radio" value="5" name="infolit_experience" id="question_4_5" /><label for="question_4_5">Very familiar</label></li>
        </ul>
    </li>
    
    <li>
    	How effective or ineffective was the module <strong>feedback</strong> at clarifying or confirming your understanding of the information literacy module(s) you completed? 
        <ul>
            <li><input type="radio" value="1" name="practice_experience" id="question_5_1" /><label for="question_5_1">Very ineffective</label></li>
            <li><input type="radio" value="2" name="practice_experience" id="question_5_2" /><label for="question_5_2">Somewhat ineffective</label></li>
            <li><input type="radio" value="3" name="practice_experience" id="question_5_3" /><label for="question_5_3">Neither ineffective nor effective</label></li>
            <li><input type="radio" value="4" name="practice_experience" id="question_5_4" /><label for="question_5_4">Somewhat effective</label></li>
            <li><input type="radio" value="5" name="practice_experience" id="question_5_5" /><label for="question_5_5">Very effective</label></li>
        </ul>
    </li>
    
    <li>
    	To what extent did your <strong>assessment score(s)</strong> represent your mastery of the information literacy module(s) you completed? 
        <ul>
            <li><input type="radio" value="1" name="assessment_experience" id="question_6_1" /><label for="question_6_1">Very poor representation</label></li>
            <li><input type="radio" value="2" name="assessment_experience" id="question_6_2" /><label for="question_6_2">Somewhat poor representation</label></li>
            <li><input type="radio" value="3" name="assessment_experience" id="question_6_3" /><label for="question_6_3">Neither poor nor good representation</label></li>
            <li><input type="radio" value="4" name="assessment_experience" id="question_6_4" /><label for="question_6_4">Somewhat good representation</label></li>
            <li><input type="radio" value="5" name="assessment_experience" id="question_6_5" /><label for="question_6_5">Very good representation</label></li>
        </ul>
    </li>
    
    <li>
    	Please rate the overall effectiveness or ineffectiveness of the information literacy module(s) you completed as a <strong>learning resource</strong>. 
        <ul>
            <li><input type="radio" value="1" name="overall_effectiveness" id="question_7_1" /><label for="question_7_1">Very ineffective</label></li>
            <li><input type="radio" value="2" name="overall_effectiveness" id="question_7_2" /><label for="question_7_2">Somewhat ineffective</label></li>
            <li><input type="radio" value="3" name="overall_effectiveness" id="question_7_3" /><label for="question_7_3">Neither ineffective nor effective</label></li>
            <li><input type="radio" value="4" name="overall_effectiveness" id="question_7_4" /><label for="question_7_4">Somewhat effective</label></li>
            <li><input type="radio" value="5" name="overall_effectiveness" id="question_7_5" /><label for="question_7_5">Very effective</label></li>
        </ul>
    </li>
    
    <li>
    	What is your current academic <strong>level</strong>? 
        <ul>
            <li><input type="radio" value="1" name="academic_level" id="question_8_1" /><label for="question_8_1">Freshman</label></li>
            <li><input type="radio" value="2" name="academic_level" id="question_8_2" /><label for="question_8_2">Sophomore</label></li>
            <li><input type="radio" value="3" name="academic_level" id="question_8_3" /><label for="question_8_3">Junior</label></li>
            <li><input type="radio" value="4" name="academic_level" id="question_8_4" /><label for="question_8_4">Senior</label></li>
            <li><input type="radio" value="5" name="academic_level" id="question_8_5" /><label for="question_8_5">Master's</label></li>
            <li><input type="radio" value="6" name="academic_level" id="question_8_6" /><label for="question_8_6">Doctoral</label></li>
            <li><input type="radio" value="9" name="academic_level" id="question_8_9" /><label for="question_8_9">Other</label>
                 <ul class="hidden_other">
                    <li>
                        <label for="Question_8_b_other">Please Specify: </label>
                        <input type="text" name="academic_level_specify" id="Question_8_b_other" class="other" />
                    </li>
                 </ul>
            </li>
        </ul>
    </li>
    
        <li>
    	With which UCF <strong>college</strong> is your program of study associated?  
        <ul>
            <li><input type="radio" value="1" name="major" id="question_9_1" /><label for="question_9_1">Arts &amp; Humanities</label></li>
            <li><input type="radio" value="2" name="major" id="question_9_2" /><label for="question_9_2">Business Administration</label></li>
            <li><input type="radio" value="3" name="major" id="question_9_3" /><label for="question_9_3">Education</label></li>
            <li><input type="radio" value="4" name="major" id="question_9_4" /><label for="question_9_4">Engineering &amp; Computer Science</label></li>
            <li><input type="radio" value="5" name="major" id="question_9_5" /><label for="question_9_5">Health and Public Affairs</label></li>
            <li><input type="radio" value="6" name="major" id="question_9_6" /><label for="question_9_6">Hospitality Management</label></li>
            <li><input type="radio" value="7" name="major" id="question_9_7" /><label for="question_9_7">Medicine</label></li>
            <li><input type="radio" value="8" name="major" id="question_9_8" /><label for="question_9_8">Nursing</label></li>
            <li><input type="radio" value="10" name="major" id="question_9_10" /><label for="question_9_10">Optics &amp; Photonics</label></li>
            <li><input type="radio" value="11" name="major" id="question_9_11" /><label for="question_9_11">Sciences</label></li>
            <li><input type="radio" value="9" name="major" id="question_9_9" /><label for="question_9_9">Other</label>
            	<ul class="hidden_other">
                    <li>
                        <label for="Question_9_b_other">Please Specify: </label>
                        <input type="text" name="major_specify" id="Question_9_b_other" class="other" />
                    </li>
                 </ul>
            </li>
        </ul>
    </li>
    
    <li>
    	<label for="question_10">Please record any additional comments, suggestions or complaints below:</label>
        <textarea name="additional_comments" id="question_10" rows="0" cols="0"></textarea>
    </li>
</ol>

<input class="center" type="submit" value="Submit"/>

</fieldset>
</form>


<?php include('student-footer.php'); ?>