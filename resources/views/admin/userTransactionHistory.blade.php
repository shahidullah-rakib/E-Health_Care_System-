@extends('admin.main')
@extends('admin.link')
@extends('admin.header')
@extends('admin.navbar')

{{-- title --}}
@section('title')
    Transaction History
@endsection

{{-- main content --}}
@section('main-content')
        <div class="content">
           <div class="container" style="background-color: white;margin-bottom: 400px; margin-left: 100px;max-width: 1000px;">
               <table class="table" >
                <h1 class="h2" style="background-color: #fff;padding: 10px 30px;text-align: center">Transaction History</h1> 
                   <thead >
                       <tr>
                           <th>Date</th>
                           <th>Bank Name</th>
                           <th>Customer Name</th>
                           <th>Amount</th>
                           <th>Type</th>
                       </tr>
                   </thead>
                   <tbody>
                       @foreach ($transactionlist as $transaction)
                       <tr>
                        <td>{{$transaction->date}}</td>
                        <td>{{$transaction->bankname}}</td>
                        <td>{{$transaction->customer_name}}</td>
                        <td>{{$transaction->amount}}</td>
                        <td>{{$transaction->withdrawmethod}}</td>
                        <td></td>
                    </tr>
                       @endforeach
                       
                   </tbody>
               </table>
           </div>
        </div>
 @endsection