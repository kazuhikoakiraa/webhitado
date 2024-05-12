// Temukan tombol "Ubah About"
var btnOpenModal = document.querySelector(".btn-about");

// Temukan modal
var modalAbout= document.querySelector(".modal");

// Temukan tombol-tombol di dalam modal
var closeModalBtn = document.querySelector(".close");
var cancelBtn = document.querySelector(".btn-cancel");
var saveBtn = document.querySelector(".btn-save");

// Ketika tombol "Ubah About" diklik, tampilkan modal
btnOpenModal.addEventListener("click", function () {
  modalAbout.style.display = "block";
});

// Ketika tombol tutup di dalam modal diklik, sembunyikan modal
closeModalBtn.addEventListener("click", function () {
  modalAbout.style.display = "none";
});

// Ketika tombol "Batal" di dalam modal diklik, sembunyikan modal
cancelBtn.addEventListener("click", function () {
  modalAbout.style.display = "none";
});

// Ketika tombol "Simpan" di dalam modal diklik, lakukan penyimpanan data (misalnya gambar dan deskripsi)
saveBtn.addEventListener("click", function () {
  // Tambahkan logika penyimpanan data di sini

  // Setelah penyimpanan selesai, sembunyikan modal
  modalAbout.style.display = "none";
});

// Ketika pengguna mengklik di luar modal, sembunyikan modal
window.addEventListener("click", function (event) {
  if (event.target == modalAbout) {
    modalAbout.style.display = "none";
  }
});
