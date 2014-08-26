<div class="row">
	<div class="col-md-8">
		<div class="widget stacked">
			<div class="widget-header">
				<i class="icon-pushpin"></i>
				<h3>Frequently Asked Questions</h3>
			</div> <!-- /widget-header -->
			<div class="widget-content">
				<h3>Search</h3>
				<br>
				<div class="faq-container">
					<form class="faq-search"><input type="text" class="form-control" name="search" placeholder="Search by Keyword"></form>
					<ol class="faq-list">
						<?php foreach ($faqs as $faq): ?>
						<li id="faq-1">
							<div class="faq-icon">
								<div class="faq-number">1</div></div>
							<div class="faq-text">
								<h4><?php echo h($faq['Faq']['question']); ?></h4>
								<p>
								<?php echo h($faq['Faq']['answer']); ?>
								</p>	
							</div>
						</li>
						<?php endforeach; ?>
					</ol>
				</div>
			</div> <!-- /widget-content -->
		</div> <!-- /widget -->	
	</div> <!-- /span8 -->
	<div class="col-md-4">
		<div class="widget widget-plain">
			<div class="widget-content">
				<a href="javascript:;" class="btn btn-primary btn-support-ask">Ask A Question</a>	
				<a href="javascript:;" class="btn btn-default btn-support-contact">Contact Support</a>
			</div> <!-- /widget-content -->
		</div> <!-- /widget -->
		<div class="widget stacked widget-box">
			<div class="widget-header">	
				<h3>Most Popular Questions</h3>			
			</div> <!-- /widget-header -->
			<div class="widget-content">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</div> <!-- /widget-content -->
		</div> <!-- /widget -->
	</div> <!-- /span4 -->
</div>