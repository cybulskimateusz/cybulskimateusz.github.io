jQuery(function($){
				$.scrollTo(0);
				$('#logo').click(function() { $.scrollTo($('#now'),500);});
				$('#menu-now').click(function() { $.scrollTo($('#now'),500);});
				$('#menu-about').click(function() { $.scrollTo($('#about'),500);});
				$('#menu-portfolio').click(function() { $.scrollTo($('#portfolio'),500);});
				$('#menu-contact').click(function() { $.scrollTo($('#contact'),500);});
				
            function openMail(){
					var q = confirm("Unfortunately the github.com doesn't support php. Do you want to send me an e-mail by a native app?");
					if(q==true)
						window.open('mailto:cybulskimateusz.work@icloud.com');
						}
			
			$('#send').click(function(){
					var q = confirm("Unfortunately the github.com doesn't support php. Do you want to send me an e-mail by a native app?");
					if(q==true)
						window.open('mailto:cybulskimateusz.work@icloud.com');
					});
			$('input:text').focus(function(){
					var q = confirm("Unfortunately the github.com doesn't support php. Do you want to send me an e-mail by a native app?");
					if(q==true)
						window.open('mailto:cybulskimateusz.work@icloud.com');
					});
			$('textarea').focus(function(){
					var q = confirm("Unfortunately the github.com doesn't support php. Do you want to send me an e-mail by a native app?");
					if(q==true)
						window.open('mailto:cybulskimateusz.work@icloud.com');
					});
			});

			
				