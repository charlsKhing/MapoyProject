<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Tables</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ route('admin.main') }}">Dashboard</a></li>
            <li class="breadcrumb-item active">Tables</li>
        </ol>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Input Data
            </div>
            <div class="card-body">
            <form wire:submit.prevent="saveStudent">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <div class="form-label">First Name</div>
                                <input type="text" class="form-control" wire:model="firstName" name="firstName" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <div class="form-label">Middle Name</div>
                                <input type="text" class="form-control" wire:model="middleName" name="middleName" required>  
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <div class="form-label">Last Name</div>
                                <input type="text" class="form-control" wire:model="lastName" name="lastName" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <div for="gender" class="form-label">Gender</div>
                                <select class="form-select" wire:model="gender" name="gender" required>
                                    <option value="">-- Select Gender --</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="year" class="form-label">Year Graduated</label>
                                <select class="form-select" wire:model="year" name="year" required>
                                    <option value="">-- Select Year --</option>
                                    @for($year = 2021; $year >= 1950; $year--)
                                        <option value="{{ $year }}">{{ $year }}</option>
                                    @endfor
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="address" class="form-label">Home Address</label>
                                <textarea class="form-control" wire:model="address" name="address" rows="3" required></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <form>
                                <button class="btn btn-primary" type="submit" >Save</button>
                            </form>
                        </div>
                    </div>
            </div>
        </div>
        <div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        All Students
    </div>
    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Gender</th>
                    <th>Year Graduated</th>
                    <th>Address</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($this->getAllStudents() as $student)
                    <tr>
                        <td>{{ $student->id }}</td>
                        <td>{{ $student->firstName }} {{ $student->middleName }} {{ $student->lastName }}</td>
                        <td>{{ $student->gender }}</td>
                        <td>{{ $student->year }}</td>
                        <td>{{ $student->address }}</td>
                   
                        <td>
                            <button class="btn btn-danger" wire:click="deleteStudent({{ $student->id }})">Delete</button>
                        </td>
                            </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
</main>


