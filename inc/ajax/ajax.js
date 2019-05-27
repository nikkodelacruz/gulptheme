( function($) {
    'use strict';

  	$(document).on('submit', 'your-form', function(event) {
	    event.preventDefault();

  		var your_var = $('your-selector').val();

  		$.ajax({
  			url : ajaxurl,
  			type : 'POST',
  			datatype : 'json/html',
  			data : {
  				'action' : 'action_name', //php function to be called in ajax.php
  				'post_var' : your_var, // data/value to be passed in ajax.php
  			},
  			success: function(data){
  				console.log(data);
  			},
  			error: function(data){
  				console.log(data);
  			}



  		});

  		return false;

  	});



} (jQuery) );