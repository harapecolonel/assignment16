@extends('layouts.profile')
@section('title', '登録済みプロフィール')

@section('content')
    <div class="container">
        <div class="row">
            <h2>プロフィール一覧</h2>
        </div>
        <div class="row">
                <form action="{{ route('admin.profile.index') }}" method="get"></form>
        </div>
        <div class="row">
            <div class="list-news col-md-12 mx-auto">
                <div class="row">
                    <table class="table table-dark">
                        <thead>
                            <tr>
                                <th width="10%">氏名</th>
                                <th width="10%">性別</th>
                                <th width="30%">趣味</th>
                                <th width="50%">自己紹介</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($posts as $profile)
                                <tr>
                                    <td>{{ Str::limit($profile->name, 100) }}</td>
                                    <td>{{ Str::limit($profile->gender, 100) }}</td>
                                    <td>{{ Str::limit($profile->hobby, 300) }}</td>
                                    <td>{{ Str::limit($profile->introduction, 500) }}</td>
                                    <td>
                                        <div>
                                            <a href="{{ route('admin.profile.edit', ['id' => $profile->id]) }}">編集</a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection