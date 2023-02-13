 @extends('layouts.app')
 @section('content')
 <div class="mt-5 md:col-span-2 md:mt-0">
  <center>
   <strong>New consultations Form</strong>
  </center>
  <div class="pull-right mt-3 mb-3">
   @can('user-create')
   <x-primary-button class="ml-3">
    <a class="btn btn-success" href="{{ route('consultations.index') }}">Back</a>
   </x-primary-button>
   @endcan

  </div>
  <br>

  {!! Form::open(['route' => 'consultations.store', 'method' => 'POST']) !!}
  <div class="row">
   <div class="overflow-hidden shadow sm:rounded-md">
    <div class="bg-white px-4 py-5 sm:p-6">
     <div class="grid grid-cols-6 gap-6">
      <div class="col-span-6 sm:col-span-3">
       <div class="overflow-hidden shadow sm:rounded-md">
        <div class="bg-white px-4 py-5 sm:p-6">

         <div class="col-span-6 sm:col-span-3">
          <div>
           <strong>User id:</strong>
           {!! Form::text('users_id') !!}
          </div>
          <div>
           <strong>Doctor id:</strong>
           {!! Form::text('doctors_id') !!}
          </div>
          <div>
           <strong>Day:</strong>
           {!! Form::text('day') !!}
          </div>
          <div>
           <strong>Time:</strong>
           {!! Form::text('time') !!}
          </div>
          <div>

          </div>
         </div>
         <div class="pull-right mt-3 mb-3">
          <center>
           <x-primary-button class="ml-3">
            <a class="btn btn-success" href="{{ route('consultations.index') }}">Submit</a>
           </x-primary-button>
          </center>
         </div>

        </div>
       </div>
       {!! Form::close() !!}
       @endsection