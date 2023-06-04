<script>
    function validateForm() {
        var firstName = document.getElementById("firstName").value;
        var middleName = document.getElementById("middleName").value;
        var lastName = document.getElementById("lastName").value;
        var gender = document.getElementById("gender").value;
        var year = document.getElementById("year").value;
        var address = document.getElementById("address").value;
        if (firstName == "" || middleName == "" || lastName == "" || gender == "" || year == "" || address == "") {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Please fill out all required fields!',
            });
            return false;
        }
        return true;
    }

    function returnConfirmed() {
        if (validateForm()) {
            Swal.fire({
                icon: 'success',
                title: 'Alumous Successfully Saved',
                showConfirmButton: false,
                timer: 2000,
                customClass: {
                    popup: 'my-popup-class',
                    header: 'my-header-class',
                    title: 'my-title-class',
                    content: 'my-content-class',
                    closeButton: 'my-close-button-class',
                    icon: 'my-icon-class',
                    image: 'my-image-class',
                    input: 'my-input-class',
                    actions: 'my-actions-class',
                    confirmButton: 'my-confirm-button-class',
                    cancelButton: 'my-cancel-button-class',
                    footer: 'my-footer-class'
                }
            });
        }
    }
</script>
<script>
    function returnconfirm() {
        Swal.fire({
            icon: 'success',
            title: 'Deleted Succesfully',
            showConfirmButton: false,
            timer: 2000,
            customClass: {
                popup: 'my-popup-class',
                header: 'my-header-class',
                title: 'my-title-class',
                content: 'my-content-class',
                closeButton: 'my-close-button-class',
                icon: 'my-icon-class',
                image: 'my-image-class',
                input: 'my-input-class',
                actions: 'my-actions-class',
                confirmButton: 'my-confirm-button-class',
                cancelButton: 'my-cancel-button-class',
                footer: 'my-footer-class'
            }
            });
    }
</script>
