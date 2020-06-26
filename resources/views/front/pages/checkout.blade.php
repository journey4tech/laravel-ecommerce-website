@extends('front.master')
@section('content')
    <div class="main-container col2-right-layout">
        <div class="main container">
            <div class="row">
                <section class="col-main col-sm-9 wow bounceInUp animated">
                    <div class="page-title">
                        <h2>Product Shipping Address</h2>
                    </div>
                    <div class="static-contain">
                        <div class="form-group">
                            <label for="">Name</label>
                            <input class="form-control" type="text" name="name" id="">
                        </div>
                        <div class="form-group">
                            <label for="">Phone No.</label>
                            <input class="form-control" type="text" name="phone" id="">
                        </div>
                        <div class="form-group">
                            <label for="">District</label>
                            <select name="" id="" class="form-control">
                                <option value="0">Choose District</option>
                                @foreach($districts as $district)
                                    <option>{{ $district->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Full Address</label>
                            <textarea class="form-control" name="address" id="" cols="30" rows="10"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Payment Type</label>
                            <input  style="margin:0px 5px 0px 30px;"  type="radio"  name="payment_type"  value="Cash On Delevery">Cash On Delevery
                            <input  style="margin:0px 5px 0px 30px;"  type="radio" name="payment_type" value="Bkash">Bkash
                        </div>
                        <div class="form-group" id="bkashPhone">

                        </div>
                        <div class="form-group">
                            <button disabled type="submit" title="Confirm Order" class="button btn-proceed-checkout"><span>Confirm Order</span></button>
                        </div>
                    </div>
                </section>
                <aside class="col-right sidebar col-sm-3 wow bounceInUp animated">
                    <div class="block block-company">
                        <div class="block-title">Company </div>
                        <div class="block-content">
                            <ol id="recently-viewed-items">
                                <li class="item odd"><a href="about_us.html">About Us</a></li>

                                <li class="item  odd"><a href="contact_us.html#">Terms of Service</a></li>
                                <li class="item even"><a href="contact_us.html#">Search Terms</a></li>
                                <li class="item last"><strong>Contact Us</strong></li>
                            </ol>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </div>

@endsection

@push('scripts')
    <script>
        $(document).ready(function(){
            $("input[name='payment_type']") // select the radio by its id
                .change(function(){ // bind a function to the change event
                    if( $(this).is(":checked") ){ // check if the radio is checked
                        var val = $(this).val();
                        if(val == 'Bkash'){
                            var template = '';
                             template += '<label for="">Bkash Phone No.</label>';
                             template += '<input class="form-control" type="text" name="bkash_phone" id="">';

                            console.log("Bkash selected");
                            $('#bkashPhone').html(template);
                        }else{
                            $('#bkashPhone').html('');
                        }

                    }
                })
        });
    </script>
@endpush

