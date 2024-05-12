function inventoriAdd() {
    document.getElementById("addInventori").style.display = "block";
}

function closeAdd() {
    document.getElementById("addInventori").style.display = "none";
}

function simpanAdd() {
    document.getElementById("addInventori").style.display = "none";
}

function editInventori() {
    document.getElementById("editInventori").style.display = "block";
}

function closeEdit() {
    document.getElementById("editInventori").style.display = "none";
}

function simpanEdit() {
    document.getElementById("addInventori").style.display = "none";
}

// Fungsi untuk menutup modal "Tambah Menu" dan "Edit Menu" ketika mengklik area luar modal
window.onclick = function (event) {
    var addInventori = document.getElementById("addInventori");
    var editInventori = document.getElementById("editInventori");
    if (event.target == addInventori) {
        addModal.style.display = "none";
    }
    if (event.target == editInventori) {
        editModal.style.display = "none";
    }
};
