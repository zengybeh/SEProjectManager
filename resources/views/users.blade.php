@extends('layouts.app')
@section('content')
<script>
var element = document.getElementById("users");
element.classList.add("show");
</script>
    <div class="modal modal-createTeam fade" id="viewde7k">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header" style="background-color:#d9534f;">

                    <h5 class="modal-title" id="viewTeamModalLabel">View Team</h5>


                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body my-custom-scrollbar">

    <div class="row d-flex justify-content-center"><input style="d-flex justify-content-center" type="file" style="width:200px"></div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger closeModal" id="close" data-dismiss="modal">Close</button>


                        <button type="button" class="btn btn-danger closeModal">Submit</button>



                    </div>
                </div>
            </div>
        </div>
    </div>
    <div style="margin-top:80px;width:100%;" class="row d-flex justify-content-center ">
        <div class="col-12 col-md-auto">
            <button style="padding:5px; width: 150px;"class="btn btn-outline" data-toggle="modal" id="import" data-target="#viewde7k">Import data</button>
        </div>
        <div class="col-12 col-md-auto">
            <button style="padding:5px; width: 150px;"class="btn btn-outline">Export data</button>
        </div>
        <div class="col-12 col-md-auto">
            <button style="padding:5px; width: 150px;"class="btn btn-outline">Delete all users</button>
        </div>
        <div class="col-12 col-md-auto">
            <button style="padding:5px; width: 180px;"class="btn btn-outline">Delete selected users</button>

        </div>

    </div>
    <div style="margin-top:30px;width:100% !important;margin-bottom:50px;" class="row d-flex justify-content-center ">
    <div class="datatable-wide">

    <table id="userTable" class="table table-striped dt-responsive nowrap " style="width:100%">
    <thead>
        <tr class="text-center" style="background-color: #C63E47; color:white;">
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Courses</th>
            <th scope="col">Role</th>
            <th scope="col"><i class="fa fa-mouse-pointer"></i></i></th>
        </tr>
    </thead>
    <tbody class="text-center">
        <tr>
            @foreach ($users as $user)
            
            <th height=150 width=150 scope="row">
                <div class="custom-control form-control-lg custom-checkbox">  
                    <input type="checkbox" class="custom-control-input" id="customCheck2">  
                    <label  class="custom-control-label" for="customCheck2" style=""><img style="width:100%; height:100%" src="https://www.w3schools.com/images/w3schools_green.jpg" alt="W3Schools.com"></label> </label>  
                </div>  
            </th>
            <input name="userid" value={{$user->id}} type="hidden">
            <td class="align-middle">{{$user->Surname}}</td>
            <td class="align-middle">{{$user->Email}};</td>
            <td class="align-middle">w/e</td>
            <td class="align-middle">{{$user->Name}}</td>
            <td class="align-middle"> <button class="btn btn-outline" onclick="window.location.href='edituser/{{$user->id}}'">edit</button></td>
        </tr>
        @endforeach
</tbody>
</table>
</div>
</div>
<script>
$.noConflict();
jQuery( document ).ready(function( $ ) {
    $('#userTable').DataTable({
        columnDefs: [
            { orderable: false, targets: 5 }
        ],
        responsive: true,
        "dom": '<"top" f>rt<"bottom"ip>',
        buttons: [{className: "btn-dark"}]
});
    $('#dtPluginExample_wrapper .col-md-7:eq(0)').addClass("d-flex justify-content-center justify-content-md-end");
    $('#dtPluginExample_paginate').addClass("mt-3 mt-md-2");
    $('#dtPluginExample_paginate ul.pagination').addClass("pagination-sm");

})

</script>
<script>
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("import");
var span = document.getElementById("close");

// Get the <span> element that closes the modal

// When the user clicks on the button, open the modal
btn.onclick = function() {
  modal.style.display = "block";
}
span.onclick = function() {
  modal.style.display = "none";
}
// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
    </div>
</div>

@endsection

