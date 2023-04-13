@extends('layouts.dashboard.dashboard')
@section('breadcrumb')
   <li class="breadcrumb-item active">Tiket</li>
@endsection
@section('content')
   <div class="row">

      <div class="col-lg-12">
         @if (session('success'))
            <div class="col-lg-11">
               <div class="alert alert-success alert-dismissible fade show" role="alert">
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">close</button>
                  {!! session('success') !!}
               </div>
            </div>
         @endif
      </div>

      <div class="col-lg-12">
         <div class="card">
            <div class="card-body">
               <h5 class="card-title">Order tiket</h5>

               <!-- Horizontal Form -->
               <form action="{{ route('public.tiket.store') }}" method="POST">
                  @csrf
                  <div class="row mb-3">
                     <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                     <div class="col-sm-10">
                        <input required type="text" class="form-control" id="nama" name="nama" value="{{ Auth::user()->name }}">
                        @error('nama')
                           <div class="invalid-feedback">
                              {{ $message }}
                           </div>
                        @enderror
                     </div>
                  </div>
                  <div class="row mb-3">
                     <label for="email" class="col-sm-2 col-form-label">Email</label>
                     <div class="col-sm-10">
                        <input required type="email" class="form-control" id="email" name="email" value="{{ Auth::user()->email }}">
                        @error('email')
                           <div class="invalid-feedback">
                              {{ $message }}
                           </div>
                        @enderror
                     </div>
                  </div>
                  <div class="row mb-3">
                     <label for="notelp" class="col-sm-2 col-form-label">NoTelp</label>
                     <div class="col-sm-10">
                        <input required type="text" class="form-control" id="notelp" name="notelp">
                        @error('notelp')
                           <div class="invalid-feedback">
                              {{ $message }}
                           </div>
                        @enderror
                     </div>
                  </div>
                  <div class="row mb-3">
                     <div class="col-sm-2">
                        <label for="concert" class="form-label">Konser</label>
                     </div>
                     <div class="col-sm-10">
                        <select required id="concert_id" class="form-select" name="concert_id">
                           <option disabled selected>Pilih konser...</option>
                           @foreach ($concerts as $concert)
                              <option value="{{ $concert->id }}">{{ $concert->nama }}</option>
                           @endforeach
                        </select>
                        @error('concert_id')
                           <div class="invalid-feedback">
                              {{ $message }}
                           </div>
                        @enderror
                     </div>
                  </div>
                  <div class="row mb-3">
                     <label for="jumlah_tiket" class="col-sm-2 col-form-label">Jumlah Tiket</label>
                     <div class="col-sm-10">
                        <input required type="number" class="form-control" id="jumlah_tiket" name="jumlah_tiket">
                        @error('jumlah_tiket')
                           <div class="invalid-feedback">
                              {{ $message }}
                           </div>
                        @enderror
                     </div>
                  </div>

                  <input type="hidden" name="ticket_code" value="AA">
                  <div class="text-end">
                     <button type="submit" class="btn btn-success">Submit</button>

                  </div>
               </form>

            </div>
         </div>
      </div>
   </div>

   <div class="row">
      <div class="col-lg-12">
         <div class="card">
            <div class="card-body">
               <h5 class="card-title">Daftar tiket mu</h5>

               <!-- Table with hoverable rows -->
               <table class="table table-hover">
                  <thead>
                     <tr>
                        <th scope="col">#</th>
                        <th scope="col">Tiket</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Jumlah</th>
                        <th scope="col">Konser</th>
                        <th scope="col">Tgl. Konser</th>
                        <th scope="col">Checked In</th>
                     </tr>
                  </thead>
                  <tbody>
                     @forelse ($tickets as $ticket)
                        @php
                           $status = '';
                           $warnastatus = '';
                           if ($ticket->checked_in == true) {
                               $status = 'Sudah';
                               $warnastatus = 'text-danger';
                           } else {
                               $status = 'Belum';
                               $warnastatus = 'text-success';
                           }
                        @endphp
                        <tr>
                           <th scope="row">{{ $loop->iteration }}</th>
                           <td>{{ $ticket->ticket_code }}</td>
                           <td>{{ $ticket->nama }}</td>
                           <td>{{ $ticket->jumlah_tiket }}</td>
                           <td>{{ $ticket->concert->nama }}</td>
                           <td>{{ $ticket->concert->tanggal }}</td>
                           <td class="{{ $warnastatus }}">{{ $status }}</td>
                        </tr>
                     @empty
                        <tr>
                           <p>KOSONG</p>
                        </tr>
                     @endforelse



                  </tbody>
               </table>
               <!-- End Table with hoverable rows -->

            </div>
         </div>
      </div>
   </div>
@endsection
