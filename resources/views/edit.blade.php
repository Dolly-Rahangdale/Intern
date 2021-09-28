<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
<!DOCTYPE html>
<html lang="en">
<body>
    <div class="container">
    <h3>Intern Form</h3>
    <form action="{{route('Intern.form.update',$data->id)}}" method="POST">
    @csrf
    <div class="form">
        <div class="form group cd-md-2">
            <lable for="full_name">Full Name</lable><br>
            <input type="text" name="full_name" id="full_name" class="form-control" placeholder="Enter your full name"><br><br>
        </div>
        <div class="form group cd-md-4">
            <lable for="phone_no">Phone no</lable><br>
            <input type="number" name="phone_no" id="phone_no" class="form-control" placeholder="Enter your phone_no"><br>
        </div>
        <button type="submit" class="btn-btn-primary">Submit</button>
    </div>    
    </form>
    
</body>
</html>