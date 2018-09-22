jQuery(function($){
				$.scrollTo(0);
				$('#logo').click(function() { $.scrollTo($('#now'),500);});
				$('#menu-now').click(function() { $.scrollTo($('#now'),500);});
				$('#menu-about').click(function() { $.scrollTo($('#about'),500);});
				$('#menu-portfolio').click(function() { $.scrollTo($('#portfolio'),500);});
				$('#menu-contact').click(function() { $.scrollTo($('#contact'),500);});
				$('#send').click(function(){$('#form').submit();});
			});