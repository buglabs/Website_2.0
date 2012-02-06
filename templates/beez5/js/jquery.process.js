$(function() 
{
	$('#contact').validate(
	{
		submitHandler: function(form) 
		{
			$(form).ajaxSubmit( 
			{
				url: 'process.php',
				success: function() 
				{
					$('#contact').hide();
					$('#contact-form').append("<p class='thanks'>Thanks! Your request has been sent.</p>")
				}
			});
		}
	});
});