    const selectElement = document.getElementById("entries-select");
    const searchInput = document.getElementById("search-input");
    const tableElement = document.getElementById("data-table");
    const tableRows = tableElement.tBodies[0].rows;
    let currentPage = 0;
    let numRowsPerPage = parseInt(selectElement.value); // default number of rows per page

    selectElement.addEventListener("change", function () {
    if (this.value === "all") {
        numRowsPerPage = tableRows.length; // set number of rows per page to total rows if 'all' is selected
    } else {
        numRowsPerPage = parseInt(this.value);
    }
    currentPage = 0; // reset current page to 0 when number of rows per page changes
    updateTable();
    });

    searchInput.addEventListener("input", function () {
    currentPage = 0; // reset to first page on search
    updateTable();
    });

    function addPaginationListeners(prevId, nextId) {
    document.getElementById(prevId).addEventListener("click", function () {
        if (currentPage > 0) {
        currentPage--;
        updateTable();
        }
    });

    document.getElementById(nextId).addEventListener("click", function () {
        if (
        currentPage <
        Math.ceil(getFilteredRows().length / numRowsPerPage) - 1
        ) {
        currentPage++;
        updateTable();
        }
    });
    }

    function getFilteredRows() {
    const filterText = searchInput.value.toLowerCase();
    return Array.from(tableRows).filter((row) => {
        return Array.from(row.cells).some((cell) =>
        cell.textContent.toLowerCase().includes(filterText)
        );
    });
    }

    function updateTable() {
    const filteredRows = getFilteredRows();
    for (let i = 0; i < tableRows.length; i++) {
        tableRows[i].style.display = "none";
    }

    const startIndex = currentPage * numRowsPerPage;
    const endIndex = startIndex + numRowsPerPage;
    for (let i = startIndex; i < endIndex && i < filteredRows.length; i++) {
        filteredRows[i].style.display = "";
    }
    }

    addPaginationListeners("prev-page-top", "next-page-top");
    addPaginationListeners("prev-page-bottom", "next-page-bottom");
    updateTable(); // initial update
