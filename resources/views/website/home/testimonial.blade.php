<div class="testimonials-container">
	<i class="fas fa-quote-left"></i>
	<p class="text"></p>
	<strong class="name"></strong>
	<div class="authors-container">
		<div class="author selected"><img src="https://randomuser.me/api/portraits/men/41.jpg" alt=""></div>
		<div class="author"><img src="https://randomuser.me/api/portraits/women/50.jpg" alt=""></div>
		<div class="author"><img src="https://randomuser.me/api/portraits/women/22.jpg" alt=""></div>
		<div class="author"><img src="https://randomuser.me/api/portraits/women/76.jpg" alt=""></div>
		<div class="author"><img src="https://randomuser.me/api/portraits/men/17.jpg" alt=""></div>
	</div>
</div>

<!-- SOCIAL PANEL HTML -->
<div class="social-panel-container">
	<div class="social-panel">
		<p>Created with <i class="fa fa-heart"></i> by
			<a target="_blank" href="https://florin-pop.com">Florin Pop</a></p>
		<button class="close-btn"><i class="fas fa-times"></i></button>
		<h4>Get in touch on</h4>
		<ul>
			<li>
				<a href="https://www.patreon.com/florinpop17" target="_blank">
					<i class="fab fa-discord"></i>
				</a>
			</li>
			<li>
				<a href="https://twitter.com/florinpop1705" target="_blank">
					<i class="fab fa-twitter"></i>
				</a>
			</li>
			<li>
				<a href="https://linkedin.com/in/florinpop17" target="_blank">
					<i class="fab fa-linkedin"></i>
				</a>
			</li>
			<li>
				<a href="https://facebook.com/florinpop17" target="_blank">
					<i class="fab fa-facebook"></i>
				</a>
			</li>
			<li>
				<a href="https://instagram.com/florinpop17" target="_blank">
					<i class="fab fa-instagram"></i>
				</a>
			</li>
		</ul>
	</div>
</div>
<button class="floating-btn">
	Get in Touch
</button>

<div class="floating-text">
	Part of <a href="https://florin-pop.com/blog/2019/09/100-days-100-projects" target="_blank">#100Days100Projects</a>
</div>


<script>
const authorsEl = document.querySelectorAll('.author');
const container = document.querySelector('.testimonials-container');
const nameEl = document.querySelector('.name');
const textEl = document.querySelector('.text');

const testimonials = [{
	text: 'I had my concerns that due to a tight deadline this project can\'t be done. But Florin proved me wrong not only he delivered an outstanding work but he managed to deliver 1 day prior to the deadline. And when I asked for some revisions he made them in MINUTES. I\'m looking forward to work with him again and I totally recommend him. Thanks again Florin!',
	name: 'Arthur Birnbaum',
	color: 'rgba(235, 59, 90,1.0)'
},{
	text: 'Second time hiring him. Finished everything in a timely manner and his work is excellent. Can\'t recommend him enough.',
	name: 'Phoebe Kotliar',
	color: 'rgba(250, 130, 49,1.0)'
},{
	text: 'Alexandru Florin never fails to impress me by the quality of his work and delivering on time. When it comes to front-end, he is definitely my go to guy. Always is a pleasure to work with Alexandru even when deadlines are tight and pressure is great. It\'s reassuring to have a project in such good hands.',
	name: 'Louisa P. Huard',
	color: 'rgba(75, 123, 236,1.0)'
},{
	text: 'Florin has been of great help on our different web projects. He is very trustworthy and serious in the work done. Keep on the good work and energy, been a pleasure to collaborate.',
	name: 'Cristina Aurmoogum',
	color: 'rgba(165, 94, 234,1.0)'
},{
	text: 'I hired Florin Pop based on others positive experiences, and I understand why he\'s so highly rated. His code is very clean, he communicates well, and he likes to offer alternative solutions.',
	name: 'J. Kent Pepper',
	color: 'rgba(32, 191, 107,1.0)'
}];

addTestimonial(0);

authorsEl.forEach((author, idx) => {
	author.addEventListener('click', (e) => {
		addTestimonial(idx);
		author.classList.add('selected');
	})
});

function addTestimonial(idx) {
	const testimonial = testimonials[idx];
	
	nameEl.innerHTML = testimonial.name;
	textEl.innerHTML = testimonial.text;
	container.style.background = testimonial.color;
	container.style.boxShadow = `0 35px 10px -20px ${testimonial.color.substring(0, testimonial.color.length-4)}0.9)`;
	
	authorsEl.forEach(author => {
		author.classList.remove('selected');
	});
}

// SOCIAL PANEL JS
const floating_btn = document.querySelector('.floating-btn');
const close_btn = document.querySelector('.close-btn');
const social_panel_container = document.querySelector('.social-panel-container');

floating_btn.addEventListener('click', () => {
	social_panel_container.classList.toggle('visible')
});

close_btn.addEventListener('click', () => {
	social_panel_container.classList.remove('visible')
});
</script>