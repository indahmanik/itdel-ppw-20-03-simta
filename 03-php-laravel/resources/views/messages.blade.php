<?php
$msgs = App\Models\Messages::all();
$contacts = App\Models\Users::all();
?>

<style>
		footer {
			padding: 5px;
			background-color: grey;
			text-align: center; 
      }
    
      .myMessage {
        text-align: right;
        background-color: #5ab3f6;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 1);
        padding-right: 10px;
      }

      .conMessage{
        text-align: left;
        background-color: lavender;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 1);
        padding-left: 10px;
      }

      .listContact{
        background-color: gainsboro;
        padding: 20px;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 1);
        padding-left: 10px;
        margin: auto;
      }
      
	</style>

@extends('layout/mahasiswa')

@section('title', 'Messages')

@section('messages', 'active')

@section('container-md-8')
<div class="col-sm-8" style="margin:auto; margin-top: 10px; margin-bottom: 10px">
            <br>
            <h4 style="font-family:'Times New Roman', Times, serif;  text-align: center; color: black; ">M E S S A G E S</h4>
      <br>

      <div class="row">
        <div class="col-sm-5" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 1); border-radius: 1px; padding: 20px; margin-left: 50px;">
          <center>
              <form action="/messages/contacts/search" method="GET">
              @if ($contacts->count() > 0)
                {{csrf_field()}}
                <div class="input-group" style="padding: 20px; ">
                  <input type="text" class="form-control" name="searchTerm" placeholder="Search for..." value="{{ old('search')}}">
                  <span class="input-group-btn">
                    <button class="btn btn-secondary" type="submit">Search</button>
                  </span>
                </div>

                <div class="col-sm-12 blog-main" style="overflow: scroll; height: 600px; width: 100%;">
                @foreach ($contacts as $contact)
                  <div class="listContact" style="text-align:left;">
                  <img id="logo" src="pict/prof.png" width="50px">{{$contact->name}}</img>
                  </div>
                @endforeach
                </div>
                @else
                  <p>Hasil pencarian tidak ditemukan</p>
                @endif
              </form></center>
        </div>

        <div class="col-sm-6" >
          <center>
          <div class="mesProfile" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 1); border-radius: 1px; padding: 20px; ">
            <img id="logo" src="pict/prof.png" width="50px"/><b>Mr. X</b>
            <br>
          </div></center>
          <br>
          <div class="messages" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 1); border-radius: 1px; padding: 20px; overflow: scroll; height: 510px;">
            <div class="conMessage" style="text-align: left;">
            <p>Just Forgot that I had to mention something about someone to someone about how I forgot something, but now I forgot it. Ahh, forget it! Or wait. I remember.... no I don't.</p>
            </div>           
            @foreach ($msgs as $messages)
            <div class="myMessage">
            <p>
              {{$messages->text}}
            </p>
            </div>
            @endforeach
          </div>
          <br>
          <div class="messages" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 1); border-radius: 1px; padding: 20px;">
          <form action="/sendMessages" method="post">
            @csrf
                <div class="input-group">
                  <input type="text" class="form-control" name="text" placeholder="Write something...">
                  <span class="input-group-btn">
                    <button class="btn btn-secondary" type="submit">Send</button>
                  </span>
                </div>
          </form>
          </div>
        </div>
      </div>
</div>
    @endsection
