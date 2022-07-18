@extends('layouts/index')
@section('content')
    @section('judul')
        {{'Admin '}}
    @endsection
    @section('title')
        {{'Pengguna'}}
    @endsection

{{-- {{ $data }} --}}

<div class="col-12">
  <div class="row">
      @foreach ($data as $item)
      <div class="col-3">
          <div class="card">
              <div class="card-body">
                  <h5 class="card-title">{{ $item->name }}</h5>
                  <p class="card-text">{{ ($item->email) }}</p>
                  {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
                  {{-- <form action="{{ route('delete.destroy',$item->id) }}" method="POST"> --}}
            
                    {{-- <a class="btn btn-info" href="{{ route('asets.show',$item->id) }}">Detail</a> --}}
                    {{-- <a class="btn btn-primary" href="{{ route('asets.edit',$item->id) }}">Edit</a> --}}
{{--             
                                @csrf
                                @method('DELETE')
                                <a type="submit" class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></a> --}}
                                {{-- {{viuw::hidden('_method', 'DELETE')}} --}}
                                {{-- <input type="hidden" value="DELETE" name="_method">
                                <input type="submit" value="Delete" class="btn btn-danger btn-sm"> --}}
                              {{-- </form> --}}
                            
                            {{-- <a href="{{route('pengguna.destroy', ['id' => $data->id])}}" onclick="return confirm('Weet je dit zeker?')">
                              <i class="fa fa-trash"></i>
                            </a> --}}
              </div>
          </div>
          <br>
      </div>
      @endforeach
      <div class="col-3">
        <div class="card">
            <div class="card-body text-center">
      <!-- Button trigger modal -->
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
        <i class="fa-solid fa-plus"></i>
      </button>
      </div>
      </div>
      <br>
      </div>
  </div>
</div>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        @csrf 
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif

      <div class="card-header text-center">{{ __('Register') }}</div>
      <br>
        <form action="/save" method="POST" enctype="multipart/form-data">
                              
          @csrf
          {{-- Nama --}}
          <div class="row mb-3">
            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>
            
            <div class="col-md-6">
              <input id="name" type="text" name="name" class="form-control" value="{{ old('name') }}" required autocomplete="name" autofocus>
                <br>
              
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
          </div>
          
          {{-- Email --}}
          <div class="row mb-3">
            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

            <div class="col-md-6">
              <input id="email" type="text" name="email" class="form-control" value="{{ old('email') }}" required autocomplete="email">
                <br>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
          </div>

          {{-- Password --}}
          <div class="row mb-3">
            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

            <div class="col-md-6">
              <input id="password" type="password" name="password" class="form-control" value="{{ old('password') }}" required autocomplete="new-password">
                <br>
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
          </div>

          {{-- Confirm Password --}}
          <div class="row mb-3">
              <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

              <div class="col-md-6">
                  <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
              </div>
          </div>

          {{-- Register --}}
          <div class="col-md-6 offset-md-4">
              <button type="submit" class="btn btn-primary">
                  {{-- {{ __('Register') }} --}}
                  Register
              </button>
          </div>

          {{-- <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
          <button type="reset" class="btn btn-md btn-warning">RESET</button> --}}
        </form>
        {{-- <form action="{{ route('delete',$item->id) }}" method="POST">

          {{-- <a class="btn btn-info" href="{{ route('asets.show',$data->id) }}">Detail</a>
          <a class="btn btn-primary" href="{{ route('asets.edit',$data->id) }}">Edit</a> --}}

          {{-- @csrf
          @method('DELETE')
          
          <button type="submit" class="btn btn-danger">Delete</button>
        </form>  --}}
        </div>

    </div>
  </div>
</div>


@endsection