@extends('admin/layout/main')
@section('title','VarTech - User Administration')
@include('admin/layout/menu-admin-log')
@include('admin/layout/menu-admin-log-left')

@section('menu-admin-log-left')
@yield('menu-admin-left')
@endsection('menu-admin-log-left')

@section('main-content')

@section('menu-admin')
@yield('menu-admin-login')
@endsection('menu-admin')
<div class="card">
    <div class="card-body p-0">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th style="width: 10px">#</th>
                    <th>Nama</th>
                    <th>Alamat Email</th>
                    <th style="width: 40px">#</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $show)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$show->name}}</td>
                    <td>{{$show->email}}</td>
                    <td>
                        <a href="javascript:void(0)" data-id="{{ $show->id }}" onclick="editUser(event.target)" class="btn btn-info">Edit</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
<form action="{{ route('admin-register-store') }}" method="post" class="row g-3 needs-validation" novalidate>
    <div class="modal fade" id="modal-user">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">@yield('title')</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="alert alert-danger" style="display:none"></div>
                    <div class="alert alert-success" style="display:none"></div>
                    <div class="input-group mb-3">
                        <input type="hidden" name="id" id="id">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                        <input type="text" name="name" id="name" class="form-control" placeholder="Nama Lengkap" required>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                        <input type="text" name="email" id="email" class="form-control" placeholder="Email" required>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                        <input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                        <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="Retype Password" required>
                    </div>

                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal" onclick="javascript:window.location.reload()">Close</button>
                    <!-- <button type="button" class="btn btn-primary" onclick="userUpdate()">Save changes</button> -->
                    <button class="btn btn-success" id="ajaxSubmit">Save changes</button>
                </div>
            </div>
        </div>
    </div>
</form>
<script>
    function editUser(event) {
        // alert('test');
        var id = $(event).data("id");
        let _url = `/admin/user-edit/${id}`;
        // alert(_url);
        $('#nameError').text('');
        $('#emailError').text('');
        $.ajax({
            url: _url,
            type: "GET",
            success: function(response) {
                // alert(response.id);
                if (response) {
                    $("#id").val(response.id);
                    $("#name").val(response.name);
                    $("#email").val(response.email);
                    $('#modal-user').modal('show');
                }
            }
        });
    }
    jQuery(document).ready(function() {
        jQuery('#ajaxSubmit').click(function(e) {
            jQuery('.alert-danger').html('');
            jQuery('.alert-success').html('');
            e.preventDefault();
            // $.ajaxSetup({
            //     headers: {
            //         'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            //     }
            // });
            jQuery.ajax({
                url: "{{ url('/admin/user-update') }}",
                method: 'post',
                data: {
                    "_token": "{{ csrf_token() }}",
                    "id": jQuery('#id').val(),
                    "name": jQuery('#name').val(),
                    "email": jQuery('#email').val(),
                    "password": jQuery('#password').val(),
                    "password_confirmation": jQuery('#password_confirmation').val(),
                },
                success: function(result) {
                    if (result.errors) {
                        jQuery('.alert-danger').html('');

                        jQuery.each(result.errors, function(key, value) {
                            jQuery('.alert-danger').show();
                            jQuery('.alert-danger').append('<li>' + value + '</li>');
                        });
                    } else if (result.errorssystem) {
                        jQuery('.alert-danger').show();
                        jQuery('.alert-danger').append('result.errorssystem');
                    } else {
                        jQuery('.alert-danger').hide();
                        jQuery('.alert-success').show();
                        jQuery('.alert-success').append(result.success);
                        // $('#open').hide();
                        // $('#myModal').modal('hide');
                    }
                }
            });
        });
    });
    // function userUpdate() {
    //     var name = $('#name').val();
    //     var email = $('#email').val();
    //     var password = $('#password').val();
    //     var password_confirmation = $('#password_confirmation').val();
    //     var id = $('#id').val();
    //     let _url = `/admin/user-update`;
    //     // alert(_token);
    //     $.ajax({
    //         url: _url,
    //         type: "post",
    //         data: {
    //             "_token": "{{ csrf_token() }}",
    //             "id": id,
    //             "name": name,
    //             "email": email,
    //             "password": password,
    //             "password_confirmation": password_confirmation
    //         },
    //         success: function(response) {
    //             // alert('true');
    //             // console.log(data.message);
    //         },
    //         error: function(response) {
    //             $('#nameError').text(response.responseJSON.name);
    //             $('#emailError').text(response.responseJSON.email);
    //             $('#passwordError').text(response.responseJSON.password);
    //         },
    //     });
    // }
</script>
@endsection('main-content')