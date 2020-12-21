require('./bootstrap');

const deleteBookForm = document.querySelector("#d-book");
const deleteBook = document.querySelector("#c-delete");

function onClickDeleteBook(e) {
    e.preventDefault();
    deleteBookForm.submit();
}

window.addEventListener("DOMContentLoaded", () => {
    deleteBook.addEventListener("click", onClickDeleteBook);
});

