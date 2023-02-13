@extends('layouts.app')
@section('content')
<div class="row">
  <div class="col-lg-12">
    <div class="pull-right mt-3 mb-3">
      @can('user-create')
      <x-primary-button class="ml-3">
        <br>
        <a class="btn btn-success" href="{{ route('users.create') }}"> Create New User</a>
      </x-primary-button>
      @endcan
      <br>
    </div>
  </div>
</div>
<br>
<table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
  <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
    <tr>
      <th scope="col" class="px-6 py-3">No</th>
      <th scope="col" class="px-6 py-3">Name</th>
      <th scope="col" class="px-6 py-3">Email</th>
      <th scope="col" class="px-6 py-3">Roles</th>
      <th width="280px" scope="col" class="px-6 py-3">Action</th>
    </tr>
    @foreach ($users as $key => $user)
    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
      <th scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
        {{ $user->id }}
      </th>
      <td>
        {{ $user->name }}
      </td>
      <td>
        {{ $user->email }}
      </td>
      <td>
        @if (!empty($user->getRoleNames()))
        @foreach ($user->getRoleNames() as $r)
        <label class="badge badge-success">{{ $r }}</label>
        @endforeach
        @endif
      </td>
      <td class="px-6 py-4">
        <a class="btn btn-info" href="{{ route('users.show', $user->id) }}">Show</a>
        @can('user-edit')
        <a class="btn btn-primary" href="{{ route('users.edit', $user->id) }}">Edit</a>
        @endcan
        @can('user-delete')
        {!! Form::open(['method' => 'DELETE', 'route' => ['users.destroy', $user->id], 'style' => 'display:inline']) !!}
        {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
        {!! Form::close() !!}
        @endcan
      </td>
    </tr>
    @endforeach

</table>
{!! $users->render() !!}
@endsection