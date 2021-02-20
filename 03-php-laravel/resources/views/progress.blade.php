<?php
$reviews = App\Models\Reviews::all();
?>

@extends('layout/mahasiswa')

@section('title', 'Progress Document Tugas Akhir')

@section('progress', 'active')

@section('container-md-8')
<div class="col-md-10" style="margin:auto; margin-top: 10px;">
    <div class="scroll">
    <br><br>
        <h4 style="font-family:'Times New Roman', Times, serif;  text-align: center; color:#193Abf"> Progress</h4><br />
	    <table class="table table-striped w-auto">
	        <thead>
                <tr>
                    <th width= "20%">Professor Name</th>
                    <th>Title</th>
                    <th>Review</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                @foreach ($reviews as $reviews )
                    <!-- <td><img src="pict/prof1.png" width="50px"/></td> -->
                    <td style="font-family: bookman;">{{$reviews -> prof_name}}</td>
                    <!-- <td style="font-family: bookman;"><b>{{$reviews -> title}}</b></td> -->
                    <td style="font-family: bookman;">{{$reviews -> title}}</td>
                    <td style="font-family: bookman;">{{$reviews -> text_review}}</td>
                </tr>
			    @endforeach
            </tbody>
        </table>
    </div>
</div>		
@endsection
