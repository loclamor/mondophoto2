requirejs.config({
    paths: { 
		/* Load jquery from google cdn. On fail, load local file. */
		'jquery': [ 'jquery-1.10.2.min'],
		/* Load bootstrap from cdn. On fail, load local file. */
		'bootstrap': ['../bootstrap/js/bootstrap.min']
	},
	shim: {
		/* Set bootstrap dependencies (just jQuery) */
		'bootstrap' : ['jquery']
	}
});

require(['jquery', 'bootstrap'], function($) {
    console.log("JQuery and Bootsrap successfully loaded");    
    return {};
});