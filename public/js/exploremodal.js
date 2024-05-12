    // Ambil tombol Explore
    var exploreButton = document.querySelector('.btn-explore');
    // Ambil modal
    var modal = document.querySelector('.modal-explore');
    // Ambil tombol close
    var closeButton = document.querySelector('.close-explore');

    // Ketika tombol Explore ditekan, tampilkan modal
    exploreButton.addEventListener('click', function() {
        modal.style.display = 'block';
    });

    // Ketika tombol close ditekan, sembunyikan modal
    closeButton.addEventListener('click', function() {
        modal.style.display = 'none';
    });

    // Ketika pengguna mengklik di luar modal, sembunyikan modal
    window.addEventListener('click', function(event) {
        if (event.target == modal) {
            modal.style.display = 'none';
        }
    });

