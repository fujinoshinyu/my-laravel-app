<!-- User Id Field -->
<div class="col-sm-12">
    {!! Form::label('user_name','User Name;') !!}
    <p>{{ $user->name }}</p>
</div>


<div class="col-sm-12">
    {!! Form::label('email','Email;') !!}
    <p>{{ $user->email }}</p>
</div>

<div class="col-sm-12">
    {!! Form::label('icon','Icon;') !!}
<div>
    <p>{{ basename($user->icon)}}</P>
<img src="{{ asset($user->icon) }}"
 class="user-image elevation-2" alt="User Image">
</div>
<!-- Title Field -->
