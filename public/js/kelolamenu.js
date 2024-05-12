// Fungsi untuk membuka modal "Tambah Menu"
function openAdd() {
    document.getElementById("addModal").style.display = "block";
}

// Fungsi untuk menutup modal "Tambah Menu" ketika mengklik tombol close
function closeAdd() {
    document.getElementById("addModal").style.display = "none";
}

// Fungsi untuk membuka modal "Edit Menu"
function openEdit() {
    document.getElementById("editModal").style.display = "block";
}

// Fungsi untuk menutup modal "Edit Menu" ketika mengklik tombol close
function closeEdit() {
    document.getElementById("editModal").style.display = "none";
}

// Fungsi untuk menutup modal "Tambah Menu" dan "Edit Menu" ketika mengklik area luar modal
window.onclick = function (event) {
    var addModal = document.getElementById("addModal");
    var editModal = document.getElementById("editModal");
    if (event.target == addModal) {
        addModal.style.display = "none";
    }
    if (event.target == editModal) {
        editModal.style.display = "none";
    }
};
