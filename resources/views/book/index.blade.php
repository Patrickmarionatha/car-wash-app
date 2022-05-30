@extends('layouts.secondary')
@section('container')
    @auth
    @endauth
    <!-- cover -->
    <div class="container-fluid bg-dark vh-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto bg-dark text-center mt-4">
                    <p class="text-warning fs-5">Please Submit Your Data!</p>
                </div>
            </div>
            <form action="/book" method="post">
                @csrf
                <div class="row mb-1 pt-lg-5 text-light text-bold">
                    <label for="name" class="col-sm-2 col-form-label bg-dark rounded-1">Name</label>
                    <div class="col-sm-4">
                        <input type="text" name="name" class="form-control" id="name" placeholder="Input your Name">
                    </div>
                    <label for="booktime" class="col-sm-2 col-form-label bg-dark rounded-1">Select Time</label>
                    <div class="col-sm-4">
                        <select class="form-select" name="booktime" id="booktime">
                            <option selected disabled>Select Time Booking</option>
                            <option value="09:00">09:00</option>
                            <option value="09:30">09:30</option>
                            <option value="10:00">10:00</option>
                            <option value="10:30">10:30</option>
                            <option value="11:00">11:00</option>
                            <option value="11:30">11:30</option>
                            <option value="12:00">12:00</option>
                            <option value="12:30">12:30</option>
                            <option value="13:00">13:00</option>
                            <option value="13:30">13:30</option>
                            <option value="14:00">14:00</option>
                            <option value="14:30">14:30</option>
                            <option value="15:00">15:00</option>
                            <option value="15:30">15:30</option>
                            <option value="16:00">16:00</option>
                            <option value="16:30">16:30</option>
                            <option value="17:00">17:00</option>
                            <option value="17:30">17:30</option>
                            <option value="18:00">18:00</option>
                        </select>
                    </div>
                </div>
                <div class="row mb-1 pt-lg-5 text-light text-bold">
                    <label for="cartype" class="col-sm-2 col-form-label bg-dark rounded-1">Car Type</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="cartype" id="cartype"
                            placeholder="Input your Car Type">
                    </div>
                    <label for="bookstation" class="col-sm-2 col-form-label bg-dark rounded-1">Station</label>
                    <div class="col-sm-4">
                        <select class="form-select" name="bookstation" id="bookstation">
                            <option selected disabled>Select Station</option>
                            <option value="Station 1">Station 1</option>
                            <option value="Station 2">Station 2</option>
                            <option value="Station 3">Station 3</option>
                            <option value="Station 4">Station 4</option>
                        </select>
                    </div>
                </div>
                <div class="row mb-1 pt-lg-5 text-light text-bold">
                    <label for="carbrand" class="col-sm-2 col-form-label bg-dark rounded-1">Car Brand</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="carbrand" id="carbrand"
                            placeholder="Input your Car Brand">
                    </div>
                    <label for="bookservice" class="col-sm-2 col-form-label bg-dark rounded-1">Service Type</label>
                    <div class="col-sm-4">
                        <select class="form-select" name="bookservice" id="servicetype">
                            <option selected disabled>Select Service Type</option>
                            <option value="Cleaning">Cleaning</option>
                            <option value="Detailing">Detailing</option>
                            <option value="Coating">Coating</option>
                        </select>
                    </div>
                </div>
                <div class="row mb-1 pt-lg-5 text-light text-bold">
                    <label for="lisenceplate" class="col-sm-2 col-form-label bg-dark rounded-1">Lisence Plate</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="lisenceplate" id="lisenceplate"
                            placeholder="Input your Lisence Plate">
                    </div>
                    <label for="payment" class="col-sm-2 col-form-label bg-dark rounded-1">Payment</label>
                    <div class="col-sm-4">
                        <select class="form-select" name="payment" id="payment">
                            <option selected disabled>Choose The Payment</option>
                            <option value="Ovo">Ovo</option>
                            <option value="Gopay">Gopay</option>
                            <option value="Dana">Dana</option>
                            <option value="Shopeepay">Shopeepay</option>
                            <option value="Transfer">Transfer</option>
                            <option value="Cash">Cash</option>
                        </select>
                    </div>
                </div>
                <div class="row mb-1 pt-lg-5 text-light text-bold">
                    <label for="datepicker" class="col-sm-2 col-form-label bg-dark rounded-1">Select Date</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="datepicker" id="datepicker"
                            placeholder="Select Date">
                    </div>
                </div>
                <div class="row mb-1 pt-lg-5 text-light text-bold justify-content-end">
                    <div class="d-grid gap-2 col-4">
                        <input type="text" name="user_id" id="user_id" value="{{ Auth::user()->id }}" hidden>
                        <input type="text" name="qr" id="qr" hidden>
                        {{-- {{ QrCode::size(0)->generate(DB::table('books')->select('id')->get()) }} --}}
                        <button class="btn btn-lg btn-warning fs-1" type="submit">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- akhir cover -->
@endsection
