@extends('layouts.admin')

@section('content')
        <div class="messages$messagesd">
            <div class="messages$messagesd-header d-flex justify-content-between align-items-center">
                <h3>Daftar Pesan</h3>
            </div>
            <div class="messages$messagesd-body">
                <div class="table-responsive">
                    <table class="table table-border">
                        <thead>
                            <tr>
                                <th>no</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Subject</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($messages as $messages)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $messages->name}}</td>
                                        <td>{{ $messages->email }}</td>
                                        <td> {{ $messages->subject }}</td>
                                        <td> {{ $messages->pesan }}</td>
                                        <td>
                                            
                                            <form onclick="return confirm('anda yakin menghapus data?');" class="d-inline" action="{{ route('admin.messages.destroy', $messages->id)}}" method="post">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn btn-danger btn-sm"> delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="6" class="text-center">Data Kosong</td>
                                    </tr>
                                @endforelse
                </div>
            </div>
        </div>
    </div>
                            </tbody>
                    </table>
                </div>
            </div>
        </div>
@endsection