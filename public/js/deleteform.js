function showFormDelete(id) {
    $("#form-delete").attr('action',"/posts/"+id);
    $(".form-delete-container").slideToggle("slow");

}

function hideFormDelete() {
    $(".form-delete-container").slideToggle("slow");
}