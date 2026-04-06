<h1>liste des etudiant</h1>



<table border="1">
    <tr>
        <td>numero </td>
        <td>liste des etudiant</td>
    </tr>
        @foreach($listEtu as $etu)
     <tr> 
        <td>{{ $loop->iteration }}</td>
        <td>{{$etu}}</td>
    </tr>
    @endforeach
</table>


{{-- @foreach ($collection as $item)
    
@endforeach --}}