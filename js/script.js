const signUpButton=document.getElementById('signUpButton');
const signInButton=document.getElementById('signInButton');
const signInForm=document.getElementById('signIn');
const signUpForm=document.getElementById('signUp');

signUpButton.addEventListener('click',function(){
    signInForm.style.display="none";
    signUpForm.style.display="block";
})
signInButton.addEventListener('click', function(){
    signInForm.style.display="block";
    signUpForm.style.display="none";
})

// Ambil semua elemen dengan kelas 'fas fa-cart-plus'
const addToCartButtons = document.querySelectorAll('.fas.fa-cart-plus');

// Loop melalui setiap tombol 'Add to Cart' dan tambahkan event listener
addToCartButtons.forEach(button => {
    button.addEventListener('click', () => {
        // Di sini Anda dapat menambahkan logika untuk menangani penambahan barang ke keranjang
        // Misalnya, Anda dapat menampilkan pesan sukses atau mengirimkan permintaan AJAX ke server
        alert('Barang telah ditambahkan ke keranjang!');
    });
});