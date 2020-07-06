$(document).ready(function () {
		//$('#read-user').hide();
		$('#read-user').click(function (event) {
		$('#page-content').load('read.php');

		
		});
		

		$('#create-user').click(function (event) {
		$('#page-content').load('create_form.php');

		// $('#read-user').show();
		// $('#create-user').hide();
		});
		

});

$(document).on('submit', '#create-user-form', function () {
	$.post('create.php', $(this).serialize()).done(function(){
	showUsers();
	});	
	
})

function showUsers() {
$('#page-content').load('read.php');
}

// $(document).on('click', '.edit-btn', function (event) {
// 	 $('#read-user').show();
// 	$('#create-user').hide();
// var user_id = $(this).closest('td').find('.user-id').text();
// $('#page-content').load('update_form.php?user_id=' + user_id);


// });


$(document).on('click', '.edit-btn', function (event) {
	 $('#read-user').show();
	$('#create-user').hide();
var user_id = $(this).closest('tr').find('.user_id').val();
$('#page-content').load('update_form.php?user_id=' + user_id);


});


$(document).on('submit', '#update-user-form', function () {
	$.post('update.php', $(this).serialize()).done(function(){
	showUsers();
	});
});


$(document).on('click', '.delete-btn', function () {
if(confirm('Are you sure?')){

// get the id
//var user_id = $(this).closest('tr').find('.user-id').val();
var user_id = $(this).closest('tr').find('.user_id').val();
$.post("delete.php", { user_id: user_id })
.done(function(){
showUsers();
});
}
});

