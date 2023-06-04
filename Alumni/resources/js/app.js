require('./bootstrap');
import Swal from 'sweetalert2';

// Get a reference to the Edit button and the modal
const editButton = document.querySelector('.btn-primary');
const editModal = document.querySelector('#editModal');

// Listen for a click event on the Edit button
editButton.addEventListener('click', function() {
    // Get the data attribute from the Edit button
    const alumni = JSON.parse(editButton.dataset.alumni);

    // Populate the input fields in the modal with the data from the clicked row
    editModal.querySelector('#first_name').value = alumni.first_name;
    editModal.querySelector('#middle_name').value = alumni.middle_name;
    editModal.querySelector('#last_name').value = alumni.last_name;
    editModal.querySelector('#gender').value = alumni.gender;
    editModal.querySelector('#address').value = alumni.address;
});

