@extends("layouts.admin")

@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
</div>

<div class="row">
    <!-- Card 1: Car Count -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <a href="{{route('cars.index')}}" class="text-decoration-none">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Car</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                {{ count(DB::select("SELECT * FROM cars")) }}
                            </div>
                        </a>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-car fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Card 2: Message Count -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <a href="{{route('admin.messages.index')}}" class="text-decoration-none">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Message</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                {{ count(DB::select("SELECT * FROM messages")) }}
                            </div>
                        </a>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-envelope fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
