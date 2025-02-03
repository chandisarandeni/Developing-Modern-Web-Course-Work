document.addEventListener("DOMContentLoaded", function () {
    const editButtons = document.querySelectorAll(".edit-btn");
    const editModal = document.getElementById("editModal");

    editButtons.forEach(button => {
        button.addEventListener("click", function () {
            // Get data from the clicked button
            const name = this.getAttribute("data-name");
            const position = this.getAttribute("data-position");
            const office = this.getAttribute("data-office");
            const age = this.getAttribute("data-age");
            const start = this.getAttribute("data-start");
            const salary = this.getAttribute("data-salary");

            // Fill modal fields
            document.getElementById("editName").value = name;
            document.getElementById("editPosition").value = position;
            document.getElementById("editOffice").value = office;
            document.getElementById("editAge").value = age;
            document.getElementById("editStart").value = start;
            document.getElementById("editSalary").value = salary;
        });
    });

    // Save changes (for now, just logs the data)
    document.getElementById("saveChanges").addEventListener("click", function () {
        const updatedData = {
            name: document.getElementById("editName").value,
            position: document.getElementById("editPosition").value,
            office: document.getElementById("editOffice").value,
            age: document.getElementById("editAge").value,
            start: document.getElementById("editStart").value,
            salary: document.getElementById("editSalary").value
        };

        console.log("Updated Data:", updatedData);
        alert("Changes saved!");

        // Close modal
        $('#editModal').modal('hide');
    });
});
