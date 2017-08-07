<?php
/*
Template Name: Faculty Semester End Form
*/

include('faculty-header.php');

	//Displays Page Content 
	if (have_posts()) : while (have_posts()) : the_post();
		echo '<h2>';
			the_title();
		echo '</h2>';
		
		the_content('<p>Read the rest of this page &raquo;</p>');							
	endwhile; endif;
?>


<form id="exit-form" action="http://formmanager.ucf.edu/formsubmit.cfm" method="post"> 
            <fieldset>
<input type="hidden" value="27289" name="id" />
<ol> 
     <li>Which of the following best describes how you first become <strong>aware</strong> of UCF's Information Literacy Modules as 		an instructional resource?
		<ul class="nobullet">
			<li><input type="radio" value="1" name="aware" id="aware1" /><label for="aware1">Email announcement from Library</label></li>

			<li><input type="radio" value="2" name="aware" id="aware2" /><label for="aware2">Link from Information Fluency (QEP) Web site</label></li>
            
            <li><input type="radio" value="3" name="aware" id="aware3" /><label for="aware3">Link from Library Web site</label></li>
            
            <li><input type="radio" value="4" name="aware" id="aware4" /><label for="aware4">Link from Undergraduate Studies Web site</label></li>

			<li><input type="radio" value="5" name="aware" id="aware5" /><label for="aware5">Presentation at FCTL Summer/Winter Conference</label></li>
            
			<li><input type="radio" value="6" name="aware" id="aware6" /><label for="aware6">Referred by colleague</label></li>
            
			<li><input type="radio" value="7" name="aware" id="aware7" /><label for="aware7">Referred by librarian</label></li>

			<li><input type="radio" value="9" name="aware" id="aware9" /><label for="aware9">Other</label>
  				<ul class="hidden_other">
                	<li><label for="aware_other">(Please specify):</label><input type="text" name="aware_other" id="aware_other"/></li>

                </ul>
            </li>
       </ul>
    </li>              

	<li>Have you <strong>referred</strong> other faculty to the information literacy modules?
		<ul class="nobullet">
             <li><input type="radio" value="0" name="referred" id="referred0"/><label for="referred0">No </label></li>
             <li><input type="radio" value="1" name="referred" id="referred1" /><label for="referred1">Yes</label></li></ul>
				<ul class="hidden_questions">
					<li>(If Yes) Overall, approximately <strong>how  many</strong> other faculty have you referred to the information literacy modules?
                    	<ul>
							<li><input type="radio" value="1" id="referrals1" name="referrals"/><label for="referrals1">1</label></li>
                    		<li><input type="radio" value="2" id="referrals2" name="referrals"/><label for="referrals2">2</label></li>
                    		<li><input type="radio" value="3" id="referrals3" name="referrals"/><label for="referrals3">3</label></li>

                    		<li><input type="radio" value="4" id="referrals4" name="referrals"/><label for="referrals4">4</label></li>

                   		 	<li><input type="radio" value="5 or more" id="referrals5" name="referrals"/><label for="referrals5">5 or more</label></li>
						</ul>
					</li>
				</ul>         
	</li>
    
	<li>Is this the <strong>first  term</strong> during which you created an instance of an information literacy  module?
		<ul class="nobullet">
			<li><input type="radio" value="1" name="first_term" id="first_term_y" /><label for="first_term_y">Yes</label></li>
            
			<li><input type="radio" value="0" name="first_term" id="first_term_n"/><label for="first_term_n">No </label></li></ul>
				<ul class="hidden_questions">
                    <li>(If No) In how many <strong>past semesters</strong> have you created instances of information literacy modules?</li>
                    <li><input type="radio" value="1" id="semesters1" name="semesters"/><label for="semesters1">1</label></li>
                    <li><input type="radio" value="2" id="semesters2" name="semesters"/><label for="semesters2">2</label></li>
                    <li><input type="radio" value="3 or more" id="semesters3" name="semesters"/><label for="semesters3">3 or more</label></li>
				</ul>
	</li>              

	<li>For which of the following information  literacy modules did you <strong>create</strong> your  own assignable <strong>instances</strong> this term? (Please  check <strong>all</strong> that apply.)

		<ul class="nobullet">

			<li><input type="checkbox" name="avoid_pagiarism" value="1" id="q1"/><label for="q1">Avoiding Plagiarism</label></li>
			<li><input type="checkbox" name="cite_apa" value="1" id="q2"/><label for="q2">Citing Sources Using APA Style</label></li>
			<li><input type="checkbox" name="cite_mla" value="1" id="q3" /><label for="q3">Citing Sources Using MLA Style</label></li>
            <li><input type="checkbox" name="conducting_lit_review" value="1" id="conducting_lit_review" /><label for="conducting_lit_review">Conducting a Literature Review</label></li>
			<li><input type="checkbox" name="search_strategy" value="1" id="q4" /><label for="q4">Creating a Search Strategy</label></li>
			<li><input type="checkbox" name="eval_web" value="1" id="eval_web" /><label for="eval_web">Evaluating Web Sites</label></li>
			<li><input type="checkbox" name="focus_search" value="1" id="focus_search" /><label for="focus_search">Focusing an Information Search</label></li>
            <li><input type="checkbox" name="manage_with_refworks" value="1" id="manage_with_refworks" /><label for="manage_with_refworks">Managing References Using RefWorks</label></li>
			<li><input type="checkbox" name="max_google" value="1" id="max_google" /><label for="max_google">Maximizing Google Scholar Searches</label></li>
			<li><input type="checkbox" name="recognize_study" value="1" id="recognize_study" /><label for="recognize_study">Recognizing a Research Study</label></li>
            <li><input type="checkbox" name="articles_for_acad_assign" value="1" id="articles_for_acad_assign" /><label for="articles_for_acad_assign">Selecting Articles for Academic Assignments</label></li>
            <li><input type="checkbox" name="info_cycle" value="1" id="info_cycle" /><label for="info_cycle">Understanding the Information Cycle</label></li>
		</ul>

	</li>

	<li><strong>How  many</strong> individual module instances did you create <strong>this term</strong>? (Please include multiple instances of the same module.)
				<ul class="nobullet">
                	<li><input type="radio" value="1" id="q6" name="module_instances"/><label for="q6">1</label></li>

                    <li><input type="radio" value="2" id="q7" name="module_instances"/><label for="q7">2</label></li>
                    <li><input type="radio" value="3" id="q8" name="module_instances"/><label for="q8">3</label></li>

                    <li><input type="radio" value="4" id="q9" name="module_instances"/><label for="q9">4</label></li>
                    <li><input type="radio" value="5 or more" id="q10" name="module_instances"/><label for="q10">5 or more</label></li>
                </ul>
	</li>

	<li>Which of the following <strong>best </strong>describes your approach to integrating information literacy  modules into your course <strong>assignments</strong>?
		<ul class="nobullet">

			<li><input type="radio"   value="1" id="q11" name="info_integrate"/><label for="q11">Reference material (no record of completion)</label></li>  
			<li><input type="radio"   value="2" id="q12" name="info_integrate"/><label for="q12">Completion &quot;check off&quot; (no connection to  grades)</label></li> 
			<li><input type="radio"   value="3" id="q13" name="info_integrate"/><label for="q13">Extra credit opportunity</label></li>
			<li><input type="radio"   value="4" id="q14" name="info_integrate"/><label for="q14">Score contributes to grade of another assignment</label></li>
			<li><input type="radio"   value="5" id="q15" name="info_integrate"/><label for="q15">Stand-alone graded assignment</label></li> 
			<li><input type="radio" value="9" id="q17" name="info_integrate"/><label for="q17">Other</label>
            
            	<ul class="hidden_other">
                	<li><label for="q18">(Please specify):</label><input type="text" name="other" id="q18"/></li>
                </ul>
			</li>
		</ul>
	</li>

	<li>Did you access the information literacy module <strong>support resources</strong> available online for faculty (e.g., &quot;Getting Started&quot; or  &quot;FAQ&quot; sections of the http://infolit.ucf.edu/faculty web site)? 
		<ul class="nobullet">
			<li><input type="radio" value="0"   name="access_infolit" id="q19" /><label for="q19">No </label></li>
			<li><input type="radio" value="1" name="access_infolit" id="q20" /><label for="q20">Yes</label></li></ul>
            
            	<ul class="hidden_questions">
					<li>(If yes,) please rate the <strong>level of helpfulness </strong>of these resources to you  in performing essential tasks. </li>
					<li><input type="radio" value="1" name="access_level" id="q21"/><label for="q21"> Very helpful </label></li>
					<li><input type="radio" value="2" name="access_level" id="q22"/><label for="q22"> Somewhat helpful </label></li>
                    <li><input type="radio" value="3" name="access_level" id="q23"/><label for="q23"> Neither helpful nor unhelpful </label></li>
					<li><input type="radio" value="4" name="access_level" id="q24"/><label for="q24"> Somewhat unhelpful </label></li>
					<li><input type="radio" value="5" name="access_level" id="q25"/><label for="q25"> Very unhelpful </label></li>
				</ul>
	</li>

	<li>Please rate the ease or difficulty with which you  completed each of the following tasks.
		<table>
			<tr>
				<th scope="col">Task</th>
				<th scope="col">Very easy </th>
				<th scope="col">Somewhat easy </th>
				<th scope="col">Neither easy nor difficult </th>
				<th scope="col">Somewhat difficult </th>
				<th scope="col">Very difficult </th>
			</tr>
            <tr>
				<th scope="row">Activating your account/<strong>logging in</strong> for the first time</th>
				<td><input type="radio" value="5" name="activate_acct" /></td>
				<td><input type="radio" value="4" name="activate_acct" /></td>
				<td><input type="radio" value="3" name="activate_acct" /></td>
				<td><input type="radio" value="2" name="activate_acct" /></td>
				<td><input type="radio" value="1" name="activate_acct" /></td>
			</tr>
			<tr>
				<th scope="row">Creating module <strong>instance(s)</strong></th>
				<td><input type="radio" value="5" name="create_module" /></td>
				<td><input type="radio" value="4" name="create_module" /></td>
				<td><input type="radio" value="3" name="create_module" /></td>
				<td><input type="radio" value="2" name="create_module" /></td>
				<td><input type="radio" value="1" name="create_module" /></td>
			</tr>
			<tr>
				<th scope="row">Making your instance(s) <strong>available</strong> to your students</th>
				<td><input type="radio" value="5" name="make_available" /></td>
				<td><input type="radio" value="4" name="make_available" /></td>
				<td><input type="radio" value="3" name="make_available" /></td>
				<td><input type="radio" value="2" name="make_available" /></td>
				<td><input type="radio" value="1" name="make_available" /></td>
			</tr>
 			<tr>
				<th scope="row">Obtaining assessment <strong>scores</strong> from your students</th>
				<td><input type="radio" value="5" name="obtain_scores" /></td>
				<td><input type="radio" value="4" name="obtain_scores" /></td>
				<td><input type="radio" value="3" name="obtain_scores" /></td>
				<td><input type="radio" value="2" name="obtain_scores" /></td>
				<td><input type="radio" value="1" name="obtain_scores" /></td>
			</tr>
		</table>
	</li>

	<li>Overall, how easy or difficult was it for you to <strong>integrate</strong> the  information literacy modules into your students' <strong>coursework</strong>? 

		<ul class="nobullet">
			<li><input type="radio"  id="q26" value="5" name="integrate_infolit" /><label for="q26"> Very easy </label></li>
			<li><input type="radio"  id="q27" value="4" name="integrate_infolit" /><label for="q27"> Somewhat easy </label></li>
			<li><input type="radio"  id="q28" value="3" name="integrate_infolit" /><label for="q28"> Neither easy nor difficult </label></li>
			<li><input type="radio"  id="q29" value="2" name="integrate_infolit" /><label for="q29"> Somewhat difficult </label></li>
			<li><input type="radio"  id="q30" value="1" name="integrate_infolit" /><label for="q30"> Very difficult </label></li>

		</ul>
	</li>
    
	<li>Did you encounter any problems with any of the information  literacy modules that <strong>hindered</strong> successful implementation into your students' coursework?

		<ul class="nobullet">
			<li><input type="radio"   value="0"  name="problems" id="q31"/><label for="q31">No </label></li>
			<li><input type="radio" value="1" name="problems" id="q32" /><label for="q32">Yes</label></li></ul>

				<ul class="hidden_questions">
                    <li>(If you encountered problems),  please select the <strong>one  area</strong> that was <strong>most</strong> problematic:
						<ul>
							<li><input id="q33" value="1"   name="most_difficult" type="radio" /><label for="q33"> Login difficulty </label></li>
							<li><input id="q34" value="2"   name="most_difficult" type="radio" /><label for="q34"> Navigation difficulty </label></li>
							<li><input id="q35" value="3"   name="most_difficult" type="radio" /><label for="q35"> Difficulty in presenting  modules to students </label></li>
							<li><input id="q36" value="9" name="most_difficult" type="radio"/><label for="q36">Other</label>
								<ul class="hidden_other">
                        			<li><label for="q37">(Please specify):</label><input id="q37" name="most_difficult_specify" type="text" /></li>
								</ul>
                            </li>
						</ul>
					</li>

					<li>(If you encountered problems), what was  your <strong>final step</strong> in attempting to resolve the problem(s)? (Please choose <strong>one</strong> best answer)
						<ul>                  
							<li><input type="radio" value="1"   name="finalstep" id="q38"/><label for="q38"> Tried to figure it out myself </label></li>
							<li><input type="radio" value="2"   name="finalstep" id="q39"/><label for="q39"> Consulted online Help/Frequently Asked  Questions </label></li>
							<li><input type="radio" value="3"   name="finalstep" id="q40"/><label for="q40"> Contacted technical support/Ask A  Librarian </label></li>
							<li><input type="radio" value="9" name="finalstep" id="q41"/><label for="q41"> Other </label>
								<ul class="hidden_other">
									<li><label for="q42">(Please specify):</label><input type="text" name="final_step_specify" id="q42"/></li>
								</ul>
							</li>
						</ul>
					</li>
					<li>(If you encountered problems), were you  able to <strong>resolve</strong> the  problem(s)?
						<ul>
							<li><input type="radio" value="0" name="resolved" id="q43"/><label for="q43">No </label></li>
                            <li><input type="radio" value="1" name="resolved" id="q44" /><label for="q44">Yes</label></li>
                        </ul>
					</li>
				</ul>
	</li>
    
	<li>Did <strong>students</strong> report to you any problems with the modules?
		<ul class="nobullet">
			<li><input type="radio" value="0" name="module_problems" id="q45"/><label for="q45">No </label></li>
			<li><input type="radio" value="1" name="module_problems" id="q46" /><label for="q46">Yes</label></li></ul>
				
                <ul class="hidden_questions">
					<li>(If yes,) which of the following did you  do <strong>most</strong> often in  response to the <strong>student</strong> report(s)?</li>
					<li><input type="radio" value="1" name="your_response" id="q47"/><label for="q47"> Attempted to help student personally </label></li>
					<li><input type="radio" value="2" name="your_response" id="q48"/><label for="q48"> Referred student to online Help/Frequently Asked  Questions </label></li>
	                <li><input type="radio" value="3" name="your_response" id="q49"/><label for="q49"> Referred student to technical support  (Ask A Librarian) </label></li>   
	                <li><input type="radio" value="9" name="your_response" id="q50"/><label for="q50"> Other: </label>
				
                		<ul class="hidden_other">
	               			<li><label for="q51">(Please specify):</label><input type="text" name="your_response_specify" id="q51" /></li>
						</ul>
					</li>
				</ul>
	</li>
<!--This question has various special things going on, as it is unique in the form -->  

	<li>Did you personally <strong>review</strong> each module in its entirety before assigning it to your students?
		<ul class="nobullet">
			<li><input type="radio" value="0" name="review_module" id="q52"/><label for="q52">No </label>
			</li>

			<li><input type="radio" value="1" name="review_module" id="q53" /><label for="q53">Yes</label></li></ul>
            	
                <ul class="hidden_questions">
					<li>(If yes,) did you find the content to be <strong>appropriate </strong>to the <strong>level of  students </strong>you teach?
                    	<ul>
                        	<li><input type="radio" value="1" name="content_appropriate" id="q55" /><label for="q55">Yes</label></li>
							<li><input type="radio" value="0" name="content_appropriate" id="q54"/><label for="q54">No </label></li></ul>
                            				<ul class="hidden_questions">
					<li>(If no,) which of the following <strong>best</strong> describes the <strong>problem(s)</strong> you observed?
                    	<ul>
							<li><input type="radio" value="1" name="observed_problem" id="q56"/><label for="q56">Content too sophisticated for student level </label></li>
							<li><input type="radio" value="2" name="observed_problem" id="q57"/><label for="q57">Content too simplistic for student level </label></li>
							<li><input type="radio" value="9" name="observed_problem" id="q58"/><label for="q58">Other: </label>
                            	<ul class="hidden_other">
									<li><label for="q59">(Please specify):</label><input type="text" name="observed_problem_specify" id="q59" /></li>
								</ul>
                              </li>
                           </ul>
                           </li>
                           </ul>
                           </li>
                           </ul>

	</li>		  
		  
    <li>Based on your observations of student work, please rate  the modules' level of impact on students' information literacy <strong>knowledge/skills</strong>.

		<ul class="nobullet">
			<li><input type="radio" value="5" name="impact_level" id="q60"/><label for="q60">Very high impact on  knowledge/skills </label></li>
			<li><input type="radio" value="4" name="impact_level" id="q61"/><label for="q61">Somewhat high impact on  knowledge/skills </label></li>
			<li><input type="radio" value="3" name="impact_level" id="q62"/><label for="q62">Neither high nor low impact on  knowledge/skills </label></li>
			<li><input type="radio" value="2" name="impact_level" id="q63"/><label for="q63">Somewhat low impact on  knowledge/skills </label></li>
			<li><input type="radio" value="1" name="impact_level" id="q64"/><label for="q64">Very low impact on knowledge/skills </label></li>
		</ul>
	</li>
			  
	<li>Based upon your experiences this term, how likely or  unlikely are you to assign information literacy modules in <strong>future</strong> semesters?
		<ul class="nobullet">
			<li><input type="radio" value="5" name="likelyhood_infolit" id="q65"/><label for="q65">Very likely </label></li>
			<li><input type="radio" value="4" name="likelyhood_infolit" id="q66"/><label for="q66">Somewhat likely </label></li>
			<li><input type="radio" value="3" name="likelyhood_infolit" id="q67"/><label for="q67">Neither likely nor unlikely </label></li>
			<li><input type="radio" value="2" name="likelyhood_infolit" id="q68"/><label for="q68">Somewhat unlikely </label></li>
			<li><input type="radio" value="1" name="likelyhood_infolit" id="q69"/><label for="q69">Very unlikely </label></li>
		</ul>
	</li>
    
	<li>In the course(s) in which you've integrated modules, what <strong>level </strong>of students do you teach?
		<ul class="nobullet">
			<li><input type="radio" value="5" name="integrated_modules" id="q70"/><label for="q70">Only graduate </label></li>
			<li><input type="radio" value="4" name="integrated_modules" id="q71"/><label for="q71">Primarily graduate </label></li>
			<li><input type="radio" value="3" name="integrated_modules" id="q72"/><label for="q72">An equal number of graduate and undergraduate </label></li>
			<li><input type="radio" value="2" name="integrated_modules" id="q73"/><label for="q73">Primarily undergraduate </label></li>
			<li><input type="radio" value="1" name="integrated_modules" id="q74"/><label for="q74">Only undergraduate </label></li>
		</ul>
	</li>

	<li>In which UCF <strong>college </strong>do you teach primarily?
		<ul class="nobullet">
			<li><input type="radio" value="1"   name="college_teaching" id="q75"/><label for="q75">Arts &amp; Humanities   </label></li>
			<li><input type="radio" value="2" name="college_teaching" id="q76"/><label for="q76">Business Administration </label></li>
			<li><input type="radio" value="3"   name="college_teaching" id="q77"/><label for="q77">Education 			     </label></li>
			<li><input type="radio" value="4"   name="college_teaching" id="q78"/><label for="q78">Engineering &amp; Computer Science </label></li>
			<li><input type="radio" value="5"   name="college_teaching" id="q79"/><label for="q79">Health and Public Affairs </label></li>
			<li><input type="radio" value="6"   name="college_teaching" id="q80"/><label for="q80">Hospitality Management  </label></li>
			<li><input type="radio" value="7"   name="college_teaching" id="q81"/><label for="q81">Medicine </label></li>
			<li><input type="radio" value="8"   name="college_teaching" id="q82"/><label for="q82">Nursing </label></li>
			<li><input type="radio" value="10"   name="college_teaching" id="q83"/><label for="q83">Optics &amp; Photonics </label></li>
			<li><input type="radio" value="11"   name="college_teaching" id="q84"/><label for="q84">Sciences </label></li>
			<li><input type="radio" value="9" name="college_teaching" id="q85"/><label for="q85">Other </label>
				<ul class="hidden_other">
					<li><label for="q86">(Please specify):</label><input type="text" name="college_teaching" id="q86"/></li>
				</ul>
			</li>
		</ul>
	</li>

	<li><label for="q87">Please record any additional comments, suggestions, or  complaints below:</label> <br/>

			<textarea name="additional_comments" id="q87" cols="10" rows="10"></textarea>
	</li>			
</ol>

<input type="submit" name="submit" value="Complete Survey" />

</fieldset>
</form>

<?php include('faculty-footer.php');

?>