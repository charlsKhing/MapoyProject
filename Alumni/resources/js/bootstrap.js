window._ = require('lodash');
import Swal from 'sweetalert2';
try {
    require('bootstrap');
} catch (e) {}

/**
 * We'll load the axios HTTP library which allows us to easily issue requests
 * to our Laravel back-end. This library automatically handles sending the
 * CSRF token as a header based on the value of the "XSRF" token cookie.
 */

window.axios = require('axios');

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

/**
 * Echo exposes an expressive API for subscribing to channels and listening
 * for events that are broadcast by Laravel. Echo and event broadcasting
 * allows your team to easily build robust real-time web applications.
 */

// import Echo from 'laravel-echo';

// window.Pusher = require('pusher-js');

// window.Echo = new Echo({
//     broadcaster: 'pusher',
//     key: process.env.MIX_PUSHER_APP_KEY,
//     cluster: process.env.MIX_PUSHER_APP_CLUSTER,
//     forceTLS: true
// });
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

