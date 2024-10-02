function showUpdate(id) {
    document.getElementById("editRowservice" + id).classList.add("d-none");
    document.getElementById("editserviceForm" + id).classList.remove("d-none");
}

function cancelEdit(id) {
    document.getElementById("editRowservice" + id).classList.remove("d-none");
    document.getElementById("editserviceForm" + id).classList.add("d-none");
}
