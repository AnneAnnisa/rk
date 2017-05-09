function satu() {
	swal({
	  title: 'Are you sure?',
	  text: "You won't be able to revert this!",
	  type: 'warning',
	  showCancelButton: true,
	  confirmButtonColor: '#3085d6',
	  cancelButtonColor: '#d33',
	  confirmButtonText: 'Yes, delete it!'
	}).then(function () {
	  swal({
	    title: 'Deleted!',
	    text: 'Your file has been deletedd.',
	    type: 'success'
	  });
	}).then(function() {
		window.location = '/testcok';
	});
}

function dua() {
	swal({
		title: 'ini title',
		text: 'ini text',
		type: 'success'
	}).then(function() {
		window.location = '/home_admin';
	});
}

function login() {
	swal({
		title: 'Berhasil Login',
		text: 'Selamat Datang Admin',
		type: 'success'
	}).then(function() {
		window.location = '/dashboardAdmin';
	});
}

function register() {
	swal({
		title: 'Pendaftaran Peserta Sukses',
		text: 'Silahkan Tunggu Pengumuman Selanjutnya',
		type: 'success'
	}).then(function() {
		window.location = '/login';
	});
}

function signout() {
	swal({
		title: 'Berhasil Logout',
		text: 'Logout sukses',
		type: 'success'
	}).then(function() {
		window.location = '/login';
	});
}