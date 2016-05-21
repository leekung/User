<div class="box box-danger">
    <div class="box-header with-border">
        <a class="uppercase" href="{{ URL::route('admin.user.user.index') }}">
            <h3 class="box-title">
                <i class="fa fa-user"></i> {{ trans('user::users.latest user') }}
            </h3>
        </a>
    </div>
    <!-- /.box-header -->
    <div class="box-body no-padding">
        <table class="table table-striped">
            <tbody>
            <tr>
                <th style="width: 10px">#</th>
                <th>{{ trans('contact::contacts.form.first_name') }} - {{ trans('contact::contacts.form.last_name') }}</th>
                <th>{{ trans('contact::contacts.form.email') }}</th>
                <th>{{ trans('core::core.table.created at') }}</th>
            </tr>
            <?php if (isset($users)): ?>
            <?php foreach ($users as $user): ?>
            <tr>
                <td>
                    <a href="{{ route('admin.user.user.edit', [$user->id]) }}">
                        {{ $user->id }}
                    </a>
                </td>
                <td>
                    <a href="{{ route('admin.user.user.edit', [$user->id]) }}">
                        {{ $user->first_name }} {{ $user->last_name }}
                    </a>
                </td>
                <td>
                    <a href="{{ route('admin.user.user.edit', [$user->id]) }}">
                        {{ $user->email }}
                    </a>
                </td>
                <td>
                    <a href="{{ route('admin.user.user.edit', [$user->id]) }}">
                        {{ $user->created_at }}
                    </a>
                </td>
            </tr>
            <?php endforeach; ?>
            <?php endif; ?>
            </tbody>
        </table>
        <!-- /.users-list -->
    </div>
    <!-- /.box-body -->
</div>
