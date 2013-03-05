<?php
/*
Template Name: Research Search Strategy Form
*/

include('research-header.php');

?>

<h2>Creating a Search  Strategy</h2>
<form action="http://formmanager.ucf.edu/formsubmit.cfm" method="post">
<fieldset>
<input type="hidden" value="<?php echo get_post_meta($post->ID, 'formmanager', true) ?>" name="id" />

<ol id="upperalpha">
  <li>You used the keyword terms anorexia and  teenagers to search in the library database and got over 200 results. Choose  the answer below that shows how you could focus your search to get fewer  results.
  <ol>
    <li><input id="anorexia1" type="radio" name="anorexia_teenagers" value="anorexia AND teenagers OR adolescents" /><label for="anorexia1">anorexia AND teenagers OR adolescents</label></li>
    <li><input id="anorexia2" type="radio" name="anorexia_teenagers" value="anorexia AND teenagers AND risk factors" /><label for="anorexia2">anorexia AND teenagers AND risk factors</label></li>
    <li><input id="anorexia3" type="radio" name="anorexia_teenagers" value="anorexia AND teenagers OR teens" /><label for="anorexia3">anorexia AND teenagers OR teens</label></li>
  </ol></li>
  <li>You need information about a topic and decide to  use Google. If you're searching Google, what types of information might you  miss?
  <ol>
    <li><input id="google1" type="radio" name="google" value="commercial and educational web sites" /><label for="google1">commercial and educational web sites</label></li>
    <li><input id="google2" type="radio" name="google" value="government sites, personal pages, free articles  from news sites" /><label for="google2">government sites, personal pages, free articles  from news sites</label></li>
    <li><input id="google3" type="radio" name="google" value="peer-reviewed, scholarly journal articles and popular magazines" /><label for="google3">peer-reviewed, scholarly journal articles and popular magazines</label></li>
  </ol></li>
  <li>You searched using the keyword terms: global  warming AND habitats and got over 300 results. Then you searched using the keyword  terms: habitats AND global warming AND birds and got 40 results. Choose the  answer below that describes why you got less results with the second search.
  <ol>
    <li><input id="warming1" type="radio" name="global_warming" value="the second search was broader because it used  AND to combine more terms" /><label for="warming1">the second search was broader because it used  AND to combine more terms</label></li>
    <li><input id="warming2" type="radio" name="global_warming" value="the second search was narrower because it looked for documents that had  all of the keywords" /><label for="warming2">the second search was narrower because it looked for documents that had  all of the keywords</label></li>
    <li><input id="warming3" type="radio" name="global_warming" value="the second search retrieved less items because  the keywords were entered in a different order" /><label for="warming3">the second search retrieved less items because  the keywords were entered in a different order</label></li>
  </ol></li>
  <li>You searched using the keyword terms: baseball  AND doping and got over 335 results. Then you searched using the keyword terms:  doping AND baseball OR football and got 398 results. Choose the answer below that describes why you got more results with the second  search.
  <ol>
    <li><input id="baseball1" type="radio" name="baseball" value="the second search found more matches because the  terms were entered in a different order" /><label for="baseball1">the second search found more matches because the  terms were entered in a different order</label></li>
    <li><input id="baseball2" type="radio" name="baseball" value="the second search found more results because  using AND expands the search" /><label for="baseball2">the second search found more results because  using AND expands the search</label></li>
    <li><input id="baseball3" type="radio" name="baseball" value="the second search was expanded to find results that included either  baseball or football" /><label for="baseball3">the second search was expanded to find results that included either  baseball or football</label></li>
  </ol></li>
  <li>You searched for articles about alcohol and  traffic accidents and got only a few results. Choose the answer below that  includes synonyms you could use to expand your search.
  <ol>
    <li><input id="alcohol1" type="radio" name="alcohol" value="drunk driving AND alcohol AND deaths" /><label for="alcohol1">drunk driving AND alcohol AND deaths</label></li>
    <li><input id="alcohol2" type="radio" name="alcohol" value="alcohol OR drunk driving AND traffic accidents" /><label for="alcohol2">alcohol OR drunk driving AND traffic accidents</label></li>
    <li><input id="alcohol3" type="radio" name="alcohol" value="alcohol AND drunk driving OR deaths" /><label for="alcohol3">alcohol AND drunk driving OR deaths</label></li>
  </ol></li>
  <li>You need information for the following topic:  How does camera surveillance influence the number of traffic accidents?  Identify the main concepts in this topic question.
  <ol>
    <li><input id="surveillance1" type="radio" name="surveillance" value="how does camera surveillance, influence  accidents" /><label for="surveillance1">how does camera surveillance, influence  accidents</label></li>
    <li><input id="surveillance2" type="radio" name="surveillance" value="influence, camera surveillance, accidents" /><label for="surveillance2">influence, camera surveillance, accidents</label></li>
    <li><input id="surveillance3" type="radio" name="surveillance" value="camera surveillance, traffic accidents" /><label for="surveillance3">camera surveillance, traffic accidents</label></li>
  </ol></li>
  <li>You need to find 5 research articles about the  prevention of identity theft. Choose the answer that describes the most  effective search strategy.
  <ol>
    <li><input id="identity1" type="radio" name="identity_theft" value="use Google combining the terms identity theft  AND prevention" /><label for="identity1">use Google combining the terms identity theft  AND prevention</label></li>
    <li><input id="identity2" type="radio" name="identity_theft" value="use   Wikipedia combining the terms identity AND theft AND prevention" /><label for="identity2">use   Wikipedia combining the terms identity AND theft AND prevention</label></li>
    <li><input id="identity3" type="radio" name="identity_theft" value="use a library database combining the terms identity theft AND  prevention" /><label for="identity3">use a library database combining the terms identity theft AND  prevention</label></li>
  </ol></li>
