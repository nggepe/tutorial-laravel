@extends('layout.main')
@section('content')
  <table>
    
    <tbody>
      <tr>
        <td>Nama Web </td>
        <td> : </td>
        <td>
         {{ $webname }}
        </td>   
      </tr>
      <tr>
        <td>Pemilik Web </td>
        <td> : </td>
        <td>
          {{ $owner }}
         </td>
      </tr>
      <tr>
        <td>Usia web </td>
        <td> : </td>
        <td>
          {{ $usiaweb }}
         </td>
      </tr>
    </tbody>
  </table>
@endsection