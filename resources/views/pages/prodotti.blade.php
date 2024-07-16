@extends('layouts.app')


@section('main-content')

<main>
    <section>
        @foreach ($data as $fumetti)
        <article>


            <img src="{{$fumetti['thumb']}}" alt="">
            <p>{!!$fumetti['title']!!}</p>




        </article>
        @endforeach
        <div>

            <button>load more</button>

        </div>


    </section>



</main>

@endsection
