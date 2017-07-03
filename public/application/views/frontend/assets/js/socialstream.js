// JavaScript Document

var social_stream_fns = {
	Initialize: function(){
		loadSocialWallFilters.init();
		getTwtScript.init();
		$('#social-stream').dcSocialStream({
			feeds: {	
				/*twitter: {
					id: '/9927875,#designchemical,designchemical',
					intro: 'Postado',
					thumb: true				
				},*/
				facebook: {
					id: '129416393925043',
					intro: 'Postado',
					feed: 'feed'
				},
				instagram:{
					id: "!4055636042",
					clientId: 'c77e9000f5b846d2b278781c294a64e7',
					accessToken: '4055636042.c77e900.20fbc7e63c984ff686fce486d39d1bb8',
					out: 'intro,thumb,text,user,share',
					thumb: 'standard_resolution'
				}
				/*vimeo: {
					id: 'brad'					
				},
				google: {
					id: '116863022570575716616',
					api_key: 'AIzaSyAtsdEMc-Fs6umK5g1H_f4kojGxTAWUHA0'
				},*/			
				/*pinterest: {
					id: 'jaffrey,designchemical/design-ideas'
				},*/
				/*flickr: {
					id: ''
				},*/
				/*lastfm: {
					id: 'lastfm'
				},*/
				/*dribbble: {
					id: 'frogandcode'
				},*/
				/*deviantart: {
					id: 'isacg'
				},
				tumblr: {
					id: 'richters',
					thumb: 250
				}*/
			},
			rotate: {
				delay: 0
			},
			twitterId: 'designchemical',
			control: true,
			filter: true,
			wall: true,
			cache: false,
			max: 'limit',
			limit: 12,
			iconPath: 'images/dcsns-dark/',
			imagePath: 'images/dcsns-dark/'
		});
	},
}