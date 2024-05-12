    function konfirmasi(pesananId) {
        var statusElement = document.getElementById('status' + pesananId);
        statusElement.innerText = "Pesanan sudah dibayar";
    }

    function hapus(pesananId) {
        var pesananElement = document.getElementById(pesananId);
        pesananElement.remove();
    }

