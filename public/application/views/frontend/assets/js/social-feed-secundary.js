// JavaScript Document

var social_stream_sec = {
	Initialize: function(){
		
		var interv = setInterval(function(){			
			if(Application.config.baseURL != ""){
				clearInterval(interv);
				$('#social-stream-1').dcSocialStream({
					feeds: {	
						/*twitter: {
							id: '/9927875,#designchemical,designchemical',
							thumb: true
						},*/
						facebook: {
							id: '129416393925043',
							intro: 'Postado',
							out: 'intro,thumb,title,text,user,share',
							//out: 'intro, thumb, title, text',
							text: 'content',
							comments: 0,
							image_width: 3, //3 = 600 4 = 480 5 = 320 6 = 180,
							url: Application.config.baseURL + Application.config.frontendViewURL + Application.config.assetsURLExtension + 'social_stream_includes/facebook.php',
							feed: 'feed',
							icon: 'facebook.png'
						}/*,
						instagram:{
							id: "!4055636042"
						}*/
					},
					rotate: {
						delay: 0
					},			
					//twitterId: 'designchemical',
					control: true,
					filter: false,
					wall: false,
					cache: false,
					max: 'limit',
					limit: 3/*,
					iconPath: 'images/dcsns-dark/',
					imagePath: 'images/dcsns-dark/'*/
				});
			}			
		}, 100);		
	}
}