<?php
/*
Template Name: Research Focusing Form
*/

include('research-header.php');

?>

<h2>Focusing an Information Search</h2>
<form action="http://formmanager.ucf.edu/formsubmit.cfm" method="post">
<fieldset>
<input type="hidden" value="<?php echo get_post_meta($post->ID, 'formmanager', true) ?>" name="id" />

<ol id="upperalpha">
  <li>Which answer shows the best example of how to  search for an exact phrase using Academic Search Premier?
  <ol>
    <li><input id="search1" type="radio" name="search" value="prescription and drugs" /><label for="search1">prescription and drugs</label></li>
    <li><input id="search2" type="radio" name="search" value="&quot;prescription drugs&quot;" /><label for="search2">&quot;prescription drugs&quot;</label></li>
    <li><input id="search3" type="radio" name="search" value="prescription drugs" /><label for="search3">prescription drugs</label></li>
  </ol></li>
<li>Which answer best describes keyword and subject  searches?
  <ol>
    <li><input id="keyword1" type="radio" name="keyword" value="Both keyword and subject searches are useful,  but keyword searches can help eliminate many irrelevant articles" /><label for="keyword1">Both keyword and subject searches are useful,  but keyword searches can help eliminate many irrelevant articles.</label></li>
    <li><input id="keyword2" type="radio" name="keyword" value="Keyword searches look for  articles that include a particular word or phrase, and subject searches look  for articles that are focused on a topic" /><label for="keyword2">Keyword searches look for  articles that include a particular word or phrase, and subject searches look  for articles that are focused on a topic.</label></li>
    <li><input id="keyword3" type="radio" name="keyword" value="Using  subject terms is the best way to search, and once you know the right subject  terms, you will no longer need to use keyword searches" /><label for="keyword3">Using  subject terms is the best way to search, and once you know the right subject  terms, you will no longer need to use keyword searches.</label></li>
  </ol></li>
  <li>You started to search for articles about the death penalty using keywords  and retrieved the results below. Select the answer that includes the most  relevant article you can use to find subject terms to redo your search.
