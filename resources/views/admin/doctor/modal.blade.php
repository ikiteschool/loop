<!-- Modal -->
<div class="modal fade" id="exampleModal{{$user->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Doctor Information</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>
            <img src="{{asset('images')}}/{{$user->image}}" alt="" width="200">
        </p>
        <p class="badge badge-pill badge-dark">Role:{{$user->role->name}}</p>
        <p>Name:{{$user->name}}</p>
        <p>Email:{{$user->email}}</p>
        <p>Address:{{$user->address}}</p>
        <p>Phone Number:{{$user->phone_number}}</p>
        <p>Department:{{$user->department}}</p>
        <p>Education:{{$user->education}}</p>
        <p>Description:{{$user->description}}</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>