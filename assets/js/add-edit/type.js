    // ini untuk modal add data
    document.addEventListener("DOMContentLoaded", function () {
    const addButton = document.getElementById("add-type-btn");
    const closeButton = document.getElementById("closea");
    const modal = document.getElementById("moreTypeModal");
    const form = document.getElementById("addDataForm");

    // Function to open the modal
    function openModal() {
        modal.style.display = "block";
    }

    // Function to close the modal
    function closeModal() {
        modal.style.display = "none";
        form.reset();
    }

    // Event listener for the Add button
    addButton.addEventListener("click", function () {
        openModal();
    });

    // Event listener for the Close button
    closeButton.addEventListener("click", closeModal);

    // Event listener for clicks outside the modal
    window.addEventListener("click", function (event) {
        if (event.target === modal) {
        closeModal();
        }
    });
    });
    // akhir modal add data

    // ini untuk modal edit data
    document.addEventListener("DOMContentLoaded", function () {
    const editButtons = document.querySelectorAll(".edit-type-btn");
    const closeButton = document.getElementById("closee");
    const modal = document.getElementById("editTypeModal");
    const form = document.getElementById("editDataForm");
    const editTypeInput = document.getElementById("editType");
    const baseURL = document.getElementById("base-url").value;

    // Function to open the modal
    function openModal() {
        modal.style.display = "block";
    }

    // Function to close the modal
    function closeModal() {
        modal.style.display = "none";
        form.reset();
    }

    // Event listener for the Edit buttons
    editButtons.forEach((button) => {
        button.addEventListener("click", function () {
        const id = this.getAttribute("data-id");
        const merek = this.getAttribute("data-merek");
        form.action = baseURL + "/" + id;
        editTypeInput.value = merek;
        openModal();
        });
    });

    // Event listener for the Close button
    closeButton.addEventListener("click", closeModal);

    // Event listener for clicks outside the modal
    window.addEventListener("click", function (event) {
        if (event.target === modal) {
        closeModal();
        }
    });
    });
    // akhir modal edit data
