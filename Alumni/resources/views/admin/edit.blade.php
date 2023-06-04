@if (isset($student))
<div class="modal fade" id="editModal{{$student->id}}" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Edit Alumni</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div id="edit-form"></div>
                   
                    <form  method="POST" action="{{ route('admin.student.update', $student->id) }}">
                    @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="first_name" class="form-label">First Name</label>
                            <input type="text" class="form-control" id="first_name" name="first_name" value="{{ $student->first_name }}">
                        </div>
                        <div class="mb-3">
                            <label for="middle_name" class="form-label">Middle Name</label>
                            <input type="text" class="form-control" id="middle_name" name="middle_name" value="{{ $student->middle_name }}">
                        </div>
                        <div class="mb-3">
                            <label for="last_name" class="form-label">Last Name</label>
                            <input type="text" class="form-control" id="last_name" name="last_name" value="{{ $student->last_name }}">
                        </div>
                        <div class="mb-3">
                            <label for="gender" class="form-label">Gender</label>
                            <select class="form-select" id="gender" name="gender">
                                <option value="Male" {{ $student->gender == 'Male' ? 'selected' : '' }}>Male</option>
                                <option value="Female" {{ $student->gender == 'Female' ? 'selected' : '' }}>Female</option>
                                <option value="Other" {{ $student->gender == 'Other' ? 'selected' : '' }}>Other</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="year_graduated" class="form-label">Year Graduated</label>
                            <select class="form-select" id="year_graduated" name="year_graduated">
                                @for ($year = 2021; $year >= 1950; $year--)
                                    <option value="{{ $year }}" {{ $student->year_graduated == $year ? 'selected' : '' }}>{{ $year }}</option>
                                @endfor
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="address" class="form-label">Home Address</label>
                            <input type="text" class="form-control" id="address" name="address" value="{{ $student->address }}">
                        </div>
                        <button  class="btn btn-primary" type="submit" onclick="confirm()">Save changes</button>
                        <script>
                            function confirm() {
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Succesfully Updated ',
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
                       
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endif

