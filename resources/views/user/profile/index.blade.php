@extends('layouts.user.appuser')
@section('content')


 <!-- ======= Portfolio Section ======= -->
 <section id="contact" class="contact">
    <div class="container" data-aos="fade-up">

        <div class="row">
            <div class="col-md-12">
                <div class="section-title">
                    <h2>My Profile</h2>
                    <table style="font-size:10px; margin-top: 5%;" class="table ">
                        <tbody>
                            <tr>
                                <td>Nama</td>
                                <td width="10">:</td>
                                <td align="left">{{$user->name}}</td> 
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>:</td>
                                <td align="left">{{$user->email}}</td> 
                            </tr>
                            <tr>
                                <td>Alamat</td>
                                <td>:</td>
                                <td align="left">{{$user->alamat}}</td> 
                            </tr>
                            <tr>
                                <td>Kota</td>
                                <td>:</td>
                                <td align="left">{{$user->kota}}</td> 
                            </tr>
                            <tr>
                                <td>Jenis Kelamin</td>
                                <td>:</td>
                                <td align="left">{{$user->jenis_kelamin}}</td> 
                            </tr>
                            
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            
            <div class="col-md-12">        
                <div class="section-title">
                    <h2 class="mb-3">Edit Profile</h2>

                    @if(count($errors) > 0)
                    <div class="alert alert-danger">
                        @foreach ($errors->all() as $error)
                        {{ $error }} <br/>
                        @endforeach
                    </div>
                    @endif

                    @if (session('success'))
                    <!-- MAKA TAMPILKAN ALERT SUCCESS -->
                    <div class="alert alert-success">{{ session('success') }}</div>
                    @endif

                    <!-- KETIKA ADA SESSION ERROR  -->
                    @if (session('error'))
                    <!-- MAKA TAMPILKAN ALERT DANGER -->
                    <div class="alert alert-danger">{{ session('error') }}</div>
                    @endif

                    <div class="card mt-3">
                        <div class="card-body"  style="font-size:10px;  ">
                        <form method="POST" action="{{ url('profile/update') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-2 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-10">
                                <input style="font-size:10px;" id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{$user->name}}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-2 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-10">
                                <input style="font-size:10px;" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{$user->email}}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="alamat" class="col-md-2 col-form-label text-md-right">{{ __('Alamat') }}</label>

                            <div class="col-md-10">
                                <textarea style="font-size:10px;" id="alamat" type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat" required autocomplete="alamat" autofocus>{{$user->alamat}}</textarea>
                                @error('alamat')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="kota" class="col-md-2 col-form-label text-md-right">Kota</label>

                            <div class="col-md-10">
                                <input style="font-size:10px;" id="kota" type="text" class="form-control @error('kota') is-invalid @enderror" name="kota" value="{{$user->kota}}" required autocomplete="kota" autofocus>

                                @error('kota')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="jenis_kelamin" class="col-md-2 col-form-label text-md-right">Jenis Kelamin</label>

                            <div class="col-md-10">
                                <input style="font-size:10px;" id="jenis_kelamin" type="text" class="form-control @error('jenis_kelamin') is-invalid @enderror" name="jenis_kelamin" value="{{$user->jenis_kelamin}}" required autocomplete="jenis_kelamin" autofocus>

                                @error('jenis_kelamin')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-2 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-10">
                                <input id="password" style="font-size:10px;"  type="password" class="form-control @error('password') is-invalid @enderror" name="password" >

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-2 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-10">
                                <input id="password-confirm" style="font-size:10px;"  type="password" class="form-control" name="password_confirmation">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-2">
                                <button  style="font-size:10px;" type="submit" class="btn btn-primary">
                                    {{ __('Simpan') }}
                                </button>
                            </div>
                        </div>
                    </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </section>
  <!-- End Portfolio Section -->
@endsection