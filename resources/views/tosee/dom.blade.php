@extends('layout.master')

@section('content')

    {{-- <div style="padding-left: 35%">


        <form method="POST" action="/updatedom">

        		{{ csrf_field() }}

            <div>

                <label for="name"> Domain Name:</label> 

                <input type="text" name="name" id="name" v-model="name" placeholder="{{ $domain->name }}" required>

            </div> 


            <div>
                <label for="language"> Language:</label> 

                <v-select
                  :options="['Chinese','Spanish','English','Hindi','Arabic','Portuguese','Turkish','Russian','Japanese','German','Italian']"
                  v-model="language"  placeholder="{{ $domain->language }}" required
                ></v-select>

            </div> 


             <div style="padding-top: 1%">

                <label for="url"> URL:</label> 

                <input type="text" name="url" id="url" v-model="url" placeholder="{{ $domain->url }}" required>

            </div> 


             <div style="padding-top: 2%;padding-left: 12%">
             
             <hidden name="method" value="PUT"></hidden>

               <button class="btn btn-primary btn-lg"> Submit</button>

            </div>

        </form>

    </div> --}}

    <domupdate domain="{{$domain}}"></domupdate>

@endsection