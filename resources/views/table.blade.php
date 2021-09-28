<!DOCTYPE html>
<html lang="en">
<body>
    <table id="Intern" border=2>
    <a href={{route('Intern.form')}}>Add New</a>

        <tr>
            <th>Full Name</th>
            <th>Phone No</th>
            <th>Created At</th>
            <th>Updated At</th>
            <th>Action</th>
            <th>Edit</th>

        </tr>
        @foreach($data as $d)
        <tr>
            <td>{{$d->full_name}}</td>
            <td>{{$d->phone_no}}</td>
            <td>{{$d->created_at}}</td>
            <td>{{$d->updated_at}}</td>
            <td><a href={{route('Intern.form.delete',$d->id)}}>Delete</a></td>
            <td><a href={{route('Intern.form.edit',$d->id)}}>Edit</a></td>
        </tr>
        @endforeach
        {{$data->links()}}
    </table>    
</body>
</html>