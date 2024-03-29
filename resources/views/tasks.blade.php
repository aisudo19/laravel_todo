    @extends('layouts.app')

    @section('content')
    <div class="container">	
        <div class="col-sm-offset-2 col-sm-8">	<!-- Bootstrapの定形コード… -->
            <div class="panel panel-default">	
            <div class="panel-heading">	
                新しいタスク
            </div>
        <div class="panel-body">
            <!-- バリデーションエラーの表示 -->
            @include('common.errors')

            <!-- 新タスクフォーム -->
            <form action="{{url('task')}}" method="POST" class="form-horizontal">
                {{ csrf_field() }}

                <!-- タスク名 -->
                <div class="form-group">
                    <label for="task" class="col-sm-3 control-label">Task</label>

                    <div class="col-sm-6">
                        <input type="text" name="name" id="task-name" class="form-control" value="{{ old('task') }}">
                    </div>
                </div>

                <!-- タスク追加ボタン -->
                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-6">
                        <button type="submit" class="btn btn-default">
                            <i class="fa fa-btn fa-plus"></i> タスク追加
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

        <!-- 現在のタスク -->
        @if(count($tasks) > 0)
        <div class="panel panel-default">
            <div class="panel-heading">
                現在のタスク
            </div>
            <div class="panel-body">
                <table class="table table-striped task-table">
                    {{-- テーブルヘッダー --}}
                    <thead>
                        <th>Task</th>
                        <th>&nbsp;</th>
                    </thead>

                    {{-- テーブルボディー --}}
                    <tbody>
                        @foreach($tasks as $task)
                        <tr>
                            {{-- タスク名 --}}
                            <td class="table-text">
                                <div>{{$task->name}}</div>
                            </td>
                            <td>
                                {{-- TODO: 削除ボタン --}}
                                <form action="/task/{{$task->id}}" method="POST">
                                    {{csrf_field()}}
                                    {{method_field('DELETE')}}
                                    <button type="submit" class="btn btn-danger"><i class="fa fa-btn fa-trash"></i>タスク削除</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        @endif
    </div>
</div>
@endsection