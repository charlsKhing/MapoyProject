<title>Manage Alumni</title>
@section('content')
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
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Middle Name</th>
                    <th>Last Name</th>
                    <th>Gender</th>
                    <th>Year Graduated</th>
                    <th>Address</th>
                </tr>
            </thead>
            <tbody>
                @foreach($this->getAllStudents() as $student)
                    <tr>
                        <td>{{ $student->id }}</td>
                        <td>{{ $student->firstName }}</td>
                        <td>{{ $student->middleName }}</td>
                        <td>{{ $student->lastName }}</td>
                        <td>{{ $student->gender }}</td>
                        <td>{{ $student->year }}</td>
                        <td>{{ $student->address }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
</main>
@endsection('content')