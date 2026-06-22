function validateForm() {
    let name = document.forms["dogForm"]["name"].value;
    if (name === "") {
        alert("Name is required!");
        return false;
    }
}