<p><img src="/wp-content/themes/infolit/images/Infolit_Study-Focusing_an_Information_Search_Quiz_clip_image002.jpg" alt="Screen contains a question with a search box that includes the words: &quot;death penalty&quot; and three answer choices." /></p>
  <ol>
    <li><input id="penalty1" type="radio" name="death_penalty" value="Hotline Extra" /><label for="penalty1">Answer A <span class="hidden_alt"><cite>Hotline Extra</cite>. By: Swanson, Neil. National Journal, 3/16/2002, Vol. 34 Issue 11, p808, 2p, 3 bw; (<em>AN 6430468</em>)</span></label></li>
    <li><input id="penalty2" type="radio" name="death_penalty" value="Falling Out: The United States in the Global  Community." /><label for="penalty2">Answer B <span class="hidden_alt"><cite>Falling Out: The United States in the Global  Community</cite>. By: Hook, Steven W.. International Studies Review, Dec2008, Vol. 10 Issue 4, p776-781, 6p; DOI: 10.1111/j.1468-2486.2008.00832.x; (<em>AN 3532382</em>)</span></label></li>
    <li><input id="penalty3" type="radio" name="death_penalty" value="Kinder, gentler, and more  capricious: The death penalty after Atkins V. Virginia" /><label for="penalty3">Answer C <span class="hidden_alt"><cite>Kinder, gentler, and more  capricious: The death penalty after Atkins V. Virginia</cite>. By: Romano, John F.. St. John's Law Review, Winter2003, Vol. 77 Issue 1, p123, 33p; (<em>AN 9807697</em>)</span></label></li>
  </ol></li>
  <li>Which answer includes the best strategy for  finding the right subject terms to use in Academic Search Premier?
  <ol>
    <li><input id="strategy1" type="radio" name="strategy" value="Use a keyword search, find the subject terms in  an article record, and redo the search with the keyword terms in quotes." /><label for="strategy1">Use a keyword search, find the subject terms in  an article record, and redo the search with the keyword terms in quotes.</label></li>
    <li><input id="strategy2" type="radio" name="strategy" value="Use a keyword search, find the subject terms in  an article record, redo the search truncating the subject terms, and use the  keyword search option." /><label for="strategy2">Use a keyword search, find the subject terms in  an article record, redo the search truncating the subject terms, and use the  keyword search option.</label></li>
    <li><input id="strategy3" type="radio" name="strategy" value="Use a keyword search, find the subject terms in an article record,  redo the search with the subject terms in quotes, and use the Subject Terms  search option." /><label for="strategy3">Use a keyword search, find the subject terms in an article record,  redo the search with the subject terms in quotes, and use the Subject Terms  search option.</label></li>
  </ol></li>
  <li>Click on A, B, or C to choose the best search strategy that will retrieve the greatest number of relevant articles about the effect that peer pressure has on cigarette smoking in adolescence. <p><img src="/wp-content/themes/infolit/images/Infolit_Study-Focusing_an_Information_Search_Quiz_clip_image004.jpg" alt="Screen contains a question, three search boxes with search terms, and three answer choices." /></p>
  <ol>
    <li><input id="strat1" type="radio" name="search_strategy" value='"cigarette smoking" AND peer pressure AND adolescents' /><label for="strat1">Answer A <span class="hidden_alt">"cigarette smoking" AND peer pressure AND adolescents</span></label></li>
    <li><input id="strat2" type="radio" name="search_strategy" value='"peer pressure" AND cigarette smoking AND adolescents' /><label for="strat2">Answer B <span class="hidden_alt">"peer pressure" AND cigarette smoking AND adolescents</span></label></li>
    <li><input id="strat3" type="radio" name="search_strategy" value='"peer pressure" AND "cigarette smoking" AND adolescen*' /><label for="strat3">Answer C <span class="hidden_alt">"peer pressure" AND "cigarette smoking" AND adolescen*</span></label></li>
  </ol></li>
  <li>You are searching for articles about autism.  What is the best way to retrieve the most articles about this topic?
  <ol>
    <li><input id="autism1" type="radio" name="autism" value="autism*" /><label for="autism1">autism*</label></li>
    <li><input id="autism2" type="radio" name="autism" value="autistic*" /><label for="autism2">autistic*</label></li>
    <li><input id="autism3" type="radio" name="autism" value="autis*" /><label for="autism3">autis*</label></li>
  </ol></li>
  <li>Click on A, B, or C to choose the answer that best describes what will happen if you used the search below.
<p><img src="/wp-content/themes/infolit/images/Infolit_Study-Focusing_an_Information_Search_Quiz_clip_image006.jpg" alt="Screen contains a question, a search box that includes the words: social security, and three answer choices." /></p>
  <ol>
    <li><input id="social1" type="radio" name="social_security" value="The database may not  necessarily find the words right next to each other" /><label for="social1">Answer A <span class="hidden_alt">The database may not  necessarily find the words right next to each other.</span></label></li>
    <li><input id="social2" type="radio" name="social_security" value="Social security will be searched as a phrase  used in articles" /><label for="social2">Answer B <span class="hidden_alt">Social security will be searched as a phrase  used in articles.</span></label></li>
    <li><input id="social3" type="radio" name="social_security" value="The database will search for the words as  subject terms" /><label for="social3">Answer C <span class="hidden_alt">The database will search for the words as  subject terms.</span></label></li>
  </ol></li>
  <li>You determined that the phrase amusement rides  is a subject term. You use a subject search with this exact phrase. What  articles will you retrieve?
  <ol>
    <li><input id="rides1" type="radio" name="amusement_rides" value="Articles about amusement  rides, no matter what words the author used in the article text" /><label for="rides1">Articles about amusement  rides, no matter what words the author used in the article text.</label></li>
    <li><input id="rides2" type="radio" name="amusement_rides" value="Articles with the words amusement rides in the  title" /><label for="rides2">Articles with the words amusement rides in the  title.</label></li>
    <li><input id="rides3" type="radio" name="amusement_rides" value="Articles where the two words are found together  anywhere in the title or article text" /><label for="rides3">Articles where the two words are found together  anywhere in the title or article text.</label></li>
  </ol></li>
  <li>You found that college graduates and employment are subject  terms. Choose the answer below that shows the most focused search you can use  to find articles about these topics.
