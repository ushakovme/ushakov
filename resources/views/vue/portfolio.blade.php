<div class="head_space"></div>

<section class="portfolio_inner">
	<div class="portfolio" >

<article v-for="portfolio in portfolios" >
		<div class="images">
			<img v-bind:src="portfolio.image" alt="">
		</div>
		<header>
		<a href="#" v-link="{name: 'portfolioItem', params: { PortfolioId: portfolio.id }}">
		<h3>@{{portfolio.name}}</h3>
		<h4>тяжелый сайт</h4>
		</a>
	</header>
</article>


	</div>
</section>