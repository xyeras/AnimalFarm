function addNew(e,p,fN,lN)
{

	$.post("register.php",
	{	email		: e,
		pword		: p,
		//permission	: perm,
		fName		: fN,
		lName		: lN,
		//id			: id
	},
	function(data){
		$('#result').html(data);
	});
}

//IGNORE checkPassword, it was just text code
function checkPassword(){
	//if password != password2 then you return false
	//you also make sure that the button is disabled
	p1 = document.getElementById("password").value;
	p2 = document.getElementById("p2").value;
	
	if (p1 !== p2){
		$(p2).removeClass('match');
		return false
	}
	$(p2).addClass('match');
	return true
}

// Makes sure the document is ready to be saved and sent
$(document).ready(function(){
	
	//Gets the input from the html file when add button is pressed
	$('#createUser').click(function(){
		var e 	= $('#email').val();
		var p 	= $('#password').val();
		//var perm= $('#firstName').val();
		var fN	= $('#firstName').val();
		var lN	= $('#lastName').val();
		//var id	= $('#id').val();
		
		addNew(e,p,fN,lN);
	});
	
	
	/*	MORE TEST CODE
    $("#info input[type=text]").keyup(function() {

        var empty = false;
        $('#info input[type=text]').each(function() {
            if ($(this).val() == '') {
                empty = true;
            }
        });
		$('#info input[type=password]').each(function() {
            if ($(this).val() == '') {
                empty = true;
            }
        });

		var passwordCheck= false;
		var p2 = document.getElementById("p2").value;
		if(p2)
			passwordCheck = checkPassword();
		
        if (empty && passwordCheck===false) {
            $('#createUser').attr('disabled', 'true'); // updated according to http://stackoverflow.com/questions/7637790/how-to-remove-disabled-attribute-with-jquery-ie
        } else {
            $('#createUser').removeAttr('disabled'); // updated according to http://stackoverflow.com/questions/7637790/how-to-remove-disabled-attribute-with-jquery-ie
        }
    });*/
	
});
