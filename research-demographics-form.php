<?php
/*
Template Name: Research Demographics Form
*/

include('research-header.php');

?>

<h2>Information Literacy  Modules Study - Demographic Questionnaire </h2>
<form action="http://formmanager.ucf.edu/formsubmit.cfm" method="post">
<fieldset>
<input type="hidden" value="<?php echo get_post_meta($post->ID, 'formmanager', true) ?>" name="id" />
<legend>
Please select the most correct choice to  answer each question.</legend>
<ol id="upperalpha">
  <li><label for="first">First</label>  and <label for="last">last name</label> <input id="first" type="text" name="first" />    <input id="last" type="text" name="last" /></li>
  <li>What is the total number of  classes you are enrolled in this semester?
  <ol>
    <li><input id="enrolled1" type="radio" name="enrolled" value="1 to 2" /><label for="enrolled1">1 to 2</label></li>
    <li><input id="enrolled2" type="radio" name="enrolled" value="3 to 4" /><label for="enrolled2">3 to 4</label></li>
    <li><input id="enrolled3" type="radio" name="enrolled" value="More  than 4 classes" /><label for="enrolled3">More  than 4 classes</label></li>
  </ol></li>
  <li>What is your gender?
  <ol>
  <li><input id="gender1" type="radio" name="gender" value="Male" /><label for="gender1">Male</label></li>
  <li><input id="gender2" type="radio" name="gender" value="Female" /><label for="gender2">Female</label></li>
  </ol></li>
  <li>How do you describe yourself?
  <ol>
  <li><input id="yourself1" type="radio" name="yourself" value="Asian,  Asian American, or Pacific Islander" /><label for="yourself1">Asian,  Asian American, or Pacific Islander</label></li>
  <li><input id="yourself2" type="radio" name="yourself" value="Black  or African American" /><label for="yourself2">Black  or African American</label></li>
  <li><input id="yourself3" type="radio" name="yourself" value="Hispanic  or Latino" /><label for="yourself3">Hispanic  or Latino</label></li>
  <li><input id="yourself4" type="radio" name="yourself" value="White  (non-Hispanic)" /><label for="yourself4">White  (non-Hispanic)</label></li>
  <li><input id="yourself5" type="radio" name="yourself" value="Other" /><label for="yourself5">Other</label></li>
  </ol></li>
  <li>Do you communicate better (or as  well) in English than in any other language?
  <ol>
    <li><input id="english1" type="radio" name="english" value="Yes" /><label for="english1">Yes</label></li>
    <li><input id="english2" type="radio" name="english" value="No" /><label for="english2">No</label></li>
  </ol></li>
  <li>Which  of the following is closest to your overall GPA?
  <ol>
    <li><input id="GPA1" type="radio" name="GPA" value="A" /><label for="GPA1">A</label></li>
    <li><input id="GPA2" type="radio" name="GPA" value="B" /><label for="GPA2">B</label></li>
    <li><input id="GPA3" type="radio" name="GPA" value="C" /><label for="GPA3">C</label></li>
    <li><input id="GPA4" type="radio" name="GPA" value="D" /><label for="GPA4">D</label></li>
  </ol></li>
  <li>Overall, how would you rate your  ability to search the Internet to find information for class assignments?
  <ol>
  <li><input id="ability1" type="radio" name="ability" value="Excellent" /><label for="ability1">Excellent</label></li>
  <li><input id="ability2" type="radio" name="ability" value="Good" /><label for="ability2">Good</label></li>
  <li><input id="ability3" type="radio" name="ability" value="Average" /><label for="ability3">Average</label></li>
  <li><input id="ability4" type="radio" name="ability" value="Poor" /><label for="ability4">Poor</label></li>
  </ol></li>
  <li>Overall, how would you rate your  ability to search library databases to find information for class assignments?
  <ol>
  <li><input id="library1" type="radio" name="library" value="Excellent" /><label for="library1">Excellent</label></li>
  <li><input id="library2" type="radio" name="library" value="Good" /><label for="library2">Good</label></li>
  <li><input id="library3" type="radio" name="library" value="Average" /><label for="library3">Average</label></li>
  <li><input id="library4" type="radio" name="library" value="Poor" /><label for="library4">Poor</label></li>
  </ol></li>
  <li>What is your current education  level?
  <ol>
    <li><input id="education1" type="radio" name="education" value="Freshman" /><label for="education1">Freshman</label></li>
    <li><input id="education2" type="radio" name="education" value="Sophomore" /><label for="education2">Sophomore</label></li>
    <li><input id="education3" type="radio" name="education" value="Junior" /><label for="education3">Junior</label></li>
    <li><input id="education4" type="radio" name="education" value="Senior" /><label for="education4">Senior</label></li>
  </ol></li>
  <li>Last semester, how many library  instruction sessions did you attend that were either taught by a librarian in  the library or where a librarian came to your class at UCF?
  <ol>
  <li><input id="librarian1" type="radio" name="librarian" value="0" /><label for="librarian1">0</label></li>
  <li><input id="librarian2" type="radio" name="librarian" value="1 to 2" /><label for="librarian2">1 to 2</label></li>
  <li><input id="librarian3" type="radio" name="librarian" value="More  than 2 sessions" /><label for="librarian3">More than 2 sessions</label></li>
  </ol></li>
  <li>Last semester, about how often  did you use library resources to complete a class assignment?
  <ol>
  <li><input id="resources1" type="radio" name="resources" value="Weekly" /><label for="resources1">Weekly</label></li>
  <li><input id="resources2" type="radio" name="resources" value="Monthly" /><label for="resources2">Monthly</label></li>
  <li><input id="resources3" type="radio" name="resources" value="Rarely" /><label for="resources3">Rarely</label></li>
  <li><input id="resources4" type="radio" name="resources" value="Never" /><label for="resources4">Never</label></li>
  </ol></li>
  <li>Last semester, did you access or  use any of the following UCF information literacy modules: Creating a Search  Strategy, Focusing an Information Search, or Evaluating Web Sites?
  <ol>
  <li><input id="modules1" type="radio" name="modules" value="Yes (go to question 13)" /><label for="modules1">Yes (go to question 13)</label></li>
  <li><input id="modules2" type="radio" name="modules" value="No  (skip to question 14)" /><label for="modules2">No  (skip to question 14)</label></li>
  </ol></li>
  <li> Which information literacy modules have you  accessed or used? (Select all that apply.)
  <ol>
    <li><input id="accessed1" type="checkbox" name="accessed" value="Creating a Search Strategy" /><label for="accessed1">Creating a Search Strategy</label></li>
    <li><input id="accessed2" type="checkbox" name="accessed" value="Focusing an Information Search" /><label for="accessed2">Focusing an Information Search</label></li>
    <li><input id="accessed3" type="checkbox" name="accessed" value="Evaluating Web Sites" /><label for="accessed3">Evaluating  Web Sites</label></li>
  </ol></li>
  <li>Last semester, did you access or  complete any online library instructional materials (such as tutorials, guides  or videos) at UCF or at another institution you attended?
  <ol>
    <li><input id="instructional1" type="radio" name="instructional" value="Yes" /><label for="instructional1">Yes</label></li>
    <li><input id="instructional2" type="radio" name="instructional" value="No" /><label for="instructional2">No</label></li>
  </ol></li>
  <li>Last semester, about how many  times did you get online help from the UCF library or from another library with  questions about search strategies or evaluating web sites?
  <ol>
  <li><input id="help1" type="radio" name="help" value="0" /><label for="help1">0</label></li>
  <li><input id="help2" type="radio" name="help" value="1 to 2" /><label for="help2">1 to 2</label></li>
  <li><input id="help3" type="radio" name="help" value="More than 2 times" /><label for="help3">More than 2 times</label></li>
</ol></li>
</ol>
<input type="submit" value="Submit"/>
</fieldset></form>
<p><a href="<?php echo get_post_meta($post->ID, 'courselink', true) ?>">Back to the Instructions Page for the Information Literacy Modules Study</a></p>

<p><em>Some questions are used  and/or adapted with permission from: </em>Beile O'Neil, P. M.  (2005). <cite>Development and validation of the beile test of information literacy  for education (B-TILED)</cite>. (Doctoral dissertation). Retrieved from ProQuest  Dissertations and Theses. (Order Number 3193465)</p>

<?php include('student-footer.php'); ?>