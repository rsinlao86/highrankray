		 <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
		 <script type="text/javascript" src="http://fast.fonts.com/jsapi/d86e5a5d-bce6-44fc-99b8-2a01a038b856.js"></script>
		<script src="js/jquery.cycle.js"></script>
		<script type="text/javascript">
		    $('.slider-wrapper').cycle({ 
		    	fx: 		'scrollHorz',
			    prev: 		'.slider-left', 
			    next:   	'.slider-right',
			    pager:  '#nav' 
		    }); 
			$('.slider-left, .slider-right').click(function(){
				return false;
			})
		</script>
		<script type="text/javascript">
			$('.guarantee').hover(function(){
				$(this).find('.popup').css('height','470px');
			}, function(){
				$(this).find('.popup').css('he
						</ul>
					</div>
				</div>
				<div class="footer-content">
						<img class="bg-map" src="images/bg-map.jpg">
					<div class="center">
						<div class="footermap-wrap">
							<img class="footermap" src="images/circle-map.png">
							<div class="footermap-point">
								<a class="footermap-point-hover" href="#"></a>
							</div>
</li>
							</ul>
							<div class="clear"></div>
						</div>
					</div>
				</div>
				<div class="footer-disclaimer">
					<div class="center">
						<p><em>disclaimer</em> Proin sit amet justo at nibh pellent esque volutpat at Nenatis sem. Vestibulum eleifend, orci nec sagittis ollici tudin, nulla lacus tristique arcu, sed dignissim arcu enim sed tellus. Sed turpis enim, sodales sed maleget, accumsan id ipsum. Sed luctus facilisis facilisis. </p>
						<a href="#"><img class="ilawyer-logo" src="images/ilawyerlogo.png"></a>
						<div class="clear"></div>
					</div>
				</div>
			</div><!-- END FOOTER -->	
		</div><!-- END CANVAS -->
		<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
		 <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
		 <script type="text/javascript" src="http://fast.fonts.com/jsapi/d86e5a5d-bce6-44fc-99b8-2a01a038b856.js"></script>
		<script src="js/jquery.cycle.js"></script>
		<script type="text/javascript">
		    $('.slider-wrapper').cycle({ 
		    	fx: 		'scrollHorz',
			    prev: 		'.slider-left', 
			    next:   	'.slider-right',
			    pager:  '#nav' 
		    }); 
			$('.slider-left, .slider-right').click(function(){
				return false;
			})
		</script>
		<script type="text/javascript">
			$('.guarantee').hover(function(){
				$(this).find('.popup').css('height','470px');
			}, function(){
				$(this).find('.popup').css('height','0');
			});
		</script>
		<script>
			$(function() {
				$( "#home-accordion" ).accordion({

				});
			});
		</script>
		<script type="text/javascript">
			$('.home-popup-arrow').fadeOut();
			$('.home-content-title').hover(function(){
				$(this).find('.home-content-popup').css({
					'height': '450px',
					'opacity': '1',
					'padding': '20px 20px 25px 25px',
					'border-top': '4px solid #C50007'
				});
				$(this).find('.home-popup-arrow').fadeIn();
			}, function(){
				$(this).find('.home-content-popup').css({
					'overflow': 'hidden',
					'height': '0',
					'padding': '0',
					'border': 'none'
				});
				$(this).find('.home-popup-arrow').fadeOut();
			});
		</script>
		
		<script type="text/javascript">

			$('#header_nav').data('size','big');


			$(window).scroll(function(){
			    if($(document).scrollTop() > 0)
			    {
			        if($('#header_nav').data('size') == 'big')
			        {
			            $('#header_nav').data('size','small');
			            $('#header_nav').stop().animate({
			                height:'50px'
			                
			            },600).css('background','rgba(0, 0, 0, 0.8)');
			            $('.header ul').stop().animate({
			                top: '20px'
			            },600);
			            $('.header-phone').stop().fadeOut(300).animate({
			                top: '60px'
			            },600).fadeIn(300);
			            $('.logo').stop().animate({
			                top: '-100px'
			            },600);
			            $('.logo-change').stop().animate({
			                top: '5px'
			            },600);


			        }
			    }
			    else
			    {
			        if($('#header_nav').data('size') == 'small')
			        {
			            $('#header_nav').data('size','big');
			            $('#header_nav').stop().animate({
			                height:'120px'
			                
			            },600).css('background','rgba(0, 0, 0, 0.2)');
			            $('.header ul').stop().animate({
			                top: '60px'
			            },600);
			            $('.header-phone').stop().fadeOut(300).animate({
			                top: '10px'
			            },600).fadeIn(300);
			            $('.logo').stop().animate({
			               	top: '20px'
			            },600);	
			            $('.logo-change').stop().animate({
			                top: '-100px'
			            },600);


			        }  
			    }
			});
		</script>
	</body>
</html>








