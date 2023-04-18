<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        @include('bootstrapcdn')
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        
    </head>
    <body class="antialiased">
        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
            <section class="position-relative py-4 py-xl-5">
                <div class="container position-relative">
                    <div class="row d-flex justify-content-center">
                        <div class="col-md-8 col-lg-6 col-xl-5">
                            <div class="card">
                                <div class="card-body text-center marg">
                                    <h2 class="font-weight-bold mb-3 titleText">
                                    Add Todo Item
                                    </h2>
                                    <form method="POST" action="{{ route('saveItem') }}" > 
                                        {{ csrf_field() }}
                                        <input type="hidden" name="id">
                                        <div class="mb-3"><input class="form-control" type="text" placeholder="Todo"
                                                name="listItem" ></div>
                                        <div><button class="btn btn-primary d-block w-100" name="insert"
                                                type="submit">Save Item</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card shadow">
                                <div class="card-header py-2">
                                    <p class=" m-0 titleText"><strong>Todo List</strong></p>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive table mb-0 pt-3 pr-2">
                                        <table class="table table-striped table-sm my-0 mydatatable">
                                            <thead>
                                                <tr>
                                                    {{-- <th class="text-center">#</th> --}}
                                                    <th class="contentText ">To do</th>
                                                    <th class="text-center">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($listItems as $listItem)
                                                {{-- @php
                                                       $i=1;
                                                   @endphp --}}
                                                
                                                <tr>
                                                    {{-- <td class="text-center">
                                                        @php
                                                     echo $i++
                                                   @endphp
                                                    </td> --}}
                                                    <td class="contentText">{{ $listItem->name}}</td>
                                                    <td>
                                                        <center>
                                                            
                                                            <a class="btn btn-sm btn-primary" href="{{route('markComplete',$listItem->id)}}" role="button">Mark Complete</a>
                                                        </center>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </body>
</html>
