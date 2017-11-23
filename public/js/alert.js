$(document).ready(function () {
	$('.btn-delete').on('click', function(e){
		e.preventDefault();
		var res = confirm('you are going to delete this categ');
		//console.log(res);
		if (res) {
			this.submit();
		};
	});
});