<li>You searched for articles about migraines and  acupuncture and only got a few results. Choose the answer below that is the  best strategy to expand your search and get more relevant articles.
  <ol>
    <li><input id="migraines1" type="radio" name="migraines" value="migraines AND headaches AND acupuncture" /><label for="migraines1">migraines AND headaches AND acupuncture</label></li>
    <li><input id="migraines2" type="radio" name="migraines" value="migraines OR headaches AND acupuncture" /><label for="migraines2">migraines OR headaches AND acupuncture</label></li>
    <li><input id="migraines3" type="radio" name="migraines" value="migraines OR headaches OR acupuncture" /><label for="migraines3">migraines OR headaches OR acupuncture</label></li>
  </ol></li>
<li>You searched for articles about learning  disabilities and reading comprehension and got over 300 articles. Choose the  answer below that includes a keyword combination that you could use to focus  your search and limit the number of results.
  <ol>
    <li><input id="disabilities1" type="radio" name="disabilities" value="dyslexia AND reading comprehension" /><label for="disabilities1">dyslexia AND reading comprehension</label></li>
    <li><input id="disabilities2" type="radio" name="disabilities" value="learning disabilities OR dyslexia AND reading  comprehension" /><label for="disabilities2">learning disabilities OR dyslexia AND reading  comprehension</label></li>
    <li><input id="disabilities3" type="radio" name="disabilities" value="learning disabilities OR dyslexia OR reading  comprehension" /><label for="disabilities3">learning disabilities OR dyslexia OR reading  comprehension</label></li>
  </ol></li>
<li>Choose the combination of keywords you would use  to search for articles about using music as a therapy treatment for someone who  is in a coma.
  <ol>
    <li><input id="music1" type="radio" name="music" value="music therapy AND comas" /><label for="music1">music therapy AND comas</label></li>
    <li><input id="music2" type="radio" name="music" value="treatment OR comas" /><label for="music2">treatment OR comas</label></li>
    <li><input id="music3" type="radio" name="music" value="music therapy OR comas" /><label for="music3">music therapy OR comas</label></li>
  </ol></li>
</ol>
<input type="submit" value="Submit"/>
</fieldset></form>
<?php include('student-footer.php'); ?>