@extends('layouts.wedding')

@section('title', 'Veronika & Alex | Contact')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Tables</h1>

                <table class="table table-hover table-striped">
                    <tr>
                        <th>Name</th>
                        <th>Starter</th>
                        <th>Main Course</th>
                        <th>Dessert</th>
                        <th>Special/Dietary Requirements</th>
                    </tr>
                    @foreach($tables as $table => $guests)
                        <tr>
                            <th colspan="5">Table - {{ $guests->count() }} People</th>
                        </tr>
                        @foreach($guests as $guest)
                            <tr>
                                <td>
                                    {{ $guest->name }}
                                </td>
                                <td>
                                    {{ $guest->starter->name }}
                                </td>
                                <td>
                                    {{ $guest->main_course->name }}
                                </td>
                                <td>
                                    {{ $guest->dessert->name }}
                                </td>
                                <td>
                                    {{ $guest->dietary }}
                                </td>
                            </tr>
                        @endforeach
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@stop
