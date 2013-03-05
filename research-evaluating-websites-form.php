<?php
/*
Template Name: Research Evaluating Websites Form
*/

include('research-header.php');

?>
<h2>Evaluating Web Sites</h2>
<form action="http://formmanager.ucf.edu/formsubmit.cfm" method="post">
<fieldset>
<input type="hidden" value="<?php echo get_post_meta($post->ID, 'formmanager', true) ?>" name="id" />
<ol id="upperalpha">
  <li>You've stumbled upon a web site that looks  legitimate with nifty statistics you can use for your research paper. What is  the next step you should take?
  <ol>
    <li><input id="legitimate1" type="radio" name="legitimate" value="Write down the URL and the date you accessed the  site so you can correctly cite it in your paper" /><label for="legitimate1">Write down the URL and the date you accessed the  site so you can correctly cite it in your paper.</label></li>
    <li><input id="legitimate2" type="radio" name="legitimate" value="Check on the site in Wikipedia to see what  people have said about it" /><label for="legitimate2">Check on the site in Wikipedia to see what  people have said about it.</label></li>
    <li><input id="legitimate3" type="radio" name="legitimate" value="Check the source of the statistics to determine whether they're from a  reliable source" /><label for="legitimate3">Check the source of the statistics to determine whether they're from a  reliable source.</label></li>
    <li><input id="legitimate4" type="radio" name="legitimate" value="Google the statistics to double-check them on  another web site" /><label for="legitimate4">Google the statistics to double-check them on  another web site.</label></li>
  </ol></li>
  <li>Web sites that present a variety of viewpoints  about a topic describe which of the following?
  <ol>
    <li><input id="viewpoints1" type="radio" name="viewpoints" value="objectivity" /><label for="viewpoints1">objectivity</label></li>
    <li><input id="viewpoints2" type="radio" name="viewpoints" value="authority" /><label for="viewpoints2">authority</label></li>
    <li><input id="viewpoints3" type="radio" name="viewpoints" value="accuracy" /><label for="viewpoints3">accuracy</label></li>
    <li><input id="viewpoints4" type="radio" name="viewpoints" value="currency" /><label for="viewpoints4">currency</label></li>
  </ol></li>
  <li>You have to write a paper on Scientology. You  started with Wikipedia and found a link to a .org site with a complete history  of Scientology. Can you use this site for your paper?
  <ol>
    <li><input id="Scientology1" type="radio" name="Scientology" value="Yes, it's linked from Wikipedia, so it's  reliable. You just need to cite it correctly in your paper" /><label for="Scientology1">Yes, it's linked from Wikipedia, so it's  reliable. You just need to cite it correctly in your paper.</label></li>
    <li><input id="Scientology2" type="radio" name="Scientology" value="No, it's linked from Wikipedia, so it's not a  reliable site" /><label for="Scientology2">No, it's linked from Wikipedia, so it's not a  reliable site.</label></li>
    <li><input id="Scientology3" type="radio" name="Scientology" value="Yes, but only if you can tell who wrote the information on the site and  whether the sources of their information are reliable" /><label for="Scientology3">Yes, but only if you can tell who wrote the information on the site and  whether the sources of their information are reliable.</label></li>
    <li><input id="Scientology4" type="radio" name="Scientology" value="No, for a complete history of Scientology, you  should rely solely on books" /><label for="Scientology4">No, for a complete history of Scientology, you  should rely solely on books.</label></li>
  </ol></li>
  <li>Victor searched the web and found a great site  for treatments to help a friend quit smoking. The web site has information on  current medicines available to treat tobacco addiction and a list of  alternative treatments used to treat addiction. After reviewing the information  on the web site, Victor noticed that some sections weren't finished and there  were a few spelling and grammar errors in other sections. What does this  information suggest about the reliability of the source Victor found?
  <ol>
    <li><input id="smoking1" type="radio" name="smoking" value="The lack of complete information shows that  Victor needs to check back later when the site is updated since it was the best  site that showed up near the top of the results list when Victor searched" /><label for="smoking1">The lack of complete information shows that  Victor needs to check back later when the site is updated since it was the best  site that showed up near the top of the results list when Victor searched.</label></li>
    <li><input id="smoking2" type="radio" name="smoking" value="The site lacks quality control because the information isn't complete  and it's not well written. It would be better to look for trusted medical web  sites for information on the topic" /><label for="smoking2">The site lacks quality control because the information isn't complete  and it's not well written. It would be better to look for trusted medical web  sites for information on the topic.</label></li>
    <li><input id="smoking3" type="radio" name="smoking" value="The lack of complete information doesn't matter,  it's a start at finding information and since Victor plans to use other sources  it will be one of many sites with options" /><label for="smoking3">The lack of complete information doesn't matter,  it's a start at finding information and since Victor plans to use other sources  it will be one of many sites with options.</label></li>
  </ol></li>
  <li>Checking an author's credentials and the background  of the organization that runs a web site will help you determine how reliable  the information is based on which of the following criteria?
  <ol>
    <li><input id="credentials1" type="radio" name="credentials" value="accuracy" /><label for="credentials1">accuracy</label></li>
    <li><input id="credentials2" type="radio" name="credentials" value="authority" /><label for="credentials2">authority</label></li>
    <li><input id="credentials3" type="radio" name="credentials" value="coverage" /><label for="credentials3">coverage</label></li>
    <li><input id="credentials4" type="radio" name="credentials" value="currency" /><label for="credentials4">currency</label></li>
    <li><input id="credentials5" type="radio" name="credentials" value="objectivity" /><label for="credentials5">objectivity</label></li>
  </ol></li>
  <li>A web site that doesn't give any indication of  when the information was published violates which of the following?
  <ol>
    <li><input id="published1" type="radio" name="published" value="accuracy" /><label for="published1">accuracy</label></li>
    <li><input id="published2" type="radio" name="published" value="authority" /><label for="published2">authority</label></li>
    <li><input id="published3" type="radio" name="published" value="coverage" /><label for="published3">coverage</label></li>
    <li><input id="published4" type="radio" name="published" value="currency" /><label for="published4">currency</label></li>
    <li><input id="published5" type="radio" name="published" value="objectivity" /><label for="published5">objectivity</label></li>
  </ol></li>
  <li>You are looking for information on global  warming and end up at the Heartland Institute web site. What can you determine  from the titles of their available research?
