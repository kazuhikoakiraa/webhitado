// Temukan tombol "Ubah Profil"
var btnOpenModal = document.querySelector(".btn-profil");

// Temukan modal
var modalProfil = document.querySelector(".modal-profile");

// Temukan tombol-tombol di dalam modal
var closeModalBtn = document.querySelector(".close-modal");
var cancelBtn = document.querySelector(".btn-cancel");
var saveBtn = document.querySelector(".btn-save");

// Ketika tombol "Ubah Profil" diklik, tampilkan modal
btnOpenModal.addEventListener("click", function () {
  modalProfil.style.display = "block";
});

// Ketika tombol tutup di dalam modal diklik, sembunyikan modal
closeModalBtn.addEventListener("click", function () {
  modalProfil.style.display = "none";
});

// Ketika tombol "Batal" di dalam modal diklik, sembunyikan modal
cancelBtn.addEventListener("click", function () {
  modalProfil.style.display = "none";
});

// Ketika tombol "Simpan" di dalam modal diklik, lakukan penyimpanan data (misalnya gambar dan deskripsi)
saveBtn.addEventListener("click", function () {
  // Tambahkan logika penyimpanan data di sini

  // Setelah penyimpanan selesai, sembunyikan modal
  modalProfil.style.display = "none";
});

// Ketika pengguna mengklik di luar modal, sembunyikan modal
window.addEventListener("click", function (event) {
  if (event.target == modalProfil) {
    modalProfil.style.display = "none";
  }
});
