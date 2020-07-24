@extends('layouts.admin')

@section('title')
    Portfolio
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Portfolios</h1>
            <div class="section-header-button">
                <a class="btn btn-primary" href={{ route('portfolio.create') }}>Add Portfolio</a>
            </div>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Portfolios Table</h4>
                        </div>
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                @if(session()->get('success'))
                                    <div class="alert alert-success alert-dismissible show fade">
                                        <div class="alert-body">
                                            <button class="close" data-dismiss="alert">
                                                <span>&times;</span>
                                            </button>
                                            {{ session()->get('success') }}
                                        </div>
                                    </div>
                                @endif
                                <table class="table table-striped table-md">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Image</th>
                                        <th>Name</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($portfolios as $portfolio)
                                        <tr>
                                            <td>{{$portfolio->id}}</td>
                                            <td><img width="150px" src="{{ url('/storage/portfolios/' . $portfolio->image) }}"></td>
                                            <td>{{$portfolio->name}}</td>
                                            <td>
                                                <a href="{{ route('portfolio.edit', $portfolio->id) }}" class="btn btn-primary">Edit</a>
                                                <a>
                                                    <form action="{{ route('portfolio.destroy', $portfolio->id)}}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="btn btn-danger" type="submit">Delete</button>
                                                    </form>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card-footer text-right">
                            <nav class="d-inline-block">
                                {{$portfolios->links()}}
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
