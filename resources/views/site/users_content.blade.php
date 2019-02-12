@if($users)
    <section id="blog">
        <div class="container">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                    <tr>
                        <th>id</th>
                        <th>name</th>
                        <th>email</th>
                        <th>Admin</th>
                        <th>Moderator</th>
                        <th>Guest</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{!! $user->name !!}</td>
                            <td>{!! $user->email !!}</td>
                                {!! Form::open(['url' => route('users_change'),'method' =>'POST']) !!}
                                {{$yes_admin = false}}
                                {{$yes_moderator = false}}
                                {{$yes_guest = false}}
                                @foreach($user->roles as $user_role)
                                    @if($user_role -> name == 'Admin')
                                        <?php $yes_admin = true; ?>
                                        @endif
                                    @if($user_role -> name == 'Moderator')
                                         <?php $yes_moderator = true; ?>
                                        @endif
                                     @if($user_role -> name == 'Guest')
                                         <?php $yes_guest = true; ?>
                                        @endif
                                @endforeach
                            <td>   {!! Form::radio($user->id, '1', $yes_admin) !!}</td>
                            <td>    {!! Form::radio($user->id, '2', $yes_moderator) !!}</td>
                            <td>   {!! Form::radio($user->id, '3', $yes_guest) !!}</td>
                        </tr>
                    @endforeach
                    <td>  {!! Form::submit('Добавить',['id' =>'mybutton','class'=>'btn']) !!}</td>
                    {!! Form::close() !!}
                    </tbody>
                </table>
            </div>

            <div class="row bt">
                <div class="col-sm-12">
                    <ul>
                        {{ $users ->links('site.pagination') }}
                    </ul>
                </div>
            </div>
        </div>
    </section>
@endif