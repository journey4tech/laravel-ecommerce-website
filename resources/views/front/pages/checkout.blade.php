@extends('front.master')
@section('content')
    <div class="main-container col2-right-layout">
        <div class="main container">
            <div class="row">
                <section class="col-main col-sm-9 wow bounceInUp animated">
                    <div class="page-title">
                        <h2>Product Shipping Address</h2>
                    </div>
                    {!! Form::open(['url' => route('product.order.confirm'),'method'=>'post']) !!}
                    @csrf
                    <div class="static-contain">
                        <div class="form-group">
                            <label for="">Name</label>
                            <input class="form-control" type="text" name="name" id="name" value="{{ old('name') }}"/>
                            @if ($errors->has('name')) <p class="text-danger">{{ $errors->first('name') }}</p> @endif
                        </div>
                        <div class="form-group">
                            <label for="">Phone No.</label>
                            <input class="form-control" type="text" name="phone" id="phone" value="{{ old('phone') }}">
                            @if ($errors->has('phone')) <p class="text-danger">{{ $errors->first('phone') }}</p> @endif
                        </div>
                        <div class="form-group">
                            <label for="">District</label>
                            <select name="district" id="district" class="form-control">
                                <option value="0">Choose District</option>
                                @foreach($districts as $district)
                                    <option>{{ $district->name }}</option>
                                @endforeach
                            </select>
                            @if ($errors->has('district')) <p class="text-danger">{{ $errors->first('district') }}</p> @endif
                        </div>
                        <div class="form-group">
                            <label for="">Full Address</label>
                            <textarea class="form-control" name="address" id="address" cols="30" rows="10">{{ old('address') }}</textarea>
                            @if ($errors->has('address')) <p class="text-danger">{{ $errors->first('address') }}</p> @endif
                        </div>
                        <div class="form-group">
                            <label for="">Payment Type</label>
                            <input  style="margin:0px 5px 0px 30px;"  type="radio"  name="payment_type"  value="Cash On Delivery">Cash On Delivery
                            <input  style="margin:0px 5px 0px 30px;"  type="radio" name="payment_type" value="Bkash">Bkash
                        </div>
                        <div class="form-group" id="bkashPhone">

                        </div>

                        <div class="form-group">
                            <button  type="submit" title="Confirm Order" class="button btn-proceed-checkout"><span>Confirm Order</span></button>
                        </div>

                        {!! Form::close() !!}
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

            if( "{{ $carts_count == 0 }}" ){
                $(".btn-proceed-checkout").prop("disabled",true);
            }

            // if(!$('#name').val()  ||
            //         !$('#phone').val() ||
            //         !$('#district').val() || !$('#address').val()){
            //     $(".btn-proceed-checkout").prop("disabled",true);
            // }
        });
    </script>
@endpush

