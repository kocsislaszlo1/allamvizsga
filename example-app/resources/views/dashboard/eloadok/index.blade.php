@extends('dashboard.layout.main')
@section('content')
   
    <div class="card">   
     <div class="card-body">
        @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
        <div class="mb-2">
            <table class=" table table-bordered table-striped table-hover datatable datatable-Amenity">
                <thead>
                    <tr>
                        <td>ID</td>
                        <td>szekcionev</td>
                        <td>idopont</td>
                        <td>link</td>
                        <td>online</td>
                        <td>esemenyek_id</td>
                    </tr>
                </thead>
                <tbody>
                   @foreach ($szekciok as $szekcio)
                   <tr>
                   <td>{{ $szekcio->szekcio_id }}</td>
                   <td>{{ $szekcio->szekcionev }}</td>
                   <td>{{ $szekcio->idopont }}</td>
                   <td>{{ $szekcio->link }}</td>
                   <td>{{ $szekcio->online }}</td>
                   <td>{{ $szekcio->esemenyek_id }}</td>
                   <td><a href="{{ route('esemenyek.edit', $stud->id) }}" class="btn btn-primary">Edit</a></td>
                   <td>
                       <form action="{{ route('students.destroy',$stud->id) }}" method="post">
                           @csrf
                           @method('DELETE')
                           <button class="btn btn-danger" type="submit">Delete</button>
                       </form>
                   </td>
                   @endforeach
                </tr>
                </tbody>
            </table>
        </div>
        <div class="card">
        <nav class="mb-3">
            <div class="nav nav-tabs">

            </div>
        </nav>
        <div class="tab-content">

        </div>
    </div>
@endsection
