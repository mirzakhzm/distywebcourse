<!-- resources/views/pelatihan.blade.php -->
@extends('layouts.app')

@section('content')
<div class="enrollment-area section-padding40 fix">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h3>Enrollment Data</h3>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Kontak</th>
                            <th>Pilihan Paket</th>
                            <th>Course ID</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($enrollments as $enrollment)
                        <tr>
                            <td>{{ $enrollment->name }}</td>
                            <td>{{ $enrollment->contact }}</td>
                            <td>{{ $enrollment->paket }}</td>
                            <td>{{ $enrollment->course_id }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
