@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Blogs</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            @can('crear-blog')
                                <div class="pull-right">
                                    <a class="btn btn-warning" href="{{ route('blogs.create') }}">Nuevo</a>
                                </div>
                            @endcan
                            <table class="table table-striped mt-2">
                                <thead style="background-color: #6777ef" >
                                    <th style="display: none" >ID</th>
                                    <th style="color: #fff">Titulo</th>
                                    <th style="color: #fff">Contenido</th>
                                    <th style="color: #fff">Acciones</th>
                                </thead>
                                <tbody>
                                    @foreach ($blogs as $blog)
                                        <tr>
                                            <td style="display: none">{{ $blog->id }}</td>
                                            <td>{{ $blog->title }}</td>
                                            <td>{{ $blog->content }}</td>
                                            <td>
                                                @can('editar-blog')
                                                    <a class="btn btn-primary" href="{{ route('blogs.edit', $blog->id) }}">Editar</a>
                                                @endcan

                                                @can('eliminar-blog')
                                                    {{ Form::open(['method' => 'DELETE', 'route' => ['blogs.destroy', $blog->id], 'style' => 'display:inline']) }}
                                                        {{ Form::submit('Eliminar', ['class' => 'btn btn-danger']) }}
                                                    {{ Form::close() }}
                                                @endcan
                                        </tr>
                                    @endforeach
                                </tbody>
                                <div class="pagination justify-content-end">
                                    {{ $blogs->links() }}
                                </div>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