<p><img src="/wp-content/themes/infolit/images/Infolit_Study-Focusing_an_Information_Search_Quiz_clip_image008.jpg" alt="Screen contains a question, three search boxes with  search terms, and three answer choices." /></p>
  <ol>
    <li><input id="grads1" type="radio" name="college_grads" value="college  graduates AND employment = subject terms" /><label for="grads1">Answer A <span class="hidden_alt">college  graduates AND employment = subject terms</span></label></li>
    <li><input id="grads2" type="radio" name="college_grads" value="&ldquo;college graduates&rdquo; =  subject terms AND employment = subject terms" /><label for="grads2">Answer B <span class="hidden_alt">&ldquo;college graduates&rdquo; =  subject terms AND employment = subject terms</span></label></li>
    <li><input id="grads3" type="radio" name="college_grads" value="&ldquo;college  graduates&rdquo; AND employment" /><label for="grads3">Answer C <span class="hidden_alt">&ldquo;college  graduates&rdquo; AND employment</span></label></li>
  </ol></li>
  <li>Click on A, B, or C to choose the search strategy that will  retrieve the most focused results.
<p><img src="/wp-content/themes/infolit/images/Infolit_Study-Focusing_an_Information_Search_Quiz_clip_image010.jpg" alt="Screen contains a question, three search boxes with  search terms, and three answer choices." /></p>
  <ol>
    <li><input id="diet1" type="radio" name="diet" value="low fat  diet AND cholesterol" /><label for="diet1">Answer A <span class="hidden_alt">low fat  diet AND cholesterol</span></label></li>
    <li><input id="diet2" type="radio" name="diet" value="&ldquo;low fat diet&rdquo; =  subject terms AND cholesterol = subject terms" /><label for="diet2">Answer B <span class="hidden_alt">&ldquo;low fat diet&rdquo; =  subject terms AND cholesterol = subject terms</span></label></li>
    <li><input id="diet3" type="radio" name="diet" value="&ldquo;low fat  diet&rdquo; AND cholesterol" /><label for="diet3">Answer C <span class="hidden_alt">&ldquo;low fat  diet&rdquo; AND cholesterol</span></label></li>
  </ol></li>
  <li>You are searching for articles about  impressionist artists and their choice of color pigments. Choose the answer  below that shows the correct way to search for variations of the word pigment.
  <ol>
    <li><input id="color1" type="radio" name="color" value="pigments*" /><label for="color1">pigments*</label></li>
    <li><input id="color2" type="radio" name="color" value="pig*" /><label for="color2">pig*</label></li>
    <li><input id="color3" type="radio" name="color" value="pigment*" /><label for="color3">pigment*</label></li>
  </ol></li>
  <li>
Look over the subject terms listed in the answers below. Select the answer that includes the most relevant subject terms you can use to search for articles about the death penalty.
<p><img src="/wp-content/themes/infolit/images/Infolit_Study-Focusing_an_Information_Search_Quiz_clip_image012.jpg" alt="Screen contains a question and three answer choices." /></p>
  <ol>
    <li><input id="articles1" type="radio" name="death_penalty_articles" value="Books – Reviews, Nonfiction United States—Foreign relations" /><label for="articles1">Answer A <span class="hidden_alt">Books – Reviews, Nonfiction United States—Foreign relations</span></label></li>
    <li><input id="articles2" type="radio" name="death_penalty_articles" value="Legislators – United States, United States – Politics &amp;  government, Gore, Albert, 1948--, Scalia, Antonin" /><label for="articles2">Answer B <span class="hidden_alt">Legislators – United States, United States – Politics &amp;  government, Gore, Albert, 1948--, Scalia, Antonin</span></label></li>
    <li><input id="articles3" type="radio" name="death_penalty_articles" value="Capital Punishment,  Murder, People with mental disabilities, Teenagers" /><label for="articles3">Answer C <span class="hidden_alt">Capital Punishment,  Murder, People with mental disabilities, Teenagers</span></label></li>
  </ol></li></ol>
<input type="submit" value="Submit"/>
</fieldset></form>
<?php include('student-footer.php'); ?>