<p>The titles include:</p>
<ul>
  <li>New Aerosol Study  Refutes Global Warming Theory</li>
  <li>False Permafrost  Scare</li>
  <li>Scientist Says CO2  Not Main Cause of Warming</li>
  <li>Don't Let the  Critics Bug You: Benefits of Increased CO2 Outweigh Risks from Insects</li>
  <li>Icy, Not Dicey: Even  in the Tundra Way Down Under, CO2 Helps Plants Thrive</li>
</ul>
<ol>
  <li><input id="Heartland1" type="radio" name="Heartland_Institute" value="The Heartland Institute has a balanced point of  view of the topic" /><label for="Heartland1">The Heartland Institute has a balanced point of  view of the topic.</label></li>
  <li><input id="Heartland2" type="radio" name="Heartland_Institute" value="The Heartland Institute is giving both sides of  the issue" /><label for="Heartland2">The Heartland Institute is giving both sides of  the issue.</label></li>
  <li><input id="Heartland3" type="radio" name="Heartland_Institute" value="The Heartland Institute has a point of view or bias of the topic" /><label for="Heartland3">The Heartland Institute has a point of view or bias of the topic.</label></li>
  <li><input id="Heartland4" type="radio" name="Heartland_Institute" value="The Heartland Institute is a source for most of  the research on global warming" /><label for="Heartland4">The Heartland Institute is a source for most of  the research on global warming.</label></li>
</ol></li>
  <li>You found a tax web site that has links to  &quot;faster refunds&quot; and &quot;IRS e-file,&quot; but you notice it's  mostly graphics and it asks for personal information. What would you do to find  out if the site is legitimate?
  <ol>
    <li><input id="tax1" type="radio" name="tax" value="Give it a try. You can always fill out the  online forms and then decide to exit the site" /><label for="tax1">Give it a try. You can always fill out the  online forms and then decide to exit the site.</label></li>
    <li><input id="tax2" type="radio" name="tax" value="Check the URL and if it's not a personal site,  use it to get a faster refund this year" /><label for="tax2">Check the URL and if it's not a personal site,  use it to get a faster refund this year.</label></li>
    <li><input id="tax3" type="radio" name="tax" value="Check the URL and if it's not a .gov site, look for the IRS.gov site" /><label for="tax3">Check the URL and if it's not a .gov site, look for the IRS.gov site.</label></li>
    <li><input id="tax4" type="radio" name="tax" value="Click a few of the links and if they're active,  that's a good sign" /><label for="tax4">Click a few of the links and if they're active,  that's a good sign.</label></li>
  </ol></li>
  <li>You noticed that you are developing wrinkles  that are beginning to be a bit unsightly. You just googled Botox and found a  great web site with articles on the procedure.
<p>Here are the first  titles on the list:</p>
<ul>  
  <li>2/25/03 Allergan's  Botox Product Receives Approval in France for the Treatment of Glabellar Lines</li>
  <li>2/4/03 1st Clinical  Study Tests the Effectiveness of Botox(R) In Reducing Wrinkles on the Chin</li>
  <li>2/4/03 Botox  Facelift without Surgery</li>
  <li>4/19/02 Small  Plastic Surgery Procedures Yield Big Results</li>
</ul>
<p>Is this a good web  site based on the list of articles?</p>
<ol>
  <li><input id="botox1" type="radio" name="botox" value="Yes, the site is well-organized and the coverage  of the topic is excellent" /><label for="botox1">Yes, the site is well-organized and the coverage  of the topic is excellent.</label></li>
  <li><input id="botox2" type="radio" name="botox" value="No, the dates of the articles are too old" /><label for="botox2">No, the dates of the articles are too old.</label></li>
  <li><input id="botox3" type="radio" name="botox" value="No, the articles are not relevant" /><label for="botox3">No, the articles are not relevant.</label></li>
  <li><input id="botox4" type="radio" name="botox" value="Yes, the articles are right on target" /><label for="botox4">Yes, the articles are right on target.</label></li>
</ol></li>
  <li>Verifying factual information found on a web  site, either by checking the references or checking a trusted source, describes  which of the following criteria?
  <ol>
    <li><input id="factual1" type="radio" name="factual" value="accuracy" /><label for="factual1">accuracy</label></li>
    <li><input id="factual2" type="radio" name="factual" value="coverage" /><label for="factual2">coverage</label></li>
    <li><input id="factual3" type="radio" name="factual" value="currency" /><label for="factual3">currency</label></li>
    <li><input id="factual4" type="radio" name="factual" value="objectivity" /><label for="factual4">objectivity</label></li>
  </ol></li>
</ol>
<input type="submit" value="Submit"/>
</fieldset></form>

<?php include('student-footer.php'); ?>