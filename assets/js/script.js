const flashdata = $('.flash-data').data('flashdata');



if(flashdata){
	Swal.fire({
		title: 'Data',
		text: flashdata,
		type: 'success'
	});
}

$('.tombol-hapus').on('click', function(e){

	// untuk mematikan aksi default browser
	e.preventDefault();
	const href = $(this).attr('href');

	Swal.fire({
		title: 'Apakah anda yakin',
		text: "Data akan dihapus",
		type: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		confirmBttonText: 'Hapus Data!'
	}).then((result) => {
		if(result.value) {
			document.location.href = href;
		}
	})
});



// $('#btn_personal').on('click', function(e){

// 	e.preventDefault();
// 	const flashdata = $('.flash-data').data('flashdata');

// 	Swal.fire({
// 		  title: 'Are you sure?',
// 		  text: "This Is Valid Data",
// 		  type: 'warning',
// 		  showCancelButton: true,
// 		  confirmButtonColor: '#3085d6',
// 		  cancelButtonColor: '#d33',
// 		  confirmButtonText: 'Yes, Valid'
// 	}).then((result) => {
// 		  if (result.value) {
// 		    Swal.fire({
// 		    	title: 'Data',
// 		    	text: flashdata,
// 		    	type:'success'
// 		    });
// 		  }
// });