@extends('layouts.app')

@section('content')
<div class="card pt-3 shadow-sm">
    <div class="px-3">
        <h3>Postagens</h3>
    </div>
    <table class="table table-md table-striped">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Titulo</th>
            <th scope="col">Postagem</th>
            <th scope="col">Imagem</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
            @forelse($posts_info as $post_info)
                <tr>
                    <th scope="row">{{ $post->id }}</th>
                    <td>{{ $post_info->title }}</td>
                    <td>{{ $post_info->content }}</td>
                    <td>{{ $post_info->image}}</td>
                    <td class="d-flex justify-content-end">
                        <a href="{{ route('post_info.show', ['id' => $post_info->id]) }}" class="btn btn-link btn-sm mr-2 text-dark">
                            <i class="fas fa-info-circle fa-lg"></i>
                        </a>
                        <a href="imageto:{{$post_info->image}}" class="btn btn-link btn-sm text-dark" target="_blank">
                            <i class="fas fa-reply fa-lg"></i>
                        </a>
                    </td>
                </tr>
            @empty
                <tr>
                    <th colspan="5" class="text-center">Nenhuma Postagem encontrada</th>
                </tr>
            @endforelse
        </tbody>
    </table>
    {{ $posts_info->links() }}
</div>
@endsection
