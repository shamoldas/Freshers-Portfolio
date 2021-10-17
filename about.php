
<?php

include('navbar.php');
?>

<section>

      <div class="container">
        
        <div class="row">
          <div class="col-md-12">
             <hr><center><h3 style="color: green;word-spacing: 2.5em;"><b><span style="text-decoration: line-through;">Experience</span> I'm <em style="font-size: 1.5em;">Fresher's</em></b></h3></center>

          </div>
        </div>
      </div>
</section>

<section>


        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
					<figure>
						<picture>
							<img src="images/shamol.jpg" class="img-thumbnail" >
							<source srcset="assets/image/cp100x50.jpeg" media="(max-width: 480px)">							

						</picture>	
					</figure>
                </div>
                <div class="col-md-6">
					<div id="contentDiv"></div>
				</div>
            </div>
        </div>

</section>

<script>
const printSentence = (id, sentence, speed = 50) => {
  let index = 0;
  let element = document.getElementById(id);
  
  let timer = setInterval(function() {
    const char = sentence[index];
    
    if (char === '<') {
      index = sentence.indexOf('>', index);  // skip to greater-than
    }
    
    element.innerHTML = sentence.slice(0, index);
    
    if (++index === sentence.length) {
      clearInterval(timer);
    }
  }, speed);
} // printSentence

printSentence(
  'contentDiv',
  'ভরসা রাখুন আপনার যেকোনো ধরনের জরুরী ডকুমেন্ট ডেলিভারির জন্য Jet Courier BD আছে আপনার বিশ্বস্ত সহযোগী হিসেবে। <span style="color:gold;">Developer:</span><strong>Shamol Das</strong>.<ul><li>এক্সপ্রেস ডেলিভারি অপশনের মাধ্যমে ৪-৬ ঘন্টার মধ্যে ডেলিভারির জন্য পাবেন। (শুধুমাত্র ....)।<li>আমরা ক্যাশ অন ডেলিভারি অর্থাৎ কোন রকম অ্যাডভান্স না দিয়ে ডেলিভারির সময় ক্যাশ প্রদান করে ডেলিভারি রিসিভ করার সুবিধা দিয়ে থাকি।<li>আপনার সকল প্রয়োজনে অথবা জিজ্ঞাসায় আছে কল সেন্টার সাপোর্ট সেন্টার।<li>আপনার ব্যবসার বিশ্বস্ত ও আদর্শ সিস্টেম আপনি পাচ্ছেন সবচেয়ে দ্রুত ডেলিভারি<li>আস্থা রাখুন নির্ভয়ে<li>#FastDelivery #SafetyFirst<li>আপনার প্রয়োজনীয় তাই আমাদের কাছে সবচেয়ে বেশি গুরুত্বপূর্ণ।</ul><table><tr>for more information</tr></table>',
  50
);
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" type="text/javascript"></script>

<section>
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<h3><i class="	fas fa-american-sign-language-interpreting"></i><b>My Objective</b></h3>
				<ol>
					<p>To be a highly competent human capital through extensive innovate work. Utilize the potentiality through hard work and devote myself for the development and peace of the nation and all humanity.
					<p>
				</ol>
				
				
				<!--
				<dl>
					<dt>
						<dd>To be a highly competent human capital through extensive innovate work. Utilize the potentiality through hard work and devote myself for the development and peace of the nation and all humanity.
						</dd>
					<dt>
				<dl>
			!-->
			</div>
			<div class="col-md-6">
			<h3> <i class="fa fa-graduation-cap"></i><b>Educatinal Background</b></h3>
				<menu>
					<ol>
						<dt><i class='fas fa-user-graduate'></i>UnderGraduate</dt>
						<ol>BSc(Engr) In Computer Science & Engineering at Hajee Mohammad Danesh Science & Technology University. .</ol>
						<dt><i class='fas fa-book-open'></i>higher Seconadary</dt>
						<ol>BSc(Engr) In Computer Science & Engineering at Hajee Mohammad Danesh Science & Technology University. .</ol>
					</ol>
				
				</menu>
			</div>
		</div>
	</div>
</section>


<section>
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<strong><h4><i class='far fa-object-group'></i>Honors & Awards</h4></strong>
				<ol>
					<dt>UnderGraduate</dt>
					<dd>BSc(Engr) In Computer Science & Engineering at Hajee Mohammad Danesh Science & Technology University. .</dd>
					<dt>Higher Seconadary</dt>
					<dd>Joypurhat Government Collge in Science Group.</dd>
				</ol>
			</div>
			<div class="col-md-6">
			<strong><h4><i class='fas fa-atom'></i>Interested Field</h4></strong>
				<menu>
					<ol type="square">
						<li>Front-End Development</li> 
						<li>Back-End Development</li> 
						<li>Full Stack Development</li>
						<li>Web Development</li>
						<li>Problem Analysis</li>
						<li>Application analysis</li>
						<li>Programming </li> 
						<li>etc</li>
					</ol>
				</menu>
			</div>
		</div>
	</div>
</section>

<section>
	<div class="container">
		<div class="row">
			<div class="col-md-6">
			<strong><h4><i class='fas fa-seedling'></i>Professional Affiliations</h4></strong>
				<menu>
					<ol type="disc">
						<li>Advisory Board, World Food Regulation Review.</li> 
						<li>Board of Director of St.Pauls Pediatric AIDS Foundation.</li> 
						
						<li>Advisory Board, Food and Drug Law Institute.</li> 
						<li>etc</li>
					</ol>
				</menu>
			</div>
			
			<div class="col-md-6">
					<strong><h4><i class='fas fa-seedling'></i>Skill& Experience</h4></strong>
				<menu>
					<ol type="disc">
						<li>Laravel framework(PHP).</li> 
						<li>WordPress,WooCommerce.</li> 
						<li>Programming Language:C,C++,python,PHP.</li> 
						<li>Web Programming:HTML,CSS,Bootstrap,Javascript,JQuery.</li> 
						<li>.</li> 
						
						<li>Advisory Board, Food and Drug Law Institute.</li> 
						<li>etc</li>
					</ol>
				</menu>
			</div>
			
			
		</div>
	</div>
</section>

<?php

include('footer.php');
?>
