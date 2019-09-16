@extends('base')

@section('main')
        <div class="row">
                <div class="col-sm-12">
                        <h1 class="display-3">Contacts</h1>
                        <table class="table table-striped">
                                <thead>
                                <tr>
                                        <td>ID</td>
                                        <td>Name</td>
                                        <td>Email</td>
                                        <td>Job Title</td>
                                        <td>City</td>
                                        <td>Country</td>
                                        <td colspan="3" class="text-center">Actions</td>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($contacts as $contact)
                                        <tr>
                                                <td>{{$contact->id}}</td>
                                                <td>{{$contact->first_name}} {{$contact->last_name}}</td>
                                                <td>{{$contact->email}}</td>
                                                <td>{{$contact->job_title}}</td>
                                                <td>{{$contact->city}}</td>
                                                <td>{{$contact->country}}</td>
                                                <td >
                                                        <a href="{{ route('contacts.create')}}" class="text-success fa fa-user" title="add">adduser:</a>
                                                </td>
                                                <td>
                                                        <a href="{{ route('contacts.edit',$contact->id)}}" class="text-primery fa fa-edit" title="edit">edituser:</a>
                                                </td>
                                                <td>
                                                        <form action="{{ route('contacts.destroy', $contact->id)}}" method="post">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button class="text-danger fa fa-trash" type="submit">Delete</button>
                                                        </form>


                                                </form>


                                                </td>

                                        </tr>
                                @endforeach
                                </tbody>
                        </table>
                        <div>
                        </div>
@endsection