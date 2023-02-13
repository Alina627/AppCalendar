@extends('layouts.app')
@section('content')
<div class="row">
  <div class="col-lg-12">
    <div class="pull-right mt-3 mb-3">
      @can('consultations-create')
      <x-primary-button class="ml-3">
        <a class="btn btn-success" href="{{ route('consultations.create') }}"> Add New consultations</a>
      </x-primary-button>
      @endcan
      <br>
    </div>
  </div>
</div>
<br>
@if ($message = Session::get('success'))
<div class="alert alert-success">
  <p>{{ $message }}</p>
</div>
@endif
<br>

<div class="max-w-2xl mx-auto">
  <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
      <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
        <tr>
          <th scope="col" class="px-6 py-3">No</th>
          <th scope="col" class="px-6 py-3">User id</th>
          <th scope="col" class="px-6 py-3">Doctor id </th>
          <th scope="col" class="px-6 py-3">Day</th>
          <th scope="col" class="px-6 py-3">Interval orar</th>
          <th scope="col" class="px-6 py-3">Durata</th>
          <th width="280px" scope="col" class="px-6 py-3">Action</th>
        </tr>
        @foreach ($consultations as $key => $consult)
        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
          <th scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
            {{ $consult->id }}
          </th>
          <th scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
            {{ $consult->users_id}}
          </th>

          <td class="px-6 py-4">
            {{ $consult->doctors_id}}
          </td>
          <td class="px-6 py-4">
            {{ $consult->day}}
          </td>
          <th scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
            {{ $consult->time}}
          </th>
          <th scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
            {{ $consult->durata}}
          </th>

          <td class="px-6 py-4">
            <a class="btn btn-info" href="{{ route('consultations.show', $consult)}}">Show</a>
            @can('user-edit')
            <a class="btn btn-primary" href="{{ route('consultations.edit', $consult)}}">Edit</a>
            @endcan
            @can('user-delete')
            {!! Form::open(['method' => 'DELETE', 'route' => ['consultations.destroy', $consult], 'style' => 'display:inline']) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
            @endcan
          </td>
        </tr>
        @endforeach
    </table>

    @endsection