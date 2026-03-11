@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h2>{{ $title ?? 'Titre de la page' }}</h2>
                @if(isset($breadcrumb))
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0">
                            @foreach($breadcrumb as $item)
                                @if($loop->last)
                                    <li class="breadcrumb-item active">{{ $item['text'] }}</li>
                                @else
                                    <li class="breadcrumb-item">
                                        @if(isset($item['url']))
                                            <a href="{{ $item['url'] }}">{{ $item['text'] }}</a>
                                        @else
                                            {{ $item['text'] }}
                                        @endif
                                    </li>
                                @endif
                            @endforeach
                        </ol>
                    </nav>
                @endif
            </div>
            <div class="card-body">
                @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>
                @endif

                @if(session('error'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session('error') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>
                @endif

                @yield('page-content')
            </div>
        </div>
    </div>
</div>
@endsection