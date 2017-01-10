@extends('templates.base')
@section('title', 'Magasin')
@section('content')

    <h1>C'est la page magasin</h1>

    <table class="container-fluid">


    @foreach ($products as $product)
    <tr>
    <td><img style="width: 75%;" style="height: 50%;" src='/img/{{ $product ->img }}'  </td>
    <tr>
    <td>{{ $product ->name }} </td>
    </tr>
    <tr>
    <td>{{ $product ->description }} </td>
    <td> {{ $product ->price / 100 }}€ </td>
    </tr>




    </tr>

    </br>
      @endforeach
      </table>
@endsection
