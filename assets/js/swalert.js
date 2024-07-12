    // Select the delete buttons
    const deleteButtons = document.querySelectorAll(".delete-btn");

    // Add event listener to each delete button
    deleteButtons.forEach((button) => {
    button.addEventListener("click", function () {
        // Get the data-id attribute value
        const id = this.getAttribute("data-id");

        // Show SweetAlert confirmation dialog
        Swal.fire({
        title: "Yakin ingin hapus data?",
        text: "Data yang dihapus tidak bisa dikembalikan!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Ya, hapus!",
        }).then((result) => {
        if (result.isConfirmed) {
            // Proceed with deletion by redirecting to the delete URL
            window.location.href = `delete_item/${id}`;
        }
        });
    });
    });


    // Select the delete buttons
    const deleteButtonsLocate = document.querySelectorAll(".delete-btn-locate");

    // Add event listener to each delete button
    deleteButtonsLocate.forEach((button) => {
    button.addEventListener("click", function () {
        // Get the data-id attribute value
        const idLocate = this.getAttribute("data-id");

        // Show SweetAlert confirmation dialog
        Swal.fire({
        title: "Yakin ingin hapus data?",
        text: "Data yang dihapus tidak bisa dikembalikan!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Ya, hapus!",
        }).then((result) => {
        if (result.isConfirmed) {
            // Proceed with deletion by redirecting to the delete URL
            window.location.href = `delete_locate/${idLocate}`;
        }
        });
    });
    });



    // Select the delete buttons
    const deleteButtonsType = document.querySelectorAll(".delete-btn-type");

    // Add event listener to each delete button
    deleteButtonsType.forEach((button) => {
    button.addEventListener("click", function () {
        // Get the data-id attribute value
        const idType = this.getAttribute("data-id");

        // Show SweetAlert confirmation dialog
        Swal.fire({
        title: "Yakin ingin hapus data?",
        text: "Data yang dihapus tidak bisa dikembalikan!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Ya, hapus!",
        }).then((result) => {
        if (result.isConfirmed) {
            // Proceed with deletion by redirecting to the delete URL
            window.location.href = `delete_item/${idType}`;
        }
        });
    });
    });
