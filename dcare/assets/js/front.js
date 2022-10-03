/* $  */

$(function () {
	
	'use strict';
	
	
	
	
	//  Validation of Login Page During Writing  UserName
	
	$('.name').blur(function () {
		
		if($(this).val() == ""){
			
			$(this).css('border-bottom' , '1px solid #D20707');
			
			$(this).parent('.ast').find('.empty-alert').fadeIn(200);
			
			$(this).parent('.ast').find('.custom-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.close').fadeIn(200);
			
			$(this).parent('.ast').find('.check').fadeOut(200);
			
		}
		else if($(this).val().length > 14){
			
			$(this).css('border-bottom' , '1px solid #D20707');
			
			$(this).parent('.ast').find('.custom-alert').fadeIn(200);

			$(this).parent('.ast').find('.empty-alert').fadeOut(200);
			
			
			$(this).parent('.ast').find('.close').fadeIn(200);
			
			$(this).parent('.ast').find('.check').fadeOut(200);
			
		}else{
			
			$(this).css('border-bottom' , '1px solid #080');
			
			$(this).parent('.ast').find('.custom-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.empty-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.close').fadeOut(200);
			
			$(this).parent('.ast').find('.check').fadeIn(200);
			
		}
		
		
	});
	
		$('.namedoctor').blur(function () {
		
		if($(this).val() == ""){
			
			$(this).css('border-bottom' , '1px solid #D20707');
			
			$(this).parent('.ast').find('.empty-alert').fadeIn(200);
			
			$(this).parent('.ast').find('.custom-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.close').fadeIn(200);
			
			$(this).parent('.ast').find('.check').fadeOut(200);
			
		}
		else if($(this).val().length > 31){
			
			$(this).css('border-bottom' , '1px solid #D20707');
			
			$(this).parent('.ast').find('.custom-alert').fadeIn(200);

			$(this).parent('.ast').find('.empty-alert').fadeOut(200);
			
			
			$(this).parent('.ast').find('.close').fadeIn(200);
			
			$(this).parent('.ast').find('.check').fadeOut(200);
			
		}else{
			
			$(this).css('border-bottom' , '1px solid #080');
			
			$(this).parent('.ast').find('.custom-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.empty-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.close').fadeOut(200);
			
			$(this).parent('.ast').find('.check').fadeIn(200);
			
		}
		
		
	});
	
	$('.phone').blur(function () {
		
		if($(this).val() == ""){
			
			$(this).css('border-bottom' , '1px solid #D20707');
			
			$(this).parent('.ast').find('.empty-alert').fadeIn(200);
			
			$(this).parent('.ast').find('.custom-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.number-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.close').fadeIn(200);
			
			$(this).parent('.ast').find('.check').fadeOut(200);
			
		}
		else if($(this).val().length >= 10 || $(this).val().length < 10){
			
			$(this).css('border-bottom' , '1px solid #D20707');
			
			$(this).parent('.ast').find('.number-alert').fadeIn(200);
			
			$(this).parent('.ast').find('.empty-alert').fadeOut(200);
									
			$(this).parent('.ast').find('.close').fadeIn(200);
			
			$(this).parent('.ast').find('.check').fadeOut(200);
			
		}else{
			
			$(this).css('border-bottom' , '1px solid #080');
						
			$(this).parent('.ast').find('.number-alert').fadeOut(200);

			
			$(this).parent('.ast').find('.empty-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.close').fadeOut(200);
			
			$(this).parent('.ast').find('.check').fadeIn(200);
			
		}
		
		
	});
	
	//  Validation of Login Page  Password
	
	
	/*$('.password').blur(function () {
		
		if($(this).val() == ""){
			
			$(this).css('border-bottom' , '1px solid #D20707');
			
			$(this).parent('.ast').find('.empty-alert').fadeIn(200);
			
			$(this).parent('.ast').find('.custom-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.long-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.close').fadeIn(200);
			
			$(this).parent('.ast').find('.check').fadeOut(200);
			
		}
		/*else if(check == false){
			
			$(this).css('border-bottom' , '1px solid #D20707');
			
			$(this).parent('.ast').find('.custom-alert').fadeIn(200);
			
			$(this).parent('.ast').find('.empty-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.long-alert').fadeOut(200);
			
			$(this).after('<i class="fa fa-close close"></i>');
			
		}
		else if($(this).val().length < 8){
			
			$(this).css('border-bottom' , '1px solid #D20707');
		
		    $(this).parent('.ast').find('.long-alert').fadeIn(200);
			
			$(this).parent('.ast').find('.custom-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.empty-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.close').fadeIn(200);
			
			$(this).parent('.ast').find('.check').fadeOut(200);
			
		}
		else{
			
			$(this).css('border-bottom' , '1px solid #080');
			
			$(this).parent('.ast').find('.custom-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.empty-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.long-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.check').fadeIn(200);
			
			$(this).parent('.ast').find('.close').fadeOut(200);
			
		}
		
		
	});*/
	
	
	
	// Dashboard Toggle Info
	
	$('.toggle-info').click(function () {
		
		$(this).toggleClass('selected').parent().next('.panel-body').fadeToggle(100);
		
		if($(this).hasClass('selected')){
		   
		   $(this).html('<i class="fa fa-minus fa-lg"></i>');
		   
		 }else{
			 
			 $(this).html('<i class="fa fa-plus fa-lg"></i>');
			 
		 }
		
	});
	
	
	// Hide Placeholder on form focus
	
	$('[placeholder]').focus(function () {
		
		$(this).attr('data-text' , $(this).attr('placeholder'));
		
		$(this).attr('placeholder' , '');
		
		
		
	}).blur(function () {
		
		$(this).attr('placeholder' , $(this).attr('data-text'));
		
	});
	
	
	// Add * to inputs required in html
	
	$('input , select').each(function () {
		
		
		if($(this).attr('required') === 'required'){
			
			$(this).after('<span class="astrisk">*</span>');
			
		}
		
	});
	
	// Convert Password field to text field on Hover
	
	var passfield = $('.password');
	
	$('.show-pass').hover(function () {
		
		passfield.attr('type' , 'text');
		
	}, function(){
		
		passfield.attr('type' , 'password');
		
	});
	
	// Confirmation Message
	
	$('.confirm').click(function () {
		
		return confirm('Are You Sure?');
		
	});
	
	
	
	// Start Validation Rules


// Email Validation

var sep = /@/,
	de = /.com/;
	
	$('.email').blur(function () {
		
		if($(this).val() == ""){
			
			$(this).css('border-bottom' , '1px solid #D20707');
			
			$(this).parent('.ast').find('.empty-alert').fadeIn(200);
			
			$(this).parent('.ast').find('.custom-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.long-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.close').fadeIn(200);
			
			$(this).parent('.ast').find('.check').fadeOut(200);
			
		}
		else if(!sep.test($(this).val())){
			
			$(this).css('border-bottom' , '1px solid #D20707');
			
			$(this).parent('.ast').find('.custom-alert').fadeIn(200);
			
			$(this).parent('.ast').find('.empty-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.long-alert').fadeIn(200);
			
			$(this).parent('.ast').find('.close').fadeIn(200);
			
			$(this).parent('.ast').find('.check').fadeOut(200);
			
		}/*else if(!de.test($(this).val())){
			
			$(this).css('border-bottom' , '1px solid #D20707');
			
			$(this).parent('.ast').find('.custom-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.empty-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.long-alert').fadeIn(200);
			
			$(this).parent('.ast').find('.close').fadeIn(200);u
			
			$(this).parent('.ast').find('.check').fadeOut(200);
			
		}*/else{
			
			$(this).css('border-bottom' , '1px solid #080');
			
			$(this).parent('.ast').find('.custom-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.empty-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.long-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.close').fadeOut(200);
			
			$(this).parent('.ast').find('.check').fadeIn(200);
			
		}
		
		
	});




//  Validation of Login Page  Password


    var num = /[A-Z]/,
		num1 = /[a-z]/,
		num2 = /[0-9]/;
	
	
	$('.password').blur(function () {
		
		if($(this).val() == ""){
			
			$(this).css('border-bottom' , '1px solid #D20707');
			
			$(this).parent('.ast').find('.empty-alert').fadeIn(200);
			
			/*$(this).parent('.ast').find('.custom-alert').fadeOut(200);*/
			
			$(this).parent('.ast').find('.long-alert').fadeOut(200);
			
			/*$(this).parent('.ast').find('.lower-alert').fadeOut(200);*/
			
			$(this).parent('.ast').find('.number-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.close').fadeIn(200);
			
			$(this).parent('.ast').find('.check').fadeOut(200);
			
		}
		else if(!num.test($(this).val()) || !num1.test($(this).val()) || !num2.test($(this).val())){
			
			$(this).css('border-bottom' , '1px solid #D20707');
			
			/*$(this).parent('.ast').find('.custom-alert').fadeOut(200);*/
			
			$(this).parent('.ast').find('.empty-alert').fadeOut(200);
			
			/*$(this).parent('.ast').find('.lower-alert').fadeOut(200);*/
			
			$(this).parent('.ast').find('.number-alert').fadeIn(200);
			
			$(this).parent('.ast').find('.long-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.close').fadeIn(200);
			
			$(this).parent('.ast').find('.check').fadeOut(200);
			
		}	
		/*else if(!lower.test($(this).val())){
			
			$(this).css('border-bottom' , '1px solid #D20707');
			
			$(this).parent('.ast').find('.custom-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.empty-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.lower-alert').fadeIn(200);
			
			$(this).parent('.ast').find('.number-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.long-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.close').fadeIn(200);
			
			$(this).parent('.ast').find('.check').fadeOut(200);
			
		}
		else if(!upper.test($(this).val())){
			
			$(this).css('border-bottom' , '1px solid #D20707');
			
			$(this).parent('.ast').find('.custom-alert').fadeIn(200);
			
			$(this).parent('.ast').find('.empty-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.lower-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.number-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.long-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.close').fadeIn(200);
			
			$(this).parent('.ast').find('.check').fadeOut(200);
			
		}*/
		else if($(this).val().length < 6){
			
			$(this).css('border-bottom' , '1px solid #D20707');
		
		    $(this).parent('.ast').find('.long-alert').fadeIn(200);
			
			$(this).parent('.ast').find('.custom-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.empty-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.lower-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.number-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.close').fadeIn(200);
			
			$(this).parent('.ast').find('.check').fadeOut(200);
			
		}
		else{
			
			$(this).css('border-bottom' , '1px solid #080');
			
			$(this).parent('.ast').find('.custom-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.empty-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.long-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.lower-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.number-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.check').fadeIn(200);
			
			$(this).parent('.ast').find('.close').fadeOut(200);
			
		}
		
		
	});
	
	$('.password2').blur(function () {
		
		if($(this).val() == ""){
			
			$(this).css('border-bottom' , '1px solid #D20707');
			
			$(this).parent('.ast').find('.empty-alert').fadeIn(200);
			
			$(this).parent('.ast').find('.custom-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.close').fadeIn(200);
			
			$(this).parent('.ast').find('.check').fadeOut(200);
			
		}else if($(this).val() !== $('.password').val()){
			
		
				
				$(this).css('border-bottom' , '1px solid #D20707');

				$(this).parent('.ast').find('.empty-alert').fadeOut(200);

				$(this).parent('.ast').find('.custom-alert').fadeIn(200);

				$(this).parent('.ast').find('.close').fadeIn(200);

				$(this).parent('.ast').find('.check').fadeOut(200);
				

			
	   }else{
			
				$(this).css('border-bottom' , '1px solid #080');

				$(this).parent('.ast').find('.custom-alert').fadeOut(200);

				$(this).parent('.ast').find('.long-alert').fadeOut(200);

				$(this).parent('.ast').find('.close').fadeOut(200);

				$(this).parent('.ast').find('.check').fadeIn(200);
			
		}
		
	});


// Start Sign Up Page

// Phone Number Validation

var phone = /[a-z|A-Z]/;
	
	$('.phone').blur(function () {
		
		if($(this).val() == ""){
			
			$(this).css('border-bottom' , '1px solid #D20707');
			
			$(this).parent('.ast').find('.empty-alert').fadeIn(200);
			
			$(this).parent('.ast').find('.custom-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.long-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.zero-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.close').fadeIn(200);
			
			$(this).parent('.ast').find('.check').fadeOut(200);
			
		}
		else if(phone.test($(this).val())){
			
			$(this).css('border-bottom' , '1px solid #D20707');
			
			$(this).parent('.ast').find('.custom-alert').fadeIn(200);
			
			$(this).parent('.ast').find('.empty-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.long-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.zero-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.close').fadeIn(200);
			
			$(this).parent('.ast').find('.check').fadeOut(200);
			
		}else if(($(this).val().length < 10) && ($(this).val().length > 10)){
			
			$(this).css('border-bottom' , '1px solid #D20707');
			
			$(this).parent('.ast').find('.custom-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.empty-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.long-alert').fadeIn(200);
			
			$(this).parent('.ast').find('.zero-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.close').fadeIn(200);
			
			$(this).parent('.ast').find('.check').fadeOut(200);
			
		}else if(($(this).val().indexOf(0) != "0") && ($(this).val().indexOf(1) != "5")){
			
			$(this).css('border-bottom' , '1px solid #D20707');
			
			$(this).parent('.ast').find('.custom-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.empty-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.long-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.zero-alert').fadeIn(200);
			
			$(this).parent('.ast').find('.close').fadeIn(200);
			
			$(this).parent('.ast').find('.check').fadeOut(200);
			
		}else{
			
			$(this).css('border-bottom' , '1px solid #080');
			
			$(this).parent('.ast').find('.custom-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.empty-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.long-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.zero-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.close').fadeOut(200);
			
			$(this).parent('.ast').find('.check').fadeIn(200);
			
		}
		
		
	});



// Name Validation

var first = /[0-9]/;
	
	$('.first').blur(function () {
		
		if($(this).val() == ""){
			
			$(this).css('border-bottom' , '1px solid #D20707');
			
			$(this).parent('.ast').find('.empty-alert').fadeIn(200);
			
			$(this).parent('.ast').find('.custom-alert').fadeOut(200);
			
			
			$(this).parent('.ast').find('.long-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.close').fadeIn(200);
			
			$(this).parent('.ast').find('.check').fadeOut(200);
			
		}else if(first.test($(this).val())){
			
			$(this).css('border-bottom' , '1px solid #D20707');
			
			$(this).parent('.ast').find('.empty-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.custom-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.long-alert').fadeIn(200);
			
			$(this).parent('.ast').find('.close').fadeIn(200);
			
			$(this).parent('.ast').find('.check').fadeOut(200);
			
		}/*else if($(this).val().length < 4){
		
			$(this).css('border-bottom' , '1px solid #D20707');
			
			$(this).parent('.ast').find('.empty-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.custom-alert').fadeIn(200);
			
			$(this).parent('.ast').find('.long-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.close').fadeIn(200);
			
			$(this).parent('.ast').find('.check').fadeOut(200);
			
			
		}*/
		else{
			
			$(this).css('border-bottom' , '1px solid #080');
			
			$(this).parent('.ast').find('.empty-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.custom-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.long-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.close').fadeOut(200);
			
			$(this).parent('.ast').find('.check').fadeIn(200);
			
		}
		
		
	});
	
	
	
// Name Validation

var las = /[0-9]/;
	
	$('.last').blur(function () {
		
		if($(this).val() == ""){
			
			$(this).css('border-bottom' , '1px solid #D20707');
			
			$(this).parent('.ast').find('.empty-alert').fadeIn(200);
			
			$(this).parent('.ast').find('.custom-alert').fadeOut(200);
			
			
			$(this).parent('.ast').find('.long-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.close').fadeIn(200);
			
			$(this).parent('.ast').find('.check').fadeOut(200);
			
		}else if(las.test($(this).val())){
			
			$(this).css('border-bottom' , '1px solid #D20707');
			
			$(this).parent('.ast').find('.empty-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.custom-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.long-alert').fadeIn(200);
			
			$(this).parent('.ast').find('.close').fadeIn(200);
			
			$(this).parent('.ast').find('.check').fadeOut(200);
			
		}/*else if($(this).val().length < 4){
		
			$(this).css('border-bottom' , '1px solid #D20707');
			
			$(this).parent('.ast').find('.empty-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.custom-alert').fadeIn(200);
			
			$(this).parent('.ast').find('.long-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.close').fadeIn(200);
			
			$(this).parent('.ast').find('.check').fadeOut(200);
			
			
		}*/
		else{
			
			$(this).css('border-bottom' , '1px solid #080');
			
			$(this).parent('.ast').find('.empty-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.custom-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.long-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.close').fadeOut(200);
			
			$(this).parent('.ast').find('.check').fadeIn(200);
			
		}
		
		
	});	
	
	
// Name Validation

var username = /[0-9]/;
	
	$('.username').blur(function () {
		
		if($(this).val() == ""){
			
			$(this).css('border-bottom' , '1px solid #D20707');
			
			$(this).parent('.ast').find('.empty-alert').fadeIn(200);
			
			$(this).parent('.ast').find('.custom-alert').fadeOut(200);
			
			
			$(this).parent('.ast').find('.long-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.close').fadeIn(200);
			
			$(this).parent('.ast').find('.check').fadeOut(200);
			
		}/*else if(username.test($(this).val())){
			
			$(this).css('border-bottom' , '1px solid #D20707');
			
			$(this).parent('.ast').find('.empty-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.custom-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.long-alert').fadeIn(200);
			
			$(this).parent('.ast').find('.close').fadeIn(200);
			
			$(this).parent('.ast').find('.check').fadeOut(200);
			
		}*/else if($(this).val().length > 31){
		
			$(this).css('border-bottom' , '1px solid #D20707');
			
			$(this).parent('.ast').find('.empty-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.custom-alert').fadeIn(200);
			
			$(this).parent('.ast').find('.long-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.close').fadeIn(200);
			
			$(this).parent('.ast').find('.check').fadeOut(200);
			
			
		}
		else{
			
			$(this).css('border-bottom' , '1px solid #080');
			
			$(this).parent('.ast').find('.empty-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.custom-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.long-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.close').fadeOut(200);
			
			$(this).parent('.ast').find('.check').fadeIn(200);
			
		}
		
		
	});	


// Address Validation
	
	$('.address').blur(function () {
		
		if($(this).val() == ""){
			
			$(this).css('border-bottom' , '1px solid #D20707');
			
			$(this).parent('.ast').find('.empty-alert').fadeIn(200);
			
			$(this).parent('.ast').find('.custom-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.close').fadeIn(200);
			
			$(this).parent('.ast').find('.check').fadeOut(200);
			
		}else{
			
			$(this).css('border-bottom' , '1px solid #080');
			
			$(this).parent('.ast').find('.empty-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.custom-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.close').fadeOut(200);
			
			$(this).parent('.ast').find('.check').fadeIn(200);
			
		}
		
		
	});
	
	
	
	// Gender Validation

	
	$('.gender').blur(function () {
		
		if($(this).val() == 0){
			
			$(this).css('border-bottom' , '1px solid #D20707');
			
			$(this).parent('.ast').find('.empty-alert').fadeIn(200);
			
			$(this).parent('.ast').find('.close').fadeIn(200);
			
			$(this).parent('.ast').find('.check').fadeOut(200);
			
		}else{
			
			$(this).css('border-bottom' , '1px solid #080');
			
			$(this).parent('.ast').find('.empty-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.close').fadeOut(200);
			
			$(this).parent('.ast').find('.check').fadeIn(200);
			
		}
		
		
	});

// Type Validation

	
	$('.type').blur(function () {
		
		if($(this).val() == 0){
			
			$(this).css('border-bottom' , '1px solid #D20707');
			
			$(this).parent('.ast').find('.empty-alert').fadeIn(200);
			
			$(this).parent('.ast').find('.close').fadeIn(200);
			
			$(this).parent('.ast').find('.check').fadeOut(200);
			
		}else{
			
			$(this).css('border-bottom' , '1px solid #080');
			
			$(this).parent('.ast').find('.empty-alert').fadeOut(200);
			
			$(this).parent('.ast').find('.close').fadeOut(200);
			
			$(this).parent('.ast').find('.check').fadeIn(200);
			
		}
		
		
	});
	
	
	

	
});