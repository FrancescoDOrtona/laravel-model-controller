@extends('layouts.app')

@section('content')
<section class="py-4 mb-4">
    <div class="container">
        <div class="card-structure">
           @forelse ($movies as $movie)
               <div class="card">
                <div class="card-header">{{ $movie->title }}</div>
                <div class="card-body">
                    <h4 class="card-title">{{ $movie->original_title }}</h4>
                    <p class="card-text">{{ $movie->nationality }}</p>
                    <p class="card-text">{{ $movie->date }}</p>
                </div>
                <div class="card-footer text-muted">{{ $movie->vote }}</div>
               </div>               
           @empty
               No Movies at the moment
           @endforelse              
        </div>
        <div class="container">
            <nav class="content-pagination" aria-label="Page navigation">
                <ul class="pagination">
                    <li class="page-item disabled">
                        <a class="page-link" href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>
                    <li class="page-item active" aria-current="page">
                        <a class="page-link" href="#">1</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">3</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                </ul>
            </nav>            
        </div>
    </div>
</section>

@endsection