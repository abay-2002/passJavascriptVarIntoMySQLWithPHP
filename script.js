let tambah = document.getElementById('tambah');
let kurang = document.getElementById('kurang'); 

let tampilItem = document.getElementById('tampilItem');

let totalHarga = 0;
tambah.addEventListener('click', function(){
	totalHarga += 1;
	tampilItem.innerHTML = totalHarga;
	event.preventDefault();
});

kurang.addEventListener('click', function(){
	if(totalHarga >= 1){
		totalHarga -= 1;
		tampilItem.innerHTML = totalHarga;
		event.preventDefault();
	}
});